<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hire_talent extends Backend_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
    }

    public function index()
    {
        // Get filter inputs
        $service = $this->input->get('service');
        $budget = $this->input->get('budget');
        $industry = $this->input->get('industry');
        $search = $this->input->get('search');

        // Build query
        $this->db->select('*');
        $this->db->from('get_touch_hire_talent');

        if (!empty($service)) {
            $this->db->where('service', $service);
        }
        if (!empty($budget)) {
            $this->db->where('budget', $budget);
        }
        if (!empty($industry)) {
            $this->db->where('industry', $industry);
        }
        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('name', $search);
            $this->db->or_like('email', $search);
            $this->db->or_like('phone', $search);
            $this->db->or_like('company', $search);
            $this->db->group_end();
        }

        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        $this->data['results'] = $query->result();

        // Get services for filter dropdown
        $this->load->model('site/Site_model');
        $this->data['services'] = $this->Site_model->get_all_services(false);

        // Filter options (Hardcoded based on frontend or could be dynamic)
        $this->data['industries'] = [
            'Fintech',
            'Healthcare',
            'E-commerce',
            'Real Estate',
            'Education',
            'Other'
        ];
        $this->data['budgets'] = [
            'Less than $5,000',
            '$5,000 - $10,000',
            '$10,000 - $20,000',
            '$20,000 - $50,000',
            '$50,000+'
        ];

        // Load page
        $this->data['meta_title'] = 'Hire Talent Inquiries';
        $this->data['subview'] = 'hire_talent';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function delete($id)
    {
        $id = (int) $id;
        if ($this->Common_model->delete('get_touch_hire_talent', $id)) {
            $this->session->set_flashdata('success', 'Inquiry deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete inquiry.');
        }
        redirect('admin/hire_talent');
    }
}
