<?php
class Advertisements extends Controller {
    public function __construct() {
        $this->advertisementModel = $this->model('Advertisement');
    }


    public function advertisements()
    {
        $advertisements = $this->advertisementModel->findAllAds();
        var_dump($advertisements);
        echo 'hi';
//        $this->view('pages/advertisements'); // todo . check usage
    }
}