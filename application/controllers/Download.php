<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $this->load->view('v_download');
  }

  public function download()
  {
    force_download('images/2_(1).jpeg', NULL);
  }
}
