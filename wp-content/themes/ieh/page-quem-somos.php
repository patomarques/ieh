<?php

/* Template Name: Quem Somos */

get_header();

$idPageReferer = get_id_by_slug('quem-somos');
?>
<div id="page-content" class="page-quem-somos page-content">
    <section class="container" id='quem-somos'>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 class="title-default c-verde-lodo">
                    <span v-show="language == 'pt'">Quem<br>Somos</span>
                    <span v-show="language == 'en'">About<br>Us</span>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="content" v-show="language == 'pt'">
                    <div class="page-content-text">
                        <?php echo get_field('bloco_inicio_texto_pt', $idPageReferer); ?>
                    </div>
                </div>
                <div class="content" v-show="language == 'en'">
                    <div class="page-content-text">
                        <?php echo get_field('bloco_inicio_texto_en', $idPageReferer); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="full-content o-que-fazemos-bloco-imagens">
        <div class="column-img-1">
            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/02-sobre-nos-bg-01.jpg" alt="" class="img-responsive">
        </div>
        <div class="column-img-2">
            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/02-sobre-nos-bg-02.jpg" alt="" class="img-responsive">
        </div>
    </div>

    <div class="lines-fullsize bg-azul-claro line-mt mb-0"></div>

    <section class="content-full content-sobre-nos" id="sobre-nos">
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 text-right">
                <h2 class="title-dafault title-sobre-nos">
                    <span v-show="language == 'pt'">Sobre<br>Nós</span>
                    <span v-show="language == 'en'">About<br>Us</span>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <ul class="list-unstyled list-lateral-imgs">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/quem-somos-interna.png" alt="" class="img-responsive">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/02-sobre-nos-img-0001.jpg" alt="" class="img-responsive">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/02-sobre-nos-img-0002.jpg" alt="" class="img-responsive">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/02-sobre-nos-img-0003.jpg" alt="" class="img-responsive">
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text">
                <div class="content-text">
                    <span v-show="language == 'pt'"><?php echo get_field('sobre_nos_text', $idPageReferer); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('sobre_nos_texto_en', $idPageReferer); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="full-content bg-azul-claro content-a-coordenacao section-content" id="a-coordenacao">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title-section c-white">
                    <span v-show="language == 'pt'">Equipe</span>
                    <span v-show="language == 'en'">Team</span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <ul class="list-unstyled list-lateral-imgs">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/03-equipe-001.jpg" alt="" class="img-responsive">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/03-equipe-002.jpg" alt="" class="img-responsive">
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text">
                <span v-show="language == 'pt'"><?php echo get_field('a_coordenacao_texto', $idPageReferer); ?></span>
                <span v-show="language == 'en'"><?php echo get_field('a_coordenação_texto_en', $idPageReferer); ?></span>
            </div>
        </div>
    </section>

    <section class="bg-stripped-transversal section-missao section-content" id="missao" >
        <div class="row">
            <div class="col-sm-12 col-md-5 text-right">
                <h3 class="title-section c-white text-right">
                    <span v-show="language == 'pt'">MISSÃO E VISÃO</span>
                    <span v-show="language == 'en'">MISSION</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <ul class="list-unstyled list-lateral-imgs">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img003.png" alt="" class="img-responsive">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/04-missao-001.jpg" alt="" class="img-responsive">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/04-missao-002.jpg" alt="" class="img-responsive">
                    </li>
                </ul>

            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text c-white">
                <div class="content-text content-text-block-3">
                    <span v-show="language == 'pt'"><?php echo get_field('missao_texto', $idPageReferer); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('missao_texto_en', $idPageReferer); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dotted-green section-transparencia section-content" id="transparencia">
        <div class="row">
            <div class="col-sm-12 col-md-5 text-right">
                <h3 class="title-section c-white">
                    <span v-show="language == 'pt'">Transparência</span>
                    <span v-show="language == 'en'">Transparency</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img004.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text c-white">
                <div class="content-text content-text-block-3">
                    <span v-show="language == 'pt'"><?php echo get_field('transparencia_texto', $idPageReferer); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('transparencia_texto_en', $idPageReferer); ?></span>
                </div>
            </div>
        </div>
    </section>
</div>

    <script type="text/javascript">
        document.getElementById('background-img-home').classList.add("page-quem-somos");
        document.getElementById('box-text-home').classList.add('content-text-bottom');

        (function($) {
            $(window).load(function() {
                var urlToScroll = window.location.href;
                urlToScroll = urlToScroll.split('/#');

                if(urlToScroll.length > 1){
                    var scrollToSection = urlToScroll[1];

                    $('html, body').animate({
                        scrollTop: $("#" + scrollToSection).offset().top - 50
                    }, 600);
                    return false;
                }
            });

        })( jQuery );

    </script>


<?php get_footer(); ?>