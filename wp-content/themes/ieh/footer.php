<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
</div>

    <section id="footer-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right logo-footer-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-branca.png" alt="IEH - Logo" class="logo-footer">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                    <div class="box-footer-content">
                        <ul class="list-info-contact list-unstyled">
                            <li><span class="info-text">IEH - Instituto de Ecologia Humana</span></li>
                            <li><h4 class="info-text">Estrada do Encanamento, 127</h4></li>
                            <li><span class="info-text">Bairro de Parnamirin</span></li>
                            <li><span class="info-text">+55 81 3441.1770</span></li>
                            <li>
                                <ul class="list-info-text">
                                    <li><span class="text-address">Recife</span></li>
                                    <li><span class="text-address"><span class="little-ball ball1 c-white">&#9679;</span>Pernambuco</span><span class="little-ball ball2 c-white">&#9679;</span></li>
                                    <li><span class="text-address">Brasil</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?> text-center" role="contentinfo">

    <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?> &copy; <?php echo date('Y'); ?>
    </footer>

<?php wp_footer(); ?>
</body>
</html>