
<?php if(@$thumbnail != ''){?>
           <div class="featured"><img src="<?=$thumbnail?>"></div>
<?php } ?>
          <div class="row cols-sm-8 col-sm-offset-4"">


          <h2 class="font-alt module-title"><?php echo $title?></h2>
              
                      <div class="section-content col-sm-offset-4 col-sm-8"><?=do_blocks($content);?>
                     
                    </div>
                      
                    


            </div>
            <div class="row cols-sm-8 col-sm-offset-4">  
            <div class="section-thumbnail schedule col-sm-4"></div>
                      <div class="section-content schedule-bg col-sm-8">
                      <h3><?=wpautop($excerpt);?></h3>
                      <h4>SCHEDULE</h4>

 <div class="playlist-group" id="accordion">
<?php
    $sessions = getSessions(697);
    $speaker_session = array();
    global $speaker_session;

        

    foreach ($sessions as $key => $value) {
      //var_dump($value);
        extract((array) $value);
        $speaker_list = speakerList($speakers);
        $sponsor_list = sponsorList($sponsors);
        $session_time = sessionTime(@$start,@$end);
        ?>

               
               
                  <div class="panel panel-default">
                 
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $slug?>"><?php echo $title?></a><span class="session-time"><?php echo $session_time; ?></span></h4>
                       <div class="session-listing">
                       <?php
                        //if(@$_GET['with']){
                          ?>
                        
                    <div class="panel-speakers">
                      <?php
                      if(count($speaker_list)>0){
                        print "<span>with </span>";
                      }

                    foreach($speaker_list as $key=>$speaker){
                      $id = $speaker['id'];
                     $speaker_session[$id] = $title;
                      if(($key == count($speaker_list)-1) && ($key != 0)){
                        print " and ";
                      } else if($key == 0){
                        
                      } else {
                        print ", ";
                      }
                      print '<span class="speaker-name">'.$speaker['speaker_name'].'</span>';
                      
                    }
                  ?>
                    </div>
                      <?php
                      //  }
                          ?>
                  </div>
                    </div>
                    
                    <div class="panel-collapse collapse session" id="<?php echo $slug?>">
                      <div class="panel-body">
                        <div class="session-info">
                      <span class="mobile-session-time"><?php echo $session_time; ?></span>  

                      <?php
                        if($thumbnail_id !=''){
                         ?>
                        <div class="session-hero col-xs-12 col-lg-6">
                        <img src="<?=$thumbnail_src?>" alt="<?=$thumbnail_data['alt']?>">
                      </div>
                      <div class="col-xs-12 col-lg-6">
                         <?php
                        } else {
                          ?>
                          <div class="col-xs-12">
                        <?php }
                      ?>


                      
                      
                        <div class="session-blurb"><?php echo do_blocks($content)?></div>
                      </div>
                        </div>
                    <?php
                    // if(@$_GET['with']){
                        foreach($speaker_list as $key=>$speaker){
                           ?>
                            <div class="speaker-listing">
                           <?php
                          
                            displaySpeaker($speaker,"thumbnail","short");
                              print "</div>";
                        }
                   //   }
                        if(count($sponsors)){
                          print '<div class="session-sponsors">';
                          foreach($sponsor_list as $key=>$sponsor){
                            ?>
                             <div class="session-sponsor">
                            <?php
                           
                              displaySponsor($sponsor,"thumbnail","short");
                               print "</div>";
                         }
                         print '</div>';
                        }
                        
                        
                    ?>  
                      </div>
                      

                    </div>
                  </div>
                 
                

        <?php
    }

?>
</div>
</div>