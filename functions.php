<?php
	 
	 
	 
	 
	 
	require_once("functions/functions-rest-endpoints.php");
	require_once("functions/functions-rest-register.php");
	require_once("functions/functions-rest-menus.php");
	 
	require_once("functions/sidebars.php");

	  require_once("functions/widgets.php");
  
	  require_once("functions/metaboxes.php");

	  require_once("functions/navigation.php");

	  require_once("functions/media.php");

	  require_once("functions/speakers.php");

	  require_once("functions/sponsors.php");

	global $home_id;
	
	add_action( 'init', 'add_excerpts_to_pages' );
	function add_excerpts_to_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support('post-thumbnails', array(
'post',
'page',
'session',
'speaker',
'sponsor'
));

function cleanContent($content){
	//STRIPS THE CRAP FROM WP- BLOCKS
	$clean_content = urlencode($content);
				$clean_content = str_replace("%0A","",$clean_content);
				$clean_content = str_replace("%3C%2Fp%3E%3C%21--+%2Fwp%3Aparagraph+--%3E","",$clean_content);
				$clean_content = str_replace("%3C%21--+wp%3Aparagraph+--%3E%3Cp%3E","",$clean_content);

	return urldecode($clean_content);
}

function getSessionSlides($slides){
		$session_images = array();
        foreach($slides as $key=>$value){
            $img_meta = get_media_data($value);
	
            
            array_push($session_images,$img_meta);
		}
		return $session_images;
		
}


		/* OLD RELIABLE!
        HASN'T CHANGED IN YEARS
            RETURNS URL BY ID, AND OPTIONAL SIZE */
			
	  function get_slides( $id ) {
		return get_post_meta($id,"top_slider") ;//from functions.php,
		}

		function getPastSessions($conference){
			global $wpdb;
			$q = $wpdb->get_results("
			select ID, post_name, post_date, post_title, post_content
			from wp_posts
			where post_type = 'session'
			and post_parent = $conference
			and post_status='publish'
			
			order by menu_order
				");
			$sessions = array();
		
				
			foreach($q as $key => $value){
				extract((array) $value);
				$speaker_list= get_post_meta($ID,"speakers");
				$speakers_data = array();
				foreach($speaker_list as $key=>$value){
					array_push($speakers_data,getSpeaker($value));
				}
				
				$slide_ids = get_post_meta($ID,"top_slider");

				array_push($sessions,
				array(
					"id" => $ID,
					"title" =>$post_title,
					"content" => cleanContent($post_content),
					"slug" => $post_name,
					"start"=>get_post_meta($ID,"session_start",true),
					"end"=>get_post_meta($ID,"session_end",true),
					"video_embed_url" => get_post_meta($ID,"video_embed_url",true),
					"sponsors" => get_post_meta($ID,"sponsors"),
					"speakers" => $speakers_data,
					"thumbnail_data" => get_media_data(get_post_thumbnail_id($ID)),
					"slides"=> getSessionSlides(get_post_meta($ID,"top_slider"))
				));

			}
			return $sessions;
		}
		function getSessions($parent){
			global $wpdb;
			$q = $wpdb->get_results("
			select ID, post_name, post_date, post_title, post_content
			from wp_posts
			where post_type = 'session'
			and post_parent = '$parent'
			and post_status='publish'
			
			order by menu_order
				");
			$sessions = array();
			foreach($q as $key => $value){
				extract((array) $value);
				array_push($sessions,
				array(
					"id" => $ID,
					"title" =>$post_title,
					"content" => $post_content,
					"slug" => $post_name,
					"start"=>get_post_meta($ID,"session_start",true),
					"end"=>get_post_meta($ID,"session_end",true),
					"thumbnail_id" => get_post_thumbnail_id($ID),
					"thumbnail_src" => getThumbnail(get_post_thumbnail_id($ID)),
					"thumbnail_data" => get_media_data(get_post_thumbnail_id($ID)),
					"sponsors" => get_post_meta($ID,"sponsors"),
					"speakers" => get_post_meta($ID,"speakers")
				));

			}
			return $sessions;
		}
		function sessionTime($start,$end){

			$start_time = date("g:i a",$start);
			if(@$end){
				$end_time = date("g:i a",strtotime(@$end));
			}
			return $start_time." - ".@$end_time;
		}
	
		function registrationButton(){
			return "<div class='button-wrap'><a class='registration-button' href='https://www.eventbrite.com/e/sh6-the-silicon-harlem-sixth-annual-next-gen-tech-conference-tickets-68730052437' target='_new' >REGISTER NOW</a></div>";
		}


?>