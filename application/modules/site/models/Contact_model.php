<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function save_contact($data)
    {
        return $this->db->insert('contact_us', $data);
    }

    public function get_all_messages()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('contact_us')->result();
    }

    public function get_message($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('contact_us')->row();
    }
}
