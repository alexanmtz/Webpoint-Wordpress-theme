<?php get_header(); ?>
<?php wp_head(); ?>
    <!--  main content -->
    <div class="main-content grid_16">
      <div class="grid_11 alpha primary news">
        <!--  single post in primary news -->
        <div class="post-list primary">
         <div class="breadcrumb">
            <a href="<?php bloginfo('url'); ?>"><?php _e('home')?></a>
            <?php $cat_title = single_cat_title('',false); ?>
            &raquo;
            <?php echo get_category_parents(get_cat_ID($cat_title), true, ' &raquo; '); ?>
            <span class="current">Posts em <?php echo $cat_title; ?> </span>
          </div>
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
                <div class="post-comments">
                 <?php comments_popup_link(__('Nenhum coment&aacute;rio'), __('1 Coment&aacute;rio'), __('% Coment&aacute;rios')); ?>
                </div>
                <?php if(has_post_thumbnail()) : ?>
                 <a class="image-link" href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail( array('width'=> 115, 'height' => 122) ); ?>
                 </a>
                <?php endif; ?>
                <div class="content">
                  <?php the_excerpt(); ?>
                </div>
                <?php if(has_tag()) : ?>
                <ul class="taxonomies horizontal-list">
                  <li class="tags">
                    <h4><span><?php __('Tags') ?></span></h4>
                    <ul class="taxonomy">
                     <?php
                      ?>
                    </ul>
                  </li>
                </ul>
                <?php endif; ?>
             </li>
             <?php endwhile; ?>
              <div class="navigation">
               <?php posts_nav_link(' - ', __('« mais novas'), __('mais antigas »')); ?>
             </div>
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