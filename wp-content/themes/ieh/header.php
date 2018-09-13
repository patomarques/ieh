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

<?php
    global $post;
    $post_slug  = $post->post_name;
    $post_id    = $post->ID;
?>

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

<aside>
    <nav>
        <ul>
            <li>
                <a href="<?php echo get_site_url(); ?>/quem-somos/" class="link-menu <?php if($post_slug == 'quem-somos'){ echo "menu-actived"; } ?>">QUEM SOMOS</a>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/o-que-fazemos/" class="link-menu <?php if($post_slug == 'o-que-fazemos'){ echo "menu-actived"; } ?>">O QUE FAZEMOS</a>
            </li>
            <li>
                <a href="<?php echo get_site_url(); ?>/projetos/" class="link-menu <?php if($post_slug == 'projetos'){ echo "menu-actived"; } ?>">NOSSOS PROJETOS</a>
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
                    <li class="list-inline-item">
                        <label class="switch-chose">
                            <input type="checkbox">
                            <span class="slider-chose round"></span>
                            <span class="lang pt">PT</span>
                            <span class="lang es">ES</span>
                        </label>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<?php
    $imagemUrl = "";
    if (is_front_page() ){
        $imagemUrl = wp_get_attachment_image_src(get_field('banner_topo')['id'], 'full')[0];
    }else{
        $imagemUrl =  get_the_post_thumbnail_url(get_the_ID(), 'full');

    }
?>

<section id="background-img-home" class="content-full-background parallax-effect bg-home-parallax" style="background-image: url(<?php echo $imagemUrl; ?>)">
    <div class="home-begin-content">
        <?php
            if (is_front_page() ){
                echo wp_get_attachment_image(get_field('imagem_destaque')['id'], 'full', '', array('class' => 'content-full-background parallax-effect bg-home-parallax'));
            }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="text-left logo-margin-bottom">
                        <a href="<?php echo get_site_url(); ?>" class="logo-home">
                            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-branca.png" alt=""
                                 class="logo-home-img">
                        </a>
                    </div>
                    <div class="text-right content-top-right">
                        <ul class="list-inline icons-social-top d-none d-lg-block">
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
                            <li class="list-inline-item">
                                <label class="switch-chose">
                                    <input type="checkbox">
                                    <span class="slider-chose round"></span>
                                    <span class="pt">PT</span>
                                    <span class="es">ES</span>
                                </label>
                            </li>

                        </ul>
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
                    </div>
                    <div id="box-text-home" class="box-text-home text-right">
                        <h2 id="text-home" class="text-home text-larger c-white">Desde 1990, <br>em busca <br>de educar e <br>construir laços.</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="menu-home-content d-none d-lg-block" id="menu-home-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-left" id="logo-fixed-content">
                    <a href="<?php echo get_site_url(); ?>" class="logo-home-fixed">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-cinza.png" alt=""
                             class="logo-home-img">
                    </a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="menu-fixed-col">

                    <ul class="navbar-nav-home-menu list-unstyled list-inline">
                        <li>
                            <a href="<?php echo get_site_url(); ?>/quem-somos/" class="link-menu <?php if($post_slug == 'quem-somos'){ echo "menu-actived"; } ?>">QUEM <br>SOMOS</a>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/o-que-fazemos/" class="link-menu <?php if($post_slug == 'o-que-fazemos'){ echo "menu-actived"; } ?>">O QUE <br>FAZEMOS</a>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/projetos/" class="link-menu <?php if($post_slug == 'projetos'){ echo "menu-actived"; } ?>">NOSSOS <br>PROJETOS</a>
                        </li>
                        <li>
                            <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-apoie-nossos-projetos" class="link-menu">APOIE <br>NOSSOS <br>PROJETOS</a>
                        </li>
                        <li>
                            <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-ieh-em-numeros" class="link-menu">IEH EM <br>NÚMEROS</a>
                        </li>
                        <li>
                            <a href="<?php if(!is_home()){ echo get_site_url(); } ?>#home-depoimentos" class="link-menu">DEPOIMENTOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="lines-fullsize bg-cinza-claro"></div>
<div class="lines-fullsize bg-azul-claro"></div>
<?//php endif; ?>