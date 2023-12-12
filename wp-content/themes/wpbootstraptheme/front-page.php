<!-- Header start -->
<!doctype html>
<html <?php language_attributes();?> data-bs-theme="auto">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="generator" content="Hugo 0.118.2">

    <title>
      <?php bloginfo('name');?> |
      <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">

    <?php wp_head();?>
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url'). '/img/showcase.jpg');?>);
      }
    </style>

  </head> 
  <body>

    <div class="blog-masthead">
        <header class="border-bottom lh-1 py-3 mx-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
          <div class="logo">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }?>
          </div>
        </div>
            <div class="col-4 text-center">
            <a class="blog-header-logo text-body-emphasis text-decoration-none" href="http://localhost/amcoffee/"><?php bloginfo('name'); ?></h1></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
            </div>
        </header>

        <div>
        <nav class="navbar navbar-expand-md lead" role="navigation">
            <div class="container mx-1 ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                    // 'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ) );
                ?>
            </div>
        </nav>
        </div>
    </div>
<!-- Header end -->

<!-- Banner start -->
<section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading');?></h1>
        <p><?php echo get_theme_mod('showcase_text');?></p>
        <a href="<?php echo get_theme_mod('btn_url');?>"class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text');?></a>
      </div>
    </section>
<!-- Banner end -->

<!-- Body start -->

<!-- First section start -->
<section class="custom-section ">
    <div class="container">
        <div class="row">
            <div class="eltdf-st-title col-md-12 text-center mt-5 mb-4">
                <h2>Our Delicious Offer</h2>
            </div>

            <div class="col-md-12 text-center ">
              <span class="eltdf-separator-icon mt-5 mb-4">
                <img width="189" height="24" src="https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/title-separator.png" class="attachment-full size-full" alt="s" decoding="async" loading="lazy" /> 
              </span>
            
              <div class="wpb_wrapper mt-3 mb-4">
              <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</h6>
              </div>    
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 text-center mt-4 mb-4">
                <img src="https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/h2-custom-icon-5.png" alt="Image 1">
                <div class="eltdf-iwt-content">
                  <h5>
                    <a itemprop="url" href="#" target="_self">
                    <span class="eltdf-iwt-title-text">Types of Coffee</span>
                    </a>
                  </h5>
                  <p class="eltdf-iwt-text mt-3 mb-4 wpb_text_column wpb_content_element ">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus. Aeneantos commodo </p>
                </div>
              </div>
            <div class="col-md-6 text-center mt-4 mb-4">
                <img src="https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/h2-custom-icon-6.png" alt="Image 2">
                <div class="eltdf-iwt-content">
                  <h5>
                    <a itemprop="url" href="#" target="_self">
                    <span class="eltdf-iwt-title-text">Bean Varieties</span>
                    </a>
                  </h5>
                  <p class="eltdf-iwt-text mt-3 mb-4">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus. Aeneantos commodo </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/h2-custom-icon-6.png" alt="Image 2">
                <div class="eltdf-iwt-content">
                  <h5>
                    <a itemprop="url" href="#" target="_self">
                    <span class="eltdf-iwt-title-text">Coffee To Go</span>
                    </a>
                  </h5>
                  <p class="eltdf-iwt-text">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus. Aeneantos commodo </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/h2-custom-icon-6.png" alt="Image 2">
                <div class="eltdf-iwt-content">
                  <h5>
                    <a itemprop="url" href="#" target="_self">
                    <span class="eltdf-iwt-title-text">Coffe And Pastry</span>
                    </a>
                  </h5>
                  <p class="eltdf-iwt-text">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus. Aeneantos commodo </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- First section end -->

<!-- Second section start -->
<section class="custom-section" style="background-image: url(https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/new-new-h1-bacground-img-3.jpg)">
    <div class="container">
        <div class="row">
            <div class="eltdf-st-title col-md-12 text-center mt-5 mb-4">
                <h2>THE COFFEE HERALD</h2>
            </div>

            <div class="col-md-12 text-center ">
              <span class="eltdf-separator-icon mt-5 mb-4">
                <img width="189" height="24" src="https://corretto.qodeinteractive.com/wp-content/uploads/2018/04/title-separator.png" class="attachment-full size-full" alt="s" decoding="async" loading="lazy" /> 
              </span>
            
              <div class="wpb_wrapper mt-3 mb-5">
              <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</h6>
              </div>    
            </div>
        </div>

        <div class="row eltdf-row-grid-section-wrapper">
        <div class="col-md-8">
        <?php
          $args = array(
              'posts_per_page' => -1, // Set this to the number of posts you want to display, or use -1 for all posts
              'tax_query'      => array(
                  array(
                      'taxonomy' => 'post_format',
                      'field'    => 'slug',
                      'terms'    => array('post-format-aside', 'post-format-gallery'),
                      'operator' => 'NOT IN',
                  ),
              ),
          );

          $custom_query = new WP_Query($args);

          if ($custom_query->have_posts()) :
              while ($custom_query->have_posts()) : $custom_query->the_post();
                  get_template_part('content', get_post_format());
              endwhile;
              wp_reset_postdata(); // Reset the post data to the main query
          else :
              ?>
              <p><?php _e('No posts found'); ?></p>
          <?php endif; ?>

          <?php
          $args = array(
              'post_type'      => 'post',  // Adjust if you want to display a different post type
              'posts_per_page' => -1,      // Display all posts; adjust if you want a specific number
          );

          $custom_query = new WP_Query($args);

          if ($custom_query->have_posts()) :
              echo '<div class="post-grid">';
              while ($custom_query->have_posts()) : $custom_query->the_post();
          ?>
                  <div class="post-item">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <div class="post-content">
                          <?php the_excerpt(); ?>
                      </div>
                  </div>
          <?php
              endwhile;
              echo '</div>';
              wp_reset_postdata();  // Reset the post data to the main query
          else :
          ?>
              <p><?php _e('No posts found'); ?></p>
          <?php endif;
          ?>


      
        <!-- Pagination -->
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
        </nav>
        </div>
        </div>
       </div>
</section>
<!-- Second section end -->


<!-- Body end -->

<!-- Footer start -->
<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p>&copy; <?php echo Date('Y');?> - <?php bloginfo('name')?></p>
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer();?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src =" <?php bloginfo('template_url');?>/js/bootstrap.js"></script>
</body>
</html>
<!-- Footer end -->