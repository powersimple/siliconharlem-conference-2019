<?php
    get_header();
?>
<main class="main">
    <section class="container speaker-long-bio">
        <div class="row">
            <div class="col-sm-offset-4 col-sm-8">
           
               
                    <?php 

                    if ( have_posts() ) {
                        while ( have_posts() ) {
                    
                            the_post(); 
                           
                            ?>
                    
                    <h2 class="module-title font-alt">
                        
                    
                    <?php echo the_title()?></h2>
                    
                    <div class="panel-body">
                        <?php
                        displaySpeaker(getSpeaker(get_the_id()),"medium","long");
                        ?>
                    
                    
                    </div>
                            
                    
                        <?php }
                    }

                    ?>
            </div>
        </div>
    </section>
</main>
<script>
  
        
    jQuery("#nav").removeClass('navbar-transparent');
  
 
</script>
<?php
    get_footer();
?>