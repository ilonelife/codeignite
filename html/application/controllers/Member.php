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
		echo "회원 프로그램";
	}

	public function input() { 
		$data['msg'] = $this->input->get("msg");
		$this->load->view('member/input',$data);
	}
	

	public function login() {
		$this->load->view('member/login');
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
			header("Location: /index.php/member/login");
		}
		else {
			header("Location: /index.php/member/input?msg=있는 이메일입 니다");
		}
	}

	public function session() {
		$email =  $this->input->post("email"); 
		$password = $this->input->post("password");
		$password = md5($password);

		$result = $this->Board_model->member_login($email,$password);
 

		if($result == true)
		{
			echo '로그인 성공';
	
		}
		else {
			echo '로그인 실패';
		}
	}
}
