<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_model extends CI_Model{

	function get_table($table, $select = '*'){
		$this->db->select($select);    
		$query	= $this->db->get($table);
		return $query->result_array();
	}

	function get_table_where($table, $where, $select = '*', $order_by = '', $tipe = 'desc'){
		$this->db->select($select);
		$this->db->where($where);
		if ($order_by!="") {
			$this->db->order_by($order_by, $tipe);
		}
		$query	= $this->db->get($table);
		return $query->result_array();
	}

	function get_table_where_rows($table, $where){
		$this->db->where($where);
		$query	= $this->db->get($table);
		return $query->num_rows();
	}

	function get_table_where_group($table, $select = '*', $order_by = '', $tipe = 'desc', $group_by = ''){
		$this->db->select($select);
		if ($order_by!="") {
			$this->db->order_by($order_by, $tipe);
		}
		if ($group_by!="") {
			$this->db->group_by($group_by);
		}
		$query	= $this->db->get($table);
		return $query->result_array();
	}

	function get_table_join($select = '*', $table, $table_join, $join_on, $join_type = array(), $where = ''){
		$this->db->select($select);    
		$this->db->from($table);
		if ($where!="") {
			$this->db->where($where);
		}

		for ($i=0; $i < count($table_join); $i++) {
			if (count($join_type)>0) {
				$this->db->join($table_join[$i], $join_on[$i], $join_type[$i]);
			} else {
				$this->db->join($table_join[$i], $join_on[$i]);
			}
		}

		$query = $this->db->get();
		return $query->result_array();
	}
	function get_table_join_order($select = '*', $table, $table_join, $join_on, $join_type = array(), $where = '', $order_by = '', $tipe = 'asc'){
		$this->db->select($select);    
		$this->db->from($table);
		if ($where!="") {
			$this->db->where($where);
		}

		for ($i=0; $i < count($table_join); $i++) {
			if (count($join_type)>0) {
				$this->db->join($table_join[$i], $join_on[$i], $join_type[$i]);
			} else {
				$this->db->join($table_join[$i], $join_on[$i]);
			}
		}

		if ($order_by!="") {
			if (is_array($order_by)==1) {
				for ($i=0; $i < count($order_by); $i++) {
					$this->db->order_by($order_by[$i], $tipe[$i]);
				}
			} else {
				$this->db->order_by($order_by, $tipe);
			}
		}

		$query = $this->db->get();
		return $query->result_array();
	}

	function get_max($id, $table, $where){
		$this->db->select("MAX(".$id.") as maxid");
		$this->db->where($where);
		$query	= $this->db->get($table);
		return $query->result_array();
	}

	function insert_table($table,$data){
		$query	= $this->db->insert($table,$data);
		return $query;
	}

	function insert_id_table($table,$data){
		$this->db->insert($table,$data);
		return $data;
	}

	function update_table($table,$data,$where){
		$this->db->where($where);
		$query	= $this->db->update($table,$data);
		return $query;
	}

	function delete_table($table,$where){
		$this->db->where($where);
		$query	= $this->db->delete($table);
		return $query;
	}

}