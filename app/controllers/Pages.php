<?php
class Pages extends Controller {
	public function __construct() {
		$this->userModel = $this->model('Model');
	}

	// todo . check usage
	public function index() {
		$users = $this->userModel->getUsers();

		$data = [
			'title' => 'Home page',
			'users' => $users
		];

		$this->view('pages/index', $data);
	}

	public function users() {
		$this->view('pages/users');
	}

	public function advertisements() {
	    $this->view('pages/advertisements');
    }
}