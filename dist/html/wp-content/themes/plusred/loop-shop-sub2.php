 <?php $page = get_page_by_title( 'Shop' );  ?>                      
                    <div class="main_holder_inner_main home-bg"><input type="hidden" name="shop-id" value="Shop" id="shop-id">
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder">
                            <div id="shop_container">    
                            <?php $content = apply_filters('the_content', $page->post_content);
                             echo $content; 
                             
                             ?><br clear="all">
                            </div> <!--end shop_container--> 
                        </div> <!--end page_holder-->
                           
                    </div> <!-- end .home_bg --> 
<script type="text/javascript">
jQuery(document).ready(function($){
  
      
});
</script>  
