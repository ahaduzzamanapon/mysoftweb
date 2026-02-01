<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Manage_contact_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        // count query
        $this->db->select('contact_us.*, services.name as service_name, products_new.name as product_name');
        $this->db->from('contact_us');
        $this->db->join('services', 'contact_us.service = services.id', 'left');
        $this->db->join('products_new', 'contact_us.product = products_new.id', 'left');
        $this->db->order_by('contact_us.id', 'DESC');
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_info($id)
    {
        $query = $this->db->from('contact_us')
            ->where('id', $id)
            ->get()->row();
        return $query;
    }

    function delete($id)
    {
        // $img_path = 'testimonial_img/';
        $info = $this->get_info($id);

        // if(!empty($info->image_file)){
        //    @unlink($img_path.$info->image_file);
        //    // @unlink($img_path_thumbs.$info->image_file);
        // }

        $this->db->where('id', $id);
        $this->db->delete('contact_us');

        return TRUE;
    }


}
