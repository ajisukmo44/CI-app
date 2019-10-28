<?php

class People extends CI_controller {




public function index() {
$data['judul'] = 'Daftar Orang';

$this->load->model('People_model', 'people');


$this->load->library('pagination');

//ambil data
if($this->input->post('submit')) {

$data['keyword'] = $this->input->post('keyword');
$this->session->set_userdata('keyword', $data['keyword']);

} else {

    $data['keyword'] = $this->session->userdata('keyword');

}




//config
$this->db->like('name', $data['keyword']);
$this->db->from('people');
$config['total_rows'] = $this->db->count_all_results();
$data['total_rows'] = $config['total_rows'];
$config['per_page'] = 5;


//pagination
$this->pagination->initialize($config);



$data['start'] = $this->uri->segment(3);
$data['people'] = $this->people->getPeople($config['per_page'], $data['start'], $data['keyword'] );

$this->load->view('templates/header', $data);
$this->load->view('people/index', $data);
$this->load->view('templates/footer');

}

    }