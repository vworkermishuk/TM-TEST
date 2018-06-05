<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct() { 
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->database(); 
	}
    public function add_product(){
        $this->load->view('add_product');
    }
    public function add_equipment(){
        $data = array( 
            'equip_id' => $this->input->post('equip_id'), 
            'equip_sn' => $this->input->post('equip_sn'),
            'product_group' => $this->input->post('product_group'),
            'product_name' => $this->input->post('product_name'),
            'remark' => $this->input->post('remark'),
            'status' => $this->input->post('status'),
            'state' => $this->input->post('state')
        );
        $this->load->model('Product_Model');
        $res = $this->Product_Model->insert($data);
        if($res==true)
        {
            $this->session->set_flashdata('message', "Inserted Successfully"); 
        }else{
            $this->session->set_flashdata('message', "ERROR");
        }
        $this->product_list();
        echo '<script language="javascript">';
        echo 'alert("Inserted Successfully")';
        echo '</script>';
    }
    public function product_list(){
        $this->load->model('Product_Model');
        $data['all_products'] = $this->Product_Model->get_all_products();
        $this->load->view('product_list', $data);
    }
    public function item_details($equip_id){
        $this->load->model('Product_Model');
        $data['items'] = $this->Product_Model->get_details($equip_id);
        //var_dump($data);
        $this->load->view('product_detail', $data);
    }
}
