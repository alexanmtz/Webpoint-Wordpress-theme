<a name="comments"></a>
<div class="comments">
  <?php if ( have_comments() ) : ?> 
  <h3><?php _e('Comments') ?></h3>
  <ul class="comment-content">
      <?php wp_list_comments(); ?>
  </ul>
  <?php endif; ?>
  <div class="comments-form">
    <?php comment_form(); ?>
  </div>
  <div class="facebookcomments">
    <?php if (function_exists('facebook_comments')) facebook_comments(); ?>
  </div>
</div>