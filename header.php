<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php 
            if (function_exists('is_tag') && is_tag()) { 
                echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
            } elseif (is_archive()) { 
                wp_title(''); echo ' Archive - '; 
            } elseif (is_search()) { 
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
            } elseif (!(is_404()) && (is_single()) || (is_page())) { 
                wp_title(''); echo ' - '; 
            } elseif (is_404()) {
                echo 'Not Found - '; 
            }
            bloginfo('name');
  ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri();  ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo get_template_directory_uri();  ?>/css/modern-business.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();  ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Modern Business</a>
        </div>
        <?php wp_nav_menu(array(            
                    'menu'              => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                ); ?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>