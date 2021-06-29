<?php

class Users extends Controller {
	public function __construct() {
		$this->userModel = $this->model('User');
	}

	// todo . rename login (toUsers?)
	public function login() {
		$data = [
			'title' => 'Login page' // todo . rename
		];

		$this->view('users/login', $data); // todo . users/login ==>> pages/user ?
	}
}