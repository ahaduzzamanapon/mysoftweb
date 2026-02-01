<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_contact extends Backend_Controller
{

    var $img_path;

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        // $this->load->model('Testimonial_model');
        $this->load->model('Manage_Contact_model');
        $this->img_path = realpath(APPPATH . '../testimonial_img');


    }

    public function index()
    {
        redirect('admin/contact_manage/all');
    }

    public function all()
    {

        $this->load->library('pagination');

        // Filter Params
        $search = $this->input->get('search');
        $service_id = $this->input->get('service');
        $product_id = $this->input->get('product');

        // Dropdown Data
        $this->data['services'] = $this->Manage_Contact_model->get_all_services();
        $this->data['products'] = $this->Manage_Contact_model->get_all_products();

        // Pass filter values to view
        $this->data['search_val'] = $search;
        $this->data['service_val'] = $service_id;
        $this->data['product_val'] = $product_id;

        // Pagination Config
        $config['base_url'] = base_url('admin/manage_contact/all');
        $config['total_rows'] = $this->Manage_Contact_model->count_all($search, $service_id, $product_id);
        $config['per_page'] = 20; // Adjust as needed
        $config['uri_segment'] = 4; // admin/manage_contact/all/offset
        $config['reuse_query_string'] = TRUE; // Keep filters when paging

        // Bootstrap Pagination Styling
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $this->data['results'] = $this->Manage_Contact_model->get_data($config['per_page'], $page, $search, $service_id, $product_id);
        $this->data['pagination'] = $this->pagination->create_links();

        //Load page
        $this->data['meta_title'] = 'All Manage Contact';
        $this->data['subview'] = 'contact_manage/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id)
    {
        $this->data['info'] = $this->Manage_Contact_model->get_info($id);
        // print_r($this->data['info']); exit;
        $this->data['meta_title'] = 'Manage Contact Details';
        $this->data['subview'] = 'contact_manage/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    // public function edit($id){

    //     $this->form_validation->set_rules('client_name', 'Client Name', 'required|trim');
    //     $this->form_validation->set_rules('details', 'Details', 'required|trim'); 
    //     $this->form_validation->set_rules('designation', 'Dsignation', 'required|trim');

    //     $this->data['info'] = $this->Testimonial_model->get_info($id);
    //     // print_r($this->data['info']); exit;

    //     if(@$_FILES['userfile']['size'] > 0){
    //         $this->form_validation->set_rules('userfile', '', 'callback_file_check');
    //     }

    //     if ($this->form_validation->run() == true){

    //         if($_FILES['userfile']['size'] > 0){

    //             $this->Testimonial_model->delete_img($id);

    //             $new_file_name = $_FILES["userfile"]['name'];

    //             $config['allowed_types']= 'jpg|png|jpeg|gif';
    //             $config['upload_path']  = $this->img_path;
    //             $config['file_name']    = $new_file_name;
    //             $config['max_size']     = 500;

    //             $this->load->library('upload', $config);
    //             //upload file to directory
    //             if($this->upload->do_upload()){
    //                 $uploadData = $this->upload->data();
    //                 $uploadedFile = $uploadData['file_name'];
    //                 // print_r($uploadedFile);
    //                 $this->data['message'] = 'File has been uploaded successfully.';
    //             }else{
    //                 $this->data['message'] = $this->upload->display_errors();
    //             }
    //         }



    //         $form_data = array(
    //             'client_name' => $this->input->post('client_name'),
    //             'designation' => $this->input->post('designation'),
    //             'details' => $this->input->post('details'),
    //             'status' => $this->input->post('status')
    //         );

    //         if($_FILES['userfile']['size'] > 0){
    //             $form_data['image_file'] = $uploadedFile;
    //         }

    //         // print_r($form_data); exit;
    //         if($this->Common_model->edit('testimonial', $id, 'id', $form_data)){
    //             $this->session->set_flashdata('success', 'Information update successfully.');
    //             redirect('admin/testimonial/all');
    //         }
    //     }

    //     $this->data['meta_title'] = 'Edit Testimonial';
    //     $this->data['subview'] = 'testimonial/edit';
    //     $this->load->view('backend/_layout_main', $this->data);
    // }


    // public function add(){
    //     $this->form_validation->set_rules('client_name', 'Client Name', 'required|trim');
    //     $this->form_validation->set_rules('details', 'Details', 'required|trim'); 
    //     $this->form_validation->set_rules('designation', 'Dsignation', 'required|trim');      

    //     if(@$_FILES['userfile']['size'] > 0){
    //         $this->form_validation->set_rules('userfile', '', 'callback_file_check');
    //     }

    //     if ($this->form_validation->run() == true){

    //         if($_FILES['userfile']['size'] > 0){
    //             $new_file_name = $_FILES["userfile"]['name'];

    //             $config['allowed_types']= 'jpg|png|jpeg|gif';
    //             $config['upload_path']  = $this->img_path;
    //             $config['file_name']    = $new_file_name;
    //             $config['max_size']     = 500;

    //             $this->load->library('upload', $config);
    //             //upload file to directory
    //             if($this->upload->do_upload()){
    //                 $uploadData = $this->upload->data();
    //                 $uploadedFile = $uploadData['file_name'];
    //                 // print_r($uploadedFile);
    //                 $this->data['message'] = 'File has been uploaded successfully.';
    //             }else{
    //                 $this->data['message'] = $this->upload->display_errors();
    //             }
    //         }



    //         $form_data = array(
    //             'client_name' => $this->input->post('client_name'),
    //             'designation' => $this->input->post('designation'),
    //             'details' => $this->input->post('details')
    //         );

    //         if($_FILES['userfile']['size'] > 0){
    //             $form_data['image_file'] = $uploadedFile;
    //         }
    //         // print_r($form_data); exit;

    //         if($this->Common_model->save('testimonial', $form_data)){                
    //             $this->session->set_flashdata('success', 'New Testimonial insert successfully.');
    //            redirect("admin/testimonial/all");
    //         }
    //     }

    // 	$this->data['meta_title'] = 'Add Testimonial';
    // 	$this->data['subview'] = 'testimonial/add';
    // 	$this->load->view('backend/_layout_main', $this->data);
    // }

    // public function file_check($str){
    // 	$this->load->helper('file');
    //     $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
    //     $mime = get_mime_by_extension($_FILES['userfile']['name']);
    //     $file_size = 1050000; 
    //     $size_kb = '1 MB';

    //     if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
    //         if(!in_array($mime, $allowed_mime_type_arr)){                
    //             $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
    //             return false;
    //         }elseif($_FILES["userfile"]["size"] > $file_size){
    //         	$this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
    //             return false;
    //         }else{
    // 		    return true;
    // 		}
    //     }else{
    //         $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
    //         return false;
    //     }
    // }

    function delete($id)
    {
        $this->data['info'] = $this->Manage_Contact_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/manage_contact/all');
    }

}