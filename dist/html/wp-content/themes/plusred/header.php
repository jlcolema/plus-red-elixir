<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<meta name="description" content="+Red Elixir" />
<meta name="keywords" content="healthy energy drink, free energy drink, the best energy drink, best tasting energy drink, low calorie energy drinks, buy energy drink, best natural energy drink, organic energy drink, health energy drinks, top 10 energy drinks, energy drink natural, list of all energy drinks, energy drink facts, all energy drinks, energy drinks online, energy sports drinks, energy drinks healthy, hangover drink, compare energy drinks, extreme energy drink, energy drinks buy, pimp juice energy drink, most effective energy drink, energy drink comparisons, energy drink reviews, all natural energy drinks, natural energy drink, all natural energy drink, buy energy drinks, healthy energy drinks, best energy drinks, hangover cures, recovery drink, buy energy drinks online, energy drink companies, high energy drinks, energy drink, best energy drink, list of energy drinks, blue agave, agave syrup, cure hangover, workout recovery drink, energy drink list, best hangover cure, energy drinks health, energy drinks brands, energy drinks list, sports energy drinks, best natural energy drinks, agave nector, energy drink ingredients, new energy drink, hangover help, organic energy drinks, strongest energy drink, sports recovery drinks, new energy drinks, curing a hangover, natural energy drink recipe, agave nectar, top energy drinks, healthiest energy drink, what are energy drinks, best recovery drink, agave, energy drinks, natural energy drinks, agave sweetener, recovery drinks, hangover cure, LMFAO, LMFAO Sorry for Party Rocking, Plus Red Elixir, Plus Red Rescue, Plus Red Power, red marine algae, red super food, vitamins, electrolytes, snap cap, red food drink, +Red energy drink, beyond energy" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="http://plusredelixir.dev/favicon.ico" rel="shortcut icon" type="image/x-icon">

<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

    wp_enqueue_script("jquery");

	wp_head();

?>
<style>
 @import url('<?php echo bloginfo('template_url'); ?>/core.css');
 @import url('<?php echo bloginfo('template_url'); ?>/player-style.css');
 </style>
 <link type="text/css" href="<?php echo bloginfo('template_url'); ?>/swipebox.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.localscroll-min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.ba-hashchange.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/init.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jsScroller.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jsScrollbar.js"></script>
<script type="text/javascript">
var scroller1  = null;
var scrollbar1 = null;
var scroller2  = null;
var scrollbar2 = null;
window.onload = function () {
  scroller1  = new jsScroller(document.getElementById("Scroller-1"), 834, 445);
  scrollbar1 = new jsScrollbar (document.getElementById("Scrollbar-Container-1"), scroller1, false);
  scroller2  = new jsScroller(document.getElementById("Scroller-2"), 834, 445);
  scrollbar2 = new jsScrollbar (document.getElementById("Scrollbar-Container-2"), scroller2, false);
  scroller3  = new jsScroller(document.getElementById("Scroller-3"), 834, 445);
  scrollbar3 = new jsScrollbar (document.getElementById("Scrollbar-Container-3"), scroller3, false);
}
</script>
</head>

<body <?php body_class(); ?>>
<div class="darken">
<div class="red-line"></div></div>


