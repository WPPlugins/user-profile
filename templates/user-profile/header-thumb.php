<?php
/*
* @Author 		PickPlugins
* Copyright: 	2015 PickPlugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


if(is_user_logged_in()){
	
	$logged_user_id = get_current_user_id(); 
	
	//var_dump($logged_user_id);
	}


if(isset($_GET['id'])){
	
	$user_id = sanitize_text_field($_GET['id']);
	//var_dump($user_id);
	}
else{
	
	$user_id = get_current_user_id(); 
	}



	$user_avatar = get_avatar($user_id, 250);
	$user = get_user_by('ID', $user_id);
	
	
	//echo '<pre>'.var_export($user_avatar).'</pre>';
	
	$display_name = $user->display_name;



?>

    
    <div class="thumb">
    	
        <?php echo apply_filters('user_profile_filter_user_avatar', $user_avatar); ?>
    </div>

