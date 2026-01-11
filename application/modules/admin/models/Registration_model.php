<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $this->db->select('r.id, r.full_name, r.email, r.phone, r.gender, r.course_id, r.date_time, r.my_skills, r.pay_status, c.title');
        $this->db->from('registration r');
        $this->db->join('courses c', 'c.id = r.course_id');
        $query = $this->db->get()->result();

        return $query;
    }

}
