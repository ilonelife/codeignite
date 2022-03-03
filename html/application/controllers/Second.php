<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second extends CI_Controller {

	public function index()
	{
		echo "여기는 second 테스트 페이지 입니다.. 퍼스트";
	}

	public function my() {
		echo " 내꺼야...";
	}

}
