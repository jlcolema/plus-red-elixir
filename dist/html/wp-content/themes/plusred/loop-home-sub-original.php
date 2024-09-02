<?php

$page = get_page_by_title( 'Home' );



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

}

?>

					<div class="main_holder_inner_main home-bg"><input type="hidden" name="home-id" value="" id="home-id">

						<div class="main_placeholder top_holder"></div>

						<div class="main_placeholder page_holder">

							<div id="home_container">






								<div class="flexslider">

									<ul class="slides">

										<!-- Slide 01 -->

										<li class="slide slide-01">

											<!-- Featured Cans Image -->

											<div class="featured-cans">

												<img src="/wp-content/uploads/2016/02/featured-cans.png" alt="Featured Products" />

											</div>

											<!-- The Revolutions is Here -->

											<div class="the-revolution-is-here">

												<img src="/wp-content/uploads/2012/01/the-revolution-is-here.png" alt="The Revolution is Here" />

											</div>

											<!-- Which Elixir Are You Looking For -->

											<div class="which-elixir-are-you-looking-for">

												<a  href="#!/power" data-src="power">

													<img src="<?php echo bloginfo('template_url'); ?>/images/which-elixir.png" alt="Which Elixir Are You Looking For?" />

												</a>

											</div>

										</li>

										<!-- Slide 02 -->

										<li class="slide slide-02">

											<div class="live-life-play-hard">

												<img src="/wp-content/uploads/2016/02/live-life-play-hard.png" alt="Live Life. Play Hard." />

											</div>

											<div class="play">

												<a href="https://vimeo.com/154688401" rel="vimeo" class="swipebox">

													<img src="/wp-content/uploads/2016/02/play.png" alt="Play Video" />

												</a>

											</div>

										</li>

										<!-- Slide 03 -->

										<li class="slide slide-03">

											<div class="powerful-benefits-listing">

												<img src="/wp-content/uploads/2016/02/powerful-benefits-listing.png" alt="Powerful Benefits" />

											</div>

											<div class="learn-more">

												<a href="/#!/benefits">

													<img src="/wp-content/uploads/2016/02/learn-more.png" alt="Play Video" />

												</a>

											</div>

										</li>

									</ul>

								</div>

							</div> <!--end home_container-->

						</div> <!--end page_holder-->

						<div class="footer">

							<div class="footer-inner">

								<ul class="footer-home">

									<li class="first">

										<a href="/#!/natural-power">

											<div class="image">

												<div class="home-out">

													<img src="/wp-content/uploads/2016/02/natural-power.jpg" alt="Natural Power" />

												</div>

												<div class="home-over">

													<img src="/wp-content/uploads/2016/02/natural-power-over.jpg" alt="Natural Power" />

												</div>

											</div>

											<div class="label">Natural Power</div>

										</a>

									</li>

									<li>

										<a href="/#!/benefits">

											<div class="image">

												<div class="home-out">

													<img src="/wp-content/uploads/2016/02/benefits.jpg" alt="Benefits" />

												</div>

												<div class="home-over">

													<img src="/wp-content/uploads/2016/02/benefits-over.jpg" alt="Benefits" />

												</div>

											</div>

											<div class="label">Benefits</div>

										</a>

									</li>

									<li>

										<a href="/#!">

											<div class="image">

												<div class="home-out">

													<img src="/wp-content/uploads/2016/02/form-function.jpg" alt="Form Function" />

												</div>

												<div class="home-over">

													<img src="/wp-content/uploads/2016/02/form-function-over.jpg" alt="Form Function" />

												</div>

											</div>

											<div class="label">Form Function</div>

										</a>

									</li>

									<li class="last">

										<a href="/#!/about-plus-red">

											<div class="image">

												<div class="home-out">

													<img src="/wp-content/uploads/2016/02/about-plus-red.jpg" alt="About +Red" />

												</div>

												<div class="home-over">

													<img src="/wp-content/uploads/2016/02/about-plus-red-over.jpg" alt="About +Red" />

												</div>

											</div>

											<div class="label">About +Red</div>

										</a>

									</li>

								</ul>

							</div> <!-- end .footer-inner -->

						</div> <!-- end .footer -->

					</div> <!-- end .home_bg -->

	<?php /*

	<script type="text/javascript">

		// Logic for 2 Can Display

			jQuery(document).ready(function($){

				$('#current_can').val('over');

				startCans();

				function startCans(){

					$('#home_back_can_out img').stop();

					$('#home_front_can_out img').stop();

					cur_can = $('#current_can').val();

					get_other_can(cur_can);

				}

				$("#home_image").mouseenter(function(){

					$('#home_back_can_out img').stop();

					$('#home_front_can_out img').stop();

					startCans();

				});

				function get_other_can(current){

					if (current == 'out'){

						$('#current_can').val('over');

						$('#home_back_can_out img').animate({marginLeft:'173px'},'slow');

						$('#home_back_can_out img').animate({marginTop:'0',width:'100%',height:'100%',marginLeft:'123px'},'slow',function(){

							$('#home_back_can_out').css('zIndex','10');

							$('#home_back_can_out img').css('zIndex','10');

						});

						$('#home_front_can_out img').animate({marginLeft:'-120px'},'slow');

						$('#home_front_can_out img').animate({width:'80%',height:'80%',marginLeft:'-30px',marginTop:'70px'},'slow',function(){

							$('#home_front_can_out').css('zIndex','1');

							$('#home_front_can_out img').css('zIndex','1');

							$('#home_front_can_out img').animate({marginLeft:'0px'},'slow');

						});

					} else {

						$('#current_can').val('out');

						$('#home_front_can_out img').animate({marginLeft:'173px'},'slow');

						$('#home_front_can_out img').animate({ marginTop:'0',width:'100%',height:'100%',marginLeft:'123px'},'slow',function(){

							$('#home_front_can_out').css('zIndex','10');

							$('#home_front_can_out img').css('zIndex','10');

						});

						$('#home_back_can_out img').animate({marginLeft:'-120px'},'slow');

						$('#home_back_can_out img').animate({width:'80%',height:'80%',marginLeft:'-30px',marginTop:'70px'},'slow',function(){

							$('#home_back_can_out').css('zIndex','1');

							$('#home_back_can_out img').css('zIndex','1');

							$('#home_back_can_out img').animate({marginLeft:'0px'},'slow');

						});

					}

				}

			});

		// Logic for 3 Can Display

		jQuery(document).ready(function($){

			$('#home_backTwo_can_out img').css('width','80%').css('height','80%').css('margin-top','70px').css('margin-left','120px');

			var can_counter = 0;

			startCans();

			function startCans() {

				$('#home_back_can_out img').stop();

				$('#home_front_can_out img').stop();

				$('#home_backTwo_can_out img').stop();

				get_other_can(can_counter);

			}

			$("#home_image").mouseenter(function(){

				$('#home_back_can_out img').stop();

				$('#home_front_can_out img').stop();

				$('#home_backTwo_can_out img').stop();

				startCans();

			});

			function get_other_can(current){

				if(current == 0){

					can_counter++;

					$('#home_front_can_out img').animate({marginLeft:'173px'},'slow');

					$('#home_front_can_out img').animate({marginTop:'0',width:'100%',height:'100%',marginLeft:'123px'},'slow',function(){

						$('#home_front_can_out').css('zIndex','10');

						$('#home_front_can_out img').css('zIndex','10');

					});

					$('#home_back_can_out img').animate({marginLeft:'-120px'},'slow');

					$('#home_back_can_out img').animate({width:'80%',height:'80%',marginLeft:'-30px',marginTop:'70px'},'slow',function(){

						$('#home_back_can_out img').animate({marginLeft:'0px'},'slow');

						$('#home_back_can_out').css('zIndex','1');

						$('#home_back_can_out img').css('zIndex','1');

					});

					$('#home_backTwo_can_out img').animate({marginLeft:'-20px'},'slow');

					$('#home_backTwo_can_out img').animate({width:'80%',height:'80%',marginLeft:'292px',marginTop:'70px'},'slow',function(){

						$('#home_backTwo_can_out img').animate({marginLeft:'262px'},'slow');

						$('#home_backTwo_can_out').css('zIndex','1');

						$('#home_backTwo_can_out img').css('zIndex','1');

					});

				}

				if (current == 1){

					can_counter++;

					$('#home_back_can_out img').animate({marginLeft:'173px'},'slow');

					$('#home_back_can_out img').animate({marginTop:'0',width:'100%',height:'100%',marginLeft:'123px'},'slow',function(){

						$('#home_back_can_out').css('zIndex','10');

						$('#home_back_can_out img').css('zIndex','10');

					});

					$('#home_front_can_out img').animate({marginLeft:'-120px'},'slow');

					$('#home_front_can_out img').animate({width:'80%',height:'80%',marginLeft:'-30px',marginTop:'70px'},'slow',function(){

						$('#home_front_can_out img').animate({marginLeft:'0px'},'slow');

						$('#home_front_can_out').css('zIndex','1');

						$('#home_front_can_out img').css('zIndex','1');

					});

				}

				if (current == 2){

					can_counter++;

					$('#home_back_can_out img').animate({marginLeft:'262px'},'slow');

					$('#home_back_can_out img').animate({marginTop:'0',width:'80%',height:'80%',marginLeft:'292px',marginTop:'70px'},'slow',function(){

						$('#home_back_can_out img').animate({marginLeft:'262px'},'slow');

						$('#home_back_can_out').css('zIndex','1');

						$('#home_back_can_out img').css('zIndex','1');

					});

					$('#home_backTwo_can_out').css('z-index','2');

					$('#home_backTwo_can_out img').css('z-index','2');

					$('#home_backTwo_can_out img').animate({marginLeft:'123px'},'slow');

					$('#home_backTwo_can_out img').animate({width:'100%',height:'100%',marginLeft:'123px',marginTop:'0px'},'slow',function(){

						$('#home_backTwo_can_out').css('zIndex','10');

						$('#home_backTwo_can_out img').css('zIndex','10');

					});

				}

				if (current == 3){

					can_counter++;

					$('#home_front_can_out').css('z-index','2');

					$('#home_front_can_out img').css('z-index','2');

					$('#home_front_can_out img').animate({marginLeft:'173px'},'slow');

					$('#home_front_can_out img').animate({marginTop:'0',width:'100%',height:'100%',marginLeft:'123px'},'slow',function(){

						$('#home_front_can_out').css('zIndex','10');

						$('#home_front_can_out img').css('zIndex','10');

					});

					$('#home_backTwo_can_out img').animate({marginLeft:'-120px'},'slow');

					$('#home_backTwo_can_out img').animate({width:'80%',height:'80%',marginLeft:'-30px',marginTop:'70px'},'slow',function(){

						$('#home_backTwo_can_out img').animate({marginLeft:'0px'},'slow');

						$('#home_backTwo_can_out').css('zIndex','1');

						$('#home_backTwo_can_out img').css('zIndex','1');

					});

				}

				if (current == 4){

					can_counter++;

					$('#home_front_can_out img').animate({marginLeft:'262px'},'slow');

					$('#home_front_can_out img').animate({marginTop:'0',width:'80%',height:'80%',marginLeft:'292px',marginTop:'70px'},'slow',function(){

						$('#home_front_can_out img').animate({marginLeft:'262px'},'slow');

						$('#home_front_can_out').css('zIndex','1');

						$('#home_front_can_out img').css('zIndex','1');

					});

					$('#home_back_can_out').css('z-index','2');

					$('#home_back_can_out img').css('z-index','2');

					$('#home_back_can_out img').animate({marginLeft:'123px'},'slow');

					$('#home_back_can_out img').animate({width:'100%',height:'100%',marginLeft:'123px',marginTop:'0px'},'slow',function(){

						$('#home_back_can_out').css('zIndex','10');

						$('#home_back_can_out img').css('zIndex','10');

					});

				}

				if (current == 5){

					can_counter++;

					$('#home_backTwo_can_out').css('z-index','2');

					$('#home_backTwo_can_out img').css('z-index','2');

					$('#home_backTwo_can_out img').animate({marginLeft:'173px'},'slow');

					$('#home_backTwo_can_out img').animate({marginTop:'0',width:'100%',height:'100%',marginLeft:'123px'},'slow',function(){

						$('#home_backTwo_can_out').css('zIndex','10');

						$('#home_backTwo_can_out img').css('zIndex','10');

					});

					$('#home_back_can_out img').animate({marginLeft:'-120px'},'slow');

					$('#home_back_can_out img').animate({width:'80%',height:'80%',marginLeft:'-30px',marginTop:'70px'},'slow',function(){

						$('#home_back_can_out img').animate({marginLeft:'0px'},'slow');

						$('#home_back_can_out').css('zIndex','1');

						$('#home_back_can_out img').css('zIndex','1');

					});

				}

				if (current == 6){

					can_counter = 1;

					$('#home_backTwo_can_out img').animate({marginLeft:'262px'},'slow');

					$('#home_backTwo_can_out img').animate({marginTop:'0',width:'80%',height:'80%',marginLeft:'292px',marginTop:'70px'},'slow',function(){

						$('#home_backTwo_can_out img').animate({marginLeft:'262px'},'slow');

						$('#home_backTwo_can_out').css('zIndex','1');

						$('#home_backTwo_can_out img').css('zIndex','1');

					});

					$('#home_front_can_out').css('z-index','2');

					$('#home_front_can_out img').css('z-index','2');

					$('#home_front_can_out img').animate({marginLeft:'123px'},'slow');

					$('#home_front_can_out img').animate({width:'100%',height:'100%',marginLeft:'123px',marginTop:'0px'},'slow',function(){

						$('#home_front_can_out').css('zIndex','10');

						$('#home_front_can_out img').css('zIndex','10');

					});

				}

			}

		});

	</script>

	*/ ?>
