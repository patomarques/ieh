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
                    <div id="content-text-oq-fazemos">
                        <?php
                            $introTexto =  get_post_meta(get_the_ID(), 'intro', TRUE);
                            echo apply_filters('meta_content', $introTexto);
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-full">
            <div class="box-proporcional-img">
                <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'primeira_imagem', TRUE), 'full'); ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-justify">
                    <?php
                    $objetivos =  get_post_meta(get_the_ID(), 'objetivos', TRUE);
                    echo apply_filters('meta_content', $objetivos);
                    ?>
                </div>
            </div>
        </div>
        <div class="full-content o-que-fazemos-bloco-imagens">
            <div class="column-img-1">
                <img class="my_class" <?php awesome_acf_responsive_image(get_field('imagem_inline_1')['id'], 'thumb-840', '900px'); ?>  alt="" />
            </div>
            <div class="column-img-2">
                <img class="my_class" <?php awesome_acf_responsive_image(get_field('imagem_inline_2')['id'], 'thumb-840', '900px'); ?>  alt="" />


            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 bloco-texto-apos-imagens">
                    <?php echo get_field('bloco_texto_apos_imagens'); ?>
                </div>
            </div>
        </div>

    </section>

    <script type="text/javascript">
        text_home = <?php echo json_encode(get_the_title()); ?>;

        jQuery(window).load(function($) {
            document.getElementById('text-home').textContent = text_home;
            document.getElementById('box-text-home').classList.add('content-text-bottom');
        });

    </script>

<?php get_footer(); ?>