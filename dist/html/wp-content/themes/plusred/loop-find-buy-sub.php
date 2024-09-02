<?php
/**
 * The home page sub template.
 *
 */
?>
<?php
$page = get_page_by_title( 'Find Buy' );
?>
					<div class="main_holder_inner_main power-bg"><input type="hidden" name="find-buy-id" value="Find Buy" id="find-buy-id">
						<div class="main_placeholder top_holder"></div>
						<div class="main_placeholder page_holder">
						<div id="home_container">
						<div id="find-buy-search-box">
						<form id="location_search_form" method="post" action="http://plusredelixir.ciplex.us/products/rescue-elixir/" name="location_search_form" onsubmit="searchLocations( 1 ); return false; ">
						<div id="find-buy-zip"><input type="text" id="location_search_zip_field" name="location_search_zip" value="">
						</div>
						<div id="find-buy-search">
						<input type="submit" value="Search" id="location_search_submit_field" class="submit">
						</form></div>
						</div>
						<?php echo do_shortcode('[simplemap]'); ?>

						<div id="get_map"><input type="button" id="open-search" /></div>
						</div>
					</div>
					<div class="footer">

						<div class="footer-inner">
						 <div class="footer-find">
						   <div id="scroll-links">
						   <span style="font-size:12px;color:red;cursor:pointer;margin-right:10px;" onmouseover="doScrollUp();" onmouseout="doStopScroll();" style="padding-right:10px;">Scroll Up</span>
<span style="font-size:12px;color:red;cursor:pointer;" onmouseover="doScrollDown();" onmouseout="doStopScroll();">Scroll Down</span>
						   </div>
						   </div>
						</div>
						</div>
					</div>

<script type="text/javascript">
var scrolling = null;
var _speed = 12;

function doScrollUp()
{
	var d = document.getElementById('results');
	d.scrollTop = d.scrollTop - _speed;
	scrolling = window.setTimeout(function() {
	doScrollUp();
	}, 100);
}

function doScrollDown()
{
	var d = document.getElementById('results');
	d.scrollTop = d.scrollTop + _speed;
	scrolling = window.setTimeout(function() {
	doScrollDown();
	}, 100);
}

function doStopScroll()
{
	window.clearTimeout(scrolling);
}

jQuery(document).ready(function($){
	$("#simplemap").css('marginLeft','-1000px');
	$("#simplemap").css('marginTop','130px');
	$('#get_map').animate({ opacity:'0'},'fast');
	$('#get_map').hide('v');
	$("#simplemap").animate({ opacity:'0'},'fast');

	$("#location_search_submit_field").click(function(){
	   $('#map_search,#find-buy-search-box').animate({ opacity:'0'},'slow');
	   $("#map_search,#find-buy-search-box").hide('slow');
	   $("#simplemap").delay(1000).css('marginLeft','0px');
	   $('#simplemap').animate({ width:'940px',opacity:'1' },'slow');
	   $('#get_map,#scroll-links').delay(1000).animate({ opacity:'1' },'slow');
	   $('#get_map').show('slow');

	 });
	$("#open-search").click(function(){
	   $('#simplemap').animate({ width:'0',opacity:'0' },'slow');
	   $('#get_map,#scroll-links').animate({ opacity:'0' },'slow');
	   $('#get_map').hide('fast');
	   $("#map_search,#find-buy-search-box").delay(500).show('slow');
	   $('#map_search,#find-buy-search-box').delay(500).animate({ opacity:'1' },'slow');

	 });

});
</script>
