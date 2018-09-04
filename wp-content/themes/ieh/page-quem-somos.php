<?php get_header(); ?>

    <div class="lines-fullsize bg-cinza-claro"></div>
    <div class="lines-fullsize bg-azul-claro"></div>

<div id="page-content" class="page-quem-somos page-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h1 class="title-default c-verde-lodo">Quem<br>Somos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <?php
                while ( have_posts() ) : the_post(); ?>

                    <div class="page-content-text"><?php echo the_content(); ?></div>

                <?php endwhile; // End of the loop.?>
            </div>
        </div>
    </div>
    <div class="content-full">
        <div class="coluna-direita">
            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/quem-somos-interna.png" alt="" class="img-responsive">
        </div>
        <div class="coluna-esquerda">
            <div class="box-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-verde-preto.png" alt="" class="img-responsive logo-colorida">
                <p class="text-after-logo">A marca existe desde 19xx e foi desenvolvida texto pendente de modificação.</p>
            </div>
        </div>
    </div>

    <div class="lines-fullsize bg-azul-claro line-mt mb-0"></div>

    <div class="content-full content-sobre-nos">
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 text-right">
                <h2 class="title-dafault title-sobre-nos">Sobre<br> Nós</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img001.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text">
                <div class="content-text">
                    <?php// echo nl2br(get_post_meta(get_the_ID(), 'sobre_nos_text', TRUE)); ?>
                    <h4>O que é o Instituto de Ecologia Humana</h4>
                    <p>O Instituto de Ecologia Humana (IEH) é uma Fundação que congrega pessoas interessadas em estudos
                        e pesquisas, em âmbito nacional, na área de Ecologia Humana, com ênfase nas questões regionais e
                        locais. Suas origens remontam a 1984, quando foi formado o Grupo de Ecologia Humana da
                        Universidade Federal Rural de Penambuco para desenvolver o projeto de pesquisa “Açudagem no
                        Nordeste e o processo de fixação do homem no meio rural”, idealizado pela Profa. Maria José de
                        Araújo Lima. Em 1990, o mencionado grupo institucionalizou-se como sociedade civil sem fins
                        lucrativos, transformando-se em Instituto de Ecologia Humana.</p>

                    <p>O Instituto de Ecologia Humana é uma organização não governamental considerada de utilidade
                        pública no âmbito do Estado de Pernambuco, tanto a nível estadual como municipal.</p>

                    <p>Os trabalhos realizados pelo Instituto de Ecologia Humana envolveram uma gama diferenciada de
                        agentes financeiros. Foi fundado e suportado pela Fundação Ford por 5 anos.</p>
                    <p>Recebeu apoio da UNESCO, dentro do programa Man and Biosfera (MAB); do Catholic Relief Services
                        (CRS); do Banco Interamericano de Desenvolvimento (BID); do Ministério de Meio Ambiente (MMA);
                        do Ministério de Educação e Cultura (MEC) e do Instituto Brasileiro de Recursos Naturais e da
                        Amazônia Legal (IBAMA).</p>


                    <p>Realizou projetos por contratos e/ou convênios para o Governo do Ceará e de Pernambuco. Realizou
                        consultorias no Estado de Mato Grosso, Amazonas, Pará, Acre e Rondônia.</p>

                    <p>Participou de consultorias internacionais. Realizou eventos em parceria com a Universidade
                        Federal da Paraíba, Universidade Federal Rural de Pernambuco, com a Fundação Joaquim Nabuco.
                        Realizou a Avaliação do Programa Xingó, desenvolvido pela Companhia Hidrelétrica do São
                        Francisco (CHESF), na Região dos Lagos. Atualmente é responsável pela Construção do Plano
                        Sócio-ambiental (PAS) da Chesf, no Complexo Hidroelétrico de Paulo Afonso.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="full-content bg-azul-claro content-a-coordenacao section-content">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title-section c-white">A Coordenação</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-md-5 block-left-image">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/page-quem-somos/img002.png" alt="" class="img-responsive">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-7 block-right-text">
                <ul class="list-unstyled list-coordenacao">
                    <li>
                        <div class="box-membrxs">
                            <p class="cargo">PRESIDENTE</p>
                            <p class="nome negrito">Profa. Maria José de Araújo Lima</p>
                            <p class="resumo">Bióloga pela UFPE; Mestre em Educação pela
                                UFMG; Especialista em Ordenamento de Territó-
                                rio pelo Instituto de Altos Estudos Mediterrâneos
                                de Zaragoza - IAMAZ Europa; Doutora em Geo-
                                grafia pela USP; Professora Universitária.</p>
                        </div>
                    </li>
                    <li>
                        <div class="box-membrxs">
                            <p class="cargo">COORDENADORA ADMINISTRATIVA E FINANCEIRA</p>
                            <p class="nome negrito">Dra. Márcia Lima de Azevedo Monteiro</p>
                            <p class="resumo">Médica, Mestre em Fisiologia pela UFPE; Doutora
                                em Neuropsiquiatria pela UFPE.</p>
                        </div>
                    </li>
                    <li>
                        <div class="box-membrxs">
                            <p class="cargo"></p>
                            <p class="nome negrito">Associados</p>
                            <p class="resumo">O Instituto de Ecologia Humana (IEH) tem 120
                                profissionais sócio-colaboradores, que partici-
                                pam da execução dos projetos na condição de
                                assessores técnicos.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="bg-stripped-transversal section-missao section-content" >
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

    <section class="bg-dotted-green section-transparencia section-content">
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
        imagem_bg = <?php echo json_encode(get_the_post_thumbnail_url()); ?>;
        text_home = <?php echo json_encode(get_the_title()); ?>;

        //set image header background (DOMjs)
        window.onload = function(){
            setImagemHeaderBackground(imagem_bg, text_home, "page-quem-somos");
        }
    </script>

<?php get_footer(); ?>