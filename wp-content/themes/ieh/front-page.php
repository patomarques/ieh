<?php
get_header(); ?>

    <section id="home-quem-somos" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <h2 class="title-section c-azul-claro" v-show="language == 'pt'">Quem <br>Somos</h2>
                    <h2 class="title-section c-azul-claro" v-show="language == 'en'">About <br>Us</h2>

                    <p class="text-content c-gray-5d text-left" v-show="language == 'pt'">
                        <span class="text-content">Fundado em 1990, o Instituto de Ecologia Humana - IEH, nasce com o compromisso de coletivizar a compreensão da questão ambiental, entendendo que o processo de formação dos recursos humanos é um ato continuo e indissociável de uma prática que busca contribuir para uma sociedade mais humana.</span>
                        <a href="<?php echo get_site_url(); ?>/quem-somos#quem-somos" class="btn-saiba-mais"><span class="label-button">Saiba mais</span></a>
                    </p>
                    <p class="text-content c-gray-5d text-left" v-show="language == 'en'">
                        <span class="text-content">Founded in 1990, the Institute of Human Ecology - IEH, is born with the commitment to collectivize the understanding of the environmental issue, understanding that the process of training human resources is a continuous and inseparable act of a practice that seeks to contribute to a more humane society .</span>
                        <a href="<?php echo get_site_url(); ?>/about-us#about-us" class="btn-saiba-mais"><span class="label-button">See more</span></a>
                    </p>

                    <ul class="list-unstyled list-quem-somos">
                        <li>
                            <a href="<?php echo get_site_url(); ?>/quem-somos#sobre-nos" class="box-content-quem-somos">
                                <div class="box-info">
                                    <span class="text-subtitle">
                                        <button class="button-plus"></button>
                                        <span v-show="language == 'pt'">Sobre Nós</span>
                                        <span v-show="language == 'en'">About Us</span>
                                    </span>
                                    <div class="arrow-down"></div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/01-quem_somos-01.jpg" alt="" class="img-bg-content">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/quem-somos#a-coordenacao" class="box-content-quem-somos">
                                <div class="box-info">
                                    <span class="text-subtitle">
                                        <button class="button-plus"></button>
                                        <span v-show="language == 'pt'">Equipe</span>
                                        <span v-show="language == 'en'">Team</span>
                                    </span>
                                    <div class="arrow-down"></div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/01-quem_somos-02.jpg" alt="" class="img-bg-content">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/quem-somos#missao" class="box-content-quem-somos">
                                <div class="box-info">
                                    <span class="text-subtitle">
                                        <button class="button-plus"></button>
                                        <span v-show="language == 'pt'">Missão</span>
                                        <span v-show="language == 'en'">Mission</span>
                                    </span>
                                    <div class="arrow-down"></div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/01-quem_somos-03.jpg" alt="" class="img-bg-content">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_site_url(); ?>/quem-somos#transparencia" class="box-content-quem-somos">
                                <div class="box-info">
                                    <span class="text-subtitle">
                                        <button class="button-plus"></button>
                                        <span v-show="language == 'pt'">Transparência</span>
                                        <span v-show="language == 'en'">Transparency</span>
                                    </span>
                                    <div class="arrow-down"></div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/custom/img/2019/01-quem_somos-04.jpg" alt="" class="img-bg-content">
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>

    <section id="home-o-que-fazemos" class="fullscreen-bg-content">
        <div class="container-bg-img">
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/custom/img/bg/o-que-fazemos-home-dark_mobile.jpg" alt="" class="bg-img-fix d-block d-sm-none">-->
            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/bg/o-que-fazemos-home-dark.jpg" alt="" class="bg-img-fix d-none d-md-block d-lg-block d-xl-block">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-right" v-show="language == 'pt'">
                    <h2 class="title-section c-white">O Que <br>Fazemos</h2>

                    <p class="text-content c-white text-justify">
                        Há <?php echo do_shortcode('[calculate_years]'); ?> anos o <a href="<?php echo get_site_url(); ?>" class="link c-white text-negrito">Instituto de Ecologia Humana</a> já realizou cerca de 40 eventos, promoveu 120 cursos; propiciou estágios a 100 estudantes universitários, capacitou cerca de 600 educadores, coordenou 40 projetos, dentre eles 15 projetos de pesquisa, todos com metodologia interdisciplinar e realizou cerca de 15 avaliações de projetos. Coordenou e participou das publicações de cerca de 70 títulos. Realizou o encontro da Arte com a Ciência ao concretizar duas exposições sobre a temática ambiental.
                    </p>

                    <div class="button-content text-center">
                        <a href="<?php echo get_site_url(); ?>/o-que-fazemos#objetivos" class="btn-white">Ver Objetivos</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-right" v-show="language == 'en'">
                    <h2 class="title-section c-white">What <br>We Do</h2>

                    <p class="text-content c-white text-justify">
                        For <?php echo do_shortcode('[calculate_years]'); ?> years the <a href="<?php echo get_site_url(); ?>" class="link c-white text-negrito">Instituto de Ecologia Humana</a> has held about 40 events, promoted 120 courses; provided training for 100 university students, trained about 600 educators, coordinated 40 projects, including 15 research projects, all with interdisciplinary methodology and conducted about 15 project evaluations. Coordinated and participated in publications of about 70 titles. He held the meeting of Art and Science by making two exhibitions on the environmental theme.
                    </p>

                    <div class="button-content text-center">
                        <a href="<?php echo get_site_url(); ?>/o-que-fazemos#objetivos" class="btn-white">See Objectives</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-nossos-projetos" class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="title-section c-azul-claro">
                        <span v-show="language == 'pt'">Linhas de Ação</span>
                        <span v-show="language == 'en'">Action Lines</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 square-grid">
                    <?php get_template_part( 'inc/box-projects-grid'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="home-participe" class="fullscreen-bg bg-azul-claro home-apoie-nossos-projetos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <h2 class="title-section c-white">
                        <span v-show="language == 'pt'">Participe</span>
                        <span v-show="language == 'en'">Participate</span>
                    </h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                    <p class="subtext-title">Apoie nossos projetos, acompanhe de perto nossas atividades,
                        receba as notícias e seja um colaborador. Convidamos você a participar do IEH e redescobrir
                        a magia de ser feliz, fazendo aconteder.</p>

                    <div class="form-group text-right">

                        <button type="button" class="btn-call-modal btn-white" data-target="#modal-fale-conosco" data-toggle="modal">
                            <span v-show="language == 'pt'">Fale Conosco</span>
                            <span v-show="language == 'en'">Contact Us</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade modal-fale-conosco" id="modal-fale-conosco" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="modalLabel">
                        <span v-show="language == 'pt'">Fale Conosco</span>
                        <span v-show="language == 'en'">Contact Us</span>
                    </h4>

                    <p class="text-modal text-justify">
                        <span v-show="language == 'pt'">Sinta-se a vontade para nos mandar uma mensagem atráves do email</span>
                        <span v-show="language == 'en'">Feel free to send us a message by email</span>

                    <a href="mailto:comunicacao@ieh.org.br">comunicacao@ieh.org.br</a>,
                        <span v-show="language == 'pt'">ou preencha o formulário abaixo com os seus dados e te retornaremos assim que possível.</span>
                        <span v-show="language == 'en'">or fill out the form below with your details and we will get back to you as soon as possible.</span>
                        </p>

                    <div class="form-pt" v-show="language == 'pt'">
                        <?php echo do_shortcode('[contact-form-7 title="Fale Conosco"]'); ?>
                    </div>
                    <div class="form-en" v-show="language == 'en'">
                        <?php echo do_shortcode('[contact-form-7 title="Contact Us"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="home-bg-img-parallax-2" class="fullscreen-bg-content img-responsive"></section>

    <section id="home-ieh-em-numeros" class="bg-listrado-transversal">
        <div class="container content-block">
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h2 class="title-section">
                        <span class="negrito first-word" v-show="language == 'pt'">IEH <br class="d-none d-md-block">em Números</span>
                        <span class="negrito first-word" v-show="language == 'en'">IEH<br>Statistics</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-offset-1">
                    <ul class="list-unstyled list-ieh-numeros">
                        <li>
                            <div class="box-numeros">
                                <span class="love_counter">
                                  <span class="love_count numero">30</span>
                                </span>
                                
                                <span class="icon icon-ampulheta"></span>
                                <span class="text" v-show="language == 'pt'">anos <br>de atuação</span>
                                <span class="text" v-show="language == 'en'">years<br>of existence</span>
                            </div>
                        </li>
                        <li>
                            <div class="box-numeros">
                                <span class="pre-text">
                                    <span>
                                        <span class="text" v-show="language == 'pt'">Cerca<br>de</span>
                                        <span class="text" v-show="language == 'en'">Around<br>than</span>
                                    </span>
<!--                                    <span class="d-block d-sm-none"><i class="fa fa-plus"></i></span>-->
                                </span>

                                <span class="love_counter">
                                  <span class="love_count numero">120</span>
                                </span>
                                <span class="icon icon-user-group"></span>
                                <span class="text text-second" v-show="language == 'pt'">profissionais <br>associados</span>
                                <span class="text text-second" v-show="language == 'en'">associated <br>professionals</span>
                            </div>
                        </li>
                        <li>
                            <div class="box-numeros">
                                 <span class="pre-text">
                                    <span class="text" v-show="language == 'pt'">Mais<br>de</span>
                                    <span class="text" v-show="language == 'en'">More<br>than</span>
                                </span>
                                <div class="numero">
                                   <span class="love_counter">
                                      <span class="love_count num-lg">10</span>
                                   </span>

                                   mil
                                </div>
                                <span class="icon icon-certified"></span>
                                <span class="text">profissionais<br>capacitados</span>
                            </div>
                        </li>

                        <li>
                            <div class="box-numeros">

                                <span class="love_counter">
                                   <div class="love_count numero">29</div>
                                </span>
                                <span class="icon icon-events"></span>
                                <span class="text" v-show="language == 'pt'">eventos<br>realizados</span>
                                <span class="text" v-show="language == 'en'">events<br>realized</span>
                            </div>
                        </li>

                        <li>
                            <div class="box-numeros">
                                <span class="love_counter">
                                   <span class="love_count numero">21</span>
                                </span>
                                <span class="icon icon-anotation"></span>
                                <span class="text" v-show="language == 'pt'">convênios<br>contratos</span>
                                <span class="text" v-show="language == 'en'">agreements<br>and contracts</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="content-mapa">
                        <div class="box-numeros">
                            <span class="mais-de" v-show="language == 'pt'">Mais de</span>
                            <span class="mais-de" v-show="language == 'en'">More than</span>
                            <span class="love_counter">
                               <span class="love_count numero">200</span>
                            </span>
                            <span class="text" v-show="language == 'pt'">cidades<br>atendidas</span>
                            <span class="text" v-show="language == 'en'">cities<br>assisted</span>
                        </div>

                        <div class="box-mapa">
                            <img src="<?php echo get_template_directory_uri() . '/custom/img/brazil-map.png'; ?>" alt="Brazil Map" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $args_depo = array(
            'posts_per_page' => 10, // Number of recent posts thumbnails to display
            'post_type' => 'depoimentos', // Show only the published posts
            'orderby' => "date",
            'order' => "DESC"
        );

        $depoimentos = new WP_Query($args_depo);
    ?>

    <section id="home-depoimentos" class="bg-full-content-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="slider">
                        <?php while ($depoimentos->have_posts()) : $depoimentos->the_post(); ?>
                            <div class="slider-item">
                                <div class="box-depoimentos">
                                    <p class="text-depoimento"><?php echo get_the_content(); ?></p>
                                    <span class="author-depo"><?php echo get_post_meta(get_the_ID(), 'author', TRUE); ?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $args_apoiadores = array(
            'posts_per_page' => -1, // Number of recent posts thumbnails to display
            'post_type' => 'parceiros-apoiadores', // Show only the published posts
            'meta_key' => 'ordem',
            'orderby' => "meta_value",
            'order' => "ASC"
        );

        $apoiadores = new WP_Query($args_apoiadores);
    ?>

    <section id="home-apoiadores" class="bg-stripped-transversal">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h2 class="title-section" v-show="language == 'pt'">Alguns de nossos parceiros e apoiadores</h2>
                    <h2 class="title-section" v-show="language == 'en'">Some of our partners and supporters</h2>


                    <ul class="list-parceiros-apoiadores list-unstyled list-inline">
                        <?php while ($apoiadores->have_posts()) : $apoiadores->the_post(); ?>
                            <li class="list-inline-item" data-ordem="<?php echo get_field('ordem'); ?>">
                                <div class="box-img-apoio">
                                    <?php if(has_post_thumbnail()){ ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php }else{ ?>
                                        <p><?php echo get_the_title(); ?></p>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
