<?php
global $post;
$post_slug  = $post->post_name;
$post_id    = $post->ID;

$pagesInverseTitle = array('about-us', 'what-we-do', 'our-projects');
?>

<div class="home-begin-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="text-left logo-margin-bottom">
                    <a href="<?php echo get_site_url(); ?>" class="logo-home">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-branca.png"
                             alt=""
                             class="logo-home-img">
                    </a>
                </div>
                <div class="text-right content-top-right">
                    <ul class="list-inline icons-social-top d-none d-lg-block">
                        <li class="list-inline-item">
                            <a href="https://pt-br.facebook.com/institutodeecologiahumana"
                               class="icon-link icon-fb icon-white" title="Facebook" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/icons/social-fb.png"
                                     alt="" class="social-icon">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/ieh.insta/"
                               class="icon-link icon-ig icon-white" title="Instagram" target="_blank">
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
                    <h2 id="text-home" class="text-home text-larger c-white">

                        <?php if (is_front_page()) { ?>

                            <span v-show="language == 'pt'">Desde 1990, <br>em busca <br>de educar e <br>construir laços.</span>
                            <span v-show="language == 'en'">Since 1990, <br>find educate<br>and construct <br>afetivity.</span>

                        <?php } else { ?>

                            <span v-show="language == 'pt'">
                                            <?php
                                            if (in_array($post_slug, $pagesInverseTitle)) {
                                                echo get_field('title_alternative');
                                            } else {
                                                echo get_the_title();
                                            }
                                            ?>
                                      </span>
                            <span v-show="language == 'en'">
                                            <?php
                                            if (in_array($post_slug, $pagesInverseTitle)) {
                                                echo get_the_title();
                                            } else {
                                                echo get_field('title_alternative');
                                            }
                                            ?>
                                        </span>

                        <?php } ?>

                    </h2>
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

                <ul class="navbar-nav-home-menu list-unstyled list-inline" v-show="language == 'pt'">
                    <li>
                        <a href="<?php echo get_site_url(); ?>/quem-somos/"
                           class="link-menu <?php if ($post_slug == 'quem-somos') {
                               echo "menu-actived";
                           } ?>">QUEM <br>SOMOS</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/o-que-fazemos/"
                           class="link-menu <?php if ($post_slug == 'o-que-fazemos') {
                               echo "menu-actived";
                           } ?>">O QUE <br>FAZEMOS</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/linhas-de-acao/"
                           class="link-menu <?php if ($post_slug == 'linhas-de-acao') {
                               echo "menu-actived";
                           } ?>">LINHAS <br>DE AÇÃO</a>
                    </li>
                    <li>
                        <a href="<?php if (!is_home()) {
                            echo get_site_url();
                        } ?>#home-ieh-em-numeros" class="link-menu">IEH EM <br>NÚMEROS</a>
                    </li>
                    <li>
                        <a href="<?php if (!is_home()) {
                            echo get_site_url();
                        } ?>#home-depoimentos" class="link-menu">DEPOIMENTOS</a>
                    </li>
                </ul>

                <ul class="navbar-nav-home-menu list-unstyled list-inline menu-english"
                    v-show="language == 'en'">
                    <li>
                        <a href="<?php echo get_site_url(); ?>/about-us/"
                           class="link-menu <?php if ($post_slug == 'about-us') {
                               echo "menu-actived";
                           } ?>">ABOUT<br>US</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/what-we-do/"
                           class="link-menu <?php if ($post_slug == 'what-we-do') {
                               echo "menu-actived";
                           } ?>">WHAT<br>WE DO</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url(); ?>/course-of-action/"
                           class="link-menu <?php if ($post_slug == 'course-of-action') {
                               echo "menu-actived";
                           } ?>">COURSE<br>OF ACTION</a>
                    </li>
                    <li>
                        <a href="<?php if (!is_home()) {
                            echo get_site_url();
                        } ?>#home-ieh-em-numeros" class="link-menu">IEH <br>STATISTICS</a>
                    </li>
                    <li>
                        <a href="<?php if (!is_home()) { echo get_site_url() . "#home-depoimentos"; } ?>"
                           class="link-menu">TESTIMONIALS</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>