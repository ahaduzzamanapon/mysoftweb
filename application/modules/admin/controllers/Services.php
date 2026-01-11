<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Backend_Controller {

	var $img_path;
    private $image_fields = [
        'userfile',
        'first_section_img',
        'second_section_img_one',
        'second_section_img_two',
        'third_section_img_one',
        'third_section_img_two',
        'third_section_img_three',
        'third_section_img_four',
        'fourth_section_img',
        'five_section_img_one',
        'five_section_img_two',
        'five_section_img_three',
        'five_section_img_four',
        'five_section_img_five',
        'six_section_img',
        'seven_section_img',
        'nine_section_img_one',
        'nine_section_img_two',
        'nine_section_img_three',
        'nine_section_img_four',
        'Ten_section_img_one',
        'Ten_section_img_two',
        'Ten_section_img_three',
        'Ten_section_img_four',
        'Ten_section_img_five',
        'Ten_section_img_six',
        'Ten_section_img_seven',
        'Ten_section_img_eight',
        'Ten_section_img_nine',
        'Ten_section_img_ten',
        'Ten_section_img_eleven',
        'Ten_section_img_twelve',
        'thirteen_section_img_one',
        'thirteen_section_img_two',
        'thirteen_section_img_three',
        'thirteen_section_img_four',
        'thirteen_section_img_five',
        'thirteen_section_img_six',
        'thirteen_section_img_seven',
        'thirteen_section_img_eight',
        'thirteen_section_img_nine',
        'thirteen_section_img_ten',
        'thirteen_section_img_eleven',
        'thirteen_section_img_twelve',
        'fourteen_section_img_one',
        'fourteen_section_img_two',
        'fourteen_section_img_three',
        'fourteen_section_img_four',
        'fifteen_section_img_one',
        'fifteen_section_img_two',
        'fifteen_section_img_three',
        'sixteen_section_img_one',
        'sixteen_section_img_two',
        'sixteen_section_img_three',
        'ninteen_section_img_one',
        'ninteen_section_img_two',
        'ninteen_section_img_three',
        'ninteen_section_img_four',
        'ninteen_section_img_five',
        'ninteen_section_img_six',
        'ninteen_section_img_seven',
        'ninteen_section_img_eight',
        'ninteen_section_img_nine',
        'ninteen_section_img_ten'
    ];

    private $list_fields = [
        'six_section_list',
        'seven_section_list',
        'twelve_section_list_one',
        'twelve_section_list_two'
    ];

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
        $this->data['meta_title'] = 'All Service';
        $this->data['subview'] = 'services/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function details($id){
        $this->data['info'] = $this->Services_model->get_info($id);

        // Decode JSON fields for display
        foreach ($this->list_fields as $field) {
            if (isset($this->data['info']->$field)) {
                $this->data['info']->$field = json_decode($this->data['info']->$field);
            }
        }

        $this->data['meta_title'] = 'Service Details';
        $this->data['subview'] = 'services/details';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id){
        $this->form_validation->set_rules('name', 'service name', 'required|trim');
        $this->form_validation->set_rules('slug', 'slug url', 'required|trim');
        $this->form_validation->set_rules('short_desc', 'services short description', 'max_length[1000]|trim');
        $this->form_validation->set_rules('description', 'service description', 'trim');
        $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim');

        // foreach ($this->image_fields as $field) {
        //     if (@$_FILES[$field]['size'] > 0) {
        //         $this->form_validation->set_rules($field, '', 'callback_file_check');
        //     }
        // }

        $this->data['info'] = $this->Services_model->get_info($id);

        if ($this->form_validation->run() == true){
            $form_data = $this->input->post();

            // Handle image uploads
            foreach ($this->image_fields as $field) {
                $old_image = isset($this->data['info']->$field) ? $this->data['info']->$field : NULL;
                $uploaded_file_name = $this->_handle_image_upload($field, $old_image);
                if ($uploaded_file_name) {
                    $form_data[$field] = $uploaded_file_name;
                } else if (isset($form_data[$field])) { 
                    unset($form_data[$field]); 
                }
            }

            // Handle list fields (JSON encode)
            foreach ($this->list_fields as $field) {
                if (isset($form_data[$field])) {
                    $form_data[$field] = json_encode($form_data[$field]);
                }
            }

            // Standardize naming conventions for saving
            $form_data = $this->_standardize_field_names($form_data);
            unset($form_data['submit']);

            // Slug generation
            $form_data['slug'] = $form_data['slug'];

            if($this->Common_model->edit('services', $id, 'id', $form_data)){
                $this->session->set_flashdata('success', 'Information update successfully.');
                redirect('admin/services/all');
            }
        }

        // Decode JSON fields for display in the form (if validation fails)
        foreach ($this->list_fields as $field) {
            if (isset($this->data['info']->$field)) {
                $this->data['info']->$field = json_decode($this->data['info']->$field);
            }
        }

        $this->data['category'] = $this->Common_model->get_main_service_dd();
        $this->data['meta_title'] = 'Edit Service';
        $this->data['subview'] = 'services/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }


	public function add(){
		$this->form_validation->set_rules('name', 'service name', 'required|trim');
        $this->form_validation->set_rules('slug', 'slug url', 'required|trim');
        $this->form_validation->set_rules('short_desc', 'services short description', 'max_length[1000]|trim');
        $this->form_validation->set_rules('description', 'service description', 'trim');
        $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim'); 

        foreach ($this->image_fields as $field) {
            if (@$_FILES[$field]['size'] > 0) {
                $this->form_validation->set_rules($field, '', 'callback_file_check');
            }
        }

        if ($this->form_validation->run() == true){
            $form_data = $this->input->post();

            // Handle image uploads
            foreach ($this->image_fields as $field) {
                $uploaded_file_name = $this->_handle_image_upload($field);
                if ($uploaded_file_name) {
                    $form_data[$field] = $uploaded_file_name;
                } else if (isset($form_data[$field])) {
                    unset($form_data[$field]);
                }
            }

            // Handle list fields (JSON encode)
            foreach ($this->list_fields as $field) {
                if (isset($form_data[$field])) {
                    $form_data[$field] = json_encode($form_data[$field]);
                }
            }

            // Standardize naming conventions for saving
            $form_data = $this->_standardize_field_names($form_data);
unset($form_data['submit']);
            // Slug generation
            $form_data['slug'] = $this->slug->create_uri(['name' => $form_data['name']]);

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

    private function _handle_image_upload($field_name, $old_image = NULL) {
        if (@$_FILES[$field_name]['size'] > 0) {
            $config['allowed_types'] = '*';
            $config['upload_path'] = $this->img_path;
            $config['file_name'] = $_FILES[$field_name]['name'];
            $config['max_size'] = 50000; // 500 KB

            $this->load->library('upload', $config);
            $this->upload->initialize($config); // Re-initialize for each upload

            if ($this->upload->do_upload($field_name)) {
                $uploadData = $this->upload->data();
                
                // Delete old image if a new one is uploaded successfully
                if ($old_image && file_exists($this->img_path . '/' . $old_image)) {
                    @unlink($this->img_path . '/' . $old_image);
                }
                return $uploadData['file_name'];
            } else {
                $this->data['message'] = $this->upload->display_errors();
                return FALSE;
            }
        }
        return FALSE; // No new file uploaded
    }

	public function file_check($str){
        $field_name = $this->upload->file_form_name; // Get the name of the file input field being validated
    	$this->load->helper('file');
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES[$field_name]['name']);
        $file_size = 1050000; 
        $size_kb = '1 MB';

        if(isset($_FILES[$field_name]['name']) && $_FILES[$field_name]['name']!=""){
            if(!in_array($mime, $allowed_mime_type_arr)){
                $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
                return false;
            }elseif($_FILES[$field_name]["size"] > $file_size){
            	$this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
                return false;
            }else{
			    return true;
			}
        }else{
            return true;
        }
    }

   private function _standardize_field_names($data) {
    $standardized_data = [];
    foreach ($data as $key => $value) {
        $db_key = $key;

        // Specific mappings
        if ($key === 'userfile') {
            $db_key = 'image_file';
        }

        // Preserve capitalization for DB consistency
        $capitalized_sections = ['Eight_section', 'Nine_section', 'Ten_section', 'nineteen_section'];
        foreach ($capitalized_sections as $section) {
            if (stripos($key, $section) === 0) {
                $db_key = $section . substr($key, strlen($section));
                break;
            }
        }

        // Convert _title → _titel
        if (strpos($db_key, '_title') !== false) {
            $db_key = str_replace('_title', '_titel', $db_key);
        }

        $standardized_data[$db_key] = $value;
    }
    return $standardized_data;
}


    function delete($id) {
        $info = $this->Services_model->get_info($id);

        // Delete all associated image files before deleting the record
        foreach ($this->image_fields as $field) {
            // Need to map view field name to DB field name for deletion
            $db_field_name = $field;
            if ($field === 'userfile') {
                $db_field_name = 'image_file';
            } elseif ($field === 'Nine_section_img_three') {
                $db_field_name = 'Nine_section_img_three'; // Exact match
            } elseif (strpos($field, 'Ten_section_img') === 0) {
                $db_field_name = str_replace('ten_section_img', 'Ten_section_img', $field); // Preserve capitalization
            }

            if (isset($info->$db_field_name) && !empty($info->$db_field_name) && file_exists($this->img_path . '/' . $info->$db_field_name)) {
                @unlink($this->img_path . '/' . $info->$db_field_name);
            }
        }

        $this->Services_model->delete($id);
        $this->session->set_flashdata('success', 'Information delete successfully.');
        redirect('admin/services/all');
    }

}
