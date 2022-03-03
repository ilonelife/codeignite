<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Board_model');  
	}

	public function index()
	{
		$this->list();
	} 

	public function list(){
		$result = $this->Board_model->list_select();
		
		foreach($result as $row)
		{
			echo $row['title'];
			echo '<br />';
			echo $row['content'];
			echo '<br />';
		}

		//$this->load->view('board/list');
	}

	public function view(){
		$this->load->view('board/view');
	}

	public function input(){
		$this->load->view('board/input');
	}

	public function update(){
		$this->load->view('board/update');
	}
}