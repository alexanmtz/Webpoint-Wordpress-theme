<?php get_header(); ?>
<?php wp_head(); ?>
		<!--  main content -->
		<div class="main-content grid_16">
		  <div class="grid_11 alpha primary news">
	      <!--  single post in primary news -->
	      <div class="post-list primary">
	        <ul>
	           <?php $main_posts = new WP_Query( 'posts_per_page=10' ); ?>
             <?php while ( $main_posts->have_posts() ) : $main_posts->the_post(); ?>
	           <li class="post-item">
	              <h2><a href="<?php the_permalink(); ?>" title="title"><?php the_title(); ?></a></h2>
	              <div class="date-info">
			            <p>
			             <span class="week-day"><?php the_time('D') ?></span>
			             <span class="day"><?php the_time('d') ?></span>
			             <span class="month"><?php the_time('M') ?></span>
			           </p>
			          </div>
	              <a class="image-link" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/thumb-test.png" width="115" height="122" alt="descricao" /></a>
	              <div class="content">
                  <?php the_excerpt(); ?>
                </div>
                <ul class="taxonomies horizontal-list">
                  <li class="categories">
                    <h4><span>Categories</span></h4>
                     <ul class="taxonomy">
			                  <?php wp_list_categories('title_li='); ?>
                     </ul>
                  </li>
                  <li class="tags">
                    <h4><span>Tags</span></h4>
                    <ul class="taxonomy">
		                 <?php
                        echo get_the_tag_list('<li>','','</li>');
                      ?>
		                </ul>
                  </li>
                </ul>
	           </li>
	           <?php endwhile; ?>
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