<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/icons/favicon.ico" />

    <!--  
    Document Title
    =============================================
    -->
    <title>Silicon Harlem Annual Conference - 2020 Tech-Enabled Community</title>

    <?php 
    wp_head();
    $url = wp_upload_dir();
    global $datasource_table;
    



?>
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

   
   
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri();?>/assets/lib/flexslider/flexslider.css" rel="stylesheet">

    <!-- Main stylesheet and color file-->
    <link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet">


<!-- Latest compiled and minified JavaScript 
<script src="https://cdn.pannellum.org/2.4/pannellum.js"></script>-->

<!-- Latest compiled and minified CSS
<link rel="stylesheet" href="https://cdn.pannellum.org/2.4/pannellum.css"> -->
<script>
    // Wordpress PHP variables to render into JS at outset.
    var active_id = <?php echo $post->ID?>;
    var active_object = "<?php echo $post->post_type?>";
    var home_page = <?php echo get_option( 'page_on_front' );?>;
    var site_title = "<?php echo get_bloginfo('name');?>";
    var json_path = "<?php echo get_stylesheet_directory_uri();?>/data/";
    var uploads_path =  "<?php echo $url['baseurl']?>/";

    var hero_slides = [
      <?php 
      
       $slides = get_slides($post->ID);
       $slide_version_list = array();
    foreach ($slides as $key => $media_id) {
       $src= wp_get_attachment_image_src( $media_id,"Full");
       //var_dump($src);//var_dump(get_media_data($media_id));
      $media_data = get_media_data($media_id);
    //  var_dump($media_data);
      $versions = getThumbnailVersions($media_id);
      $version_list = array();
      foreach($versions as $v => $version){
          array_push($version_list,$v.": '".$version."'");

      }
       array_push($slide_version_list,"{".implode($version_list,",")."}
       ");
      
     
     // print "<BR>";
      // var_dump($versions);
        extract((array) get_media_data($media_id));
    }
    print implode($slide_version_list,",
      ");
     ?>
    ]
    
 
  var session_data = <?=json_encode(getPastSessions(697))?>;
  






</script>

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">

      <div class="page-loader">
        <div class="loader"><img src="<?php echo get_stylesheet_directory_uri();?>/images/SH-Logo-3D-white.svg" alt="" class="style-svg"></div> 

      </div>
    
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent one-page" role="navigation" id="nav">
        <div class="contained">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a title="Silicon Harlem" class="navbar-brand header-logo" href="/"><?php include "images/SH-Logo-3D-white.svg";?></a>
          </div>
          <div id="mobile-conf-id">2020 Conference:<br><span>The Tech Enabled Community</span>
          </div>
<!--           <div id="mobile-registration-button"><a class="registration-button" href="https://www.eventbrite.com/e/sh6-the-silicon-harlem-sixth-annual-next-gen-tech-conference-tickets-68730052437" target="_new">REGISTER NOW</a></div>-->
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
            <?php dynamic_sidebar( 'header-menu' ); ?>
            </ul>
         
          </div>
       <!--<div id="orb" title="Silicon Harlem | 6th Annual Next-Gen Tech Conference: World 4.0 Let's Get Ready!"><?php include "images/Orb-01.svg";?>-->
        
        </div>
      </nav>
    
