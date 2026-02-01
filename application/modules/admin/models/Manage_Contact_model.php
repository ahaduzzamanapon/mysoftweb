<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Manage_contact_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data($limit = NULL, $offset = NULL, $search = NULL, $service_id = NULL, $product_id = NULL)
    {
        // count query
        $this->db->select('contact_us.*, services.name as service_name, products_new.name as product_name');
        $this->db->from('contact_us');
        $this->db->join('services', 'contact_us.service = services.id', 'left');
        $this->db->join('products_new', 'contact_us.product = products_new.id', 'left');
        $this->db->order_by('contact_us.id', 'DESC');

        if ($search) {
            $this->db->group_start();
            $this->db->like('contact_us.name', $search);
            $this->db->or_like('contact_us.email', $search);
            $this->db->or_like('contact_us.phone', $search);
            $this->db->or_like('contact_us.company', $search);
            $this->db->group_end();
        }

        if ($service_id) {
            $this->db->where('contact_us.service', $service_id);
        }

        if ($product_id) {
            $this->db->where('contact_us.product', $product_id);
        }

        if ($limit !== NULL && $offset !== NULL) {
            $this->db->limit($limit, $offset);
        } elseif ($limit !== NULL) {
            $this->db->limit($limit);
        }

        $query = $this->db->get()->result();

        return $query;
    }

    public function count_all($search = NULL, $service_id = NULL, $product_id = NULL)
    {
        $this->db->from('contact_us');

        if ($search) {
            $this->db->group_start();
            $this->db->like('name', $search);
            $this->db->or_like('email', $search);
            $this->db->or_like('phone', $search);
            $this->db->or_like('company', $search);
            $this->db->group_end();
        }

        if ($service_id) {
            $this->db->where('service', $service_id);
        }

        if ($product_id) {
            $this->db->where('product', $product_id);
        }

        return $this->db->count_all_results();
    }

    public function get_all_services()
    {
        return $this->db->get('services')->result();
    }

    public function get_all_products()
    {
        return $this->db->get('products_new')->result();
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
