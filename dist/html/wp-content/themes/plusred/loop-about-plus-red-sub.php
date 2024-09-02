<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'About +Red' );
?>
                    <div class="main_holder_inner_main power-bg"><input type="hidden" name="about-plus-red-id" value="About +RED" id="about-plus-red-id">
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
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
                            <?php $about_content = str_replace('<p></p>','', $page->post_content); echo $about_content; ?>

                            </div>
  </div>
</div>
                        </div>
                        </div>
                    </div>
<div class="footer">


                        <div class="footer-inner">
                        <ul class="footer-about">
                        <li class="first">
                        <a href="#">

                        <div class="about-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/about-1.png'); width:276px; height:217px;position:absolute;">&nbsp;</div>
                        <div class="about-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/about-1.png'; width:276px;height:217px;position:absolute;">&nbsp;</div>

                        </a>

                        </li>
                        <li><a href="#">

                        <div class="about-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/about-2.png'); width:276px; height:217px;position:absolute;">&nbsp;</div>
                        <div class="about-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/about-2.png'); width:276px; height:217px;position:absolute;">&nbsp;</div>

                        </a>

                        </li>
                        <li><a href="#">

                        <div class="about-out" style="background:url('<?php echo bloginfo('template_url'); ?>/images/about-3.png'); width:276px; height:217px;position:absolute;">&nbsp;</div>
                        <div class="about-over" style="background:url('<?php echo bloginfo('template_url'); ?>/images/about-3.png'); width:276px; height:217px;position:absolute;">&nbsp;</div>

                        </a>

                        </li>


                        </ul>
                        </div>
                        </div>
                    </div>
