<?php

/**

 * The beyond energy page sub template.

 *

 */

?>

<?php

$page = get_page_by_title( 'Natural Power' );

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



if ( $images ) { $count = 0;

	foreach ( $images as $image ) {

		$count++; $get_image[] = wp_get_attachment_image( $image->ID, 'full'  );

	}

}



?>

					<div class="main_holder_inner_main power-bg"><input type="hidden" name="beyond-energy-id" value="Beyond Energy" id="beyond-energy-id">

						<div class="main_placeholder top_holder"></div>

						<div class="main_placeholder page_holder">

							 <div id="beyond_container">

									<div id="beyond_image">

										<?php print $get_image[0]; ?>

									</div>

									<div id="beyond_content">

										<?php print $get_image[1]; ?>

										<p style="text-align:justify;">

										<?php echo $page->post_content; ?>

										</p>

										<p class="bottom"><?php echo $page->post_excerpt; ?> </p>

									</div>

								</div>

							 </div>



						<div class="footer">

						<div class="footer-inner">

						<ul class="footer-beyond">

						<li class="first">

						<a href="#">

						<div class="beyond-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-1.png'); width:115px; height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-1-over.png'); width:115px;height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-red-tag" style="padding-top:20px;text-transform:uppercase;"><?php echo get_post_meta($page->ID, 'Footer Tag 1', true); ?></div>

						<div class="beyond-shadow-tag">&nbsp;</div>

						</a>

						</li>

						<li>

						<a href="#">

						<div class="beyond-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-2.png'); width:115px; height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-2-over.png'); width:115px;height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-red-tag" style="text-transform:uppercase;"><?php echo get_post_meta($page->ID, 'Footer Tag 2', true); ?></div>

						<div class="beyond-shadow-tag">&nbsp;</div>

						</a>

						</li>

						<li>

						<a href="#">

						<div class="beyond-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-3.png'); width:115px; height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-3-over.png'); width:115px;height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-red-tag" style="padding-top:13px;text-transform:uppercase;"><?php echo get_post_meta($page->ID, 'Footer Tag 3', true); ?></div>

						<div class="beyond-shadow-tag">&nbsp;</div>

						</a>



						</li>

						<li>

						<a href="#">

						<div class="beyond-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-4.png'); width:115px; height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-4-over.png'); width:115px;height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-red-tag lgTag" style="text-transform:uppercase;"><?php echo get_post_meta($page->ID, 'Footer Tag 4', true); ?></div>

						<div class="beyond-shadow-tag">&nbsp;</div>

						</a>

						</li>

						<li>

						<a href="#">

						<div class="beyond-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-5.png'); width:115px; height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-5-over.png'); width:115px;height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-red-tag" style="padding-top:20px;text-transform:uppercase;"><?php echo get_post_meta($page->ID, 'Footer Tag 5', true); ?></div>

						<div class="beyond-shadow-tag">&nbsp;</div>

						</a>

						</li>

						<li>

						<a href="#">

						<div class="beyond-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-6.png'); width:115px; height:120px;position:absolute;">&nbsp;</div>

						<div class="beyond-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/icon-6-over.png'); width:115px;height:120px;position:absolute;">

						</div>

						<div class="beyond-red-tag" style="text-transform:uppercase;"><?php echo get_post_meta($page->ID, 'Footer Tag 6', true); ?></div>

						<div class="beyond-shadow-tag">&nbsp;</div>

						</a>

						</li>

						</ul>

						</div>

						</div>

					</div>
