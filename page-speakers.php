
          
            <div class="row">

              <div class="col-sm-4"></div>
              <div class="col-sm-8">
              
                <h2 class="module-title font-alt"><?php echo $title?></h2>

                <div class="panel-body"><?php echo wpautop($content);?></div>
                <?php //echo registrationButton();?>

              </div>
            </div>
                

            
            <div class="row speakers-page col-sm-offset-4 col-sm-8">
              <?php
              if(@$_GET['with']){
    $speakers = getSpeakers(410);
   
    foreach($speakers as $key => $speaker){
        
        displaySpeaker($speaker,"thumbnail","speaker-list");
    }
    }
              ?>


            </div>


