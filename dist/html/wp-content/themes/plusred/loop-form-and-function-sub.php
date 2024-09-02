<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'Form + Function' );
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

if ( $images ) {
	$count = 0;
	foreach ( $images as $image ) {
		$count++;
		$get_image[] = wp_get_attachment_image( $image->ID, 'full'  );
	}
}
$form_content = str_replace('+RED','<span class="red">+RED</span>',$page->post_content);
$form_excerpt = str_replace('+RED','<span class="red">+RED</span>',$page->post_excerpt);

?>
					<div class="main_holder_inner_main power-bg"><input type="hidden" name="form-and-function-id" value="Form + Function" id="form-and-function-id">
						<div class="main_placeholder top_holder"></div>
						<div class="main_placeholder page_holder">
						<div id="form_container">
						 <div id="form_content_right">

							<img width="251" height="43" src="<?php echo bloginfo('template_url'); ?>/images/function.png">
							<br>
							 <div id="form_content_inner">
							 <p id="function-1" class="function-1-info">Shrink sleeve insulates the aluminum can to keep +RED colder, longer.
							<?php //echo $page->post_content; ?>
							</p>
							  <p id="function-2" class="function-2-info">Patented Snap-Cap&reg; keeps the lid sanitary from pasteurization to consumption, preserves carbonation and increases splash protection.
							<?php //echo $page->post_content; ?>
							</p>
							  <p id="function-3" class="function-3-info">Top of Snap-Cap&reg; converts to a table coaster.
							<?php //echo $page->post_content; ?>
							</p>
							<p id="function-4" class="function-4-info">Interior of Snap-Cap&reg; doubles as a 1 oz shot for precise drink mixing.
							<?php //echo $page->post_content; ?>
							</p>
							<p id="function-5" class="function-5-info">Patented +RED bezel technology provides a completely new way to enjoy beverages,
enhancing sip feel for a truly unique experience.
							<?php //echo $page->post_content; ?>
							</p>

							</div>
						</div>
						<div id="form_lines_right">
							<div class="form-inner-lines">
								<div class="left-lines-first"></div>
								<div class="left-lines-second"></div>
								<div class="left-lines-third"></div>
								<div class="right-lines-first">
									<div class="right-inner-lines-first"> </div>
								</div>
							</div>
						</div>
						<div id="form_image_container">
							<div id="form_image_overlay">
								<img id="form-black-top-over" style="width:145px;height:130px;position:relative;" width="145" height="130" src="<?php echo bloginfo('template_url'); ?>/images/form-black-cap-over.png">
								<img id="form-red-top-over" style="margin-top:-48px;width:145px;height:110px;position:relative;" width="145" height="110"  src="<?php echo bloginfo('template_url'); ?>/images/form-red-cap-over.png">
								<img id="form-can-over" style="margin-top:-52px;width:145px;height:403px;position:relative;" width="145" height="403" src="<?php echo bloginfo('template_url'); ?>/images/form-can-bottom-over.png">

							</div>
							<div id="form_image">
								<img id="form-black-top" style="width:145px;height:130px;position:relative;" width="145" height="130" src="<?php echo bloginfo('template_url'); ?>/images/form-black-cap-big.png">
								<img id="form-red-top" style="margin-top:-48px;width:145px;height:106px;position:relative;" width="145" height="110"  src="<?php echo bloginfo('template_url'); ?>/images/form-red-cap-big.png">
								<img id="form-can" style="margin-top:-52px;width:145px;height:403px;position:relative;" width="145" height="403" src="<?php echo bloginfo('template_url'); ?>/images/form-can-bottom-big.png">

							</div>
						 </div>
						 <div id="form_lines_left">
							<div class="form-inner-lines">
								<div class="left-lines-first"></div>
								<div class="left-lines-second"></div>
								<div class="left-lines-third"></div>
								<div class="right-lines-first"></div>
							</div>
						</div>
						 <div id="form_content_left">

						   <img width="251" height="43" src="<?php echo bloginfo('template_url'); ?>/images/form.png">
						   <br>
							<div id="form_content_inner">
								 <p id="form-1" class="form-1-info">An encapuslated and elongated can fits snugly in the hand.
								<?php //echo $page->post_content; ?>
								</p>
								  <p id="form-2" class="form-2-info">Can is wrapped in a unique shrink sleeve label with a matte finish for superior print quality, vibrant color and razor sharp artwork.
								<?php //echo $page->post_content; ?>
								</p>
								  <p id="form-3" class="form-3-info">The rich matte varnish creates a truly premium look and feel.
								<?php //echo $page->post_content; ?>
								</p>

							</div>
						</div>

						</div>
					</div>

					<div class="footer">
						 <div class="left-arrow"><a data-src="beyond-energy" href="/#!/beyond-energy"><img class="left-arrow-out" title="Beyond Energy" alt="Beyond Energy" name="Beyond Energy" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-out.png"><img class="left-arrow-over" title="Beyond Energy" alt="Beyond Energy" name="Beyond Energy" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-over.png"></a></div>
						  <div class="right-arrow"><a data-src="about-plus-red" href="/#!/about-plus-red"><img class="right-arrow-out" title="About +RED" alt="About +RED" name="About +RED" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-out.png"><img class="right-arrow-over" title="About +RED" alt="About +RED" name="About +RED" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-over.png"></a></div>

						<div class="footer-inner form-footer">
						<div class="form-header">&nbsp;</div>
						<div class="form-content"><?php echo $form_content; ?></div>
						<div class="form-excerpt"><?php echo $form_excerpt; ?></div>
						</div>
					 </div>
					</div>
