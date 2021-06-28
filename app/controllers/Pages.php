<?php
class Pages extends Controller {
	public function __construct() {
		
	}

	public function index() {
		$this->view('pages/index');
	}

	public function users() {
		$this->view('pages/users');
	}
}