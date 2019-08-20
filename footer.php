<?php
  $bootstrap = "col-sm-4";
  ?>
  <div class="container chain-of-blocks">
    <div class="row">
        <div id="orb" class="col-sm-offset-4 col-sm-8" title="IoT | XR | 5G | AI | Blockchain | Quantum Computing"><img src="<?php echo get_stylesheet_directory_uri();?>/images/chain-of-blocks-01.svg" alt="Blocks or 4th Industrial Revolution Technologies" class="style-svg"></div>
        </div>
    </div>
        <div class="module-small footer-widgets bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-offset-4 col-sm-8 ">
                <div class="<? echo $bootstrap;?>">
                  
                  <?php dynamic_sidebar( 'footer-1' ); ?> 
                
                </div>
                <div class="<? echo $bootstrap;?>">
                  
                    <?php dynamic_sidebar( 'footer-2' ); ?> 
                  
                </div>
                <div class="<? echo $bootstrap;?>">
                  
                  <?php dynamic_sidebar( 'footer-3' ); ?> 
                  
                </div>
                <!--
                <div class="<? echo $bootstrap;?>">
                
                    <?php dynamic_sidebar( 'footer-4' ); ?> 
                  
                </div>-->
              </div>
            </div>
          </div>
        </div>
        
        <hr class="divider-d">
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


</body>
</html>