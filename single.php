<?php get_header(); ?>
    <!--  main content -->
    <div class="main-content grid_16">
      <div class="grid_11 alpha primary news">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-full">
            <h2><?php the_title(); ?></h2>
                <div class="date-info">
                  <p>
                   <span class="week-day"><?php the_time('D') ?></span>
                   <span class="day"><?php the_time('d') ?></span>
                   <span class="month"><?php the_time('M') ?></span>
                   <span class="year"><?php the_time('Y') ?></span>
                 </p>
                </div>
                <ul class="taxonomies horizontal-list">
                  <li class="categories">
                    <h4><span><?php _e('Categorias') ?></span></h4>
                     <div class="taxonomy">
                        <?php the_category(); ?>
                     </div>
                  </li>
                  <?php if(has_tag()) :?>
                  <li class="tags">
                    <h4><span><?php _e('Tags') ?></span></h4>
                    <ul class="taxonomy">
                     <?php
                        echo get_the_tag_list('<li>','','</li>');
                      ?>
                    </ul>
                  </li>
                  <?php endif; ?>
                </ul>
                <div class="content">
                  <?php the_content(); ?>
                </div>
          </div>
          <?php comments_template(); ?>
        <?php endwhile; ?>
      </div>
      <!--  sidebar -->
      <?php get_sidebar(); ?>
      <!--  end sidebar -->
    <!--  end main content -->
    </div>
    <div class="clear"></div>
    <?php get_footer(); ?>
</div>
</body>
</html>