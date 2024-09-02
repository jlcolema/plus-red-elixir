<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'Store' ); 
?>
                    <div class="main_holder_inner_main power-bg"><input type="hidden" name="shop-id" value="Shop" id="shop-id"> 
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
                        <div id="home_container"> 
                       
                         <div id="about_content">
                         <div id="Scrollbar-Container-3">
    
    <div class="Scrollbar-Track">
      <img src="<?php echo bloginfo('template_url'); ?>/images/scroller.png" class="Scrollbar-Handle" />
    </div>
  </div>
<div class="Container">
  
  <div id="Scroller-3">
   <div class="Scroller-Container">    
                         <p><div style="height:100%;min-height:1200px;width:740px;background:white;"> 
                            <?php //$about_content = str_replace('<p></p>','', $page->post_content); echo $about_content; 
                             
                            $content = apply_filters('the_content', $page->post_content);
                             echo $content; 
                             
                             ?> 
                             </div><br clear="all"> </p>
  </div>
  </div>
</div> 
                        </div> 
                        </div>   
                    </div>
            
                    </div>
