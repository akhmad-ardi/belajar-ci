<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Belajar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    echo 'Ini method index pad controller belajar';
  }

  public function hello()
  {
    $this->load->view('view_belajar', [
      'judul' => 'Membuat view Pada Ci',
      'tutorial' => 'CodeIgniter',
    ]);
  }
}
