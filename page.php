<?php get_header(); ?>
    <!--  main content -->
    <div class="main-content grid_16">
      <div class="grid_11 alpha primary news page">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-full">
            <h2><?php the_title(); ?></h2>
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