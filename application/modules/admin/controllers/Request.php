<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Request_model');

       
    }

	public function index(){
        redirect('admin/request/all');
	}

    public function all(){
        $this->data['results'] = $this->Request_model->get_all_request_data('request'); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Request';
        $this->data['subview'] = 'request/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id){
        $this->data['info'] = $this->Request_model->get_info($id);

        $this->data['meta_title'] = 'Request Details';
        $this->data['subview'] = 'request/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    function delete($id) {
        $this->data['info'] = $this->Request_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/request/all');
    }

    /*
        Ismail
        CreatedAt: 22-01-18
    */
    public function demo_request(){
        $this->data['demo_request'] = $this->Request_model->get_all_demo_request();

        




        $this->data['meta_title'] = 'Demo Request';
        $this->data['subview'] = 'request/demo_request';
        $this->load->view('backend/_layout_main', $this->data);
    }

}