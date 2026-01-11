<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permission_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $query = $this->db->select('*')
                        ->from('permission')
                        ->where('status', 1)
                        ->get();
        // Return the result as an array
        return $query->result_array();


    }

    public function get_info($id) {
        $query = $this->db->from('permission')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete($id) {
       $query = $this->db->where('id', $id)
                        ->delete('permission');
            if(!$query){
                return false;
            }
        return true;
    }
    

}
