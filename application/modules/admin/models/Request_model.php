<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Request_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('*');
        $this->db->from('request');
        $query = $this->db->get()->result();

        return $query;
    }
    public function get_all_request_data() {
        // count query
        $this->db->select('*');
        $this->db->from('request');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get()->result();
        return $query;

    }
    public function get_info_old($id) {
        $query = $this->db->select('request.*, service.service_name, product.product_name')
                          ->from('request')
                          ->join('service', 'service.service_id = request.service_id', 'left')
                          ->join('product', 'product.product_id = request.product_id', 'left')
                          ->where('request.id', $id)
                          ->get()
                          ->row();
        return $query;
    }
    

    public function get_info($id) {
        $query = $this->db->select('request.*, services.name AS service_name, product.name AS product_name')
                          ->from('request')
                          ->join('services', 'services.id = request.services', 'left')
                          ->join('product', 'product.id = request.product', 'left')
                          ->where('request.id', $id)
                          ->get()
                          ->row();
                        //   dd($query);
        return $query;
    }
    

    function delete($id) {
        // $img_path = base_url().'request_img/';
        // $info = $this->get_info($id);

        // if(file_exists($img_path.$info->image_file)){
        //    @unlink($img_path.$info->image_file);
        //    @unlink($img_path_thumbs.$info->image_file);
        // }

        $this->db->where('id', $id);
        $this->db->delete('request');
        
        return TRUE;
    }

    /*
        Ismail
        CreatedAt: 22-01-18
    */
    public function get_all_demo_request()
    {
        $this->db->select('A.*, B.demo_url, B.name as product_name');

        $this->db->from('demo_request AS A');

        $this->db->join('product AS B', 'A.product_id = B.id');

        $this->db->order_by('A.id', 'desc');
        // dd($this->db->get()->result());

        return $this->db->get()->result();
    }

}
