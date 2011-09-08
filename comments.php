<?php if ( have_comments() ) : ?>
<div class="comments">
  <h3>Comentários</h3>
  <ul class="comment-content">
      <?php wp_list_comments(); ?>
  </ul>
  <div class="comments-form">
    <?php comment_form(); ?>
  </div>
</div>
<?php endif; ?>