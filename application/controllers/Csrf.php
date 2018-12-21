<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-12-09T21:55:07+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Csrf.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-12-18T17:13:30+07:00
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

class Csrf extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->database();
  }

  function index()
  {
    $this->load->view('csrf_form');
  }

  public function create()
  {
    $data = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
    );
    $this->db->insert('tbl_csrf', $data);
    if ($this->db->affected_rows()) {
      echo "Berhasil";
    } else {
      echo "Gagal";
    }
  }

}
