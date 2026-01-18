<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_new_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*****************************
     * Main Product (products_new) CRUD
     *****************************/

    public function save_product_main($data, $id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->update('products_new', $data);
            return $id;
        } else {
            $this->db->insert('products_new', $data);
            return $this->db->insert_id();
        }
    }

    public function get_product_main($id)
    {
        $this->db->select('*');
        $this->db->from('products_new');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_product_main_by_slug($slug)
    {
        $this->db->select('*');
        $this->db->from('products_new');
        $this->db->where('slug', $slug);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_all_products_main()
    {
        $this->db->select('id, name, slug, hero_heading, status, created_at, updated_at');
        $this->db->from('products_new');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_products_for_home()
    {
        $this->db->select('id, name, slug, hero_heading, hero_image');
        $this->db->from('products_new');
        $this->db->where('status', 'active'); // Temporarily allow all for debugging
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_product_main($id)
    {
        // Due to FOREIGN KEY constraints with ON DELETE CASCADE, deleting the main product
        // will automatically delete all related data in child tables.
        $this->db->where('id', $id);
        $this->db->delete('products_new');
        return $this->db->affected_rows();
    }

    /*****************************
     * Generic Child Table CRUD
     *****************************/

    public function save_child_data($table, $data, $id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->update($table, $data);
            return $id;
        } else {
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        }
    }

    public function get_child_data($table, $product_id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('product_id', $product_id);
        $this->db->order_by('order_num', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_single_child_data($table, $id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function delete_child_data($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
        return $this->db->affected_rows();
    }

    // Specific function for pricing plan features due to different FK
    public function get_pricing_plan_features($plan_id)
    {
        $this->db->select('*');
        $this->db->from('product_pricing_features');
        $this->db->where('plan_id', $plan_id);
        $this->db->order_by('order_num', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_pricing_plan_feature($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product_pricing_features');
        return $this->db->affected_rows();
    }

    /*****************************
     * Image Management
     *****************************/
    public function delete_image($product_id, $field_name, $file_name)
    {
        $this->db->where('id', $product_id);
        $this->db->update('products_new', array($field_name => NULL)); // Set image field to NULL

        $file_path = realpath(APPPATH . '../product_img/' . $file_name);
        if (file_exists($file_path)) {
            unlink($file_path); // Delete file from server
            return TRUE;
        }
        return FALSE;
    }

    public function get_image_filename($product_id, $field_name)
    {
        $this->db->select($field_name);
        $this->db->from('products_new');
        $this->db->where('id', $product_id);
        $query = $this->db->get()->row();
        return ($query) ? $query->$field_name : NULL;
    }

    // Function to delete old image before new upload if field is hero_image
    public function delete_old_hero_image($product_id)
    {
        $old_image = $this->get_image_filename($product_id, 'hero_image');
        if ($old_image) {
            $file_path = realpath(APPPATH . '../product_img/' . $old_image);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    // You might need similar delete functions for other images like client logos, tech icons if they are stored as filenames in products_new.
    // For child tables, the image handling will be done via their specific CRUD.

}
