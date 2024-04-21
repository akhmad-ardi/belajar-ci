<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Web extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index()
  {
    $this->load->view('v_index', ['judul' => 'Halaman Depan']);
  }

  public function hello()
  {
    $this->load->view('view_belajar', [
      'judul' => 'Membuat view Pada Ci',
      'tutorial' => 'CodeIgniter',
    ]);
  }
}
