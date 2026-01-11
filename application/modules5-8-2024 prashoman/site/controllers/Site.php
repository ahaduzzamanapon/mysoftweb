<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends Frontend_Controller {

	function __construct (){
		parent::__construct();
        $this->load->model('Site_model');
        $this->load->model('Common_model');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <i class="fa fa-warning"></i> ', '</div>');
	}

	public function index()
	{
        // echo 'hello'; exit;
		//dump('Frontend Controller');
        $this->data['slider'] = $this->Site_model->get_slider();
        $this->data['homepage_services'] = $this->Site_model->get_homepage_show('services');
        $this->data['homepage_product'] = $this->Site_model->get_homepage_show('product');
        $this->data['homepage_portfolio'] = $this->Site_model->get_homepage_show('portfolio');
        $this->data['homepage_client'] = $this->Site_model->get_homepage_show('client');
        $this->data['testimonial'] = $this->Site_model->get_testimonial();
        // $this->data['stat'] = $this->Site_model->get_stat();
        $this->data['years_of_experience'] = $this->Site_model->get_years_of_experience();
        $this->data['number_of_clients'] = $this->Site_model->get_number_of_clients();
        $this->data['successful_projects'] = $this->Site_model->get_successful_projects();
        $this->data['running_services'] = $this->Site_model->get_running_services();
        $this->data['notable_data'] = $this->Site_model->get_notable_all_data();
        $this->data['gallery_images'] = $this->Site_model->get_gallery_images();
        // print_r($this->data['gallery_images']);
        // exit();


        
        //view
		$this->data['meta_title'] = 'Home';
		$this->data['subview'] = 'index';
    	$this->load->view('frontend/_layout_main', $this->data);
	}

    public function events(){   
        // $this->data['products'] = $this->Site_model->get_product(); 
        $this->data['blogs'] = $this->Site_model->get_blog(); 
        $this->data['blog_popular'] = $this->Site_model->get_blog_popular(); 
        $this->data['meta_title'] = 'Mysoftheaven Events';        
        $this->data['subview'] = 'events';
        $this->load->view('frontend/_layout_main', $this->data);
    } 
    public function terms(){   
 
        $this->data['meta_title'] = 'Terms & Conditions';        
        $this->data['subview'] = 'terms';
        $this->load->view('frontend/_layout_main', $this->data);
    } 
    
    public function employee_list(){   
 
        $this->data['meta_title'] = 'Our Team Member';        
        $this->data['subview'] = 'employee_list';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function event_details($slug){  
        $slug= urldecode($slug); 
        // $this->data['products'] = $this->Site_model->get_product(); 
        if (!$this->Site_model->blog_slug_exists($slug)) { 
            $this->err404();
        }else{            
            // echo 'hello'; exit;
            $this->data['info'] = $this->Site_model->get_blog_by_slug($slug);        
        }
        // exit($slug); exit;
        
        $this->data['meta_keywords'] = $this->data['info']->meta_keys;
        $this->data['meta_description'] = $this->data['info']->short_desc;    

        // $this->data['services'] = $this->Site_model->get_services();        
        // $this->data['homepage_product'] = $this->Site_model->get_homepage_show('product');
        $this->data['blog_popular'] = $this->Site_model->get_blog_popular();
        
        $this->data['meta_title'] = 'Event Details';        
        $this->data['subview'] = 'event_details';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function blog_article(){   
        // $this->data['products'] = $this->Site_model->get_product(); 
        $this->data['blogs'] = $this->Site_model->get_blog_article(); 
        $this->data['blog_popular'] = $this->Site_model->get_blog_popular_article(); 
        $this->data['meta_title'] = 'Mysoftheaven Blog';        
        $this->data['subview'] = 'blog_article';
        $this->load->view('frontend/_layout_main', $this->data);
    } 

    public function blog_article_ajax($page) {
        if($page == 1) {
            $per_page = 6;
        }else{
            $per_page = 4;
        }
        $offset = ($page - 1) * $per_page;
        
        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
    
        $this->db->from('blog_article');        
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 
    
        $html = '';
    
        foreach ($query as $item) {
            $title = strlen($item->title) > 40 ? substr($item->title, 0, 200) . ' ...' : $item->title;
            $description = strlen($item->description) > 200 ? substr($item->description, 0, 500) . ' ...' : $item->description;
            
            $img_path = base_url() . 'blog_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
    
            // Use double quotes for string interpolation
            $html .= "
            <article class='post post-medium'>
                <div class='row'>
                    <div class='col-md-5'>
                        <div class='post-image'>
                            <div class='img-thumbnail'>
                                <img class='img-responsive' src='$src' alt='$item->title'>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-7'>
                        <div class='post-content'>
                            <h2><a href='" . base_url("blog-article-details/$item->slug") . "'>$title</a></h2>
                            <p>$description</p>
                        </div>
                    </div>
                </div>
    
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='post-meta'>
                            <span><i class='fa fa-calendar'></i> " . date('d F, Y', strtotime($item->post_date)) . "</span>
                            <span><i class='fa fa-user'></i> By <strong>Admin</strong> </span>
                            <a href='" . base_url("blog-article-details/$item->slug") . "' class='btn btn-xs btn-primary pull-right'>Read more...</a>
                        </div>
                    </div>
                </div>
            </article>";
        }

        // Handle error cases
        if(empty($html)) {
            $html = false;
        }
    
        echo $html;
    }
    

    public function event_article_ajax($page) {
        if($page == 1) {
            $per_page = 6;
        }else{
            $per_page = 4;
        }
        $offset = ($page - 1) * $per_page;
        
        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
    
        $this->db->from('blog');        
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 

        $html = '';
    
        foreach ($query as $item) {
            $title = strlen($item->title) > 40 ? substr($item->title, 0, 200) . ' ...' : $item->title;
            $description = strlen($item->description) > 200 ? substr($item->description, 0, 500) . ' ...' : $item->description;
            
            $img_path = base_url() . 'blog_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
    
            // Use double quotes for string interpolation
            $html .= "
            <article class='post post-medium'>
                <div class='row'>
                    <div class='col-md-5'>
                        <div class='post-image'>
                            <div class='img-thumbnail'>
                                <img class='img-responsive' src='$src' alt='$item->title'>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-7'>
                        <div class='post-content'>
                            <h2><a href='" . base_url('event-details/'.$item->slug) . "'>$title</a></h2>
                            <p>$description</p>
                        </div>
                    </div>
                </div>
    
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='post-meta'>
                            <span><i class='fa fa-calendar'></i> " . date('d F, Y', strtotime($item->post_date)) . "</span>
                            <span><i class='fa fa-user'></i> By <strong>Admin</strong> </span>
                            <a href='" . base_url('event-details/'.$item->slug) . "' class='btn btn-xs btn-primary pull-right'>Read more...</a>
                        </div>
                    </div>
                </div>
            </article>";
        }

        // Handle error cases
        if(empty($html)) {
            $html = false;
        }
    
        echo $html;
    }

    public function govt_sector_ajax($page){
        if($page == 1) {
            $per_page = 10;
            $offset = ($page - 1) * $per_page;
            $i=$offset+1;
        }else{
            $per_page = 8; 
            $offset = ($page - 1) * $per_page;
            $i=$offset+3; 
        }
        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
        $this->db->from('client');        
        $this->db->where('status', 1);
        $this->db->where('client_type', 'government-sector');
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 
        // dd($query);

        $html = ''; 
        foreach ($query as $item) {
            $img_path = base_url() . 'client_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
            $html .= "
            <tr>
                <td class='tg-yw4l' align='center'>$i</td>
                <td class='tg-yw4l'>$item->project_name</td>
                <td class='tg-yw4l'> $item->client_name</td>
                <td class='tg-yw4l'>
                <img class='image_custom_style' src='$src' alt='$item->project_name' height='60'>
                </td>
            </tr>";
            $i++;
        }
        if(empty($html)) {
            $html = false;
        }
        echo $html;  
    }
    public function private_sector_ajax($page){
        if($page == 1) {
            $per_page = 10;
            $offset = ($page - 1) * $per_page;
            $i=$offset+1;
        }else{
            $per_page = 8; 
            $offset = ($page - 1) * $per_page;
            $i=$offset+3; 
        }
       

        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
    
        $this->db->from('client');        
        $this->db->where('status', 1);
        $this->db->where('client_type', 'private-sector');
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 
        // dd($query);

        $html = '';

        
         
        foreach ($query as $item) {
            $img_path = base_url() . 'client_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
            $html .= "
            <tr>
                <td class='tg-yw4l' align='center'>$i</td>
                <td class='tg-yw4l'>$item->project_name</td>
                <td class='tg-yw4l'> $item->client_name</td>
                <td class='tg-yw4l'>
                <img class='image_custom_style' src='$src' alt='$item->project_name' height='60'>
                </td>
            </tr>";
            $i++;
        }
        if(empty($html)) {
            $html = false;
        }
    
        echo $html;




                        
						
    
       
    }

    public function edu_sector_ajax($page){
        if($page == 1) {
            $per_page = 15;
            $offset = ($page - 1) * $per_page;
            $i=$offset+1;
        }else{
            $per_page = 8; 
            $offset = ($page - 1) * $per_page;
            $i=$offset+8; 
        }
       

        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
    
        $this->db->from('client');        
        $this->db->where('status', 1);
        $this->db->where('client_type', 'education-sector');
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 
        // dd($query);

        $html = '';

        
         
        foreach ($query as $item) {
            $img_path = base_url() . 'client_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
            $html .= "
            <tr>
                <td class='tg-yw4l' align='center'>$i</td>
                <td class='tg-yw4l'>$item->client_name</td>
                <td class='tg-yw4l'> $item->location</td>
                <td class='tg-yw4l'>
                <img class='image_custom_style' src='$src' alt='$item->project_name' height='60'>
                </td>
            </tr>";
            $i++;
        }
        if(empty($html)) {
            $html = false;
        }
    
        echo $html;
    }
    public function offshore_sector_ajax($page){
        if($page == 1) {
            $per_page = 15;
            $offset = ($page - 1) * $per_page;
            $i=$offset+1;
        }else{
            $per_page = 8; 
            $offset = ($page - 1) * $per_page;
            $i=$offset+8; 
        }
       

        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
        $this->db->from('client');        
        $this->db->where('status', 1);
        $this->db->where('client_type', 'offshore-client');
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 
        // dd($query);
        $html = '';
        foreach ($query as $item) {
            $img_path = base_url() . 'client_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
            $html .= "
            <tr>
                <td class='tg-yw4l' align='center'>$i</td>
                <td class='tg-yw4l'>$item->project_name</td>
                <td class='tg-yw4l'> $item->client_name</td>
                <td class='tg-yw4l'>
                <img class='image_custom_style' src='$src' alt='$item->project_name' height='60'>
                </td>
            </tr>";
            $i++;
        }
        if(empty($html)) {
            $html = false;
        }
        echo $html;
    }
    public function rmg_sector_ajax($page){
        if($page == 1) {
            $per_page = 15;
            $offset = ($page - 1) * $per_page;
            $i=$offset+1;
        }else{
            $per_page = 8; 
            $offset = ($page - 1) * $per_page;
            $i=$offset+8; 
        }
       

        // Sanitize $page to prevent SQL injection
        $page = (int)$page;
        $this->db->from('client');        
        $this->db->where('status', 1);
        $this->db->where('client_type', 'rmg-sector');
        $this->db->order_by('sort_order', 'ASC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get()->result(); 
        // dd($query);
        $html = '';
        foreach ($query as $item) {
            $img_path = base_url() . 'client_img/';
            $src = $item->image_file != NULL ? $img_path . $item->image_file : $img_path . 'blog-default.jpg';
            $html .= "
            <tr>
                <td class='tg-yw4l' align='center'>$i</td>
                <td class='tg-yw4l'>$item->project_name</td>
                <td class='tg-yw4l'> $item->client_name</td>
                <td class='tg-yw4l'> $item->location</td> 
                <td class='tg-yw4l'>
                <img class='image_custom_style' src='$src' alt='$item->project_name' height='60'>
                </td>
            </tr>";
            $i++;
        }
        if(empty($html)) {
            $html = false;
        }
        echo $html;
    }

    

    public function blog_article_details($slug){   
        $slug= urldecode($slug);
        // $this->data['products'] = $this->Site_model->get_product(); 
        if (!$this->Site_model->blog_article_slug_exists($slug)) { 
            $this->err404();
        }else{            
            // echo 'hello'; exit;
            $this->data['info'] = $this->Site_model->get_blog_article_by_slug($slug);        
        }    
        // print_r($this->data['info']);
        // exit();
        
        $this->data['meta_keywords'] = $this->data['info']->meta_keys;

        $this->data['meta_description'] = $this->data['info']->short_desc;    

        // $this->data['services'] = $this->Site_model->get_services();        
        // $this->data['homepage_product'] = $this->Site_model->get_homepage_show('product');
        $this->data['blog_popular'] = $this->Site_model->get_blog_popular_article();
        
        $this->data['meta_title'] = 'Blog Article';        
        $this->data['subview'] = 'blog_article_details';
        $this->load->view('frontend/_layout_main', $this->data);
    } 


    public function training(){   
        
        $this->data['meta_title'] = 'Industrial Training Courses';        
        $this->data['subview'] = 'training';
        $this->load->view('frontend/_layout_main', $this->data);
    } 

    public function products(){   
      
        $this->data['products'] = $this->Site_model->get_product(); 
        $this->data['meta_title'] = 'All Product';        
        $this->data['subview'] = 'products';
        $this->load->view('frontend/_layout_main', $this->data);
    } 
    public function notable_products(){  
        // $this->data['products'] = $this->Site_model->get_product(); 
        $this->data['notable_data'] = $this->Site_model->get_notable_all_data_in_details();
        // print_r($this->data['notable_data']);
        // exit();
        $this->data['meta_title'] = 'Notable Products';        
        $this->data['subview'] = 'notable_products';
        $this->load->view('frontend/_layout_main', $this->data);
    } 
    public function notable_details($id=NULL){  
        
        // $this->data['products'] = $this->Site_model->get_product(); 
        $this->data['notable_data'] = $this->Site_model->single_notable_data($id);

        // print_r($this->data['notable_data']);
        // exit();
        
        $this->data['meta_title'] = 'Notable Details';        
        $this->data['subview'] = 'notable_details';
        $this->load->view('frontend/_layout_main', $this->data);
    } 

    public function product_details($slug){ 
        $slug= urldecode($slug);
        $this->data['info'] = $this->Site_model->get_info_by_slug_of_product($slug);  

        $this->data['limit_products'] = $this->Site_model->get_limit_product(); 
        $this->data['products'] = $this->Site_model->get_product(); 

        $clients_id = explode(',', $this->data['info']->user_client);
        $client_name = array();
         foreach ($clients_id as $value) {
            $client_name[] = $this->get_client($value);
         }   


        $this->data['client_name']=$client_name;

        $this->data['meta_keywords'] = $this->data['info']->meta_keys;
        $this->data['meta_description'] = $this->data['info']->short_desc;

        $this->data['meta_title'] = 'Product Details';        
        $this->data['subview'] = 'product_details';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function get_client($id){
        // echo $id; exit;
        return $this->Site_model->get_client_name($id);  
    }

    public function portfolio(){        
        $this->data['category'] = $this->Site_model->get_category();
        $this->data['portfolios'] = $this->Site_model->get_portfolios();

        $this->data['meta_title'] = 'Mysoftheaven Portfolio';        
        $this->data['subview'] = 'portfolio';
        $this->load->view('frontend/_layout_main', $this->data);
    } 
    
    public function portfolio_details($id){
        $this->data['info'] = $this->Site_model->get_portfolio_by_id($id);        
        $this->data['category'] = $this->Site_model->get_portfolio_category($this->data['info']->category_id);
        // dd($this->data['info']); 
        $this->data['meta_title'] = 'Portfolio Details';        
        $this->data['subview'] = 'portfolio_details';
        $this->load->view('frontend/_layout_main', $this->data);
    }

	public function service($slug){
        $slug= urldecode($slug);

        if (!$this->Site_model->slug_exists($slug)) { 
            $this->err404();
        }else{            
            // echo 'hello'; exit;
            $this->data['info'] = $this->Site_model->get_info_by_slug($slug);        
        }    
        
        $this->data['meta_keywords'] = $this->data['info']->meta_keys;
        $this->data['meta_description'] = $this->data['info']->short_desc;   
        $this->data['main_service_info'] = $this->Site_model->get_main_service_info($this->data['info']->main_service_id);   
        // print_r($this->data['main_service_info']);
        // echo $this->data['main_service_info'][0]->id; exit;
        $this->data['services'] = $this->Site_model->get_services($this->data['main_service_info'][0]->id);

        $this->data['homepage_product'] = $this->Site_model->get_homepage_show('product');

        $this->data['meta_title'] = $this->data['info']->name;
        $this->data['subview'] = 'service_details';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function client($slug){
        $slug= urldecode($slug);
        $this->data['client'] = $this->Site_model->get_client($slug);
        if($slug=='government-sector'){
            $title = 'Government Sector';
        }elseif($slug=='private-sector'){
            $title = 'Private Sector';        
        }elseif($slug=='education-sector'){
            $title = 'Education Sector';        
        }elseif($slug=='offshore-client'){
            $title = 'Offshore Client';    
        }elseif($slug=='rmg-sector'){
            $title = 'RMG Sector';
        }

        $this->data['meta_title'] = $title;
        $this->data['subview'] = 'client_details';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function err404(){

        // $this->data['related_item'] = $this->Site_model->get_related_course_not_found();

        $this->data['meta_title'] = 'Page not found';
        $this->data['subview'] = 'err404';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function privacy_policy(){
        $this->data['meta_title'] = 'Privacy Policy';
        $this->data['subview'] = 'privacy_policy';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function about_us(){
        $this->data['meta_title'] = 'About Mysoftheaven Ltd.';
        $this->data['subview'] = 'about_us';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function ceo_message(){
        $this->data['meta_title'] = 'CEO Message';
        $this->data['subview'] = 'ceo_message';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function management_team(){
        $this->data['meta_title'] = 'Management Team';
        $this->data['subview'] = 'management_team';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function company_profile(){
        $this->data['meta_title'] = 'Company Profile';
        $this->data['subview'] = 'company_profile';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function request_quotation(){
        
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email address', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'phone number', 'required|trim|numeric');
        $this->form_validation->set_rules('office_address', 'Office Address', 'required|trim');
        $this->form_validation->set_rules('product', 'select producte', 'required');
        $this->form_validation->set_rules('services', 'select services', 'required');
        $this->form_validation->set_rules('details', 'details', 'required');

        // $recaptcha = $this->input->post('g-recaptcha-response');

        if ($this->form_validation->run() == true){
            $form_data = array(
                'name' => ucwords($this->input->post('name')),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'office_address' => $this->input->post('office_address'),
                'product' => $this->input->post('product'),
                'services' => $this->input->post('services'),
                'details' => $this->input->post('details'),                
                'date_time' => date('Y-m-d h:i:s')
            );

            // echo '<pre>';
            // print_r($form_data); exit;
            
            if($this->Common_model->save('request', $form_data)){
                $this->session->set_flashdata('success', 'Thank you for request quotation.');
                $this->sendmail_by_phpmailer($this->input->post('email'));
                redirect('request-quotation');
            }
        }
        $this->data['limit_products'] = $this->Site_model->get_limit_product();
        
        $this->data['products'] = $this->Site_model->get_product();
        $this->data['services'] = $this->Site_model->get_services_quatiation();
        $this->data['meta_title'] = 'Request for Quotation';
        $this->data['subview'] = 'request_quotation';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function registration_now($id=NULL){    	
    	$id = (int) $id;
        // form validation
        $this->form_validation->set_rules('full_name', 'full name', 'required|trim');
        $this->form_validation->set_rules('email', 'email address', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'phone number', 'required|trim|numeric');
        $this->form_validation->set_rules('course_id', 'select course', 'required|trim');
        $this->form_validation->set_rules('country_id', 'select country', 'required');
        $this->form_validation->set_rules('g-recaptcha-response', 'reCaptcha', 'required|callback_getResponse');

        // $recaptcha = $this->input->post('g-recaptcha-response');

        if ($this->form_validation->run() == true){
            $my_skills = '';
            if ($this->input->post('my_skills')) {
                $my_skills = implode (", ", $this->input->post('my_skills'));
            }

            $form_data = array(
                'full_name' => ucwords($this->input->post('full_name')),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'course_id' => $this->input->post('course_id'),
                'country_id' => $this->input->post('country_id'),
                'gender' => $this->input->post('gender'),                
                'my_skills' => $my_skills,
                'opinion' => $this->input->post('opinion'),
                'pay_status' => '1',
                'date_time' => date('Y-m-d h:i:s'),
                'status' => '1'
            );

            // echo '<pre>';
            // print_r($form_data); exit;
            
            if($this->Common_model->save('registration', $form_data)){
                $this->session->set_flashdata('success', 'Thank you for registration! <br>Check your email <b>inbox</b> or <b>spam</b> folder.');
                $this->sendmail_by_phpmailer($this->input->post('email'));
                redirect('registration-success');
            }
        }

        // Review Captcha
        $this->load->library('recaptcha');
        $this->data['widget'] = $this->recaptcha->getWidget();
        $this->data['script'] = $this->recaptcha->getScriptTag();
        $this->data['course_id'] = $id;

        $this->data['meta_title'] = 'Registration Now';
        $this->data['subview'] = 'registration_now';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    function getResponse($str){
        $this->load->library('recaptcha');

        $recaptcha = $str;
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                // echo json_encode(array('status' => 1, 'msg' => 'You got it!'));
                $this->session->set_flashdata('success', 'Thank you for registration! <br>Check your email <b>inbox</b> or <b>spam</b> folder.');
                return true;
            }else{
                $this->form_validation->set_message('getResponse', 'incorrect captcha');
                return false;
            }
        }
    }


    public function all_course(){
        $this->data['meta_title'] = 'All Course';
        $this->data['subview'] = 'all_course';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function contact_us(){
        $this->data['contact'] = $this->Site_model->get_contact(); 
        
        $this->data['meta_title'] = 'Contact Us';
        $this->data['subview'] = 'contact_us';




        $this->load->view('frontend/_layout_main', $this->data);
        // print_r($this->data['contact']);
        // exit();
        // echo "<pre>";
        // print_r($this->data['contact']);
        // echo "<pre>";
        // exit();

    }
    public function contact_add(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email address', 'required|trim|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == true){
            // dd($this->input->post());
            $form_data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'created_at' => date('Y-m-d h:i:s'),
            );
           if($this->Common_model->save('contact_us', $form_data)){
            $this->session->set_flashdata('success_message', 'Your message has been sent successfully!');
           }else{
            $this->session->set_flashdata('error_message', 'Your message has not been sent!');
           }            
            $this->data['contact'] = $this->Site_model->get_contact(); 
            $this->data['meta_title'] = 'Contact Us';
            $this->data['subview'] = 'contact_us';
            $this->load->view('frontend/_layout_main', $this->data);
        }else{
            $this->data['contact'] = $this->Site_model->get_contact(); 
            $this->data['meta_title'] = 'Contact Us';
            $this->data['subview'] = 'contact_us';
            $this->load->view('frontend/_layout_main', $this->data);
        }
    }


    public function registration_success(){
        $this->data['meta_title'] = 'Registration Success';        
        $this->data['subview'] = 'registration_success';
        $this->load->view('frontend/_layout_main', $this->data);
    }

    public function sendmail_by_phpmailer($email){
        $this->load->library('email');
        $to = $email;
        $subject = ' Registration';
        // $message = '<p>This message has been sent for testing purposes.</p>';

        $message = '<span>Hello, </strong></span>,
        <p style="margin-bottom:20px;">Thank you for registration. Your registration has been received successfully.<br>
        As soon as we are contact with you!</p>

        <br><br>

        Thank You!<br>
        <a href="http://www.mysoftheaven.com">www.mysoftheaven.com</a> Team';

        // Get full html:
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
            <title>' . html_escape($subject) . '</title>
            <style type="text/css">
                body {
                    font-family: Arial, Verdana, Helvetica, sans-serif;
                    font-size: 16px;
                }
            </style>
        </head>
        <body>
        ' . $message . '
        </body>
        </html>';
        // Also, for getting full html you may use the following internal method:
        //$body = $this->email->full_html($subject, $message);

        $result = $this->email
                ->from('sales@mysoftheaven.com')
                ->reply_to('sales@mysoftheaven.com')    // Optional, an account where a human being reads.
                ->to($to)
                ->subject($subject)
                ->message($body)
                ->send();

        // var_dump($result);
        // echo '<br />';
        // echo $this->email->print_debugger();

        // exit;
    }

    public function email_template(){
        $this->load->view('email_template');
    }


    // public function rules_regulation(){
    //     $this->data['meta_title'] = 'Rules Regulation';
    //     $this->data['subview'] = 'rules_regulation';
    //     $this->load->view('frontend/_layout_main', $this->data);
    // }

    // public function facilities(){
    //     $this->data['meta_title'] = 'Member\'s Facilities';
    //     $this->data['subview'] = 'facilities';
    //     $this->load->view('frontend/_layout_main', $this->data);
    // }

    // public function sitemap(){
    //     $this->data['meta_title'] = 'Pi Sitemap';
    //     $this->data['subview'] = 'sitemap';
    //     $this->load->view('frontend/_layout_main', $this->data);
    // }

    // public function faqs(){
    //     $this->data['meta_title'] = 'Frequently Asked Questions';
    //     $this->data['subview'] = 'faqs';
    //     $this->load->view('frontend/_layout_main', $this->data);
    // }

    /*
        Ismail
        Created: 22-01-18
    */
    public function demo_request()
    {
        // $this->form_validation->set_rules('demo_req_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('demo_req_com_name', 'Company Name', 'trim');
        $this->form_validation->set_rules('demo_req_email', 'Email', 'trim');
        // $this->form_validation->set_rules('demo_req_phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('demo_req_cus_say', 'Have Your Say', 'trim');

        if($this->form_validation->run() == true)
        {
            $slug = $this->input->post('product_url');

            $data = array();
            $data['product_id'] = $this->input->post('product_id');
            $data['name'] = $this->input->post('demo_req_name');
            $data['company'] = $this->input->post('demo_req_com_name');
            $data['email'] = $this->input->post('demo_req_email');
            $data['phone'] = $this->input->post('demo_req_phone');
            $data['customer_say'] = $this->input->post('demo_req_cus_say');
            $data['created_at'] = date('Y-m-d H:i:s');

            if($this->Common_model->save('demo_request', $data))
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Demo Request successful! We will contact with you as soon as possible.</div>');
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a>Demo Request Failed! Please Try Again.</div>');
            }

        }
        else
        {
        
            $this->session->set_flashdata('msg', '<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a>Some required field(s) are emtpy! <br> '. validation_errors() .'</div>');
        }

        redirect('site/product_details/' . $slug);
    }


    public function sendemail(){

        $this->load->library('email');

        // $this->email->initialize(array(
        //   'protocol' => 'smtp',
        //   'smtp_host' => 'smtp.sendgrid.net',
        //   'smtp_user' => 'sendgridusername',
        //   'smtp_pass' => 'sendgridpassword',
        //   'smtp_port' => 587,
        //   'crlf' => "\r\n",
        //   'newline' => "\r\n"
        // ));

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to('info@mysoftheaven.com');
        $this->email->subject($this->input->post('subject'));
        $this->email->message($this->input->post('message'));
        $this->email->send();

        // echo $this->email->print_debugger();
        redirect('contact-us');
    }
}