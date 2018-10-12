<?php

//Öne çıkan görsel
add_theme_support( 'post-thumbnails' );
//Boyut
set_post_thumbnail_size( 780, 440, true );

////////////////////////////////////////////////

//Site Başlık
function caglarmin_wp_title( $title, $sep ) {
	global $paged, $page;
	//
	if ( is_feed() )
		return $title;

	
	$title .= get_bloginfo( 'name' );

	//
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	//
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'caglarmin' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'caglarmin_wp_title', 10, 2 );

////////////////////////////////////////////////

//Sayfalama

function sayfalama($pages = '', $range = 3){
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '')
	{
	global $wp_query;
	$pages = $wp_query->max_num_pages;
	if(!$pages)
	{
	$pages = 1;
	}
	}
	if(1 != $pages)
	{
	echo "<div class='wp-pagenavi'>";
	echo "<span>".$paged."/".$pages."</span>";
	if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>İlk</a>";
	if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";
	for ($i=1; $i <= $pages; $i++)
	{
	if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	{
	echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
	}
	}
	if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
	if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Son</a>";
	echo "</div>";
	}
}

////////////////////////////////////////////////

//Devamını oku
function new_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

////////////////////////////////////////////////

//Menüler
register_nav_menus( array(
	'ust_menu' => 'Üst Menü',
) );

////////////////////////////////////////////////

//Aktif Menü
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'aktif';
     }
     return $classes;
}

////////////////////////////////////////////////

//Sidebar
if ( function_exists('register_sidebar') )
     register_sidebars(1, array(
    'name' => 'Sidebar',
    'before_widget' =>'<div class="skutu">',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    'after_widget' =>'</div>',
) );

////////////////////////////////////////////////

//HTML5 Arama Formu

add_theme_support( 'html5', array( 'search-form' ) );

?>