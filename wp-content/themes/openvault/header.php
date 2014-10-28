<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="<?php echo get_option('openvault_url'); ?>/assets/application.css?body=1" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
  <div class="hfeed container" id="main-container">
    <div class="row" id="header">
      <div class="span12">
        <!-- Openvault Logo and login -->

        <div class="row" id="header_top">
          <div class="span6">
            <a href="/">
            <div id="ov-logo-home">
              OpenVault
            </div></a>
          </div>

          <div class="span6 pull-right action_links">
            &nbsp;
          </div>
        </div><!-- Logo and login -->
        <!-- MLA Logo and search bar -->

        <div class="row">
          
          <div class="span3">
            <div id="mla-logo">
              Media Library and Archives
            </div>
          </div>

          <div class="span9">
            <div id="search-bar">
              <form accept-charset="UTF-8" action="<?php echo get_option('openvault_url') ?>/catalog" class="search-query-form form-inline clearfix" method="get">
                <div class="input-append pull-left">
                  <label class="hide-text" for="q">Search Archive</label> <input class="search_q q" id="q" name="q" placeholder="Searh Archive" type="text"> <button class="search-btn icon-search" id="search" style="font-style: italic" type="submit"></button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="row" id="main">
