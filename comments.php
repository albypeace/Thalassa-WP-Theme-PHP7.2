<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','thalassa'); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<div class="comment_part">
	<h4 class="blg-cmt-count"><?php	printf( _n( 'One Comment', '%1$s Coments to %2$s', get_comments_number() ),
									number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?></h4></div>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<div class="col-sm-12 blg-sin-post-cmntpart2">
	<?php wp_list_comments('callback=th_thalassa_comment');?>
	</div>

	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.','thalassa'); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond" class="msg-form">

<h4 class="blg-cmt-count"><?php comment_form_title( __('Leave a Comments','thalassa'), __('Leave A Comment to %s','thalassa' ) ); ?></h4>

<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link() ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.'), get_edit_user_link(), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account'); ?>"><?php _e('Log out &raquo;','thalassa'); ?></a></p>

<?php else : ?>
	<fieldset class="name-container">
		 <label><span class="text-color">*</span> Name:</label>
		<input name="author" id="comment-name" value="<?php echo esc_attr($comment_author); ?>" type="text" <?php if ($req) echo "aria-required='true'"; ?>/>
	</fieldset>
		<fieldset class="email-container">
			<label><span class="text-color">*</span> Email:</label>
				<input name="email" value="<?php echo esc_attr($comment_author_email); ?>" id="comment-email" type="email" <?php if ($req) echo "aria-required='true'"; ?>>
		 </fieldset>

   


<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>','thalassa'), allowed_tags()); ?></small></p>-->
 <fieldset class="message">
       <label><span class="text-color"><?php _e('*','thalassa');?></span><?php _e(' Message:','thalassa');?></label>
           <textarea name="comment" id="comment-message" rows="8"></textarea>
    </fieldset>
 <input id="comment-reply" type="submit" tabindex="5" value="<?php esc_attr_e('Submit Now'); ?>"/>
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
