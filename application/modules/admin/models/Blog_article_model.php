<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_article_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('*');
        $this->db->from('blog_article');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info($id) {
        $query = $this->db->from('blog_article')->where('id', $id)->get()->row();
        return $query;
    }

    function delete($id) {
        $img_path = 'blog_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
           // @unlink($img_path_thumbs.$info->image_file);
        }

        $this->db->where('id', $id);
        $this->db->delete('blog_article');
        
        return TRUE;
    }
    function delete_img($id) {
        $img_path = 'blog_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
        }
        
        return TRUE;
    }

}
