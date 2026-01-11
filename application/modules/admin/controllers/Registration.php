<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends Backend_Controller {

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Registration_model');
        // $this->load->model('Common_model');
    }

	public function index(){
        redirect('admin/registration/all');
	}

    public function all(){
        $this->data['results'] = $this->Registration_model->get_data(); 

        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Registration';
        $this->data['subview'] = 'registration/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

}