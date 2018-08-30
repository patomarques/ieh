<?php
/* Template Name: Nossos Projetos */
get_header();
?>

    <div class="lines-fullsize bg-cinza-claro"></div>
    <div class="lines-fullsize bg-azul-claro"></div>

    <section id="page-content" class="page-content">
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
            ?>

            <?php while ( $nossos_projetos->have_posts() ) : $nossos_projetos->the_post(); ?>

                <div class="row row-nossos-projetos">
                    <div class="col-xs-12 col-sm-12 col-md-4 text-center">
                        <?php
//                            var_dump(get_post_meta(get_the_ID(), 'icone')[0]);
//                            die();
                        ?>
                        <?php// echo get_the_post_thumbnail(get_post_meta(get_the_ID(), 'icone')[0]); ?>
<!--                        <img src="--><?php //echo get_the_post_thumbnail(get_post_meta(get_the_ID(), 'icone')[0]); ?><!--" class="icon-projetos">-->
                        <!--<img src="<?php /*echo get_template_directory_uri() . "/custom/img/icons/upload.png"; */?>" class="icon-projetos">-->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <p class="list-subtitle c-azul-claro"><?php echo get_the_title(); ?></p>
                        <?php echo get_the_content(); ?>
                        <?php //echo get_post_meta(get_the_ID(), 'author', TRUE); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // reset the query ?>
        </div>
    </section>

    <script type="text/javascript">
        imagem_bg = <?php echo json_encode(get_the_post_thumbnail_url()); ?>;
        text_home = <?php echo json_encode(get_the_title()); ?>;

        //set image header background (DOMjs)
        window.onload = function(){
            setImagemHeaderBackground(imagem_bg, 'Projetos', "page-nossos-projetos");
        }

    </script>

<?php get_footer(); ?>