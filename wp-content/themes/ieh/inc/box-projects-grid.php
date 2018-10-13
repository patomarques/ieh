<?php
    $args_projetos = array(
        'posts_per_page' => -1, // Number of recent posts thumbnails to display
        'post_type' => 'nossos-projetos', // Show only the published posts
        'orderby' => "ordem",
        'order' => "ASC"
    );

    $projetos = new WP_Query($args_projetos);
?>
<SquareGrid>
    <?php while ($projetos->have_posts()) : $projetos->the_post(); ?>
    <div class="item">
        <a href="<?php echo get_site_url(); ?>/projetos#<?php echo get_field('scroll-to');?>" class="square-content" data-scroll="<?php echo get_field('scroll-to');?>">
            <?php
            $image = get_field('icon');

            if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-icon" />
            <?php endif; ?>
            <span class="text-box" v-show="language == 'pt'"><?php echo get_the_title(); ?></span>
            <span class="text-box" v-show="language == 'en'"><?php echo get_field('title_english'); ?></span>
        </a>
    </div>
    <?php endwhile; ?>
</SquareGrid>