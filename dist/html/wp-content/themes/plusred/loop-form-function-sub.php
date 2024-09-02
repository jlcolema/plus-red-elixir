<?php
/**
 * The home page sub template.
 *
 */
?>
<?php   
$page = get_page_by_title( 'Form Function' ); 
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
                    <div class="main_holder_inner_main power-bg"><input type="hidden" name="form-function-id" value="Form Function" id="form-function-id">
                        <div class="main_placeholder top_holder"></div>
                        <div class="main_placeholder page_holder"> 
                        <div id="form_container"> 
                         <div id="form_content_right"> 
                         
                            <img width="251" height="43" src="<?php echo bloginfo('template_url'); ?>/images/function.png">
                            <br>
                             <div id="form_content_inner">
                             <p id="function-1" class="function-1-info">High definition printing process with a proprietary matte varnish coating that keeps the aluminum can cooler longer. 
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
                                  <p id="form-2" class="form-2-info">The rich matte varnish creates a truly premium look and feel. 
                                <?php //echo $page->post_content; ?>
                                </p>
                                  <!--<p id="form-3" class="form-3-info">The rich matte varnish creates a truly premium look and feel.  
                                <?php //echo $page->post_content; ?>
                                </p>-->
                             
                            </div>    
                        </div>
                        
                        </div>   
                    </div>
<script type="text/javascript">
jQuery(document).ready(function($){
 $('#form-black-top-over,#form-red-top-over,#form-can-over,.home-over,.left-arrow-over,.right-arrow-over,.social-div-over,.beyond-over,.beyond-red-tag').css('opacity',0);
 $('.left-lines-first,.left-lines-second,.left-lines-third').css('opacity',0);
 $('.right-lines-first,.right-lines-second,.right-lines-third').css('opacity',0);
   
    $('.social-div-over').mouseover(function(){
        $(this).stop();
        $(this).animate({ opacity: 1 },{  duration: 400  });
    });
    $('.social-div-over').mouseout(function(){
        $(this).stop();
        $(this).animate({ opacity: 0 },{ duration: 800 });
    });
    $('.right-arrow-over,.left-arrow-over').mouseover(function(){
        $(this).stop();
        $(this).animate({ opacity: 1  },{ duration: 400  });
    });
    $('.right-arrow-over,.left-arrow-over').mouseout(function(){
        $(this).stop();
        $(this).animate({ opacity: 0  },{ duration: 800  });
    });
    $('.home-over').mouseover(function(){
        $(this).stop();
        $(this).animate({ opacity: 1 },{ duration: 400  });
    });
    $('.home-over').mouseout(function(){
        $(this).stop();
        $(this).animate({ opacity: 0 },{ duration: 800 });
    });
    
    //$('.beyond-shadow-tag').css('opacity',0); 
    $('.beyond-over').mouseover(function(){
        $(this).stop();
        $(this).next('.beyond-red-tag').stop();
        $('.beyond-shadow-tag').stop(); 
        
        $(this).animate({ opacity: 1 },{  duration: 400 });
         $(this).next('.beyond-red-tag').animate({ opacity: 1, top: "16px" },{  duration: 400  });
         $('.beyond-shadow-tag').animate({ opacity: 100,},{ duration: 2800 });
    });
    
    $('.beyond-over').mouseout(function(){
        $(this).stop();
        $('.beyond-red-tag').stop();
        $('.beyond-shadow-tag').stop();   
        $(this).animate({ opacity: 0},{ duration: 400 });
        $('.beyond-red-tag').css('opacity',0);  
        $('.beyond-shadow-tag').css('opacity',0.25);  
        $('.beyond-red-tag').css('top',0);  
    });
    $('.function-3-info,.function-4-info,.function-2-info').mouseover(function(){
        
        $('#form-black-top-over,#form-red-top-over,#form-can-over').stop();  
        $('#form-black-top,#form-red-top,#form-can').stop();  
         thisId = $(this).attr('id');  
         if(thisId == "function-4"){ 
           /* $('#form_lines_right .left-lines-first').css({ opacity:'1',marginTop:'44px' });
            $('#form_lines_right .right-lines-first').css({ marginTop:'44px',height:'254px' });
             $('#form_lines_right .right-inner-lines-first').css({ marginTop:'253px' });
            $('#form_lines_right .right-inner-lines-first').css({ opacity:'1' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'1' }); */
        } 
         if(thisId == "function-3"){ 
          /*  $('#form_lines_right .left-lines-first').css({ opacity:'1',marginTop:'44px' });
            $('#form_lines_right .right-lines-first').css({ marginTop:'44px',height:'210px' });
             $('#form_lines_right .right-inner-lines-first').css({ marginTop:'209px' });
            $('#form_lines_right .right-inner-lines-first').css({ opacity:'1' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'1' }); */
        } 
         if(thisId == "function-2"){ 
          /*  $('#form_lines_right .left-lines-first').css({ opacity:'1',marginTop:'44px' });
            $('#form_lines_right .right-lines-first').css({ marginTop:'44px',height:'93px' });
             $('#form_lines_right .right-inner-lines-first').css({ marginTop:'92px' });
            $('#form_lines_right .right-inner-lines-first').css({ opacity:'1' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'1' });  */
        } 
        $('#form-black-top-over').animate({ marginTop: '-14px',opacity:'1', marginLeft: '0px',width:'150px',height:'134px' },{  duration: 400 });
        $('#form-can-over').animate({ marginTop: '-52px',opacity:'0' },{  duration: 400  });
        $('#form-red-top-over').animate({ marginTop: '-34px',opacity:'0' },{  duration: 400  });
        $('#form-black-top').animate({ marginTop: '-14px',opacity:'0' },{  duration: 400 });
        $('#form-red-top').animate({ marginTop: '-34px',opacity:'1' },{  duration: 400  });
        $('#form-can').animate({ marginTop: '-52px',opacity:'1' },{  duration: 400  });
        
    });
     $('.function-3-info,.function-4-info,.function-2-info').mouseout(function(){
        $('#form-black-top,#form-red-top,#form-can').stop();   
        $('#form-black-top-over,#form-red-top-over,#form-can-over').stop();   
        $('#form-black-top-over').animate({  marginTop: '0px',opacity:'0', marginLeft: '0px', width: '145px',height:'130px' },{  duration: 400  });
        $('#form-red-top-over').animate({ marginTop: '-48px',opacity:'0', marginLeft: '0px', width: '145px',height:'106px' },{  duration: 400  });
        $('#form-can-over').animate({  marginTop: '-52px',opacity:'0', marginLeft: '0px', width: '145px',height:'403px'  },{ duration: 400  });
        $('#form-black-top').animate({  marginTop: '0px',opacity:'1', marginLeft: '0px', width: '145px',height:'130px' },{  duration: 400  });
        $('#form-red-top').animate({  marginTop: '-48px',opacity:'1', marginLeft: '0px', width: '145px',height:'106px'  },{  duration: 400  });
        $('#form-can').animate({  marginTop: '-52px',opacity:'1', marginLeft: '0px', width: '145px',height:'403px' },{ duration: 400  });
    });
    $('.function-5-info').mouseover(function(){
         $('#form-black-top-over,#form-red-top-over,#form-can-over').stop();  
        $('#form-black-top,#form-red-top,#form-can').stop(); 
        thisId = $(this).attr('id');  
         if(thisId == "function-5"){ 
          /*  $('#form_lines_right .left-lines-first').css({ opacity:'1',marginTop:'136px' });
            $('#form_lines_right .right-lines-first').css({ marginTop:'136px',height:'224px' });
             $('#form_lines_right .right-inner-lines-first').css({ marginTop:'223px' });
            $('#form_lines_right .right-inner-lines-first').css({ opacity:'1' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'1' }); 
             $('#form_lines_right .left-lines-first').css({ opacity:'1' });  */
        } 
        $('#form-black-top-over').animate({ marginTop: '-14px',opacity:'0' },{  duration: 400 });
        $('#form-can-over').animate({ marginTop: '-38px',opacity:'0' },{  duration: 400  });
        $('#form-red-top-over').animate({ marginTop: '-34px',opacity:'1', marginLeft: '0px',width:'150px',height:'110px' },{  duration: 400  });
        $('#form-black-top').animate({ marginTop: '-14px',opacity:'1' },{  duration: 400 });
        $('#form-red-top').animate({ marginTop: '-34px',opacity:'0' },{  duration: 400  });
        $('#form-can').animate({ marginTop: '-38px',opacity:'1' },{  duration: 400  });
    });
    
    $('.function-5-info').mouseout(function(){
        $('#form-black-top,#form-red-top,#form-can').stop();   
        $('#form-black-top-over,#form-red-top-over,#form-can-over').stop();   
      /* $('#form_lines_right .right-inner-lines-first').css({ opacity:'0' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'0' });
            $('#form_lines_right .left-lines-first').css({ opacity:'0' });  */
             $('#form-black-top-over').animate({  marginTop: '0px',opacity:'0', marginLeft: '0px', width: '145px',height:'130px' },{  duration: 400  });
        $('#form-red-top-over').animate({ marginTop: '-48px',opacity:'0', marginLeft: '0px', width: '145px',height:'106px' },{  duration: 400  });
        $('#form-can-over').animate({  marginTop: '-52px',opacity:'0', marginLeft: '0px', width: '145px',height:'403px'  },{ duration: 400  });
        $('#form-black-top').animate({  marginTop: '0px',opacity:'1', marginLeft: '0px', width: '145px',height:'130px' },{  duration: 400  });
        $('#form-red-top').animate({  marginTop: '-48px',opacity:'1', marginLeft: '0px', width: '145px',height:'106px'  },{  duration: 400  });
        $('#form-can').animate({  marginTop: '-52px',opacity:'1', marginLeft: '0px', width: '145px',height:'403px' },{ duration: 400  });
    });
    $('.function-1-info,.form-1-info,.form-2-info,.form-3-info').mouseover(function(){
        thisId = $(this).attr('id');
        if(thisId == "form-1"){ 
         /*   $('#form_lines_left .left-lines-first').css({ opacity:'1' });
            $('#form_lines_left .right-lines-first').css({ marginTop:'74px',height:'280px' });       
            $('#form_lines_left .right-lines-first').css({ opacity:'1' });*/ 
        }
        if(thisId == "form-2"){ 
          /*  $('#form_lines_left .left-lines-second').css({ opacity:'1' }); 
            $('#form_lines_left .right-lines-first').css({ marginTop:'136px',height:'218px' });   
             $('#form_lines_left .right-lines-first').css({ opacity:'1' });  */
        }
        if(thisId == "form-3"){ 
         /*   $('#form_lines_left .left-lines-third').css({ opacity:'1' }); 
            $('#form_lines_left .right-lines-first').css({ marginTop:'236px',height:'118px' });   
             $('#form_lines_left .right-lines-first').css({ opacity:'1' });  */
        }
        if(thisId == "function-1"){ 
         /*   $('#form_lines_right .left-lines-first').css({ opacity:'1',marginTop:'354px' });
            $('#form_lines_right .right-lines-first').css({ marginTop:'75px',height:'280px' });
             $('#form_lines_right .right-inner-lines-first').css({ marginTop:'-1px' });
            $('#form_lines_right .right-inner-lines-first').css({ opacity:'1' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'1' });   */
        }
        $('#form-black-top,#form-red-top,#form-can').stop();
        $('#form-black-top-over,#form-red-top-over,#form-can-over').stop();
        $('#form-black-top-over').animate({  marginTop: '0px',opacity:'0'  },{   duration: 400  });
        $('#form-red-top-over').animate({ marginTop: '-48px',opacity:'0' },{ duration: 400  });
        $('#form-can-over').animate({  marginTop: '-38px',opacity:'1', marginLeft: '0px', width: '150px',height:'417px' },{ duration: 400 });
        $('#form-black-top').animate({  marginTop: '0px',opacity:'1'  },{   duration: 400  });
        $('#form-red-top').animate({ marginTop: '-48px',opacity:'1' },{ duration: 400  });
        $('#form-can').animate({  marginTop: '-38px',opacity:'0', marginLeft: '0px', width: '150px',height:'417px' },{ duration: 400 });
   });
    
    $('.function-1-info,.form-1-info,.form-2-info,.form-3-info').mouseout(function(){
      /*  $('#form_lines_left .right-lines-first').css({ opacity:'0' });
        $('#form_lines_left .left-lines-first').css({ opacity:'0' }); 
        $('#form_lines_left .left-lines-second').css({ opacity:'0' }); 
        $('#form_lines_left .left-lines-third').css({ opacity:'0' });
         $('#form_lines_right .right-inner-lines-first').css({ opacity:'0' });      
            $('#form_lines_right .right-lines-first').css({ opacity:'0' });
             $('#form_lines_right .left-lines-first').css({ opacity:'0' }); */ 
        $('#form-black-top-over,#form-red-top-over,#form-can-over').stop(); 
        $('#form-black-top,#form-red-top,#form-can').stop(); 
        $('#form-black-top-over').animate({  marginTop: '0px',opacity:'0', marginLeft: '0px', width: '145px',height:'130px'  },{  duration: 400   });
        $('#form-red-top-over').animate({ marginTop: '-48px',opacity:'0', marginLeft: '0px', width: '145px',height:'106px' },{  duration: 400 });
        $('#form-can-over').animate({ marginTop: '-52px',opacity:'0', marginLeft: '0px', width: '145px',height:'403px' },{ duration: 400   });
        $('#form-black-top').animate({  marginTop: '0px',opacity:'1', marginLeft: '0px', width: '145px',height:'130px'  },{  duration: 400   });
        $('#form-red-top').animate({ marginTop: '-48px',opacity:'1', marginLeft: '0px', width: '145px',height:'106px' },{  duration: 400 });
        $('#form-can').animate({ marginTop: '-52px',opacity:'1', marginLeft: '0px', width: '145px',height:'403px' },{ duration: 400   });
        
    }); 
    
    $('.about-over').css('opacity',0);
    $('.about-over').mouseover(function(){
        $(this).stop();
        $(this).animate({  opacity: 1  },{  duration: 400  });
    });
    $('.about-over').mouseout(function(){
        $(this).stop();
        $(this).animate({ opacity: 0 },{ duration: 800 });
    }); 
});
</script>
                    <div class="footer">
                         <div class="left-arrow"><a data-src="clean-energy" href="/#!/clean-energy"><img class="left-arrow-out" title="Beyond Energy" alt="Beyond Energy" name="Beyond Energy" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-out.png"><img class="left-arrow-over" title="Beyond Energy" alt="Beyond Energy" name="Beyond Energy" src="<?php echo bloginfo('template_url'); ?>/images/left-arrow-over.png"></a></div>
                          <div class="right-arrow"><a data-src="about-plus-red" href="/#!/about-plus-red"><img class="right-arrow-out" title="About +RED" alt="About +RED" name="About +RED" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-out.png"><img class="right-arrow-over" title="About +RED" alt="About +RED" name="About +RED" src="<?php echo bloginfo('template_url'); ?>/images/right-arrow-over.png"></a></div>

                        <div class="footer-inner form-footer">
                        <div class="form-header">&nbsp;</div>
                        <div class="form-content"><?php echo $form_content; ?></div>
                        <div class="form-excerpt"><?php echo $form_excerpt; ?></div>
                        </div>
                     </div>       
                    </div>
