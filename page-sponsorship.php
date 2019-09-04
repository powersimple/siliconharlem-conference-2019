
            
          <h2 class="font-alt module-title"><?php echo $title?></h2>
          <div class="row">
                <?php
                  

                    
                    print wpautop($content);

                    ?>


            </div>
            <div class="sponsors row multi-columns-row post-columns">
                <?php

                    displaySponsors($current_sponsor_parent_id,'Terrabit');
                    displaySponsors($current_sponsor_parent_id,'Gigabit');
                    displaySponsors($current_sponsor_parent_id,'Megabit');
                    displaySponsors($current_sponsor_parent_id,'Community');
                ?>


            </div>
        


