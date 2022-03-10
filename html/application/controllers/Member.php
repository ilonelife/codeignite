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

	public function insert(){
		$email =  $this->input->post("email"); 
		$password = $this->input->post("password");
		$password = md5($password);
 
		$result = $this->Board_model->member_insert($email,$password);

		if($result == true)
		{
			echo "회원가입이 완료되었습니다.";
		}
		else {
			echo "이미 가입된 이메일 입니다.";
		}
	}
}
