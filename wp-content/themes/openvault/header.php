<!DOCTYPE html>

<html>
<head>
  <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
  <!--[if IEMobile]>
    <meta http-equiv="cleartype" content="on">
    <![endif]-->

<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
  <link href=
  "http://openvault.wgbh.org/assets/favicon-06f51cefefc0543acf7794075c74e7d2.ico"
  rel="shortcut icon" type="image/vnd.microsoft.icon">
  <link href="/wp-content/themes/openvault/application.css"
  media="screen" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <style>
    .entry-format {
      display: none;
    }
  </style>
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

<body class="blacklight-catalog blacklight-catalog-home">
  <!-- Header container -->

  <div id="header">
    <div class="container">
      <div class="row-fluid">
        <div id="header_inner">
          <!-- Openvault Logo and login -->

          <div class="span4 hidden-phone">
            <h1><a href="http://openvault.wgbh.org/" class=
            "logo-link">WGBH Media Library &amp; Archives Open
            Vault</a></h1>
          </div>

          <div class="span6 hidden-phone">
            <div id="search-bar">
              <form accept-charset="UTF-8" action="http://openvault.wgbh.org/catalog" class=
              "search-query-form form-inline" method="get">
                <div class="pull-left">
                  <label for="search_field" class=
                  "hide-text">Search in</label> <span class=
                  "hide-text">for</span>
                </div>

                <div id="nav-s-input" class=
                "input-append pull-left">
                  <label for="q" class=
                  "hide-text">Search...</label> <input class=
                  "search_q q q_full" id="q" name="q" placeholder=
                  "What are you looking for?" type="text">
                  <button type="submit" class="search-btn" id=
                  "search"></button>
                </div>
              </form>
            </div>

            <div class="pull-right">
              <span id="browse-label">Browse:</span> <a href=
              "http://openvault.wgbh.org/series" class=
              "btn">Series</a>
            </div>
          </div><!-- Logo and login -->

          <div id="mobile-header" class=
          "hidden-tablet hidden-desktop">
            <a href="http://openvault.wgbh.org/"><img src=
            "http://openvault.wgbh.org/assets/ov_logo_220.png" class="logo"></a>
            
          </div>
        </div>
      </div>
    </div>
  </div><!-- /Header -->
  <!-- Main container -->

  <div id="main-container" class="container">
    <!-- Body Content -->

    <div id="body" class="row-fluid">
      <div class="span12">
