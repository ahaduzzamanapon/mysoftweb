<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_services($id) {
        // echo $id; exit;
        $this->db->select('id, fa_icon, name, slug');
        $this->db->from('services');
        $this->db->where('status', 1);
        $this->db->where('display_home', 1);
        $this->db->where('main_service_id', $id);
        dd($this->db->get()->result());
        $query = $this->db->get()->result();    
        // echo $this->db->last_query(); exit;    

        return $query;
    }

    public function get_services_quatiation() {
        // echo $id; exit;
        $this->db->select('id, fa_icon, name, slug');
        $this->db->from('services');
        $this->db->where('status', 1);
        $this->db->where('display_home', 1);
        // $this->db->where('main_service_id', $id);
        // dd($this->db->get()->result());
        $query = $this->db->get()->result();    
        // echo $this->db->last_query(); exit;    

        return $query;
    }

    public function get_slider() {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_testimonial() {
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->where('status', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_blog() {
        // $this->db->select('id, fa_icon, name, slug, short_desc, image_file');
        $this->db->from('blog');        
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get()->result();        
        //  dd($query);
        return $query;
    }

    public function get_blog_popular() {
        // $this->db->select('id, fa_icon, name, slug, short_desc, image_file');
        $this->db->from('blog');        
        $this->db->where('status', 1);
        $this->db->where('popular', 1);
        $this->db->order_by('post_date', 'ASC');
        $this->db->limit(6);
        $query = $this->db->get()->result();        

        return $query;
    }


    public function get_blog_article() {
        $this->db->from('blog_article');        
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get()->result(); 
        return $query;
    }

    public function get_blog_popular_article() {
        // $this->db->select('id, fa_icon, name, slug, short_desc, image_file');
        $this->db->from('blog_article');        
        $this->db->where('status', 1);
        $this->db->where('popular', 1);

        $this->db->order_by('post_date', 'ASC');
        $this->db->limit(6);
        $query = $this->db->get()->result();        

        return $query;
    }




    public function get_product() {
        $this->db->select('id, fa_icon, name, slug, short_desc, image_file');
        $this->db->from('product');
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get()->result();        

        return $query;
    }
    public function get_contact() {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('status', 1);
        
        $query = $this->db->get()->result();        

        return $query;
    }
     public function get_limit_product() {
        $this->db->select('id, fa_icon, name, slug, image_file');
        $this->db->from('product');
        $this->db->where('status', 1);
        $this->db->limit(2);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_footer_address_show($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status', 1);
        $this->db->limit(2);
        $query = $this->db->get()->result();        

        return $query;
    }
    public function get_client($slug) {
        $this->db->select('id, project_name, client_name, location, image_file, client_type');
        $this->db->from('client');
        $this->db->where('status', 1);
        $this->db->where('client_type', $slug);
        $this->db->order_by('sort_order', 'ASC');
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_category() {
        $this->db->select('id, cat_name');
        $this->db->from('category');   
        $this->db->order_by('sort_order', 'ASC');     
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_portfolios() {
        $this->db->select('p.id, p.name, p.image_file, p.category_id, p.url, c.id as cate_id, c.cat_name');
        $this->db->join('category c', 'c.id = p.category_id');
        $this->db->from('portfolio p');        
        $this->db->where('p.status', '1');        
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_single_user_client($id) {
        $this->db->select('client_name');
        $this->db->from('client');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();      

        return $query;
    }

    public function get_client_name($id){
        $this->db->select('*');
        $this->db->from('client');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();        

        return $query;
    }

    public function get_blog_by_slug($slug) {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('slug', $slug);        
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }

    public function get_blog_article_by_slug($slug) {
        $this->db->select('*');
        $this->db->from('blog_article');
        $this->db->where('slug', $slug);        
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }


    public function get_info_by_slug($slug) {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }

    public function get_info_by_slug_of_product($slug) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('slug', $slug);
        $query = $this->db->get()->row(); 
        // echo $this->db->last_query(); exit;       

        return $query;
    }

    public function get_related_course($id) {
        $this->db->select('id, title, slug, image_file, course_fee');
        $this->db->from('courses');
        $this->db->where('id !='.$id);
        $this->db->where('status', 1);
        $this->db->limit(4);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_main_service_info($id) {
        $this->db->select('*');
        $this->db->from('main_service');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_homepage_show($table) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('status', 1);
        $this->db->where('display_home', 1);
        $this->db->limit(4);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_footershow($table) {
        $this->db->select('name, slug');
        $this->db->from($table);
        $this->db->where('status', 1);
        $this->db->order_by("id", "desc");
        $this->db->limit(6);
        $query = $this->db->get()->result();        

        return $query;
    }


    public function get_related_course_not_found() {
        $this->db->select('id, title, slug, image_file, course_fee');
        $this->db->from('courses');
        $this->db->where('status', 1);
        $this->db->limit(4);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_notable_all_data(){
        $this->db->select('id, notable_title, notable_logo,website_link');
        $this->db->from('notables');
        $this->db->where('display_home', 1);
        $this->db->limit(4);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function get_notable_all_data_in_details(){
        $this->db->select('id, notable_title, notable_logo,website_link');
        $this->db->from('notables');
        $this->db->where('display_home', 1);
        $query = $this->db->get()->result();        

        return $query;
    }

    public function single_notable_data($id){
        $this->db->select('*');
        $this->db->from('notables');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();        

        return $query;
    }

    function slug_exists($slug){
        $this->db->select('slug');
        $this->db->from('services');
        $this->db->where('slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return ($query->num_rows()==1);
    }

    function blog_slug_exists($slug){
        $this->db->select('slug');
        $this->db->from('blog');
        $this->db->where('slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return ($query->num_rows()==1);
    }

    function blog_article_slug_exists($slug){
        // dd($slug);
        $this->db->select('slug');
        $this->db->from('blog_article');
        $this->db->where('slug',$slug);
        $this->db->limit(1);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return ($query->num_rows()==1);
    }

    // Display image
    function get_gallery_image(){
        $image_gallery = $this->db->select('id, image_name')->get('image_gallery')->result();
        return $image_gallery;
    }
    function get_gallery_video(){
        $gallery = $this->db->select('id, yt_url')->where('status', 1)->order_by('sort_order', 'ASC')->get('video_gallery')->result();
        return $gallery;
    }
    function get_professions(){
        $result = $this->db->select('id, prof_name, sort_order')->where('status', 1)->order_by('sort_order', 'ASC')->get('profession')->result();
        return $result;
    }

    function get_profession_name($id){
        $result = $this->db->select('id, prof_name')->where('id', $id)->get('profession')->row()->prof_name;
        return $result;
    }

    // function get_stat(){
    //     $result = $this->db->select('running_services, successful_projects, number_of_clients, years_of_experience')
    //     ->get('setting')
    //     ->result();
    //     return $result;
    // }

    function get_years_of_experience(){
        $result = $this->db->select('years_of_experience')->get('setting')->row()->years_of_experience;
        return $result;
    }
    function get_number_of_clients(){
        $result = $this->db->select('number_of_clients')->get('setting')->row()->number_of_clients;
        return $result;
    }
    function get_successful_projects(){
        $result = $this->db->select('successful_projects')->get('setting')->row()->successful_projects;
        return $result;
    }
    function get_running_services(){
        $result = $this->db->select('running_services')->get('setting')->row()->running_services;
        return $result;
    }

    // function get_slider(){
    //     $result = $this->db->select('id, file_name')->get('slide_image')->result();
    //     return $result;
    // }

    function get_news(){
        $result = $this->db->select('*')->get('news')->result();
        return $result;
    }

    function get_gallery_images(){
        $result = $this->db->select('id, image')
                           ->where('display', 1)
                           ->get('images_gallery');
    
        if ($result) {
            return $result->result();
        } else {
            // Log error or return false
            log_message('error', 'Error retrieving gallery images from database');
            return false;
        }
    }
    // $query = $this->db->select('p.*, c.cat_name')
    //                 ->from('portfolio p')
    //                 ->join('category c', 'c.id = p.category_id')
    //                 ->where('p.id', $id)
    //                 ->get()
    //                 ->row();
    // return $query;

    function get_portfolio_by_id($id) {
        $result = $this->db->select('p.*, c.cat_name')
                           ->from('portfolio p')
                           ->join('category c', 'c.id = p.category_id')
                           ->where('p.id', $id) // Corrected the where clause
                           ->get();
        
        if ($result && $result->num_rows() > 0) {
            // dd($result->row());
            return $result->row();
        } else {
            // Log error or return false
            $error_message = $this->db->error(); // Get the database error message
            log_message('error', 'Error retrieving portfolio by id from database: ' . $error_message['message']);
            return false;
        }
    }
    function get_portfolio_category($id){
        $result = $this->db->select('p.*, c.cat_name')
                           ->from('portfolio p')
                           ->join('category c', 'c.id = p.category_id')
                           ->where('p.category_id', $id)
                           ->get();
        
        if ($result && $result->num_rows() > 0) {
            // dd($result->result());
            return $result->result();
        } else {
            // Log error or return false
            $error_message = $this->db->error(); // Get the database error message
            log_message('error', 'Error retrieving portfolio by category from database: ' . $error_message['message']);
            return false;
        }
    }
    
    
}
