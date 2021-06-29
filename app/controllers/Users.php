<?php
class Users extends Controller {
	public function __construct()
    {
		$this->userModel = $this->model('User');
	}

	// todo . rename login (toUsers?), check usage (not in used)
	public function login() {
		$data = [
			'title' => 'Login page' // todo . rename and check usage
		];

		// $this->view('users/login', $data); // todo . users/login ==>> pages/user ?
		$this->view('users/login', $data);
	}
}