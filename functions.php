<?php

// custom menu builder
// https://github.com/twittem/wp-bootstrap-navwalker
require_once('inc/wp_bootstrap_navwalker.php');

function mb_register_my_menu() {
  register_nav_menu('main-menu', __( 'Main Menu' ));
}
add_action( 'init', 'mb_register_my_menu' );

function mb_register_sidebar()
{
    // sidebar
    register_sidebar(array('id'=>'sidebar', 'name'=>'Sidebar','before_widget' => '','after_widget' => '',));
    // Carousel
    register_sidebar(array('id'=>'carousel', 'name'=>'Carousel','before_widget' => '','after_widget' => '',));
    // Triptych - i.e. three divs on homepage
    register_sidebar(array('id'=>'triptych', 'name'=>'Triptych','before_widget' => '','after_widget' => '',));
    // footer
    register_sidebar(array('id'=>'footer', 'name'=>'Footer','before_widget' => '','after_widget' => '',));
}
add_action('init', 'mb_register_sidebar');

<?php
function mb_breadcrumb() {
        echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> / </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> / </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> / </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                 
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<strong> ';
                echo the_title();
                echo '</strong>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
?>