<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'Privacy Policy' );
?>
<div class="main_holder_inner_main power-bg"><input type="hidden" name="privacy-policy-id" value="Privacy Policy" id="privacy-policy-id">
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
                         <div id="home_container">
                         <div id="about_content">
                         <div id="Scrollbar-Container-2">

    <div class="Scrollbar-Track">
      <img src="<?php echo bloginfo('template_url'); ?>/images/scroller.png" class="Scrollbar-Handle" />
    </div>
  </div>
<div class="Container">

  <div id="Scroller-2">
   <div class="Scroller-Container">

                            <?php $privacy_content = str_replace('<p></p>','', $page->post_content); echo $privacy_content; ?>

                            </div>
  </div>
</div>
                        </div>
                        </div>
                    </div>
                   <div class="footer" style="background:transparent;">
                        <div class="footer-inner">
                         </div>
                        </div>
                    </div>
