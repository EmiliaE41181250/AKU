<?php

class Dashboard extends CI_Controller
{
  // Menampilkan dashboard
  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/dashboard');
    $this->load->view('templates/footer');
  }

  public function jenis_paket()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('admin/j_paket');

    $this->load->view('templates/footer');
  }
}
