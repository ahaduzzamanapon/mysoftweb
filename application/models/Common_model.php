<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data($table) {
        $this->db->select('*');
        $this->db->from($table);
        
        $query =  $this->db->get();
        
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return FALSE;
        }
    }

    public function save($table, $data) {
        if ($this->db->insert($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($table, $id, $field, $data) {
        $this->db->where($field, $id);
        if ($this->db->update($table, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function exists($table, $field, $item ) {
        $this->db->from($table);
        $this->db->where($field, $item);
        $query = $this->db->get();

        return ($query->num_rows() >= 1);
    }

    public function get_main_service_dd(){
        $data[''] = 'Select Main Service';
        $this->db->select('id, main_service_name');
        $this->db->from('main_service');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['main_service_name'];
        }

        return $data;
    }

    public function get_category_dd(){
        $data[''] = 'Select Category';
        $this->db->select('id, cat_name');
        $this->db->from('category');
        $this->db->order_by('cat_name', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['cat_name'];
        }

        return $data;
    }

    public function get_client_dd(){
        $data[''] = '--- Select Client ---';
        $this->db->select('id, client_name');
        $this->db->from('client');
        $this->db->order_by('client_name', 'ASC');
        $query = $this->db->get();

         foreach ($query->result_array() AS $rows) {
            $data[$rows['id']] = $rows['client_name'];
        }

        return $data;
    }

}
