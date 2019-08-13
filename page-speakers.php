
          
            <div class="row">
              <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2 class="module-title font-alt"><?php echo $title?></h2>
                <div class="panel-body"><?php echo wpautop($content);?></div>
              </div>
            </div>
                

            
            <div class="row speakers-page">
              <?php
    $speakers = getSpeakers(434);
    foreach($speakers as $key => $speaker){
        
        displaySpeaker($speaker,"thumbnail","speaker-list");
    }
              ?>


            </div>


