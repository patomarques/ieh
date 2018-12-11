<?php
/* Template Name: O Que Fazemos */
get_header();

$idPageReferer = get_id_by_slug('o-que-fazemos');

?>
    <script type="text/javascript">
        document.getElementById('box-text-home').classList.add('content-text-bottom');
    </script>

    <section id="page-content" class="page-content page-o-que-fazemos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-right">
                    <h1 class="title-section">
                        <span v-show="language == 'pt'">O Que<br>Fazemos</span>
                        <span v-show="language == 'en'">What<br>We Do</span>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-justify">
                    <div id="content-text-oq-fazemos">
                        <span v-show="language == 'pt'"><?php echo get_field('intro', $idPageReferer); ?></span>
                        <span v-show="language == 'en'"><?php echo get_field('intro_en', $idPageReferer); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-full">
            <div class="box-proporcional-img">
                <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'primeira_imagem', TRUE), 'full'); ?>
            </div>
        </div>

        <section class="container" id="objetivos"></section>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 text-justify">
                    <span v-show="language == 'pt'"><?php echo get_field('objetivos', $idPageReferer); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('objetivos_en', $idPageReferer); ?></span>
                </div>
            </div>
        </section>

        <div class="full-content o-que-fazemos-bloco-imagens">
            <div class="column-img-1">
                <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'imagem_inline_1', TRUE), 'full'); ?>
            </div>
            <div class="column-img-2">
                <?php echo wp_get_attachment_image(get_post_meta(get_the_ID(), 'imagem_inline_2', TRUE), 'full'); ?>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 bloco-texto-apos-imagens content-text">
                    <span v-show="language == 'pt'"><?php echo get_field('bloco_texto_apos_imagens', $idPageReferer); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('bloco_texto_apos_imagens_en', $idPageReferer); ?></span>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>