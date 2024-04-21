<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->load->view('v_form');
  }

  public function signup()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('confirm_email', 'Confirm Email', 'required');

    if ($this->form_validation->run() == FALSE) {
      return $this->load->view('v_form');
    }

    echo "oke";
  }
}
