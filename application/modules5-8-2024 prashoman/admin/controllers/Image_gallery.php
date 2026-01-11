<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Image_gallery extends Backend_Controller
{

    var $img_path;

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) :
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Services_model');
        $this->load->model('Notable_model');
        $this->load->model('gallery_image_model');
        $this->img_path = realpath(APPPATH . '../service_img');
        // $this->img_path_notable = realpath(APPPATH . '../notable_img');
        $this->image_path_gallery = realpath(APPPATH . '../gallery_img');

        // Slug Generator
        $config = array(
            'field' => 'slug',
            'title' => 'name',
            'table' => 'services',
            'id' => 'id',
        );
        $this->load->library('slug', $config);
    }

    public function index()
    {
        redirect('admin/image_gallery/all');
    }

    public function all()
    {
        // $this->data['results'] = $this->Services_model->get_data('services'); 
        // print_r($this->data['results']); exit;
        //Load page

        $this->data['results'] = $this->gallery_image_model->get_data();
       
        $this->data['meta_title'] = 'All Image Gallery';
        $this->data['subview'] = 'gallery_image/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function add(){
        
        $this->form_validation->set_rules('title', 'image','required|trim');
    
    
        if ($this->form_validation->run() == TRUE) {
           
            $imageData = $_FILES;
            $galleryImage = $this->imageUpload('image', $imageData);

            if ($galleryImage) {

                $data = array(
                    'title' => $this->input->post('title'),
                    'image' => $galleryImage['file_name'],
                    'display' => 1,
                    'create_at' => date('Y-m-d H:i:s'),
                );
                
                $this->db->insert('images_gallery', $data);
                redirect('admin/image_gallery/all');
            } else {
                // Handle file upload error
                echo "File upload failed.";
            }
        }
        
    
    $this->data['meta_title'] = 'Add Image Gallery';
    $this->data['subview'] = 'gallery_image/add';
    $this->load->view('backend/_layout_main', $this->data);
}


public function edit($id){
    $this->form_validation->set_rules('title',  'status' ,'required|trim');
    // print_r($this->data['gallery_info']); exit;
    if ($this->form_validation->run() == TRUE) {
        // echo "validation is true"; exit;
        
        $imageData = $_FILES;
        $galleryImage = $this->imageUpload('image', $imageData);
        if ($galleryImage) {
            $img_path = 'gallery_img/';
            $info = $this->gallery_image_model->get_info($id);
            if(!empty($info->image)){
                @unlink($img_path.$info->image);
            }
            $data = array(
                'title' => $this->input->post('title'),
                'image' => $galleryImage['file_name'],
                'display' => $this->input->post('status'),
                'create_at' => date('Y-m-d H:i:s'),
            );
            
        } else {
            $data = array(
                'title' => $this->input->post('title'),
                'display' => $this->input->post('status'),
                'create_at' => date('Y-m-d H:i:s'),
            );
            
        }
            $this->db->where('id', $id);
            $this->db->update('images_gallery', $data);
            redirect('admin/image_gallery/all');
    };
    // echo "validation is false"; exit;

    $this->data['gallery_info'] = $this->gallery_image_model->get_info($id);


    $this->data['meta_title'] = 'Edit Image Gallery';
    $this->data['subview'] = 'gallery_image/edit';
    $this->load->view('backend/_layout_main', $this->data);

}

function imageUpload($imageNames, $imageData){
    if ($imageData[$imageNames]['size'] > 0) {
        $newFileName = uniqid() . '_' . $imageData[$imageNames]["name"];
        
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['upload_path'] = $this->image_path_gallery;
        $config['file_name'] = $newFileName;
        $config['max_size'] = 50000;
        
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload($imageNames)) {
            $uploadData = $this->upload->data();
            $uploadedFile = array(
                'file_name' => $uploadData['file_name'],
                'file_path' => $uploadData['full_path']
            );
            return $uploadedFile;
        } else {
            // Upload failed
            return false;
        }
    }
    
    return false;
}


    function delete($id){
        $this->data['info'] = $this->gallery_image_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/image_gallery/all');
    }
}
