<?php get_header(); ?>
<?php get_template_part('template-parts/cover'); ?>

<section>
  <div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="p-entry__body">
          <?php the_content(); ?>
        </div>
    <?php endwhile;
    endif; ?>
</section>


<?php get_footer(); ?>