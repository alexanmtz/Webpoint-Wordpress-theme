      <div class="grid_5 omega sidebar">
         <!-- start box -->
         <ul>
           <?php if(is_home()) : ?>
	         <li class="box about">
	            <h3>Sobre o autor</h3>
	            <img class="author" src="<?php bloginfo('template_directory'); ?>/images/thumb-test.png" alt="autor" />
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	            <ul class="horizontal-list">
	              <li><a class="button primary" href="#">twitter</a></li>
	              <li><a class="button primary" href="#">linkedin</a></li>
	              <li><a class="button primary" href="#">delicious</a></li>
	              <li><a class="button primary" href="#">facebook</a></li>
	              <li><a class="button primary" href="#">twitter</a></li>
	            </ul>
	            <ul class="social-icons horizontal-list">
	              <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ico-facebook.png" alt="autor" /></a></li>
	              <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ico-delicious.png" alt="autor" /></a></li>
	              <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ico-twitter.png" alt="autor" /></a></li>
	              <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ico-linkedin.png" alt="autor" /></a></li>
	            </ul>
	         </li>
	         <?php endif; ?>
	         <?php if(is_single() || is_category()) : ?>
            <li class="box related">
              <h3>Pode interessar também</h3>
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