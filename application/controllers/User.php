<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('user_model');
  }

  public function index()
  {
    $users = $this->user_model->getAllUser();
  
    $this->load->view('v_user', ['users' => $users]);
  }
}
