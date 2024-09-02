<?php
/**
 * The home page sub template.
 *
 */
?>
<?php 
$page = get_page_by_title( 'Blog' );
?> 
                    <div class="main_holder_inner_main power-bg"><input type="hidden" name="blog-id" value="Blog" id="blog-id"> 
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
                        <div id="blog_container">
                         <div id="blog_content"> 
                            <?php echo do_shortcode($page->post_content); 
                              $blog_excerpt = str_replace('+RED','<span class="red">+RED</span>',$page->post_excerpt);
                            ?>
                        </div> 
                        </div>   
                    </div>
                    <div class="footer">
                          <div class="left-arrow"><a data-src="find-buy" href="/#!/find-buy"><img class="left-arrow-out" title="Find Buy" alt="Find Buy" name="Find Buy" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-out.png"><img class="left-arrow-over" title="Find Buy" alt="Find Buy" name="Find Buy" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-over.png"></a></div>
                          <div class="right-arrow"><a data-src="contact-us" href="/#!/contact-us"><img class="right-arrow-out" title="Contact Us" alt="Contact Us" name="Contact Us" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-out.png"><img class="right-arrow-over" title="Contact Us" alt="Contact Us" name="Contact Us" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-over.png"></a></div>
                          <div class="footer-inner product-footer">
                          <div class="blog-header"><?php echo $blog_excerpt; ?>
                          </div>  
                        
                        </div>
                        </div>       
                    </div>
