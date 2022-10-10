<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function welcome($nama = 'meril') {
        $data['nama'] = $nama;
        $data['judul'] = 'Home Welcome';
        $this->view('templates/header', $data);
        $this->view('home/welcome', $data);
        $this->view('templates/footer');
    }
}