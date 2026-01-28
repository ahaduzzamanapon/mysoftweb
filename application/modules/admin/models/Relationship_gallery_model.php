<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Relationship_gallery_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->get('relationship_gallery');
        return $query->result_array();
    }

    public function get_info($id)
    {
        $query = $this->db->from('relationship_gallery')
            ->where('id', $id)
            ->get()->row();
        return $query;
    }

    function delete($id)
    {
        $img_path = 'relationship_gallery_img/';
        $info = $this->get_info($id);

        if (!empty($info->image)) {
            @unlink($img_path . $info->image);
        }
        $this->db->where('id', $id);
        $this->db->delete('relationship_gallery');

        return TRUE;
    }
}
