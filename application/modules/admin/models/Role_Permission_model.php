<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Role_Permission_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user_data(){

        // $this->db->select('u.*,ug.*');
        // $this->db->from('users u');
        // $this->db->join('users_groups ug', 'u.id = ug.user_id');
        // $this->db->where_in('ug.group_id', array(2, 3));
        // $query = $this->db->get();

        //     $this->db-select('*');
        //   $query =  $this->db->get('groups');

        $query = $this->db->select('*')->get('groups');
        return $query->result();
        
    }

    public function get_info($id){
        $query = $this->db->select('*')->where('id', $id)->get('groups');
        return $query->row();
    }

    public function get_Permission_info($id){
        $query = $this->db->select('*')->where('id', $id)->get('permission');
        return $query->row();
        
    }
    

  

}
