<?php get_header(); ?>
<?php wp_head(); ?>
		<!--  main content -->
		<div class="main-content grid_16">
		  <div class="grid_11 alpha primary news">
	      <!--  single post in primary news -->
	      <div class="post-list primary">
	        <ul>
             <?php while ( have_posts() ) : the_post(); ?>
	           <li class="post-item">
	              <h2>
	               <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	               <?php if(function_exists('my_share_links')) : ?>
                 <?php my_share_links(); ?>
                 <?php endif; ?>
	              </h2>
	              <div class="date-info">
			            <p>
			             <span class="week-day"><?php the_time('D') ?></span>
			             <span class="day"><?php the_time('d') ?></span>
			             <span class="month"><?php the_time('M') ?></span>
			             <span class="year"><?php the_time('Y') ?></span>
			           </p>
			          </div>
			          <?php if(has_post_thumbnail()) : ?>
	               <a class="image-link" href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail( array('width'=> 115, 'height' => 122) ); ?>
                 </a>
	              <?php endif; ?>
	              <div class="content">
                  <?php the_excerpt(); ?>
                </div>
                <ul class="taxonomies horizontal-list">
                  <li class="categories">
                    <h4><span><?php __('Categories') ?></span></h4>
                     <div class="taxonomy">
		                  <?php echo the_category(); ?>
                     </div>
                  </li>
                  <?php if(has_tag()) : ?>
                  <li class="tags">
                    <h4><span><?php __('Tags') ?></span></h4>
                    <ul class="taxonomy">
		                 <?php
                        echo get_the_tag_list('<li>','','</li>');
                      ?>
		                </ul>
                  </li>
                  <?php endif; ?>
                </ul>
                 <div class="post-comments">
                 <?php comments_popup_link(__('0'), __('1'), __('%')); ?>
                </div>
	           </li>
	           <?php endwhile; ?>
	           <div class="navigation">
	             <?php posts_nav_link(' - ', __('próximos posts'), __('posts anteriores')); ?>
	           </div>
             <?php wp_reset_postdata();?>
	        </ul>
	      </div>
	      <!--  end of single post in primary news -->
		  </div>
	    <!--  sidebar -->
		  <?php get_sidebar(); ?>
		  <!--  end sidebar -->
		<!--  end main content -->
	  </div>
    <div class="clear"></div>
	  <?php get_footer(); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>