<?php 
   class User_Model extends CI_Model {
	
    function __construct() { 
         parent::__construct(); 
    } 
   
    public function insert($data) { 
        if ($this->db->insert("users", $data)) { 
            return true; 
        } 
    } 
    public function get_all_users(){
        $query = $this->db
            ->from('users')
            ->get();
		return $query->result();
    }
   } 
?> 
