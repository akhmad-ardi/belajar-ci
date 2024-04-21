<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $this->load->view('v_upload', ['error' => '']);
  }

  public function upload()
  {
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 100024;
    $config['max_width'] = 6000;
    $config['max_height'] = 6000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('uploadFile')) {
      $error = array('error' => $this->upload->display_errors());

      $this->load->view('v_upload', $error);
    } else {
      $data = array('upload_data' => $this->upload->data());

      $this->load->view('v_upload_success', $data);
    }
  }
}
