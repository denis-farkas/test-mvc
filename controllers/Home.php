<?php

class Home extends Controller {
    private $homeModel;
    public function __construct() {
        $this->homeModel = $this->model('HomeModel');
       
    }
    
    public function index(){
        $data = [
            'title' => 'Accueil',
            'projets' => $this->homeModel->getProjets()
        ];
        $this->view('home/index', $data);
    }
}