<?php
    function enqueue_style() {
        //because without this, there is no site, at least not a coherent one.
        wp_enqueue_style( 'powersimple',get_stylesheet_directory_uri() . '/style.css');
       /*
          wp_register_style('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css', null,'1.1', true); 
        wp_enqueue_style('bootstrap');
       */
   
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_style' );

    function theme_scripts() {
    
       /*
        wp_register_script('scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', null,'1.1', true); 
        wp_enqueue_script('scroll-magic');
        wp_register_script('scroll-magic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', null,'1.1', true); 
        wp_enqueue_script('scroll-magic-debug');
        */

       

        wp_register_script('jqueryui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'); 
        wp_enqueue_script('jqueryui');
        

        wp_register_script('slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js'); 
        wp_enqueue_script('slick');
       
      //  wp_register_script('three', '//cdnjs.cloudflare.com/ajax/libs/three.js/r75/three.min.js'); 
      //  wp_enqueue_script('three');
        
        wp_register_script('tweenmax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'); 
        wp_enqueue_script('tweenmax');
   

        
        //vendor is the stylesheet rendered 
        wp_register_script('vendor',get_stylesheet_directory_uri() . '/vendor.js', array('jquery')); 
        wp_enqueue_script('vendor');

        wp_register_script('main',get_stylesheet_directory_uri() . '/main.js', array('jquery'),rand(100000,999999), true); 
        wp_enqueue_script('main');
    }
    
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );  

?>