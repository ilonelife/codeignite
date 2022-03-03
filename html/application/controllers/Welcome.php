<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test() 
	{
		echo "여기는 테스트 페이지 입니다";
	}
}
