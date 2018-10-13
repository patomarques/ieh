<?php

/* Template Name: Quem Somos */

get_header();

?>
<div id="page-content" class="page-quem-somos page-content">
    <section class="container" id='quem-somos'>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h1 class="title-default c-verde-lodo">
                    <span v-show="language == 'pt'">Quem<br>Somos</span>
                    <span v-show="language == 'en'">About<br>Us</span>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="content" v-show="language == 'pt'">
                    <div class="page-content-text">
                        <?php echo get_field('bloco_inicio_texto_pt'); ?>
                    </div>
                </div>
                <div class="content" v-show="language == 'en'">
                    <div class="page-content-text">
                        <?php echo get_field('bloco_inicio_texto_en'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content-full">
        <div class="coluna-direita">
            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/quem-somos-interna.png" alt="" class="img-responsive">
        </div>
        <div class="coluna-esquerda">
            <div class="box-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-verde-preto.png" alt="" class="img-responsive logo-colorida">
                <p class="text-after-logo">
                    <span v-show="language == 'pt'"><?php echo get_field('texto_abaixo_da_logo_pt'); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('texto_abaixo_da_logo_en'); ?></span>
                </p>
            </div>
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
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img001.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text">
                <div class="content-text">
                    <span v-show="language == 'pt'"><?php echo get_field('sobre_nos_text'); ?></span>
                    <span v-show="language == 'en'"><?php echo get_field('sobre_nos_texto_en'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="full-content bg-azul-claro content-a-coordenacao section-content" id="a-coordenacao">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title-section c-white">
                    <span v-show="language == 'pt'">A Coordenação</span>
                    <span v-show="language == 'en'">The Coordination</span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img002.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text">
                <span v-show="language == 'pt'"><?php echo get_field('a_coordenacao_texto'); ?></span>
                <span v-show="language == 'en'"><?php echo get_field('a_coordenação_texto_en'); ?></span>

<!--                <ul class="list-unstyled list-coordenacao">-->
<!--                    <li>-->
<!--                        <div class="box-membrxs">-->
<!--                            <p class="cargo">PRESIDENTE</p>-->
<!--                            <p class="nome negrito">Profa. Maria José de Araújo Lima</p>-->
<!--                            <p class="resumo">Bióloga pela UFPE; Mestre em Educação pela-->
<!--                                UFMG; Especialista em Ordenamento de Territó--->
<!--                                rio pelo Instituto de Altos Estudos Mediterrâneos-->
<!--                                de Zaragoza - IAMAZ Europa; Doutora em Geo--->
<!--                                grafia pela USP; Professora Universitária.</p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="box-membrxs">-->
<!--                            <p class="cargo">COORDENADORA ADMINISTRATIVA E FINANCEIRA</p>-->
<!--                            <p class="nome negrito">Dra. Márcia Lima de Azevedo Monteiro</p>-->
<!--                            <p class="resumo">Médica, Mestre em Fisiologia pela UFPE; Doutora-->
<!--                                em Neuropsiquiatria pela UFPE.</p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="box-membrxs">-->
<!--                            <p class="cargo"></p>-->
<!--                            <p class="nome negrito">Associados</p>-->
<!--                            <p class="resumo">O Instituto de Ecologia Humana (IEH) tem 120-->
<!--                                profissionais sócio-colaboradores, que partici--->
<!--                                pam da execução dos projetos na condição de-->
<!--                                assessores técnicos.</p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
        </div>
    </section>

    <section class="bg-stripped-transversal section-missao section-content" id="missao" >
        <div class="row">
            <div class="col-sm-12 col-md-5 text-right">
                <h3 class="title-section c-white">MISSÃO</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img003.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text c-white">
                <div class="content-text content-text-block-3">
                    <?php
                        $missaoTexto =  get_post_meta(get_the_ID(), 'missao_texto', TRUE);
                        echo apply_filters('meta_content', $missaoTexto);
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dotted-green section-transparencia section-content" id="transparencia">
        <div class="row">
            <div class="col-sm-12 col-md-5 text-right">
                <h3 class="title-section c-white">Transparência</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img004.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text c-white">
                <div class="content-text content-text-block-3">
                    <?php
                    $missaoTexto =  get_post_meta(get_the_ID(), 'transparencia_texto', TRUE);
                    echo apply_filters('meta_content', $missaoTexto);
                    ?>
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