<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'Contact Us' );
?>
					<div class="main_holder_inner_main power-bg"><input type="hidden" name="contact-us-id" value="Contact Us" id="contact-us-id">
						<div class="main_placeholder top_holder"></div>
						<div class="main_placeholder page_holder">
						<div id="home_container">
						<div id="contact_content">
						  <div id="contact_form">

							<?php echo do_shortcode( $page->post_content ); ?>
							</div>
						 </div>
						</div> </div>
					</div>
				   <div class="footer">



						  <div class="footer-inner">
						  <div class="footer-contact">
						   <?php echo get_post_meta($page->ID, 'contact-email', true); ?><br>
						   </div>
						</div>
						</div>
					</div>
