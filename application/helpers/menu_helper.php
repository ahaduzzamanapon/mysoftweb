<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('activate_menu_method')) {
    function activate_menu_method($method) {
        // Getting CI class instance.
        $CI = get_instance();
        // Getting router class to active.
        $class = $CI->router->fetch_method();
        return ($class == $method) ? 'current' : '';
    }
}

if(!function_exists('active_menu_class')) {
  	function activate_menu_class($controller) {
	    // Getting CI class instance.
	    $CI = get_instance();
	    // Getting router class to active.
	    $class = $CI->router->fetch_class();
	    return ($class == $controller) ? 'current' : '';
  	}
}

if ( ! function_exists('dd'))
{
	function dd($var)
	{
		$CI =& get_instance();
		echo '<pre>' . print_r($var, TRUE) . '</pre>';
		exit;
	}
}


if (!function_exists('backend_activate_menu_method')) {
    function backend_activate_menu_method($method) {
        // Getting CI class instance.
        $CI = get_instance();
        // Getting router class to active.
        $class = $CI->router->fetch_method();
        return ($class == $method) ? 'active' : '';
    }
}

if(!function_exists('backend_active_menu_class')) {
    function backend_activate_menu_class($controller) {
      // Getting CI class instance.
      $CI = get_instance();
      // Getting router class to active.
      $class = $CI->router->fetch_class();
      return ($class == $controller) ? 'active' : '';
    }
}




if ( ! function_exists('ifcan'))
{
    function ifcan($slug)
    {
        $CI =& get_instance();
        $data=false;
        $permission_data = $CI->db->where('slug_name', $slug)->get('permission')->row();
        if($permission_data){
            $permission_id = $permission_data->id;
            $user_id = $CI->session->userdata('user_id');
            $roles = $CI->db->where('user_id', $user_id)->get('users_groups')->result();
            foreach ($roles as $role) {
                $role_id = $role->group_id;
                    $role_permission = $CI->db->where('id', $role_id)->get('groups')->row();
                        if($role_permission){
                            $permission = json_decode($role_permission->permission);
                            if($permission){
                                foreach ($permission as $p) {
                                    if($p->id == $permission_id){
                                        $data = true;
                                        break;
                                    }else{
                                        $data = false;
                                    }
                                }
                            }
                        }
            }
        }
        return $data;
    }
}


if ( ! function_exists('update_sitemap'))
{
    function update_sitemap_txt($url) {
        $sitemap_path = FCPATH . 'sitemap.txt'; // Path to your sitemap.txt
    
        // Check if the file exists
        if (file_exists($sitemap_path)) {
            $urls = file($sitemap_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        } else {
            $urls = [];
        }
    
        // Check if the URL already exists
        if (!in_array($url, $urls)) {
            // Add the new URL to the array
            $urls[] = $url;
    
            // Save the updated URLs back to the file
            file_put_contents($sitemap_path, implode(PHP_EOL, $urls) . PHP_EOL);
        }
    }
    
}