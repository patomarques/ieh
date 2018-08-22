<?php get_header(); ?>

    <section id="page-content" class="page-content page-o-que-fazemos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-right">
                    <h1 class="title-section">O Que<br>Fazemos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-justify">
                    <?php
                        $introTexto =  get_post_meta(get_the_ID(), 'intro', TRUE);
                        echo apply_filters('meta_content', $introTexto);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-11">

                </div>
                <?php
                    echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'primeira_imagem', TRUE), 'full');
                ?>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-justify">
                    <?php
                    $objetivos =  get_post_meta(get_the_ID(), 'objetivos', TRUE);
                    echo apply_filters('meta_content', $objetivos);
                    ?>
                </div>
            </div>

<!--            --><?php
//            $args_projetos = array(
//                'posts_per_page' => -1, // Number of recent posts thumbnails to display
//                'post_type' => 'nossos-projetos', // Show only the published posts
//                'orderby' => "date",
//                'order' => "DESC"
//            );
//
//            $nossos_projetos = new WP_Query($args_projetos);
//
//            while ($nossos_projetos->have_posts()) : $nossos_projetos->the_post(); ?>
<!--            <div class="row">-->
<!--                <div class="col-xs-12">-->
<!--                    --><?php //echo get_the_content(); ?>
<!--                    --><?////php echo get_post_meta(get_the_ID(), 'author', TRUE); ?>
<!--                </div>-->
<!--            </div>-->
<!--            --><?php //endwhile; ?>
        </div>
    </section>

    <script type="text/javascript">
        imagem_bg = <?php echo json_encode(get_the_post_thumbnail_url()); ?>;
        text_home = <?php echo json_encode(get_the_title()); ?>;

        //set image header background (DOMjs)
        window.onload = function(){
            setImagemHeaderBackground(imagem_bg, text_home, "page-o-que-fazemos");
        }

    </script>

<?php get_footer(); ?>