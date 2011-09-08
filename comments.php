<?php if ( have_comments() ) : ?>
<div class="comments">
  <h3>Comentários</h3>
  <div class="comment-content">
      <?php wp_list_comments(); ?>
  </div>
  <div class="comments-form">
    <?php comment_form(); ?>
  </div>
</div>
<?php endif; ?>