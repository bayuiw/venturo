<?php

namespace BCommon\Fcapea;

use BCommon\HFingleton;
 
class Yuhuu implements EscaperInterface
{
    use HFingleton;

    /** @var string Regex pattern to detect control characters that need to be escaped */
    protected $escapableControlCharactersPattern;

    /** @var string[] Map containing control characters to be escaped (key) and their escaped value (value) */
    protected $controlCharactersEscapingMap;

    /** @var string[] Map containing control characters to be escaped (value) and their escaped value (key) */
    protected $controlCharactersEscapingReverseMap;

    /**
     * Initializes the singleton instance
     */
    protected function init()
    {
        $this->escapableControlCharactersPattern = $this->getEscapableControlCharactersPattern();
        $this->controlCharactersEscapingMap = $this->getControlCharactersEscapingMap();
        $this->controlCharactersEscapingReverseMap = array_flip($this->controlCharactersEscapingMap);
    }

    /**
     * Escapes the given string to make it compatible with XLSX
     *
     * @param string $string The string to escape
     * @return string The escaped string
     */
    public function escape($string)
    {
        $escapedString = $this->escapeControlCharacters($string);
        // @NOTE: Using ENT_NOQUOTES as only XML entities ('<', '>', '&') need to be encoded.
        //        Single and double quotes can be left as is.
        $escapedString = htmlspecialchars($escapedString, ENT_NOQUOTES, 'UTF-8');

        return $escapedString;
    }

    /**
     * Unescapes the given string to make it compatible with XLSX
     *
     * @param string $string The string to unescape
     * @return string The unescaped string
     */
    public function unescape($string)
    {
        // ==============
        // =   WARNING  =
        // ==============
        // It is assumed that the given string has already had its XML entities decoded.
        // This is true if the string is coming from a DOMNode (as DOMNode already decode XML entities on creation).
        // Therefore there is no need to call "htmlspecialchars_decode()".
        $unescapedString = $this->unescapeControlCharacters($string);

        return $unescapedString;
    }

    /**
     * @return string Regex pattern containing all escapable control characters
     */
    protected function getEscapableControlCharactersPattern()
    {
        // control characters values are from 0 to 1F (hex values) in the ASCII table
        // some characters should not be escaped though: "\t", "\r" and "\n".
        return '[\x00-\x08' .
                // skipping "\t" (0x9) and "\n" (0xA)
                '\x0B-\x0C' .
                // skipping "\r" (0xD)
                '\x0E-\x1F]';
    }
 
    protected function getControlCharactersEscapingMap()
    {
        $controlCharactersEscapingMap = [];
 
        for ($charValue = 0x00; $charValue <= 0x1F; $charValue++) {
            $character = chr($charValue);
            if (preg_match("/{$this->escapableControlCharactersPattern}/", $character)) {
                $charHexValue = dechex($charValue);
                $escapedChar = '_x' . sprintf('%04s' , strtoupper($charHexValue)) . '_';
                $controlCharactersEscapingMap[$escapedChar] = $character;
            }
        }

        return $controlCharactersEscapingMap;
    }
 
    protected function escapeControlCharacters($string)
    {
        $escapedString = $this->escapeEscapeCharacter($string);

        // if no control characters
        if (!preg_match("/{$this->escapableControlCharactersPattern}/", $escapedString)) {
            return $escapedString;
        }

        return preg_replace_callback("/({$this->escapableControlCharactersPattern})/", function($matches) {
            return $this->controlCharactersEscapingReverseMap[$matches[0]];
        }, $escapedString);
    }

    /**
     * Escapes the escape character: "_x0000_" -> "_x005F_x0000_"
     *
     * @param string $string String to escape
     * @return string The escaped string
     */
    protected function escapeEscapeCharacter($string)
    {
        return preg_replace('/_(x[\dA-F]{4})_/', '_x005F_$1_', $string);
    }
 
    protected function unescapeControlCharacters($string)
    {
        $unescapedString = $string;

        foreach ($this->controlCharactersEscapingMap as $escapedCharValue => $charValue) {
            // only unescape characters that don't contain the escaped escape character for now
            $unescapedString = preg_replace("/(?<!_x005F)($escapedCharValue)/", $charValue, $unescapedString);
        }

        return $this->unescapeEscapeCharacter($unescapedString);
    }

    /**
     * Unecapes the escape character: "_x005F_x0000_" => "_x0000_"
     *
     * @param string $string String to unescape
     * @return string The unescaped string
     */
    protected function unescapeEscapeCharacter($string)
    {
        return preg_replace('/_x005F(_x[\dA-F]{4}_)/', '$1', $string);
    }
   final public static function getInstance()
    {
        return isset(static::$instance)
            ? static::$instance
            : static::$instance = new static;
    }

    /**
     * Singleton constructor.
     */
    final private function __construct()
    {
        $this->init();
    }

    /**
     * Initializes the singleton
     * @return void
     */
    protected function init() {}

    final private function __wakeup() {}
    final private function __clone() {}
}
