<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()  //생성자
	{
		parent::__construct();
		$this->load->model('Board_model');  
	}

	public function board_insert() {
		//echo $this->input->post('title');
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$this->Board_model->board_insert($title, $content);

		header("Location: http://127.0.0.1:9001/index.php/board/list");
	}

}