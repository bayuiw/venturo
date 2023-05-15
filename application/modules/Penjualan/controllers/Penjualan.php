<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$this->load->view('index');
	}

	function tabel(){
		$menu = $this->http_request("https://tes-web.landa.id/intermediate/menu","GET");
		$menu = json_decode($menu, TRUE);
		$pj = $this->http_request("https://tes-web.landa.id/intermediate/transaksi?tahun=".$this->input->post("tahun"),"GET");
		$pj = json_decode($pj, TRUE);

		$penjualan = array();
		$makanan = array();
		$minuman = array();
		$total_setiap_bln = array(0,0,0,0,0,0,0,0,0,0,0,0);
		$grand_total = 0;
		for ($i=0; $i < count($menu); $i++) { 
			$data_menu[$i]['kategori'] = $menu[$i]['kategori'];
			$data_menu[$i]['menu'] = $menu[$i]['menu'];
			$data_menu[$i]['total'] = 0;

			$total = array(0,0,0,0,0,0,0,0,0,0,0,0);
			$all_total = 0;
			for ($k=1; $k <= 12; $k++) {
				for ($j=0; $j < count($pj); $j++) {
					if ($menu[$i]['menu']==$pj[$j]['menu']) {
						if ($k==date('m', strtotime($pj[$j]['tanggal']))) {
							$total[$k-1] += $pj[$j]['total'];
							$all_total += $pj[$j]['total'];
							$total_setiap_bln[$k-1] += $pj[$j]['total'];
							$grand_total += $pj[$j]['total'];
						}
					}
				}
			}
			$data_menu[$i]['data'] = $total;
			$data_menu[$i]['total'] += $all_total;
		}


		// $data['makanan'] = $makanan;
		$data['menu'] = $data_menu;
		$data['total_bulan'] = $total_setiap_bln;
		$data['grand_total'] = $grand_total;
		// print_r($data);
		// print("<pre>".print_r($total_setiap_bln,true)."</pre>");
		// print("<pre>".print_r($data['makanan'],true)."</pre>");
		// print("<pre>".print_r($data['minuman'],true)."</pre>");
		// echo $grand_total;
		// $data['penjualan'] = $data;
		// print("<pre>".print_r($data['penjualan'],true)."</pre>");
		$this->load->view('tabel', $data);
	}

	function http_request($url, $type){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}
}
