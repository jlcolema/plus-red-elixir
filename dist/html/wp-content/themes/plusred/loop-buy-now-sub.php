<?php
$page = get_page_by_title( 'Buy Now' ); 

$args = array(
   'orderby' => 'menu_order', 
   'order' => 'ASC', 
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $page->ID
);

$images = get_posts( $args );
$get_image = array();
$get_image_url = array();

if ( $images ) {
    $count = 0;
    foreach ( $images as $image ) {
        $count++; 
        $get_image[] = wp_get_attachment_image( $image->ID, 'full'  ); 
        $get_image_url[] = wp_get_attachment_image_src( $image->ID, 'full'  ); 
    }
} ?>                            
                    <div class="main_holder_inner_main home-bg"><input type="hidden" name="buy-now-id" value="Buy Now" id="buy-now-id">
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
                            <div id="buy_now_container">    
                            
                               <div id="buy_now_image" style="background:url('<?php echo $get_image_url[0][0]; ?>') top left no-repeat;">                                                                                          
                             
                                <div id="buy_now_content">
                                    <div id="buy_now_headers">
                                       <div id="buy_now_left_header">  <?php print $get_image[3]; ?> </div>
                                       <div id="buy_now_right_header">  <?php print $get_image[4]; ?> </div>
                                    </div>
                                    <div id="buy_now_descriptions">
                                    
                                    </div> 
                                 <div id="buy_now_left_product" class="buy_now_products"> <?php print $get_image[1]; ?>
                                 <div id="buy_now_left_add_to_cart" class="buy_now_buttons">
                                 <a class="buy_now_button" href="#!/shop" data-src="<?php echo get_post_meta($page->ID, 'buy_now_left_product', true); ?>"><div class="buy_now_text"></div></a>
                                 </div>
                                 </div>
                               <div id="buy_now_right_product" class="buy_now_products"> <?php print $get_image[2]; ?>
                               <div id="buy_now_right_add_to_cart" class="buy_now_buttons">
                               <a class="buy_now_button" href="#!/shop" data-src="<?php echo get_post_meta($page->ID, 'buy_now_right_product', true); ?>"><div class="buy_now_text"></div></a>
                               </div>
                               </div>   
                                </div>
                            </div> <!--end buy_now_container--> 
                        </div> <!--end page_holder-->
                        <div class="footer">
                            <div class="footer-inner">
                              
                            </div> <!-- end .footer-inner -->
                        </div> <!-- end .footer -->   
                    </div> <!-- end .home_bg --> 
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.buy_now_button').click(function(){ 
       hash = "#!/shop"; setTimeout('10000'); location.hash = "#!/shop"; 
       setTimeout('10000'); location.hash =  $(this).attr('data-src');
       return false;
    });
});
</script>  
