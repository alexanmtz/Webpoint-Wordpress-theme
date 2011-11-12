      <div class="grid_5 omega sidebar">
         <!-- start box -->
         <ul>
	         <?php if(is_single() || is_category()) : ?>
            <li class="box related list">
              <h3><?php __('Pode interessar também') ?></h3>
              <ul>
              <?php $related = new WP_Query( array('posts_per_page' => 10, 'orderby' => 'rand' ) ); ?>
		          <?php while ( $related->have_posts() ) : $related->the_post(); ?>
		             <li>
		              <a href="<?php the_permalink(); ?>" title="#"><?php the_title(); ?></a>
		             </li>
		          <?php endwhile; ?>
		          </ul>
		          <?php wp_reset_postdata();?>
            </li>
	         <?php endif; ?>
	         <!--  end box -->
	        <?php dynamic_sidebar( 'sidebar' ); ?>
	      </ul>
      </div>