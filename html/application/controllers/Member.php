<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()  //생성자
	{
		parent::__construct();
		$this->load->model('Board_model');  
	}

	public function index()
	{
		echo "여기는 테스트 페이지 입니다.. 퍼스트";
	}

	public function input() {
		$this->load->view('member/input');
	}
	

	public function login() {
		echo " 회원 가입";
	}

	public function update() {
		echo " 글 수정";
	}

	public function insert() {
		//echo $this->input->post('title');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);

		$result = $this->Board_model->member_insert($email, $password);

	//	header("Location: http://127.0.0.1:9001/index.php/member/input");
	}
}
