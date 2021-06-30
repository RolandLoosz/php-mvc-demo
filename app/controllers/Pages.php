<?php
class Pages extends Controller {
	public function __construct() {
		$this->mModel = $this->model('Model');
	}

	// Main page view
	public function index() {
		$this->view('pages/index');
	}

	// Users view
	public function users() {
		$this->view('pages/users');
	}

	// Advertisements view
	public function advertisements() {
	    $this->view('pages/advertisements');
    }

}