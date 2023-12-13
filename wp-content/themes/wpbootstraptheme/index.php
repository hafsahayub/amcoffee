<?php get_header(); ?>

<main class="container mt-5">
  <div class="row g-5">
    <div class="col-md-8">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php _e('No posts found'); ?></p>
      <?php endif; ?>

      <!-- Pagination -->
      <nav class="blog-pagination" aria-label="Pagination">
        <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages: '), 'after' => '</div>')); ?>
      </nav>
    </div>

    <?php get_footer(); ?>
