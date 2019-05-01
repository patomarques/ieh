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
    <script>
        urlBase = document.location.origin;

        var languageSession = '';
        <?php if(isset($_SESSION['lang_site'])){ ?>
        languageSession = <?= json_encode($_SESSION['lang_site']) ?>;
        <?php } ?>
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/vue/dist/vue.js"></script>
    <!--<script src="--><?php //get_template_directory_uri(); ?><!--/node_modules/vue/dist/vue.min.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/custom/js/multilanguage.js"></script>
</head>

<body <?php body_class(); ?>>
<?php
    global $post;
    $post_slug  = $post->post_name;
    $post_id    = $post->ID;

    $pagesInverseTitle = array('about-us', 'what-we-do', 'our-projects');
?>

<div id="body-pseudelement" class="<?php if(is_front_page()){ echo "section-content-home"; } ?>">

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

            <?php
                echo wp_nav_menu(array(
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

<aside id="menu-element">
    <nav>
        <ul v-show="language == 'pt'">
          <li>
            <a href="/" class="link-menu <?php if(is_home()){ echo "menu-actived"; } ?>">INÍCIO</a>
          </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/quem-somos/" class="link-menu <?php if($post_slug == 'quem-somos'){ echo "menu-actived"; } ?>">QUEM SOMOS</a>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/o-que-fazemos/" class="link-menu <?php if($post_slug == 'o-que-fazemos'){ echo "menu-actived"; } ?>">O QUE FAZEMOS</a>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/linhas-de-acao/" class="link-menu <?php if($post_slug == 'linhas-de-acao'){ echo "menu-actived"; } ?>">LINHAS DE AÇÃO</a>
            </li>
            <li>
                <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-apoie-nossos-projetos" class="link-menu">APOIE NOSSOS PROJETOS</a>
            </li>
            <li>
                <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-ieh-em-numeros" class="link-menu">IEH EM NÚMEROS</a>
            </li>
            <li>
                <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-depoimentos" class="link-menu">DEPOIMENTOS</a>
            </li>
        </ul>
        <ul v-show="language == 'en'">
            <li>
                <a href="<?php echo get_site_url(); ?>/about-us/" class="link-menu <?php if($post_slug == 'about-us'){ echo "menu-actived"; } ?>">ABOUT US</a>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/what-we-do/" class="link-menu <?php if($post_slug == 'what-we-do'){ echo "menu-actived"; } ?>">WHAT WE DO</a>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/course-of-action/" class="link-menu <?php if($post_slug == 'course-of-action'){ echo "menu-actived"; } ?>">COURSE OF ACTION</a>
            </li>
            <li>
                <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-apoie-nossos-projetos" class="link-menu">SUPPORT OUR PROJECTS</a>
            </li>
            <li>
                <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-ieh-em-numeros" class="link-menu">IEH STATISTICS</a>
            </li>
            <li>
                <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-depoimentos" class="link-menu">TESTIMONIALS</a>
            </li>
        </ul>
        <ul>
            <li class="text-center">
                <ul class="list-inline icons-social-top">
                    <li class="list-inline-item">
                        <a href="https://pt-br.facebook.com/institutodeecologiahumana" class="icon-link icon-fb icon-white" title="Facebook">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/icons/social-fb.png"
                                 alt="" class="social-icon">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/ieh.insta/" class="icon-link icon-ig icon-white" title="Instagram">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/icons/social-ig.png"
                                 class="social-icon">
                        </a>
                    </li>
                    <li class="list-inline-item" id="element-language-chosen">
                        <label class="switch-chose" @click="changeLanguage()">
                            <input type="checkbox" v-model="input_lang" name="language">
                            <span class="slider-chose round"></span>
                            <span class="lang pt">PT</span>
                            <span class="lang es">EN</span>
                        </label>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

    <?php

    //full, larger, medium
    if (is_front_page()){
        $args_sliders = array(
            'posts_per_page' => -1,
            'post_type' => 'home-slider',
            'orderby' => "rand",
            'public' => false,
            'order' => "ASC"
        );

        $sliders = new WP_Query($args_sliders);
    }else{
        $imagemUrlFull   =  get_the_post_thumbnail_url(get_the_ID(), 'full');
        $imagemUrlLarge  =  get_the_post_thumbnail_url(get_the_ID(), 'large');
        $imagemUrlMedium =  get_the_post_thumbnail_url(get_the_ID(), 'medium');
    }
?>

    <?php if (is_front_page()) { ?>

        <?php get_template_part('template-parts/header-menu', 'header-menu'); ?>

        <section class="banner-slider">

            <div class="tiny-slider-customized-controls tiny-slider-inner">
                <?php while ( $sliders->have_posts() ) : $sliders->the_post(); ?>
                    <div class="tiny-slider-item">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="bg-img-fix d-block d-sm-none">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="bg-img-fix d-none d-md-block d-lg-block d-xl-block">
                    </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            </div>

            <ul class="controls customized-arrows">
                <li class="prev">
                    <i class="fa fa-angle-left"></i>
                </li>
                <li class="next">
                    <i class="fa fa-angle-right"></i>
                </li>
            </ul>

        </section>

        <div class="lines-fullsize bg-cinza-claro"></div>
        <div class="lines-fullsize bg-azul-claro"></div>

    <?php }else{ ?>

        <ul class="list-inline d-lg-none d-xl-none">
          <li class="list-inline-item">
            <div id="menu-bars-x">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </li>
        </ul>

        <section id="background-img-home" class="content-full-background parallax-effect bg-home-parallax">

            <div class="content-bg-img">
                <img src="<?php echo $imagemUrlLarge; ?>" alt="" class="bg-img-fix d-block d-sm-none">
                <img src="<?php echo $imagemUrlFull; ?>" alt=""
                     class="bg-img-fix d-none d-md-block d-lg-block d-xl-block">
            </div>

            <?php get_template_part('template-parts/header-menu', 'header-menu'); ?>

        </section>

        <div class="lines-fullsize bg-cinza-claro"></div>
        <div class="lines-fullsize bg-azul-claro"></div>

    <?php } ?>
