<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'Find + Buy' ); 
?>
                    <div class="main_holder_inner_main power-bg"><input type="hidden" name="find-and-buy-id" value="Find + Buy" id="find-and-buy-id">
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
                        <div id="home_container"> 
                        <div id="home_image">
                            <img style="position:relative;top:330px;left:500px;" src="<?php echo bloginfo('template_url'); ?>/images/find-and-buy.png">            
                        </div>
                          <div id="find-coming-soon">COMING SOON!</div>
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
