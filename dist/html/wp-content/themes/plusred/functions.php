<?php
/**
 * plusred functions and definitions
 *
 */

add_action( 'after_setup_theme', 'plusred_setup' );

if ( ! function_exists( 'plusred_setup' ) ):

function plusred_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	//add_editor_style();
   // add_filter( 'default_hidden_meta_boxes', 'enable_custom_fields_per_default', 20, 1 );
	show_admin_bar(false);
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'products' ) );
    add_theme_support( 'excerpt', array( 'post', 'page', 'products' ) );
    
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'plusred' ),
	) );
     remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'term_description' , 'wpautop' );
	add_action('init', 'post_type_register');  
     
    function post_type_register() { 
     
        $product_args = array( 'label' => __('Products'), 'singular_label' => __('Product'), 'public' => true, 'show_ui' => true, 'capability_type' => 'post', 'hierarchical' => false, 'rewrite' => true, 'supports' => array('title', 'editor', 'thumbnail', 'excerpt') );  
      
        register_post_type( 'products' , $product_args ); 
    }
    add_action("admin_init", "product_init");  
    add_action('save_post', 'save_product');  
   
    function product_init(){ 
     
        add_meta_box( "productInfo-meta", "Product Labels", "product_meta_options", "products", "normal", "high" ); 
       
    }  
    
    function product_meta_options(){  
        
        global $post;
          
        $custom = get_post_custom($post->ID);  
        $label_1 = $custom["label_1"][0]; 
        $label_1_text = $custom["label_1_text"][0]; 
        $label_2 = $custom["label_2"][0]; 
        $label_2_text = $custom["label_2_text"][0]; 
        $label_3 = $custom["label_3"][0]; 
        $label_3_text = $custom["label_3_text"][0]; 
        $label_4 = $custom["label_4"][0]; 
        $label_4_text = $custom["label_4_text"][0]; 
         
    echo '<input type="hidden" name="my_product_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />'; ?>  
    <br>
    <label style="margin-bottom:.4em;">Label 1:</label><br>  
    <label style="margin-left:1em;">Image Name:</label> <input style="width:200px;margin-top:.2em;" name="label_1" value="<?php echo $label_1; ?>" />  
    <label style="margin-left:1em;">Text:</label> <input style="width:500px;margin-top:.2em;" name="label_1_text" value="<?php echo $label_1_text; ?>" /><br><br>  
    <label style="margin-bottom:.4em;">Label 2:</label><br>  
    <label style="margin-left:1em;">Image Name:</label> <input style="width:200px;margin-top:.2em;" name="label_2" value="<?php echo $label_2; ?>" />  
    <label style="margin-left:1em;">Text:</label> <input style="width:500px;margin-top:.2em;" name="label_2_text" value="<?php echo $label_2_text; ?>" /><br><br> 
    <label style="margin-bottom:.4em;">Label 3:</label><br>  
    <label style="margin-left:1em;">Image Name:</label> <input style="width:200px;margin-top:.2em;" name="label_3" value="<?php echo $label_3; ?>" />  
    <label style="margin-left:1em;">Text:</label> <input style="width:500px;margin-top:.2em;" name="label_3_text" value="<?php echo $label_3_text; ?>" /><br><br> 
    <label style="margin-bottom:.4em;">Label 4:</label><br>  
    <label style="margin-left:1em;">Image Name:</label> <input style="width:200px;margin-top:.2em;" name="label_4" value="<?php echo $label_4; ?>" />  
    <label style="margin-left:1em;">Text:</label> <input style="width:500px;margin-top:.2em;" name="label_4_text" value="<?php echo $label_4_text; ?>" /><br><br>   
    <?php  
    }  
      
    function save_product(){
      
        global $post;  
        
        if (!wp_verify_nonce($_POST['my_product_nonce'], basename(__FILE__))) {
            return $post_id;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }

       if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        } 
                    
        update_post_meta($post->ID, "label_1", $_POST["label_1"]);  
        update_post_meta($post->ID, "label_2", $_POST["label_2"]);  
        update_post_meta($post->ID, "label_3", $_POST["label_3"]);  
        update_post_meta($post->ID, "label_4", $_POST["label_4"]);  
        update_post_meta($post->ID, "label_1_text", $_POST["label_1_text"]);  
        update_post_meta($post->ID, "label_2_text", $_POST["label_2_text"]);  
        update_post_meta($post->ID, "label_3_text", $_POST["label_3_text"]);  
        update_post_meta($post->ID, "label_4_text", $_POST["label_4_text"]);  
    }                                         
}
endif;


function plusred_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'plusred_page_menu_args' );

function plusred_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'plusred_excerpt_length' );

function plusred_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'plusred' ) . '</a>';
}

function plusred_auto_excerpt_more( $more ) {
	return ' &hellip;' . plusred_continue_reading_link();
}
add_filter( 'excerpt_more', 'plusred_auto_excerpt_more' );

function plusred_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= plusred_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'plusred_custom_excerpt_more' );

add_action( 'init', 'add_excerpts_to_pages' );

    function add_excerpts_to_pages() {
        add_post_type_support( 'page', 'excerpt' );  
        add_post_type_support( 'post', 'excerpt' );  
    }

if ( ! function_exists( 'plusred_comment' ) ) :

function plusred_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'plusred' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'plusred' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'plusred' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'plusred' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'plusred' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'plusred' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

function plusred_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'plusred_remove_recent_comments_style' );

if ( ! function_exists( 'plusred_posted_on' ) ) :

function plusred_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'plusred' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'plusred' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'plusred_posted_in' ) ) :

function plusred_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'plusred' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'plusred' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'plusred' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif; 
