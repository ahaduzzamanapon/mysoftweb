<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_new extends Backend_Controller {

    public $img_path;
    public $child_img_path;

    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        $this->load->model('Common_model');
        $this->load->model('Product_new_model');
        $this->load->library('form_validation');
        $this->load->helper('file');
        $this->load->helper('form');

        $this->img_path = realpath(APPPATH . '../product_img');
        if(!is_dir($this->img_path)) mkdir($this->img_path, 0777, TRUE);
        
        $this->child_img_path = realpath(APPPATH . '../assets/img/child_data');
        if(!is_dir($this->child_img_path)) mkdir($this->child_img_path, 0777, TRUE);

        $config = array('field' => 'slug', 'title' => 'name', 'table' => 'products_new', 'id' => 'id');
        $this->load->library('slug', $config);
    }

    public function index() { redirect('admin/product_new/all'); }

    public function all() {
        $this->data['results'] = $this->Product_new_model->get_all_products_main();
        $this->data['meta_title'] = 'Manage Products (New Design)';
        $this->data['subview'] = 'product_new/all';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function add() {
        $this->form_validation->set_rules('name', 'Product Name', 'required|trim');
        if ($this->form_validation->run() == TRUE) {
            $slug_data = array('name' => $this->input->post('name'));
            $slug = $this->slug->create_uri($slug_data);
            $form_data = array('name' => $this->input->post('name'), 'slug' => $slug, 'status' => 'inactive');
            $product_id = $this->Product_new_model->save_product_main($form_data);
            if ($product_id) {
                $this->session->set_flashdata('success', 'Product created. You can now add details.');
                redirect('admin/product_new/edit/' . $product_id);
            }
        }
        $this->data['meta_title'] = 'Add New Product';
        $this->data['subview'] = 'product_new/add';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function edit($id) {
        $this->data['product'] = $this->Product_new_model->get_product_main($id);
        if (empty($this->data['product'])) redirect('admin/product_new/all');

        // Form Submission for Main Product
        if ($this->input->post('update_main_product')) {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('slug', 'Slug', 'required|trim|callback_check_slug[' . $id . ']');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'slug' => $this->input->post('slug'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_description' => $this->input->post('meta_description'),
                    'hero_heading' => $this->input->post('hero_heading'),
                    'hero_subheading' => $this->input->post('hero_subheading'),
                    'hero_description' => $this->input->post('hero_description'),
                    'hero_button_text' => $this->input->post('hero_button_text'),
                    'hero_button_link' => $this->input->post('hero_button_link'),
                    'why_heading' => $this->input->post('why_heading'),
                    'why_description' => $this->input->post('why_description'),
                    'why_button_text' => $this->input->post('why_button_text'),
                    'why_button_link' => $this->input->post('why_button_link'),
                    'summary_heading' => $this->input->post('summary_heading'),
                    'modules_heading' => $this->input->post('modules_heading'),
                    'features_heading' => $this->input->post('features_heading'),
                    'features_subheading' => $this->input->post('features_subheading'),
                    'audiences_heading' => $this->input->post('audiences_heading'),
                    'industries_heading' => $this->input->post('industries_heading'),
                    'technology_heading' => $this->input->post('technology_heading'),
                    'pricing_heading' => $this->input->post('pricing_heading'),
                    'pricing_subheading' => $this->input->post('pricing_subheading'),
                    'faq_heading' => $this->input->post('faq_heading'),
                    'demo_call_to_action_heading' => $this->input->post('demo_call_to_action_heading'),
                    'clients_heading' => $this->input->post('clients_heading'),
                    'status' => $this->input->post('status')
                );

                // Handle Hero Image
                if (!empty($_FILES['hero_image']['name'])) {
                    $this->Product_new_model->delete_old_hero_image($id);
                    $config['upload_path'] = $this->img_path;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|svg|webp';
                    $config['file_name'] = 'hero_' . $id . '_' . time();
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('hero_image')) {
                        $upload_data = $this->upload->data();
                        $data['hero_image'] = $upload_data['file_name'];
                    } else {
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('admin/product_new/edit/' . $id);
                    }
                }
                
                // Demo Call to Action Image
                if (!empty($_FILES['demo_call_to_action_image']['name'])) {
                    $config['upload_path'] = $this->img_path;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|svg|webp';
                    $config['file_name'] = 'demo_' . $id . '_' . time();
                    $this->load->library('upload', $config); // Reload might not be needed but safe
                    $this->upload->initialize($config);
                     if ($this->upload->do_upload('demo_call_to_action_image')) {
                        $upload_data = $this->upload->data();
                        $data['demo_call_to_action_image'] = $upload_data['file_name'];
                    }
                }

                $this->Product_new_model->save_product_main($data, $id);
                $this->session->set_flashdata('success', 'Product updated successfully');
                redirect('admin/product_new/edit/' . $id);
            }
        }

        // Fetch Child Data for Views
        $this->data['metrics']      = $this->Product_new_model->get_child_data('product_metrics', $id);
        $this->data['app_links']    = $this->Product_new_model->get_child_data('product_app_links', $id);
        $this->data['modules']      = $this->Product_new_model->get_child_data('product_modules', $id);
        $this->data['features']     = $this->Product_new_model->get_child_data('product_features', $id);
        $this->data['audiences']    = $this->Product_new_model->get_child_data('product_audiences', $id);
        $this->data['industries']   = $this->Product_new_model->get_child_data('product_industries', $id);
        $this->data['technologies'] = $this->Product_new_model->get_child_data('product_technologies', $id);
        $this->data['pricing_plans']= $this->Product_new_model->get_child_data('product_pricing_plans', $id);
        $this->data['faqs']         = $this->Product_new_model->get_child_data('product_faqs', $id);
        $this->data['clients']      = $this->Product_new_model->get_child_data('product_clients', $id);
        
        // Populate features for each pricing plan
        if(!empty($this->data['pricing_plans'])) {
            foreach($this->data['pricing_plans'] as $plan) {
                $plan->features = $this->Product_new_model->get_pricing_plan_features($plan->id);
            }
        }

        $this->data['meta_title'] = 'Edit Product: ' . $this->data['product']->name;
        $this->data['subview'] = 'product_new/edit';
        $this->load->view('backend/_layout_main', $this->data);
    }
    
    public function check_slug($slug, $id) {
        $exists = $this->db->get_where('products_new', array('slug' => $slug, 'id !=' => $id))->row();
        if ($exists) {
            $this->form_validation->set_message('check_slug', 'This slug is already in use.');
            return FALSE;
        }
        return TRUE;
    }

    // Generic Manager for Child Tables
    public function manage_child($section, $product_id, $child_id = NULL) {
        $product = $this->Product_new_model->get_product_main($product_id);
        if (!$product) redirect('admin/product_new/all');

        $sections_config = [
            'metrics' => [
                'table' => 'product_metrics',
                'title' => 'Metric',
                'fields' => [
                    'value' => ['type' => 'text', 'label' => 'Value (e.g. 2M+)'],
                    'label' => ['type' => 'text', 'label' => 'Label (e.g. Customers)'],
                    'icon' => ['type' => 'text', 'label' => 'Icon Class (incase of FontAwesome)']
                ]
            ],
            'app_links' => [
                'table' => 'product_app_links',
                'title' => 'App Link / Summary',
                'fields' => [
                    'count_text' => ['type' => 'text', 'label' => 'Count Text'],
                    'description' => ['type' => 'textarea', 'label' => 'Description'],
                    'icon' => ['type' => 'text', 'label' => 'Icon Class'],
                    'link_url' => ['type' => 'text', 'label' => 'Link URL']
                ]
            ],
            'modules' => [
                'table' => 'product_modules',
                'title' => 'Module',
                'fields' => [
                    'title' => ['type' => 'text', 'label' => 'Title'],
                    'description' => ['type' => 'textarea', 'label' => 'Description'],
                    'icon' => ['type' => 'text', 'label' => 'Icon Class']
                ]
            ],
            'features' => [
                'table' => 'product_features',
                'title' => 'Feature',
                'fields' => [
                    'title' => ['type' => 'text', 'label' => 'Title'],
                    'description' => ['type' => 'textarea', 'label' => 'Description'],
                    'icon' => ['type' => 'text', 'label' => 'Icon Class']
                ]
            ],
             'audiences' => [
                'table' => 'product_audiences',
                'title' => 'Target Audience',
                'fields' => [
                    'title' => ['type' => 'text', 'label' => 'Title'],
                    'description' => ['type' => 'textarea', 'label' => 'Description'],
                    'icon' => ['type' => 'text', 'label' => 'Icon Class']
                ]
            ],
            'industries' => [
                'table' => 'product_industries',
                'title' => 'Industry',
                'fields' => [
                    'title' => ['type' => 'text', 'label' => 'Title'],
                    'icon' => ['type' => 'text', 'label' => 'Icon Class']
                ]
            ],
            'technologies' => [
                'table' => 'product_technologies',
                'title' => 'Technology',
                'fields' => [
                    'title' => ['type' => 'text', 'label' => 'Title'],
                    'icon' => ['type' => 'file', 'label' => 'Tech Icon (Image)']
                ]
            ],
            'pricing_plans' => [
                'table' => 'product_pricing_plans',
                'title' => 'Pricing Plan',
                'fields' => [
                    'plan_name' => ['type' => 'text', 'label' => 'Plan Name'],
                    'price' => ['type' => 'text', 'label' => 'Price'],
                    'price_unit' => ['type' => 'text', 'label' => 'Unit (e.g. / user)'],
                    'button_text' => ['type' => 'text', 'label' => 'Button Text'],
                    'button_link' => ['type' => 'text', 'label' => 'Button Link']
                ]
            ],
             'faqs' => [
                'table' => 'product_faqs',
                'title' => 'FAQ',
                'fields' => [
                    'question' => ['type' => 'text', 'label' => 'Question'],
                    'answer' => ['type' => 'textarea', 'label' => 'Answer']
                ]
            ],
            'clients' => [
                'table' => 'product_clients',
                'title' => 'Client',
                'fields' => [
                    'client_name' => ['type' => 'text', 'label' => 'Client Name'],
                    'logo_image' => ['type' => 'file', 'label' => 'Logo Image'],
                    'link_url' => ['type' => 'text', 'label' => 'Website Link']
                ]
            ]
        ];

        if (!array_key_exists($section, $sections_config)) redirect('admin/product_new/all');

        $config = $sections_config[$section];
        $this->data['config'] = $config;
        $this->data['section'] = $section;
        $this->data['product_id'] = $product_id;
        $this->data['item'] = $child_id ? $this->Product_new_model->get_single_child_data($config['table'], $child_id) : NULL;

        if ($this->input->post('save_child')) {
            $data = ['product_id' => $product_id, 'status' => 'active'];
            
            // Handle regular fields
            foreach ($config['fields'] as $field_name => $field_setup) {
                if ($field_setup['type'] != 'file') {
                   $data[$field_name] = $this->input->post($field_name);
                }
            }

            // Handle File Uploads (icon/images)
            foreach ($config['fields'] as $field_name => $field_setup) {
                if ($field_setup['type'] == 'file') {
                    if (!empty($_FILES[$field_name]['name'])) {
                         $upload_path = ($section == 'technologies') ? APPPATH . '../assets/img/tech' : APPPATH . '../client_img'; // Basic routing
                         $upload_path = realpath($upload_path); // Ensure absolute path existence
                         if (!$upload_path) {
                             $upload_path = ($section == 'technologies') ? APPPATH . '../assets/img/tech' : APPPATH . '../client_img';
                             mkdir($upload_path, 0777, true);
                             $upload_path = realpath($upload_path);
                         }

                        $upload_config['upload_path'] = $upload_path;
                        $upload_config['allowed_types'] = 'jpg|jpeg|png|gif|svg|webp';
                        $upload_config['file_name'] = $section . '_' . time();
                        $this->load->library('upload', $upload_config);
                        $this->upload->initialize($upload_config);

                        if ($this->upload->do_upload($field_name)) {
                            $upload_data = $this->upload->data();
                            $data[$field_name] = $upload_data['file_name'];
                        } else {
                            $this->session->set_flashdata('error', 'Upload Error: ' . $this->upload->display_errors());
                        }
                    } elseif ($this->data['item']) {
                         // Keep old file if not uploaded
                         // Only if field exists in object
                         if(isset($this->data['item']->$field_name))
                             $data[$field_name] = $this->data['item']->$field_name;
                    }
                }
            }

            $data['order_num'] = $this->input->post('order_num');

            $this->Product_new_model->save_child_data($config['table'], $data, $child_id);
            $this->session->set_flashdata('success', $config['title'] . ' saved.');
            redirect('admin/product_new/edit/' . $product_id . '?tab=' . $section);
        }

        $this->data['meta_title'] = ($child_id ? 'Edit ' : 'Add ') . $config['title'];
        $this->data['subview'] = 'product_new/manage_child';
        $this->load->view('backend/_layout_main', $this->data);
    }
    
    // Independent method for Pricing Features because of different FK
    public function manage_pricing_feature($plan_id, $feature_id = NULL) {
        // Need to get product_id to redirect back properly
        $plan = $this->Product_new_model->get_single_child_data('product_pricing_plans', $plan_id);
        if(!$plan) redirect('admin/product_new/all');
        
        $this->data['plan'] = $plan;
        $this->data['item'] = $feature_id ? $this->Product_new_model->get_single_child_data('product_pricing_features', $feature_id) : NULL;
        
        if ($this->input->post('save_feature')) {
            $data = [
                'plan_id' => $plan_id,
                'feature_text' => $this->input->post('feature_text'),
                'order_num' => $this->input->post('order_num')
            ];
            $this->Product_new_model->save_child_data('product_pricing_features', $data, $feature_id);
            redirect('admin/product_new/edit/' . $plan->product_id . '?tab=pricing_plans');
        }
        
        $this->data['meta_title'] = 'Manage Pricing Feature';
        $this->data['subview'] = 'product_new/manage_pricing_feature';
        $this->load->view('backend/_layout_main', $this->data);
    }

    public function delete_child($product_id, $section, $child_id) {
         // Map section to table
         $tables = [
            'metrics' => 'product_metrics',
            'app_links' => 'product_app_links',
            'modules' => 'product_modules',
            'features' => 'product_features',
            'audiences' => 'product_audiences',
            'industries' => 'product_industries',
            'technologies' => 'product_technologies',
            'pricing_plans' => 'product_pricing_plans',
            'faqs' => 'product_faqs', 
            'clients' => 'product_clients'
        ];
        
        if(isset($tables[$section])) {
            $this->Product_new_model->delete_child_data($tables[$section], $child_id);
            $this->session->set_flashdata('success', 'Deleted successfully.');
        }
        redirect('admin/product_new/edit/' . $product_id . '?tab=' . $section);
    }
    
    public function delete_pricing_feature($plan_id, $feature_id){
         $this->Product_new_model->delete_child_data('product_pricing_features', $feature_id);
         // Get plan to find product_id for redirect
         $plan = $this->Product_new_model->get_single_child_data('product_pricing_plans', $plan_id);
         redirect('admin/product_new/edit/' . $plan->product_id . '?tab=pricing_plans');
    }
}
