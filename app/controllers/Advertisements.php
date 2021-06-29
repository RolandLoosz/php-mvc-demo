<?php
class Advertisements extends Controller {
    public function __construct()
    {
        $this->advertisementModel = $this->model('Advertisement');
    }

    public function index()
    {
        $this->view('pages/advertisements'); // todo . check if gut, if not: video:12.57
    }
}