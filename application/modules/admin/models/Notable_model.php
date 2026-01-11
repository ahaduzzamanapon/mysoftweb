<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notable_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data() {
        // count query
        $query = $this->db->get('notables');

        // Return the result as an array
        return $query->result_array();


    }

    public function get_info($id) {
        $query = $this->db->from('notables')
                        ->where('id', $id)
                        ->get()->row();
        return $query;
    }

    function delete($id) {
        $img_path = 'notable_img/';
        $info = $this->get_info($id);

        if(!empty($info->notable_logo)){
           @unlink($img_path.$info->notable_logo);
           // @unlink($img_path_thumbs.$info->image_file);
        }
        if(!empty($info->image)){
            @unlink($img_path.$info->image);
        }

        $client_info = json_decode($info->client_info);
         
        if(!empty($client_info)){
            foreach($client_info as $client){
                if(!empty($client->image)){
                    @unlink($img_path.$client->image);
                }
            }
        }

        $available_platform = json_decode($info->available_platfrom_info);
        if(!empty($available_platform)){
            foreach($available_platform as $avilable){
                if(!empty($avilable->image)){
                    @unlink($img_path.$avilable->image);
                }
            }
        }

        $aword_info = json_decode($info->aword_info);
        if(!empty($aword_info)){
            foreach($aword_info as $aword){
                if(!empty($aword->image)){
                    @unlink($img_path.$aword->image);
                }
            }
        }
        

        $this->db->where('id', $id);
        $this->db->delete('notables');
        
        return TRUE;
    }
    function delete_img($id) {
        $img_path = 'product_img/';
        $info = $this->get_info($id);

        if(!empty($info->image_file)){
           @unlink($img_path.$info->image_file);
        }
        
        return TRUE;
    }

    

}
