<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('employee_m', 'm');
	}

	function index(){
		$this->load->view('layout/header');
		$this->load->view('employee/index');
		$this->load->view('layout/footer');
	}

	public function showAllEmployee(){
		$result = $this->m->showAllEmployee();
		echo json_encode($result);
	}

	public function addEmployee(){
		$result = $this->m->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editEmployee(){
		$result = $this->m->editEmployee();
		echo json_encode($result);
	}

	public function updateEmployee(){
		$result = $this->m->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployee(){
		$result = $this->m->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}