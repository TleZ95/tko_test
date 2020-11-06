<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('train_model');
		$this->load->view('bootstrap');
		$this->load->view('navbar');
	}
	
	//หน้าฟอร์มเพิ่มตารางรถ
	public function index()
	{
		$data2['query'] = $this->train_model->show_number_train();
		$this->load->view('add_table', $data2);
	}
	
	//ฟังก์ชั่นเพิ่มตารางรถ
	public function form_add_train_table()
	{
		$add_train_table_data1 = array(
			'train_number' => $this->input->post("train_id"),
			'departure_station_name' => $this->input->post("departure_station_name"),
			'departure_train_out_time' => $this->input->post("departure_train_out_time")
		);
		
		$add_train_table_data2 = array(
			'train_number' => $this->input->post("train_id"),
			'break_train_come_time' => $this->input->post("break_train_come_time"),
			'break_train_out_time' => $this->input->post("break_train_out_time")
		);
		
		$add_train_table_data3 = array(
			'train_number' => $this->input->post("train_id"),
			'terminal_station_name' => $this->input->post("terminal_station_name"),
			'terminal_train_come_time' => $this->input->post("terminal_train_come_time")
		);
		
		$this->train_model->add_train_table1($add_train_table_data1);
		$this->train_model->add_train_table2($add_train_table_data2);
		$this->train_model->add_train_table3($add_train_table_data3);
		
		$this->load->view('notify');
	}
	
	//หน้าฟอร์มเพิ่มรถไฟ
	public function add_train()
	{
		$this->load->view('add_train');
	}
	
	//ฟังก์ชั่นเพิ่มรถไฟ
	public function form_add_train()
	{
		$add_train_data1 = array(
			'train_number' => $this->input->post("train_id"),
			'train_type' => $this->input->post("train_type")
		);
		
		$this->train_model->add_train($add_train_data1);
		$this->load->view('notify');
	}
	
	//หน้าแสดงข้อมูล
	public function show_table()
	{
		$data1['query'] = $this->train_model->show_table();
		$this->load->view('show', $data1);
	}
}