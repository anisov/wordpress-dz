<?php get_header(); ?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="title-page"><?php the_title(); ?></h1>
                <div><?php the_excerpt(); ?></div>
            <?php endwhile; else: ?>
                <p><?php _e('Ничего не найдено.'); ?></p>
            <?php endif; ?>
            <?php the_posts_pagination(); ?>
        </div>
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
