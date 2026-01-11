<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notable extends Backend_Controller
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
        $this->img_path = realpath(APPPATH . '../service_img');
        $this->img_path_notable = realpath(APPPATH . '../notable_img');

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
        redirect('admin/notable/all');
    }

    public function all()
    {
        // $this->data['results'] = $this->Services_model->get_data('services'); 
        // print_r($this->data['results']); exit;
        //Load page

        $this->data['results'] = $this->Notable_model->get_data();
       
        $this->data['meta_title'] = 'All Notable';
        $this->data['subview'] = 'notable/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function add()
    {

        $this->form_validation->set_rules('name', 'service name','required|trim');
        if ($this->form_validation->run() == TRUE) {
            $imageData =   $_FILES;
            
            $notableLogo = $this->imageUpload('notable_logo', $imageData);
            
            $notableImage = $this->imageUpload('notable_image', $imageData);
            $clientLogo = $this->imageUpload('client_logo', $imageData);
            
       
            $platformLogo = $this->imageUpload('platfrom_logo', $imageData);
            $awardLogo = $this->imageUpload('aword_logo', $imageData);
            
            $clientdata=[];
            foreach ($clientLogo as $key1 => $value1) {
                $c1=array(
                    'name'=>$this->input->post('client_name')[$key1],
                    'image'=>$value1['file_name']
                );
                $clientdata[]=$c1;
            }
            
            $platformdata=[];
            foreach ($platformLogo as $key2 => $value2) {
                $c2=array(
                    'name'=>$this->input->post('platfrom_link')[$key2],
                    'image'=>$value2['file_name']
                );
                $platformdata[]=$c2;
            }
            // dd(json_encode($platformdata));
            $awarddata=[];
            foreach ($awardLogo as $key3 => $value3) {
                $c3=array(
                    'name'=>$this->input->post('aword_name')[$key3],
                    'image'=>$value3['file_name']
                );

                $awarddata[]=$c3;
            }


        //    dd(json_encode($clientdata));

            $data = array(
                'notable_title' => $this->input->post('name'),
                'notable_logo' =>$notableLogo['file_name'],
                'image' =>$notableImage['file_name'],
                'website_link' =>$this->input->post('website_link'),
                'short_description' =>$this->input->post('short_desc'),
                'details_description' =>$this->input->post('description'),
                'client_info' =>json_encode($clientdata),
                'available_platfrom_info' =>json_encode($platformdata),
                'aword_info' =>json_encode($awarddata),
                'display_home' =>1,               
            );
            $this->db->insert('notables', $data);
            redirect('admin/notable/all');

        }
        
        $this->data['meta_title'] = 'Add notable';
        $this->data['subview'] = 'notable/add';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function imageUpload($imageNames, $imageData)
    {   
    
        // Check if multiple files are uploaded
        if (!is_array($imageData[$imageNames]['size'])) {
    
            if ($imageData[$imageNames]['size'] > 0) {
    
                $_FILES['userfile']['name']     = $imageData[$imageNames]['name'];
                $_FILES['userfile']['type']     = $imageData[$imageNames]['type'];
                $_FILES['userfile']['tmp_name'] = $imageData[$imageNames]['tmp_name'];
                $_FILES['userfile']['error']    = $imageData[$imageNames]['error'];
                $_FILES['userfile']['size']     = $imageData[$imageNames]['size'];
                $newFileName = uniqid() . '_' . $_FILES[$imageNames]["name"];
    
                $config['allowed_types'] = '*';
                $config['upload_path']   = $this->img_path_notable;
                $config['file_name']     = $newFileName;
                $config['max_size']      = 50000;
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload($imageNames)) {
                    $uploadData = $this->upload->data();
                    $uploadedFile = array(
                        'file_name' => $uploadData['file_name'],
                        'file_path' => $uploadData['full_path']
                    );
                    return $uploadedFile;
                }
            }
        } else {
            $uploadedFiles = array();
            $errorf = array();
            foreach ($imageData[$imageNames]['name'] as $key => $imageName) {
    
                $_FILES['userfile']['name']     = $imageData[$imageNames]['name'][$key];
                $_FILES['userfile']['type']     = $imageData[$imageNames]['type'][$key];
                $_FILES['userfile']['tmp_name'] = $imageData[$imageNames]['tmp_name'][$key];
                $_FILES['userfile']['error']    = $imageData[$imageNames]['error'][$key];
                $_FILES['userfile']['size']     = $imageData[$imageNames]['size'][$key];
    
                if ($_FILES['userfile']['size'] > 0) {
                    $newFileName = uniqid() . '_' . $_FILES['userfile']["name"];
    
                    $config['allowed_types'] = '*';
                    $config['upload_path']   = $this->img_path_notable;
                    $config['file_name']     = $newFileName;
                    $config['max_size']      = 50000;
    
                    $this->load->library('upload', $config);
    
                    if ($this->upload->do_upload('userfile')) {
                        $uploadData = $this->upload->data();
                        $uploadedFile = array(
                            'file_name' => $uploadData['file_name'],
                            'file_path' => $uploadData['full_path']
                        );
                        $uploadedFiles[] = $uploadedFile;
                    } else {
                        $errorf[] = array(
                            'file' => $_FILES['userfile']['name'],
                            'error' => $this->upload->display_errors()
                        );
                    }
                } else {
                    // It seems like you are using "dd" function here, which might be from Laravel framework, but you are using CodeIgniter.
                    // "dd" function is not available in CodeIgniter. You may want to handle this case differently.
                    dd('error');
                }
            }
            // It seems like you are using "dd" function here, which might be from Laravel framework, but you are using CodeIgniter.
            // "dd" function is not available in CodeIgniter. You may want to handle this case differently.
            return $uploadedFiles;
        }
    }
    

    // public function imageUploadEdit($imageNames, $imageData)
    // {   
        
    //     // Check if multiple files are uploaded
    //     if (!is_array($imageData[$imageNames]['size'])) {
    //     //   dd($imageData[$imageNames]['size']);

    //         if ($imageData[$imageNames]['size'] > 0) {
    //             // dd($imageData[$imageNames]['name']);

    //             $_FILES['userfile']['name']     = $imageData[$imageNames]['name'];
    //             $_FILES['userfile']['type']     = $imageData[$imageNames]['type'];
    //             $_FILES['userfile']['tmp_name'] = $imageData[$imageNames]['tmp_name'];
    //             $_FILES['userfile']['error']    = $imageData[$imageNames]['error'];
    //             $_FILES['userfile']['size']     = $imageData[$imageNames]['size'];
    //             $newFileName = uniqid() . '_' . $_FILES[$imageNames]["name"];
    //             // Configuration for the upload process
    //             $config['allowed_types'] = 'jpg|png|jpeg|gif';
    //             $config['upload_path']   = $this->img_path_notable;
    //             $config['file_name']     = $newFileName;
    //             $config['max_size']      = 50000;
    //             // Load CodeIgniter Upload library
    //             $this->load->library('upload', $config);
    //             // Upload file to directory
    //             if ($this->upload->do_upload($imageNames)) {
    //                 $uploadData = $this->upload->data();
    //                 $uploadedFile = array(
    //                     'file_name' => $uploadData['file_name'],
    //                     'file_path' => $uploadData['full_path']
    //                 );
    //                 // Return uploaded file details
    //                 return $uploadedFile;
    //             }
    //         }
    //     } else {
    //         // dd($imageData[$imageNames]['size']);
    //         $uploadedFiles = array();
    //         foreach ($imageData[$imageNames]['name'] as $key => $imageName) {

    //             $_FILES['userfile']['name']     = $imageData[$imageNames]['name'][$key];
    //             $_FILES['userfile']['type']     = $imageData[$imageNames]['type'][$key];
    //             $_FILES['userfile']['tmp_name'] = $imageData[$imageNames]['tmp_name'][$key];
    //             $_FILES['userfile']['error']    = $imageData[$imageNames]['error'][$key];
    //             $_FILES['userfile']['size']     = $imageData[$imageNames]['size'][$key];

    //             // Check if file size is greater than 0
    //             if ($_FILES['userfile']['size']> 0) {
    //                 $newFileName = uniqid() . '_' . $_FILES['userfile']["name"];
    //                 // Configuration for the upload process
    //                 $config['allowed_types'] = 'jpg|png|jpeg|gif';
    //                 $config['upload_path']   = $this->img_path_notable;
    //                 $config['file_name']     = $newFileName;
    //                 $config['max_size']      = 50000;
    //                 // Load CodeIgniter Upload library
    //                 $this->load->library('upload', $config);
    //                 // Upload file to directory
    //                 if ($this->upload->do_upload('userfile')) {
    //                     $uploadData = $this->upload->data();
    //                     $uploadedFile = array(
    //                         'file_name' => $uploadData['file_name'],
    //                         'file_path' => $uploadData['full_path']
    //                     );
    //                     // Return uploaded file details
    //                     $uploadedFiles[]=$uploadedFile;
    //                 }
    //             }
    //         }
    //         // Return array of uploaded files' details
    //         return $uploadedFiles;
    //     }
    // }

   public  function edit($id){
        $this->form_validation->set_rules('name', 'service name','required|trim');
        if ($this->form_validation->run() == TRUE) {
            
            dd($this->input->post());
            $imageData =   $_FILES;
            $notableLogo = $this->imageUploadEdit('notable_logo', $imageData);
            dd($notableLogo);
            $notableImage = $this->imageUploadEdit('notable_image', $imageData);
            $clientLogo = $this->imageUploadEdit('client_logo', $imageData);
       
            $platformLogo = $this->imageUploadEdit('platfrom_logo', $imageData);
            $awardLogo = $this->imageUploadEdit('aword_logo', $imageData);
            $clientdata=[];
            foreach ($clientLogo as $key => $value) {
                $c=array(
                    'name'=>$this->input->post('client_name')[$key],
                    'image'=>$value['file_name']
                );

                $clientdata[]=$c;
            }
            $platformdata=[];
            foreach ($platformLogo as $key => $value) {
                $c=array(
                    'name'=>$this->input->post('platfrom_link')[$key],
                    'image'=>$value['file_name']
                );

                $platformdata[]=$c;
            }
            $awarddata=[];
            foreach ($awardLogo as $key => $value) {
                $c=array(
                    'name'=>$this->input->post('aword_name')[$key],
                    'image'=>$value['file_name']
                );

                $awarddata[]=$c;
            }




            $data = array(
                'notable_title' => $this->input->post('name'),
                'notable_logo' =>$notableLogo['file_name'],
                'image' =>$notableImage['file_name'],
                'website_link' =>$this->input->post('website_link'),
                'short_description' =>$this->input->post('short_desc'),
                'details_description' =>$this->input->post('description'),
                'client_info' =>json_encode($clientdata),
                'available_platfrom_info' =>json_encode($platformdata),
                'aword_info' =>json_encode($awarddata),
                'display_home' =>1,               
            );

            $this->db->where('id', $id);
            $this->db->update('notables', $data);
            redirect('admin/notable/all');

        }
        
        $this->data['info'] = $this->Notable_model->get_info($id);
        // dd($this->data['info']);
        $this->data['meta_title'] = 'Edit notable';
        $this->data['subview'] = 'notable/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }

    function delete($id){
        $this->data['info'] = $this->Notable_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/notable/all');
    }
}
