
         <?php 
            $current_sponsor_parent_id = 684;
            $previous_sponsor_parent_id = 686;
            
         ?>
<div class="row">

              <div class="col-sm-offset-4 col-sm-8">
          <h2 class="font-alt module-title">2019 <?php echo $title?></h2>
          <?php

                    
displaySponsors($current_sponsor_parent_id,'Terrabit');
displaySponsors($current_sponsor_parent_id,'Gigabit');
displaySponsors($current_sponsor_parent_id,'Megabit');
displaySponsors($current_sponsor_parent_id,'Community');
                 



                ?>
                </div>
</div>
<div class="row">
        <div class="col-sm-offset-4 col-sm-8">
            <h3>Become a Sponsor</h3>
            <div class="sponsors row multi-columns-row post-columns">
                <?php
                 print wpautop($content);
                 ?>
                
                
        </div>

    </div>
</div>
            
