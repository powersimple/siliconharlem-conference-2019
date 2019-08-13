
         <?php 
            $current_sponsor_parent_id = 684;
            $previous_sponsor_parent_id = 686;
            
         ?>
          <h2 class="font-alt module-title">2019 <?php echo $title?></h2>
            <div class="sponsors row multi-columns-row post-columns">
                <?php
                 print wpautop($content);

                    displaySponsors(getSponsorLevel($current_sponsor_parent_id,'Terrabit'));
                    displaySponsors(getSponsorLevel($current_sponsor_parent_id,'Gigabit'));
                    displaySponsors(getSponsorLevel($current_sponsor_parent_id,'Megabit'));
                    displaySponsors(getSponsorLevel($current_sponsor_parent_id,'Community'));
                 



                ?>


            </div>
            <div class="row">
            <h3>Silicon Harlem Thanks our 2018 Sponsors.</h3>
                <?php
                  

                    
                   
                    displaySponsors(getSponsorLevel($previous_sponsor_parent_id,'Previous'));
                    ?>


            </div>


