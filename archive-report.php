<?php get_header(); ?>
<h1>Reports Archive</h1>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>