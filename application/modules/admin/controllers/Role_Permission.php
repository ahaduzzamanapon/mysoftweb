<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_Permission extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        // $this->load->model('Testimonial_model');
        $this->load->model('Role_Permission_model');
        $this->load->model('Permission_model');
        $this->img_path = realpath(APPPATH . '../testimonial_img');

       
    }

	public function index(){
        redirect('admin/role_permission/all');
	}

    public function all(){
        $this->data['results'] = $this->Role_Permission_model->get_user_data();
        // dd($this->data['results']);
        $this->data['meta_title'] = 'All Role Permission';
        $this->data['subview'] = 'role_permission/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function add(){

        // validate form input
        $this->form_validation->set_rules('name', 'Role Name', 'required');
        $this->form_validation->set_rules('description', 'Role Description', 'required');

        if($this->form_validation->run() == TRUE){
            // $slug = url_title($this->input->post('name'), 'dash', TRUE);
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
            );
           
            $this->db->insert('groups', $data);
            // $this->Common_model->insert_data('permission', $data);
            $this->session->set_flashdata('success', 'Role added successfully.');
            redirect('admin/Role_Permission/all');
        }
        $this->data['meta_title'] = 'Add Role';
        $this->data['subview'] = 'role_permission/add';
        $this->load->view('backend/_layout_main', $this->data);
    }


    public function edit($id){
        
        $this->form_validation->set_rules('name', 'Permission Name', 'required');
        $this->form_validation->set_rules('description', 'Permission Description', 'required');
        if($this->form_validation->run() == TRUE){
            
            $data = array();
            $permissions = $this->input->post('permission');
            if (!empty($permissions)) {
                foreach ($permissions as $permission_id) {
                    $permission_id = (int) $permission_id;
                    $permission = $this->Role_Permission_model->get_Permission_info($permission_id);
                    if ($permission) {
                        
                        $data[] = array(
                            'id' => $permission_id,
                            'name' => $permission->name
                        );
                    } else {
                        $this->session->set_flashdata('error', 'Permission not found.');
                        redirect('admin/Role_Permission/all');
                    }
                }
            }
            
            $json_data = json_encode($data);
            // dd($json_data);
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'permission' => $json_data
            );
            $this->db->where('id', $id);
            $this->db->update('groups', $data);
            $this->session->set_flashdata('success', 'Role update successfully.');
            redirect('admin/Role_Permission/all');
        }
        $this->data['info'] = $this->Role_Permission_model->get_info($id);
        $this->data['permission'] = $this->Permission_model->get_data();
        $this->data['meta_title'] = 'Edit Role Permission';
        $this->data['subview'] = 'role_permission/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }
    

    function delete($id) {
        $this->data['info'] = $this->Permission_model->delete($id);
        if($this->data['info']){
            $this->session->set_flashdata('success', 'Permission delete successfully.');
            redirect('admin/Manage_permission/all');
        }else{
            $this->session->set_flashdata('error', 'Permission not delete.');
            redirect('admin/Manage_permission/all');
        }

    } 

}