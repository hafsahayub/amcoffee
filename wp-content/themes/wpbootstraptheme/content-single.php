<article class="blog-post mt-4">    
            <h2>
              <a href="<?php the_permalink(); ?>" style="color:black; text-decoration:none;">
                <?php the_title();?>
              </a>
            </h2>
            <p class="blog-post-meta">
              <?php the_time('F j, Y g:i a');?> 
              by 
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
            <?php the_author();?>
            </a>
            </p>
            
            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
              <?php the_post_thumbnail();?>
              </div>     
            <?php endif; ?>
            <?php the_content();?>    
</article>