<?php get_header(); ?>
<?php wp_head(); ?>
    <!--  main content -->
    <div class="main-content grid_16">
      <div class="grid_11 alpha primary news">
        <!--  single post in primary news -->
        <div class="post-list primary">
         <div class="breadcrumb">
            <a href="<?php bloginfo('url'); ?>"><?php _e('home')?></a> &raquo; <span class="current"><?php single_cat_title(); ?></span>
          </div>
          <ul>
             <?php while ( have_posts() ) : the_post(); ?>
             <li class="post-item">
                <h2><a href="<?php the_permalink(); ?>" title="title"><?php the_title(); ?></a></h2>
                <div class="date-info">
                  <p>
                   <span class="week-day"><?php the_time('D') ?></span>
                   <span class="day"><?php the_time('d') ?></span>
                   <span class="month"><?php the_time('M') ?></span>
                 </p>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/images/thumb-test.png" width="115" height="122" alt="descricao" />
                <div class="content">
                  <?php the_excerpt(); ?>
                </div>
                <?php if(has_tag()) : ?>
                <ul class="taxonomies horizontal-list">
                  <li class="tags">
                    <h4><span>Tags</span></h4>
                    <ul class="taxonomy">
                     <?php
                      ?>
                    </ul>
                  </li>
                </ul>
                <?php endif; ?>
             </li>
             <?php endwhile; ?>
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