<?php
  $bootstrap = "col-sm-4";
  ?>

<section id="widgets">
        <div class="module-small footer-widgets ">
          <div class="container">
            <div class="row">
              <div class="col-sm-offset-4 col-sm-8 ">
                <div class="col-sm-4">
                  
                  <?php dynamic_sidebar( 'footer-1' ); ?> 
                
                </div>
                <div class="col-sm-8">
                  
                    <?php dynamic_sidebar( 'footer-2' ); ?> 
                  
                </div>
             <!--   <div class="<? echo $bootstrap;?>">
                  
                  <?php dynamic_sidebar( 'footer-3' ); ?> 
                  
                </div>-->
              
              </div>
            </div>
          </div>
        </div>
    </div>    
</section>

       

    
        <footer class="footer bg-dark">
        <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; <?php  echo date("Y"); ?> <a href="//siliconharlem.net"><?php  bloginfo("name"); ?></a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
               <?php dynamic_sidebar( 'footer-social' ); ?>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
 
</main>
    



<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/lib/jquery/dist/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
     
    
    <script src="<?php echo get_stylesheet_directory_uri()?>/vendor.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/main.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/main.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127399448-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127399448-1');
</script>
<script>
  function closeMenu(){
    
    jQuery("#custom-collapse").removeClass('in');
  }
 
</script>


</body>
</html>