<?php
/* Template Name: Nossos Projetos */
get_header();
?>
    <script type="text/javascript">
        document.getElementById('box-text-home').classList.add('content-text-bottom');
    </script>

    <section id="page-content" class="page-content page-nossos-projetos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="title-default title-nossos-projetos c-azul-claro">
                        <span v-show="language == 'pt'">Nossos Projetos</span>
                        <span v-show="language == 'en'">Our Projects</span>
                    </h1>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col-sm-12">
                    <div class="square-grid">
                        <?php get_template_part( 'inc/box-projects-grid'); ?>
                    </div>
                </div>
            </div>

            <?php
            $args_projetos = array(
                'posts_per_page' => -1, // Number of recent posts thumbnails to display
                'post_type' => 'nossos-projetos', // Show only the published posts
                'orderby' => "ordem",
                'order' => "ASC"
            );

            $nossos_projetos = new WP_Query($args_projetos);
            ?>

            <?php while ( $nossos_projetos->have_posts() ) : $nossos_projetos->the_post();

                $image = get_field('icon');

                ?>
                <div class="row row-nossos-projetos" id="<?php echo get_field('scroll-to');?>">
                    <div class="col-xs-12 col-sm-12 col-md-4 text-center">
                        <?php if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-projetos" />
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <span class="content-pt" v-show="language == 'pt'">
                            <p class="list-subtitle c-azul-claro"><?php echo get_the_title(); ?></p>
                            <?php echo get_the_content(); ?>
                        </span>
                        <span class="content-pt" v-show="language == 'en'">
                            <p class="list-subtitle c-azul-claro"><?php echo get_field('title_english'); ?></p>
                            <?php echo get_field('content_english'); ?>
                        </span>
                    </div>
                    <div class="col-sm-12 text-right">
                        <a href="#back-to-top" class="back-to-top" title="Ir para o topo"><i class="fa fa-angle-up text-right"></i></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>
        </div>
    </section>

    <script type="text/javascript">
        (function($) {
            $(window).load(function() {
                var urlToScroll = window.location.href;
                urlToScroll = urlToScroll.split('/#');

                if(urlToScroll.length > 1){
                    var scrollToSection = urlToScroll[1];


                    if(typeof $("#" + scrollToSection).offset() != 'undefined'){
                        $('html, body').animate({
                            scrollTop: $("#" + scrollToSection).offset().top - 140
                        }, 600);
                    }
                    return false;
                }
            });

        })( jQuery );
    </script>

<?php get_footer(); ?>