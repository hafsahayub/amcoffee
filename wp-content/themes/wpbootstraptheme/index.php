<?php get_header();?>

<main class="container mt-5">
  <div class="row g-5">
    <div class="col-md-8">
      <?php if(have_posts()) : ?>
          <?php while(have_posts()): the_post();?>
              <?php get_template_part('content', get_post_format());?>
          <?php endwhile; ?> 
          <?php else : ?>
              <p><?php __('No posts found'); ?></p>
      <?php endif;?>
      
        <!-- Pagination -->
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
        </nav>
    </div>
    
<?php get_footer();?>

