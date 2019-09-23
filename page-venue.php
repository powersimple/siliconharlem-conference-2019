
<div class="row">
  <div class="col-sm-offset-4 col-sm-8">
      <h3>Recap of the 2018 Conference "RE/THINK EVERY<>THING"</h3>
      <div class="video-wrap">
    <iframe id="video-player" src="https://www.youtube.com/embed/2LQiC6_5OXE"></iframe></div>
      </div>
</div>
<div class="row">
  <div class="col-sm-offset-4 col-sm-8">
  <h2 class="module-title font-alt"><?php echo $title?></h2>
  <div class="panel-body"><?php echo wpautop($content);?></div>
  </div>
  </div>
<div class="row">
  <div class="col-sm-offset-4 col-sm-8">
    <div class="gallery-wrap">
      <div class="slider slideshow">
      <?php
      $slides = get_slides($ID);
      foreach ($slides as $key => $media_id) {
      $src= wp_get_attachment_image_src( $media_id,"Full");
      //var_dump($src);//var_dump(get_media_data($media_id));

      //extract((array) get_media_data($media_id));
      ?>
        <div>
          <img src="<?php echo $src[0];?>" alt="National Black Theatre">
        </div>
        <?php
          }
        ?>

        </div>
      </div>
  </div>
  </div>



