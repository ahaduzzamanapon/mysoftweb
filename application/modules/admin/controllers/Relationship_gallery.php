<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relationship_gallery extends Backend_Controller
{

    var $img_path;

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Relationship_gallery_model');
        $this->img_path = realpath(APPPATH . '../relationship_gallery_img');
    }

    public function index()
    {
        redirect('admin/relationship_gallery/all');
    }

    public function all()
    {
        $this->data['results'] = $this->Relationship_gallery_model->get_data();

        $this->data['meta_title'] = 'All Relationship Gallery Images';
        $this->data['subview'] = 'relationship_gallery/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function add()
    {

        $this->form_validation->set_rules('title', 'Title', 'trim');

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

                $this->db->insert('relationship_gallery', $data);
                redirect('admin/relationship_gallery/all');
            } else {
                $this->session->set_flashdata('error', 'Image upload failed. Please ensure the relationship_gallery_img folder exists and is writable.');
            }
        }


        $this->data['meta_title'] = 'Add Relationship Gallery Image';
        $this->data['subview'] = 'relationship_gallery/add';
        $this->load->view('backend/_layout_main', $this->data);
    }


    public function edit($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'trim');

        if ($this->form_validation->run() == TRUE) {

            $imageData = $_FILES;
            $galleryImage = $this->imageUpload('image', $imageData);

            $data = array(
                'title' => $this->input->post('title'),
                'display' => $this->input->post('status'),
                // 'create_at' => date('Y-m-d H:i:s'), // Keep original creation date
            );

            if ($galleryImage) {
                $img_path = 'relationship_gallery_img/';
                $info = $this->Relationship_gallery_model->get_info($id);
                if (!empty($info->image)) {
                    @unlink($img_path . $info->image);
                }
                $data['image'] = $galleryImage['file_name'];
            }

            $this->db->where('id', $id);
            $this->db->update('relationship_gallery', $data);
            redirect('admin/relationship_gallery/all');
        }
        ;

        $this->data['gallery_info'] = $this->Relationship_gallery_model->get_info($id);


        $this->data['meta_title'] = 'Edit Relationship Gallery Image';
        $this->data['subview'] = 'relationship_gallery/edit';
        $this->load->view('backend/_layout_main', $this->data);

    }

    function imageUpload($imageNames, $imageData)
    {
        if ($imageData[$imageNames]['size'] > 0) {
            $newFileName = uniqid() . '_' . $imageData[$imageNames]["name"];

            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['upload_path'] = $this->img_path;
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
                return false;
            }
        }

        return false;
    }


    function delete($id)
    {
        $this->data['info'] = $this->Relationship_gallery_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/relationship_gallery/all');
    }
}
