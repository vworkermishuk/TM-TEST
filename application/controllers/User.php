<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() { 
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->database(); 
	} 
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test(){
		$this->load->view('welcome_message1');
	}
	public function registration(){
        $this->load->model('User_Model');
        $data = array( 
            'name' => $this->input->post('name'), 
            'email' => $this->input->post('email') 
        );
        $res = $this->User_Model->insert($data);
        if($res==true)
        {
            $this->session->set_flashdata('message', "Inserted Successfully"); 
        }else{
            $this->session->set_flashdata('message', "ERROR");
        }
        $this->load->view('welcome_message');
    }
    public function show_all_users(){
        $this->load->model('User_Model');
        $data['allUsers'] = $this->User_Model->get_all_users();
        $this->load->view('User_view', $data);
    }
}
