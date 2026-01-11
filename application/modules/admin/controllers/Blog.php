<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include('url_slug.php');
//header('Content-type: text/plain; charset=utf-8');

class Blog extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Blog_model');
        $this->img_path = realpath(APPPATH . '../blog_img');

        // Slug Generator
        $config = array(
            'field' => 'slug',
            'title' => 'title',
            'table' => 'blog',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
    }

	public function index(){
        redirect('admin/blog/all');
	}

    public function all(){


        $this->data['results'] = $this->db->order_by('sort_order', 'asc')->get('blog')->result(); 
        // print_r($this->data['results']); exit;
        //Load page
        $this->data['meta_title'] = 'All Event';
        $this->data['subview'] = 'blog/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id){
        $this->data['info'] = $this->Blog_model->get_info($id);

        $this->data['meta_title'] = 'Event Details';
        $this->data['subview'] = 'blog/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){

        $this->form_validation->set_rules('post_date', 'post date', 'required|trim');
        $this->form_validation->set_rules('title', 'blog title', 'required|trim');
        $this->form_validation->set_rules('title_slug', 'blog slug', 'required|trim');
        $this->form_validation->set_rules('sort_order', 'sort_order', 'required');
        $this->form_validation->set_rules('description', 'service description', 'required|trim');
        $this->form_validation->set_rules('short_desc', 'blog short description', 'max_length[1000]|trim');
        $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim');   

        $this->data['info'] = $this->Blog_model->get_info($id);
        // print_r($this->data['info']); exit;

        if(@$_FILES['userfile']['size'] > 0){
            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
        }

        if ($this->form_validation->run() == true){

            if($_FILES['userfile']['size'] > 0){

                $this->Blog_model->delete_img($id);

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

            $slug_data = array('title' => $this->input->post('title'));
            
            $form_data = array(
                'post_date' => $this->input->post('post_date'),
                'title' => $this->input->post('title'),
                'slug' => $this->input->post('title_slug'),
                'popular' => $this->input->post('popular'),
                'short_desc' => $this->input->post('short_desc'),
                'description' => $this->input->post('description'),
                'meta_keys' => $this->input->post('meta_keys')?$this->input->post('meta_keys'):NULL
            );
            // 'sort_order' => $this->input->post('sort_order'),

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }

            // print_r($form_data); exit;
            if($this->Common_model->edit('blog', $id, 'id', $form_data)){
                    $ofset=$this->input->post('sort_order')-1;
                    // dd($ofset);
                    $this->db->from('blog');        
                    $this->db->order_by('sort_order', 'ASC');
                    $this->db->limit(100000000, $ofset);
                    $query = $this->db->get()->result(); 
                    // dd($query);
                    $sort=$this->input->post('sort_order');
                    foreach ($query as $key => $value) {
                        $this->db->where('id', $value->id);
                        $this->db->update('blog', array('sort_order' => $sort+$key+1));
                    }
                    $this->db->where('id', $id);
                    $this->db->update('blog', array('sort_order' => $this->input->post('sort_order')));

                $this->session->set_flashdata('success', 'Event Information update successfully.');
                redirect('admin/blog/all');
            }
        }

        $this->data['meta_title'] = 'Edit Event';
        $this->data['subview'] = 'blog/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
        $this->form_validation->set_rules('post_date', 'post date', 'required|trim');
		$this->form_validation->set_rules('title', 'blog title', 'required|trim');
        $this->form_validation->set_rules('description', 'service description', 'required|trim');
        $this->form_validation->set_rules('sort_order', 'sort_order', 'required');
        $this->form_validation->set_rules('short_desc', 'blog short description', 'max_length[1000]|trim');
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

            $slug_data = array('title' => $this->input->post('title'));
            // dd($this->input->post());
            $form_data = array(
                'title' => $this->input->post('title'),
                'post_date' => $this->input->post('post_date'),
                'slug' => $this->slug->create_uri($slug_data),
                'sort_order' => $this->input->post('sort_order'),
                'short_desc' => $this->input->post('short_desc'),
                'description' => $this->input->post('description'),                
                'meta_keys' => $this->input->post('meta_keys')?$this->input->post('meta_keys'):NULL
            );

            if($_FILES['userfile']['size'] > 0){
                $form_data['image_file'] = $uploadedFile;
            }
            // print_r($form_data); exit;

            if($this->Common_model->save('blog', $form_data)){                
                $this->session->set_flashdata('success', 'New Event save successfully.');
               redirect("admin/blog/all");
            }
        }

		$this->data['meta_title'] = 'Add Event';
		$this->data['subview'] = 'blog/add';
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
        $this->data['info'] = $this->Blog_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/blog/all');
    }

}