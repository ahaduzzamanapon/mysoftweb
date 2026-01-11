<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('p.*, c.cat_name');
        $this->db->from('portfolio p');
        $this->db->join('category c', 'c.id=p.category_id');
        $query = $this->db->get()->result();

        return $query;
    }
    

    public function get_info($id) {
        $query = $this->db->select('p.*, c.cat_name')
                    ->from('portfolio p')
                    ->join('category c', 'c.id = p.category_id')
                    ->where('p.id', $id)
                    ->get()
                    ->row();
                return $query;
    }

    function delete($id) {
        $img_path = 'portfolio_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
           // @unlink($img_path_thumbs.$info->image_file);
        }

        $this->db->where('id', $id);
        $this->db->delete('portfolio');
        
        return TRUE;
    }
    function delete_img($id) {
        $img_path = 'portfolio_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
        }
        
        return TRUE;
    }

}
