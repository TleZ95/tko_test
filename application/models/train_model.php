<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class train_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function show_table() {
		$query = $this->db->select('*')
			->from('train_number')
			->join('departure_station','departure_station.train_number = train_number.train_number')
			->join('break_station','break_station.train_number = train_number.train_number')
			->join('terminal_station','terminal_station.train_number = train_number.train_number')
			->where('train_number.train_number = departure_station.train_number')
//			->where('break_station.break_train_out_time <=','08:00')
			->get();
			return $query;
	}
	
	function show_number_train() {
		$query = $this->db->select('*')
			->from('train_number')
//			->where('train_number.train_number = departure_station.train_number')
			->get();
			return $query;
	}
	
	//ฟังก์ชั่นเพิ่มรถไฟ
	function add_train($data) {
		$this->db->insert('train_number', $data);
	}
	
	//ฟังก์ชั่นเพิ่มตารางรถ 1
	function add_train_table1($data) {
		$this->db->insert('departure_station', $data);
	}
	
	//ฟังก์ชั่นเพิ่มตารางรถ 2
	function add_train_table2($data) {
		$this->db->insert('break_station', $data);
	}
	
	//ฟังก์ชั่นเพิ่มตารางรถ 3
	function add_train_table3($data) {
		$this->db->insert('terminal_station', $data);
	}
	
}