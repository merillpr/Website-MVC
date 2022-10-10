<?php

class About extends Controller{
    public function index($param1 = 'meril', $param2 = 'lia') {
        $data['nama'] = $param1;
        $data['marga'] = $param2;
        $data['judul'] = 'About';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function contact() {
        $data['judul'] = 'About Contact';
        $this->view('templates/header', $data);

        $this->view('about/contact');
        $this->view('templates/footer');
    }
}