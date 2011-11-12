<div class="grid_16">
    </div>
      <div class="footer">
        <?php foreach(get_categories_with_posts() as $cat) : ?>
	        <?php if (get_category_children($cat->cat_ID) != "") :?>
	        <div class="column grid_2">
	           <h2><?php echo $cat->cat_name; ?></h2>
	           <ul>
	           <?php wp_list_categories( array(
	                      'title_li' => '',
	                      'hide_empty' => 0,
	                      'depth' => 1,
	                       'child_of' => $cat->cat_ID
	                  )); ?>
	           </ul>
	        </div>
	        <?php endif; ?>
	        <?php endforeach; ?>
      </div>
      <div class="bottombar">
          <ul class="horizontal-list">
            <li><a href="<?php bloginfo('rss_url'); ?>" title="<?php __('assinar feed de notícias') ?>"><span></span><?php __('feed de notícias') ?></a></li>
            <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php __('assinar feed de comentários') ?>"><span></span><?php --('feed de comentários') ?></a></li>
          </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>