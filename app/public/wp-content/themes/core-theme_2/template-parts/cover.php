<div class="cover">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
      <h1 class="page_title"><?php the_title(); ?></h1>
  <?php
    endwhile;
  endif;
  ?>
</div>