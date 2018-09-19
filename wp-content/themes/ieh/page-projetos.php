<?php
/* Template Name: Nossos Projetos */
get_header();
?>

    <section id="page-content" class="page-content page-nossos-projetos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="title-default title-nossos-projetos c-azul-claro">Nossos Projetos</h1>
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
                'orderby' => "meta_value_ordem",
                'order' => "ASC"
            );

            $nossos_projetos = new WP_Query($args_projetos);

//            echo "<pre>";
//            var_dump($nossos_projetos);
//            echo "</pre>";
//            die();
            ?>

            <?php while ( $nossos_projetos->have_posts() ) : $nossos_projetos->the_post();

                $image = get_field('icone', get_the_ID());
                $imagem = get_field('icon', get_the_ID());
                $slugProject = get_post_field( 'post_name', get_post() );
//                echo "<pre>";
//                var_dump($imagem, $image, $slugProject, get_the_ID(), $icon);
//                echo "</pre>";
                //die();
            ?>
                <div class="row row-nossos-projetos" id="<?php echo $slugProject; ?>">
                    <div class="col-xs-12 col-sm-12 col-md-4 text-center">

                        <img src="<?php echo $image['url']; ?>" class="icon-projetos">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <p class="list-subtitle c-azul-claro"><?php echo get_the_title(); ?></p>
                        <?php echo get_the_content(); ?>
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
        text_home = <?php echo json_encode(get_the_title()); ?>;
        document.getElementById('text-home').textContent = text_home;
        document.getElementById('box-text-home').classList.add('content-text-bottom');

        (function($) {
            $(window).load(function() {
                var urlToScroll = window.location.href;
                urlToScroll = urlToScroll.split('/#');

                if(urlToScroll.length > 1){
                    var scrollToSection = urlToScroll[1];

                    $('html, body').animate({
                        scrollTop: $("#" + scrollToSection).offset().top - 140
                    }, 600);
                    return false;
                }
            });

        })( jQuery );

    </script>

<?php get_footer(); ?>