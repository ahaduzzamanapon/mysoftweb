<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_permission extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        // $this->load->model('Testimonial_model');
        $this->load->model('Permission_model');
        $this->img_path = realpath(APPPATH . '../testimonial_img');

       
    }

	public function index(){
        redirect('admin/manage_permission/all');
	}

    public function all(){
        $this->data['results'] = $this->Permission_model->get_data();
        // dd($this->data['results']);
        $this->data['meta_title'] = 'All Manage Permission';
        $this->data['subview'] = 'manage_permission/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function add(){

        //validate form input
        $this->form_validation->set_rules('name', 'Permission Name', 'required');

        if($this->form_validation->run() == TRUE){
            $slug = url_title($this->input->post('name'), 'dash', TRUE);
            $data = array(
                'name' => $this->input->post('name'),
                'slug_name' => $slug,
                'status' => '1', // 1 = 'Active', 0 = 'Inactive
            );
           
            $this->db->insert('permission', $data);
            // $this->Common_model->insert_data('permission', $data);
            $this->session->set_flashdata('success', 'Permission added successfully.');
            redirect('admin/manage_permission/all');
        }
        $this->data['meta_title'] = 'Add Manage Permission';
        $this->data['subview'] = 'manage_permission/add';
        $this->load->view('backend/_layout_main', $this->data);
    }


    public function edit($id){
        $this->data['info'] = $this->Permission_model->get_info($id);
        // dd($this->data['info']);
        //validate form input
        $this->form_validation->set_rules('name', 'Permission Name', 'required');

        if($this->form_validation->run() == TRUE){
            $slug = url_title($this->input->post('name'), 'dash', TRUE);
            $data = array(
                'name' => $this->input->post('name'),
                'slug_name' => $slug,
                'status' => '1', // 1 = 'Active', 0 = 'Inactive
            );
            $this->db->where('id', $id);
            $this->db->update('permission', $data);
            $this->session->set_flashdata('success', 'Permission update successfully.');
            redirect('admin/manage_permission/all');
        }
        // dd($this->data['info']);
        $this->data['meta_title'] = 'Edit Manage Permission';
        $this->data['subview'] = 'manage_permission/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }
    

    function delete($id) {
        $this->data['info'] = $this->Permission_model->delete($id);
        if($this->data['info']){
            $this->session->set_flashdata('success', 'Permission delete successfully.');
            redirect('admin/manage_permission/all');
        }else{
            $this->session->set_flashdata('error', 'Permission not delete.');
            redirect('admin/manage_permission/all');
        }

    }

}