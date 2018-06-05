<?php 
   class Product_Model extends CI_Model {
	
    function __construct() { 
         parent::__construct(); 
    } 
   
    public function insert($data) { 
        if ($this->db->insert("products", $data)) { 
            return true; 
        } 
    } 
    public function get_all_products(){
        $query = $this->db
            ->from('products')
            ->get();
		return $query->result();
    }
    public function get_details($equip_id){
        $query = $this->db
            ->from('products')
            ->where('equip_id', $equip_id)
            ->get();
        return $query->result();
        }
   } 
?> 
