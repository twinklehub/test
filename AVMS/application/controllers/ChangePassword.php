<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ChangePassword extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('uid'))
redirect('Login');
}

public function index(){
$this->form_validation->set_rules('currentpassword','Current Password','required|min_length[6]');	
$this->form_validation->set_rules('password','Password','required|min_length[6]');
$this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]');
if($this->form_validation->run()){
$cpassword=$this->input->post('currentpassword');
$newpassword=$this->input->post('password');
$adminid = $this->session->userdata('uid');
$this->load->model('Changepassword_Model');
$cpass=$this->Changepassword_Model->getcurrentpassword($adminid);
$dbpass=$cpass->Password;

if($dbpass==md5($cpassword)){
if($this->Changepassword_Model->updatepassword($adminid,$newpassword))
{
$this->session->set_flashdata('success', 'Password chnaged successfully');
	redirect('ChangePassword');
}

} else {
$this->session->set_flashdata('error', 'Error: Current password is wrong.');
redirect('ChangePassword');	
} 
} else {
$this->load->view('change-password');
}
}




}