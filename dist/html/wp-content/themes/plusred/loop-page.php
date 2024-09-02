<?php
/**
 * The loop that displays a page.
 *
 */
?>
<li class="sub" id="!/shop"  style="" class="shop">
    <div class="content_holder">
        <div class="content_holder_inner">
            <div class="main_holder_main" >
                <div class="main_holder_inner">
    <div id="home_container"> 
                       
                         <div id="about_content"> 
                         <div id="Scrollbar-Container-1">
    
    <div class="Scrollbar-Track">
      <img src="<?php echo bloginfo('template_url'); ?>/images/scroller.png" class="Scrollbar-Handle" />
    </div>
  </div>
<div class="Container">
  
  <div id="Scroller-1">
   <div class="Scroller-Container">       
                    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                             
				
						<?php the_content(); ?>
						

<?php endwhile; // end of the loop. ?>
 </div>
  </div>
</div> 
                        </div> 
                        </div>   
                    </div>
                    <div class="footer">
                          <div class="left-arrow"><a data-src="about-plus-red" href="/#!/about-plus-red"><img class="left-arrow-out" title="About +RED" alt="About +RED" name="About +RED" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-out.png"><img class="left-arrow-over" title="About +RED" alt="About +RED" name="About +RED" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-over.png"></a></div>
                          <div class="right-arrow"><a data-src="blog" href="/#!/blog"><img class="right-arrow-out" title="Blog" alt="Blog" name="Blog" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-out.png"><img class="right-arrow-over" title="Blog" alt="Blog" name="Blog" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-over.png"></a></div>

                        <div class="footer-inner">
                         <div class="footer-find">
                          <?php $find_content = '<span class="red">+RED</span> Elixirs will be coming to a store near you soon. Like us on Facebook or follow us on Twitter to get updates!!'; 
                         echo $find_content; ?><br>  
                           </div>
                        </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
