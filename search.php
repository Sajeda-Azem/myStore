<?php
get_header();
?>

<div class="container search-page">
   
               

    <div class="row">
       
    
       
        
   
        <br/>
       
  
      <?php
    
               if(have_posts()){
            while(have_posts()){
                the_post();?>
        <?php get_template_part('content','search');?>
              
        
        <?php
            }
        }
       echo '<hr>';
      
   
    ?>
            </div>
        </div>




<?php
get_footer();
?>