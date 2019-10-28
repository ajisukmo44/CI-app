<?php

class Home extends CI_controller {

public function index($nama = ""){
$data['nama'] = $nama ;
$data['judul'] = 'Halaman home';
$this->load->view('templates/header', $data);
$this->load->view('home/index');
$this->load->view('templates/footer');
}


}