<?php $ajax = $_GET['ajax']; if (!$ajax) $ajax = $_POST['ajax']; ?>
<?php //if ($ajax == ''){ ?>
<div id="header">
	<div id="outer">
		<div id="centrecontent" style="text-align:center;">
			<div id="header_main">
				<div id="logo">
				  <a href="#!/"><img alt="+Plus Red Elixir" width="180" height="58" src="<?php echo bloginfo('template_url'); ?>/images/logo.png"></a>
				</div>
				<div id="nav-bar">

					<div id="social-box">
						<div class="social-divs">
							<a href="https://www.instagram.com/plusredelixir/" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/instagram.png" class="social-div-out"><img src="<?php echo bloginfo('template_url'); ?>/images/instagram-over.png" class="social-div-over"></a></div><div class="social-divs"><a href="http://www.facebook.com/plusredelixir" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/facebook.png" class="social-div-out"><img src="<?php echo bloginfo('template_url'); ?>/images/facebook-over.png" class="social-div-over"></a></div><div class="social-divs"><a href="https://twitter.com/#!/PlusRedElixir" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/twitter.png" class="social-div-out"><img src="<?php echo bloginfo('template_url'); ?>/images/twitter-over.png" class="social-div-over"></a>
						</div>
					</div>

				</div> <!--end nav-bar -->
				<div id="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'false', 'menu_class' => 'menu' ) ); ?>
				</div>
			</div><!--end header-main -->
		</div><!--end centrecontent -->
	</div><!--end outer -->
</div><!--end header -->
<br clear="all">
<div id="footer">
	<div style="float:left;color:black;bottom:10px;height:30px;"><a href="<?php echo home_url(); ?>/#!/privacy-policy">PRIVACY POLICY</a><a href="<?php echo home_url(); ?>/#!/contact-us">CONTACT US</a>
	</div>
	<div style="float:right;color:black;bottom:10px;height:30px;"><!--<a href="www.webdesigningcompany.net" target="_blank">Ciplex - New York Web Design</a>-->&nbsp;&nbsp;&copy;&nbsp;+RED ELIXIR. COPYRIGHTS <?php echo date( 'Y' ); ?>
	</div>
</div>
<?php // } ?>
<?php
	wp_footer();
?>


<script type="text/javascript">
jQuery(document).ready(function($){
 $('#form-black-top-over,#form-red-top-over,#form-can-over,.left-arrow-over,.right-arrow-over,.social-div-over,.beyond-over,.beyond-red-tag').css('opacity',0);
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
	// $('.home-over').mouseover(function(){
		// $(this).stop();
		// $(this).animate({ opacity: 1 },{ duration: 400  });
	// });
	// $('.home-over').mouseout(function(){
		// $(this).stop();
		// $(this).animate({ opacity: 0 },{ duration: 800 });
	// });

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

<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>

<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.swipebox.min.js"></script>

<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/functions.js"></script>



</body>
</html>
