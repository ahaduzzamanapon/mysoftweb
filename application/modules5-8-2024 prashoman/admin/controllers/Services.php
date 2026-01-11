<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Services_model');
        $this->img_path = realpath(APPPATH . '../service_img');

        // Slug Generator
        $config = array(
            'field' => 'slug',
            'title' => 'name',
            'table' => 'services',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
    }

	public function index(){
        redirect('admin/services/all');
	}

    public function all(){
        $this->data['results'] = $this->Services_model->get_data('services'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Service';
        $this->data['subview'] = 'services/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id){
        $this->data['info'] = $this->Services_model->get_info($id);

        $this->data['meta_title'] = 'Service Details';
        $this->data['subview'] = 'services/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){

        $this->form_validation->set_rules('name', 'service name', 'required|trim');
        $this->form_validation->set_rules('short_desc', 'services short description', 'max_length[1000]|trim');
        $this->form_validation->set_rules('description', 'service description', 'trim');
        $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim');
        $this->form_validation->set_rules('slug', 'slug url', 'required|trim');

        $this->data['info'] = $this->Services_model->get_info($id);
        // print_r($this->data['info']); exit;

        if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
        }

        if ($this->form_validation->run() == true){

            if($_FILES['userfile']['size'] > 0){

                $this->Services_model->delete_img($id);

                $new_file_name = $_FILES["userfile"]['name'];

                $config['allowed_types']= 'jpg|png|jpeg|gif';
                $config['upload_path']  = $this->img_path;
                $config['file_name']    = $new_file_name;
                $config['max_size']     = 500;

                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload()){
                    $uploadData = $this->upload->data();
                    $uploadedFile = $uploadData['file_name'];
                    // print_r($uploadedFile);
                    $this->data['message'] = 'File has been uploaded successfully.';
                }else{
                    $this->data['message'] = $this->upload->display_errors();
                }
            }

            $slug_data = array('name' => $this->input->post('name'));
            
            $form_data = array(
                'name' => $this->input->post('name'),
                'fa_icon' => $this->input->post('fa_icon'),
                // 'slug' => $this->slug->create_uri($slug_data, $id),
                'main_service_id' => $this->input->post('main_service_id'),
                'slug' => $this->input->post('slug'),
                'short_desc' => $this->input->post('short_desc'),
                'description' => $this->input->post('description'),
                'display_home' => $this->input->post('display_home'),
                'meta_keys' => $this->input->post('meta_keys')?$this->input->post('meta_keys'):NULL
            );

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }

            // print_r($form_data); exit;
            if($this->Common_model->edit('services', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('admin/services/all');
            }
        }

        $this->data['category'] = $this->Common_model->get_main_service_dd();

        $this->data['meta_title'] = 'Edit Service';
        $this->data['subview'] = 'services/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
		$this->form_validation->set_rules('name', 'service name', 'required|trim');
        $this->form_validation->set_rules('short_desc', 'services short description', 'max_length[1000]|trim');
        $this->form_validation->set_rules('description', 'service description', 'trim');
        $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim'); 

        if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
        }

        if ($this->form_validation->run() == true){

            if($_FILES['userfile']['size'] > 0){
                $new_file_name = $_FILES["userfile"]['name'];

                $config['allowed_types']= 'jpg|png|jpeg|gif';
                $config['upload_path']  = $this->img_path;
                $config['file_name']    = $new_file_name;
                $config['max_size']     = 500;

                $this->load->library('upload', $config);
                //upload file to directory
                if($this->upload->do_upload()){
                    $uploadData = $this->upload->data();
                    $uploadedFile = $uploadData['file_name'];
                    // print_r($uploadedFile);
                    $this->data['message'] = 'File has been uploaded successfully.';
                }else{
                    $this->data['message'] = $this->upload->display_errors();
                }
            }

            $slug_data = array('name' => $this->input->post('name'));

            $form_data = array(
                'name' => $this->input->post('name'),
                'fa_icon' => $this->input->post('fa_icon'),
                'slug' => $this->slug->create_uri($slug_data),
                'main_service_id' => $this->input->post('main_service_id'),
                'short_desc' => $this->input->post('short_desc'),
                'description' => $this->input->post('description'),
                'display_home' => $this->input->post('display_home'),
                'meta_keys' => $this->input->post('meta_keys')?$this->input->post('meta_keys'):NULL
            );

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }
            // print_r($form_data); exit;

            if($this->Common_model->save('services', $form_data)){                
                $this->session->set_flashdata('success', 'New service insert successfully.');
               redirect("admin/services/all");
            }
        }

        $this->data['category'] = $this->Common_model->get_main_service_dd();

		$this->data['meta_title'] = 'Add Service';
		$this->data['subview'] = 'services/add';
    	$this->load->view('backend/_layout_main', $this->data);
	}

	public function file_check($str){
    	$this->load->helper('file');
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['userfile']['name']);
        $file_size = 1050000; 
        $size_kb = '1 MB';

        if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
            if(!in_array($mime, $allowed_mime_type_arr)){                
                $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
                return false;
            }elseif($_FILES["userfile"]["size"] > $file_size){
            	$this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
                return false;
            }else{
			    return true;
			}
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
            return false;
        }
    }

    function delete($id) {
        $this->data['info'] = $this->Services_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/services/all');
    }

}