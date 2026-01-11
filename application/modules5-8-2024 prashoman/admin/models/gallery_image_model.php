<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class gallery_image_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $query = $this->db->get('images_gallery');

        // Return the result as an array
        return $query->result_array();


    }

    public function get_info($id) {
        $query = $this->db->from('images_gallery')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete($id) {
        $img_path = 'gallery_img/';
        $info = $this->get_info($id);

        if(!empty($info->image)){
           @unlink($img_path.$info->image);
           // @unlink($img_path_thumbs.$info->image_file);
        }
        $this->db->where('id', $id);
        $this->db->delete('images_gallery');
        
        return TRUE;
    }
    function delete_img($id) {
        $img_path = 'product_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
        }
        
        return TRUE;
    }

}
