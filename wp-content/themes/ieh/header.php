<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header-home">
    <div>
        <nav>
            <?php if (get_theme_mod('wp_bootstrap_starter_logo')): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_attr(get_theme_mod('wp_bootstrap_starter_logo')); ?>"
                         alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>
            <?php else : ?>
                <a class="site-title"
                   href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a>
            <?php endif; ?>


            <!--                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">-->
            <!--                        <span class="navbar-toggler-icon"></span>-->
            <!--                    </button>-->

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'div',
                'container_id' => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id' => false,
                'menu_class' => 'navbar-nav',
                'depth' => 3,
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker()
            ));
            ?>

        </nav>
    </div>
</header>

<?php if (is_front_page() && !get_theme_mod('header_banner_visibility')): ?>

<section class="content-full-background bg-home-parallax">
    <div class="home-begin-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="text-left logo-margin-bottom">
                        <a href="" class="logo-home">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-branca.png" alt=""
                                 class="logo-home-img">
                        </a>
                    </div>
                    <div class="text-right content-top-right">
                        <ul class="list-inline icons-social-top">
                            <li class="list-inline-item">
                                <a href="" class="icon-link icon-fb icon-white" title="Facebook">
                                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/icons/social-fb.png"
                                         alt="" class="social-icon">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="icon-link icon-ig icon-white" title="Instagram">
                                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/icons/social-ig.png"
                                         class="social-icon">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <label class="switch-chose">
                                    <input type="checkbox">
                                    <span class="slider-chose round"></span>
                                    <span class="pt">PT</span>
                                    <span class="es">ES</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="box-text-home text-right">
                        <h2 class="text-home text-larger c-white">Desde 1990, <br>em busca <br>de educar e <br>construir laços.</h2>
                    </div>

                    <div class="menu-home-content">
                        <ul class="navbar-nav-home-menu list-unstyled list-inline">
                            <li>
                                <a href="#" class="link-menu">QUEM <br>SOMOS</a>
                            </li>
                            <li>
                                <a href="#" class="link-menu">O QUE <br>FAZEMOS</a>
                            </li>
                            <li>
                                <a href="#" class="link-menu">NOSSOS <br>PROJETOS</a>
                            </li>
                            <li>
                                <a href="#" class="link-menu">APOIE <br>NOSSOS <br>PROJETOS</a>
                            </li>
                            <li>
                                <a href="#" class="link-menu">IEH EM <br>NÚMEROS</a>
                            </li>
                            <li>
                                <a href="#" class="link-menu">DEPOIMENTOS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



            </div>
        </div>
    </div>
</section>
<!--        <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>-->

<?php endif; ?>