<?php
class Pages extends Controller {
	public function __construct() {
		$this->userModel = $this->model('User');
	}

	public function index() {
		$data = [
			'title' => 'Home page',
			'name' => 'John'
		];

		$this->view('pages/index', $data);
	}

	public function users() {
		$this->view('pages/users');
	}
}