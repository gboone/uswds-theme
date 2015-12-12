<?php get_header(); ?>
<div class="usa-grid">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="blog-postings usa-width-one-third">
    <h3><?php the_title() ?></h3>
    <p><?php the_content() ?></p>
  </div>
  <?php endwhile; else: ?>
    <div class="blog-posting usa-width-one-whole">
      <p>No posts! Maybe you should go write one!</p>
    </div>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
