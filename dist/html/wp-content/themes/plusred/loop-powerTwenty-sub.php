<?php

/**

 * The home page sub template.

 *

 */

?>

<?php

$args = array( 'post_type' => 'products', 'posts_per_page' => 3 );

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();



	if($post->post_title == "Power Elixir"){ $power = $post; }

	else if($post->post_title == "Rescue Elixir"){ $rescue = $post; }

	else if($post->post_title == "Power 20"){ $powertwenty = $post; }


endwhile;



$rescue_content = str_replace('+RED','<span class="red">+RED</span>',$rescue->post_content);

$power_content = str_replace('+RED','<span class="red">+RED</span>',$power->post_content);

$powertwenty_content = str_replace('+RED','<span class="red">+RED</span>',$powertwenty->post_content);

$rescue_excerpt = str_replace('+RED','<span class="red">+RED</span>',$rescue->post_excerpt);

$power_excerpt = str_replace('+RED','<span class="red">+RED</span>',$power->post_excerpt);

$powertwenty_excerpt = str_replace('+RED','<span class="red">+RED</span>',$powertwenty->post_excerpt);

$images = get_children(

array(

'post_parent' => $powertwenty->ID,

'post_status' => 'inherit',

'post_type' => 'attachment',

'post_mime_type' => 'image',

'order' => 'ASC',

'orderby' => 'menu_order'

)

);

if ( $images ) { $powertwenty_img = array();$powertwenty_title = array();$powertwenty_desc = array(); $counter=0;

	foreach ( $images as $id => $image ) {

		$powertwenty_img[] = wp_get_attachment_url( $image->ID );

		$powertwenty_title[] = $image->post_excerpt;

		$powertwenty_desc[] = $image->post_content;

		$link = get_permalink( $post->ID );

		$counter++;

	}

}

?>

					<div class="main_holder_inner_main power-bg"><input type="hidden" name="power-id" value="Power" id="power-id">

						<div class="main_placeholder top_holder"></div>

						<div class="main_placeholder page_holder">

							<div id="product_container">

								<div id="product_image">

									<img src="/wp-content/uploads/2014/04/power-20-elixir-can-large.png" alt="+Plus Red Power 20 Elixir" />

									<?php /*

										<img alt="+Plus Red Power Elixir" src="<?php echo $powertwenty_img[3]; ?>">

									*/ ?>

								</div>

								<div id="product_content">

									<img alt="+Plus Red Power Elixir" name="+Plus Red Power Elixir" src="<?php echo bloginfo('template_url'); ?>/images/power20-elixir.png"><br>

									<div class="first_dot product_dots_off"><a id="power_dot_1" title="<?php echo $powertwenty_title[4]; ?>" alt="<?php echo $powertwenty_title[4]; ?>" class="dots" name="first" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="second_dot product_dots_off"><a id="power_dot_2" title="<?php echo $powertwenty_title[6]; ?>" alt="<?php echo $powertwenty_title[6]; ?>" class="dots" name="second" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="third_dot product_dots_off"><a id="power_dot_3" title="<?php echo $powertwenty_title[7]; ?>" alt="<?php echo $powertwenty_title[7]; ?>" class="dots" name="third" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="fourth_dot product_dots_off"><a id="power_dot_4" title="<?php echo $powertwenty_title[2]; ?>" alt="<?php echo $powertwenty_title[2]; ?>" class="dots" name="fourth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="fifth_dot product_dots_off"><a id="power_dot_5" title="<?php echo $powertwenty_title[1]; ?>" alt="<?php echo $powertwenty_title[1]; ?>" class="dots" name="fifth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="sixth_dot product_dots_off"><a id="power_dot_6" title="<?php echo $powertwenty_title[5]; ?>" alt="<?php echo $powertwenty_title[5]; ?>" class="dots" name="sixth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="seventh_dot product_dots_off"><a id="power_dot_7" title="<?php echo $powertwenty_title[0]; ?>" alt="<?php echo $powertwenty_title[0]; ?>" class="dots" name="seventh" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="eighth_dot product_dots_off"><a id="power_dot_8" title="<?php echo $power_title[8]; ?>" alt="<?php echo $power_title[8]; ?>" class="dots" name="eighth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

									<div class="first_info"></div>

									<div class="second_info"></div>

									<div class="third_info"></div>

									<div class="fourth_info"></div>

									<div class="fifth_info"></div>

									<div class="sixth_info"></div>

									<div class="seventh_info"></div>

									<div class="eighth_info"></div>

									<div class="first_inner"><div class="dot-label">Natural</div><?php echo $powertwenty_desc[1]; ?></div>

									<div class="second_inner"><div class="dot-label">Amino Power</div><?php echo $powertwenty_desc[3]; ?></div>

									<div class="third_inner"><div class="dot-label">Natural Caffeine from Green Coffee Bean</div><?php echo $powertwenty_desc[5]; ?></div>

									<div class="fourth_inner"><div class="dot-label">Electrolytes</div><?php echo $powertwenty_desc[4]; ?></div>

									<div class="fifth_inner"><div class="dot-label">20 Calories</div><?php echo $powertwenty_desc[7]; ?></div>

									<div class="sixth_inner"><div class="dot-label">Red Super Food</div><?php echo $powertwenty_desc[2]; ?></div>

									<div class="seventh_inner"><div class="dot-label">Vitamins</div><?php echo $powertwenty_desc[6]; ?></div>

									<div class="eighth_inner">
										<div class="dot-label" style="margin-bottom: 0;">
										<a href="/#!/benefits">Learn More About Benefits</a>
										</div>

									</div>

									<div class="product_info">CLICK THE DOTS TO LEARN MORE</div>

								</div> <!--end #product_content-->

							</div> <!--end #product_container-->

						</div>

						<div class="footer">

							<div class="footer-inner product-footer">

								<div class="product-header">&nbsp;</div>

								<div class="product-content"><?php echo $powertwenty_content; ?></div>

								<div class="product-excerpt" style="width: 500px; margin-left: 140px;"><?php echo $powertwenty_excerpt; ?></div>

							</div> <!-- end .footer-inner -->

						</div> <!-- end .footer -->

					</div> <!-- end .home_bg -->
