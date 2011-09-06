<div class="grid_16">
    </div>
      <div class="footer">
        <?php foreach(get_categories('number=4') as $cat) : ?>
        <div class="column grid_2">
           <h2><?php echo $cat->category_nicename; ?></h2>
           <ul>
           <?php wp_list_categories( array(
                      'title_li' => '',
                      'hide_empty' => 1,
                       'child_of' => $cat->cat_ID
                  )); ?>
           </ul>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="bottombar">
          <ul class="horizontal-list">
            <li><a href="<?php bloginfo('rss_url'); ?>" title="assinar feed de posts"><span></span>feed de notícias</a></li>
            <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="assinar feed de comentários"><span></span>feed de comentários</a></li>
          </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>