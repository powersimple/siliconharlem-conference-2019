
<div class="row">
  <div class="col-sm-4">
    <div class="col-xs-offset-3 col-xs-6"><img  src="<?=$thumbnail?>"></div>
  </div>

  <div class="col-sm-8">
      <div class="col-sm-offset-1 col-sm-10">

      <h2 class="font-alt module-title">2019 Conference</h2>
          
      <?=do_blocks($content);?>
      </div>
  </div>

</div>

 




<div class="row recap" id="session-content">
  <div>
    <div class="col-sm-4">
        <div class="col-xs-offset-1 col-xs-10" id="session-list"></div>
      </div>
    <div class="col-xs-12 col-sm-8">
        
          <div class="video-wrap">
      <iframe id="session-video" src="https://www.youtube.com/embed/ujpR_0aNf-g"></iframe></div>
      
          



    </div>
    </div>

    <div id="session-info" class="col-xs-12"></diV>
</div>

      <script type="x-template" id="session-info-template">
      
        <div class="session-info" >
          <div class="title"></div>
          <div class="context"></div>
         
          
        </diV>
         <div class="speakers row" id="speakers">
            <div class="speaker-list"></div>
            
        </div>
 <div  id="carousel" class="slider slideshow"></div>

      </script>

<?php
  foreach(get_parent_children($ID) as $key=> $value){
    extract((array)$value);
    print "<div class='row recap $post_name'>";


    $media_id=get_post_meta($ID,"_thumbnail_id",true);
    if(file_exists (get_stylesheet_directory()."/page-$post_name.php") ){
    //     var_dump($value);
        require_once(get_stylesheet_directory()."/page-$post_name.php"); // includes page-slug.php if it exists
      }
      else{
        ?>
<div class="row">
  <div class="col-sm-4"><img  src="<?php echo getThumbnail($media_id,"Full");?>"></div>
  <div class="col-sm-8">
    

      <h3 class="font-alt module-title"><?=$post_title?></h3>
          
      <?=do_blocks($post_content);?></div>
      



    </div>
</div>


<?php
      }
      print '</div>';
  }
?>








