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

'post_parent' => $rescue->ID,

'post_status' => 'inherit',

'post_type' => 'attachment',

'post_mime_type' => 'image',

'order' => 'ASC',

'orderby' => 'menu_order'

)

);

if ( $images ) { $rescue_img = array();$rescue_title = array();$rescue_desc = array(); $counter=0;

    foreach ( $images as $id => $image ) {

        $rescue_img[] = wp_get_attachment_url( $image->ID );

        $rescue_title[] = $image->post_excerpt;

        $rescue_desc[] = $image->post_content;

        $link = get_permalink( $post->ID );

        $counter++;

    }

}

?>

                    <div class="main_holder_inner_main power-bg"><input type="hidden" name="rescue-id" value="Rescue" id="rescue-id">

                        <div class="main_placeholder top_holder"></div>

                        <div class="main_placeholder page_holder">



                        <div id="product_container">

                            <div id="product_image">

                                    <img src="/wp-content/uploads/2015/11/rescue-elixir-can-large.png" alt="+Plus Red Rescue Elixir" />

                                    <?php /*

                                        <img src="<?php echo $power_img[5]; ?>" alt="+Plus Red Rescue Elixir" />

                                    */ ?>

                            </div>

                             <div id="product_content">



                                <img alt="+Plus Red Rescue Elixir" src="<?php echo bloginfo('template_url'); ?>/images/rescue-elixir.png"><br>

                                <div class="first_dot product_dots_off"><a id="rescue_dot_1" title="Natural" alt="Natural" class="dots" name="first" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="second_dot product_dots_off"><a id="rescue_dot_2" title="No Taurine" alt="No Taurine" class="dots" name="second" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="third_dot product_dots_off"><a id="rescue_dot_3" title="Natural Caffeine from Coffee Bean" alt="Natural Caffeine from Coffee Bean" class="dots" name="third" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="fourth_dot product_dots_off"><a id="rescue_dot_4" title="Electrolytes" alt="Electrolytes" class="dots" name="fourth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="fifth_dot product_dots_off"><a id="rescue_dot_5" title="Low Glycemic Sweetener" alt="Low Glycemic Sweetener" class="dots" name="fifth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="sixth_dot product_dots_off"><a id="rescue_dot_2" title="Red Super Food" alt="Red Super Food" class="dots" name="sixth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="seventh_dot product_dots_off"><a id="rescue_dot_7" title="Vitamins & Minerals" alt="Vitamins & Minerals" class="dots" name="seventh" href="#" onclick="return false;"><div>&nbsp;</div></a></div>

                                <div class="eighth_dot product_dots_off"><a id="power_dot_8" title="<?php echo $power_title[8]; ?>" alt="<?php echo $power_title[8]; ?>" class="dots" name="eighth" href="#" onclick="return false;"><div>&nbsp;</div></a></div>


                                <div class="first_info"></div>

                                <div class="second_info"></div>

                                <div class="third_info"></div>

                                <div class="fourth_info"></div>

                                <div class="fifth_info"></div>

                                <div class="sixth_info"></div>

                                <div class="seventh_info"></div>

                                <div class="eighth_info"></div>

                                <div class="first_inner"><div class="dot-label">Natural</div><?php echo $rescue_desc[1]; ?></div>

                                <div class="second_inner"><div class="dot-label">Amino Rescue</div><?php echo $rescue_desc[5]; ?></div>

                                <div class="third_inner"><div class="dot-label">Natural Caffeine from Green Coffee Bean</div><?php echo $rescue_desc[3]; ?></div>

                                <div class="fourth_inner"><div class="dot-label">Electrolytes</div><?php echo $rescue_desc[6]; ?></div>

                                <div class="fifth_inner"><div class="dot-label">Low Glycemic Sweetener</div><?php echo $rescue_desc[2]; ?></div>

                                <div class="sixth_inner"><div class="dot-label">Red Super Food</div><?php echo $rescue_desc[4]; ?></div>

                                <div class="seventh_inner"><div class="dot-label">Vitamins</div><?php echo $rescue_desc[7]; ?></div>

                                    <div class="eighth_inner">
                                    <div class="dot-label" style="margin-bottom: 0;">
                                        <a href="/#!/benefits">Learn More About Benefits</a>
                                    </div>
                                    </div>

                                <div class="product_info">CLICK THE DOTS TO LEARN MORE</div>

                               </div>

                            </div>

                     </div>

                     <div class="footer">

                        <div class="footer-inner product-footer">

                        <div class="product-header">&nbsp;</div>

                        <div class="product-content"><?php echo $rescue_content; ?></div>

                        <div class="product-excerpt"><?php echo $rescue_excerpt; ?></div>

                        </div>

                     </div>



                    </div>
