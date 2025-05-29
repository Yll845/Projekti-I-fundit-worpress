<?php get_header(); ?>
<main>
    <h1>Dashboard</h1>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
    <?php endwhile; else: ?>
        <p>No content found</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>