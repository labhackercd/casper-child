<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Casper
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="extraneous">
  <div class="container">
    <nav class="navbar nav-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="//labhackercd.net/"><img class="logo" src="{{ assets }}/img/Logo-Glitch.gif" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li><a href="//blog.labhackercd.net/">Blog</a></li>        
          <li>
            <a href="//labhackercd.net/about.html">Sobre</a>
          </li>
          <li class="separator">&nbsp</li>
          <li>
            <a title="E-democracia" class="edemocracia icon-img" href="http://edemocracia.camara.gov.br/web/laboratorio-hacker"></a>
          </li>
          <li>
            <a title="Hackdash" class="hackdash icon-img" href="http://labhacker.hackdash.org/"></a>
          </li>        
          <li>
          <a title="Github" class="github icon" href="https://github.com/labhackercd/">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-github fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          </li>
          <li>
          <a title="Twitter" class="twitter icon" href="https://twitter.com/labhackercd">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          </li>
          <li>
          <a title="Facebook" class="facebook icon" href="https://www.facebook.com/LabHackerCD">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          </li>
          <li>
          <a title="Flickr" class="flickr icon" href="https://www.flickr.com/photos/118815643@N04/">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-flickr fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          </li>
        </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
  </div>
</div>

<header id="masthead" role="banner" class="site-head site-header" <?php if(get_header_image() ) : ?>style="background-image: url(<?php header_image(); ?>);"<?php endif ?>>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <div>
            <h1 class="menu-toggle">
                <a class="icon-menu" href="#">
                    <span class="hidden"><?php _e( 'Menu', 'casper' ); ?></span>
                </a>
            </h1>
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'casper' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
    </nav><!-- #site-navigation -->

    <div class="vertical-row">
        <div class="vertical">
            <div class="site-head-content inner">
                <?php if ( get_theme_mod( 'casper_logo' ) ) : ?>
                    <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'casper_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                <?php endif; ?>

                <div class="social-icons">
                    <?php if ( false != get_theme_mod( 'casper_social_youtube')) { ?>
                        <a class="icon-youtube" href="<?php echo esc_url( get_theme_mod( 'casper_social_youtube') ); ?>">
                            <span class="hidden"><?php _e( 'Youtube', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_tumblr')) { ?>
                        <a class="icon-tumblr" href="<?php echo esc_url( get_theme_mod( 'casper_social_tumblr') ); ?>">
                            <span class="hidden"><?php _e( 'Tumblr', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_instagram')) { ?>
                        <a class="icon-instagram" href="<?php echo esc_url( get_theme_mod( 'casper_social_instagram') ); ?>">
                            <span class="hidden"><?php _e( 'Instagram', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_google')) { ?>
                        <a class="icon-google-plus" href="<?php echo esc_url( get_theme_mod( 'casper_social_google') ); ?>">
                            <span class="hidden"><?php _e( 'Google+', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_facebook')) { ?>
                        <a class="icon-facebook" href="<?php echo esc_url( get_theme_mod( 'casper_social_facebook') ); ?>">
                            <span class="hidden"><?php _e( 'Facebook', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_twitter')) { ?>
                        <a class="icon-twitter" href="<?php echo esc_url( get_theme_mod( 'casper_social_twitter' ) ); ?>">
                            <span class="hidden"><?php _e( 'Twitter', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_website')) { ?>
                        <a class="icon-home" href="<?php echo esc_url( get_theme_mod( 'casper_social_website') ); ?>">
                            <span class="hidden"><?php _e( 'Home', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_mail')) { ?>
                        <a class="icon-envelope" href="<?php echo esc_url( 'mailto:' . get_theme_mod( 'casper_social_mail') ); ?>">
                            <span class="hidden"><?php _e( 'Email', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_linkedin')) { ?>
                        <a class="icon-linkedin" href="<?php echo esc_url( get_theme_mod( 'casper_social_linkedin') ); ?>">
                            <span class="hidden"><?php _e( 'LinkedIn', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_github')) { ?>
                        <a class="icon-github-alt" href="<?php echo esc_url( get_theme_mod( 'casper_social_github') ); ?>">
                            <span class="hidden"><?php _e( 'GitHub', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_bitbucket')) { ?>
                        <a class="icon-bitbucket" href="<?php echo esc_url( get_theme_mod( 'casper_social_bitbucket') ); ?>">
                            <span class="hidden"><?php _e( 'Bitbucket', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_stack')) { ?>
                        <a class="icon-stack-overflow" href="<?php echo esc_url( get_theme_mod( 'casper_social_stack') ); ?>">
                            <span class="hidden"><?php _e( 'Stack Overflow', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_dribbble')) { ?>
                        <a class="icon-dribbble" href="<?php echo esc_url( get_theme_mod( 'casper_social_dribbble') ); ?>">
                            <span class="hidden"><?php _e( 'Dribbble', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                    <?php if ( false != get_theme_mod( 'casper_social_rss')) { ?>
                        <a class="icon-feed" href="<?php echo esc_url( get_theme_mod( 'casper_social_rss') ); ?>">
                            <span class="hidden"><?php _e( 'RSS', 'casper' ); ?></span>
                        </a>
                    <?php } ?>
                </div>
                <h1 class="blog-title"><a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="blog-description"><?php bloginfo( 'description' ); ?></h2>
            </div>
        </div>
    </div>
</header><!-- #masthead -->

<main id="content" class="content" role="main">
