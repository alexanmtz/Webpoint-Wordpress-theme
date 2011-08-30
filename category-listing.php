        <div class="secondary container_10">
          <?php $category_name = get_cat_name($post->ID); ?>
          <h3><?php echo $category_name ?></h3>
          <?php $sec_posts = new WP_Query( array ( 'category_name' => $category_name, 'posts_per_page' => 6 ) ); ?>
          <?php while ( $sec_posts->have_posts() ) : $sec_posts->the_post(); ?>
          <div class="grid_5 column">
             <div class="content">
              <h2><a href="<?php the_permalink(); ?>" title="#"><?php the_title(); ?></a></h2>
              <a class="image-link" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/thumb-test.png" width="115" height="122" alt="title" /></a>
              <p class="date"><?php the_time('D  d / m'); ?></p>
              <p class="content"><?php the_excerpt(); ?></p>
             </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>
          <div class="clear"></div>
        </div>