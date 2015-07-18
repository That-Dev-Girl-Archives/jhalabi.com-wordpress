<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package jhalabi
 */

if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h3>
			<?php printf( _nx( '%1$s Comment', '%1$s Comments', get_comments_number(), 'jhalabi' ), number_format_i18n( get_comments_number() ) ); ?>
		</h3>

		<?php jhalabi_comments_nav(); ?>

		<ul class="comments-area__ul">
			<?php wp_list_comments('type=comment&callback=jhalabi_format_comment'); ?>
		</ul>

		<?php jhalabi_comments_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'jhalabi' ); ?></p>
	<?php endif; ?>

	<?php jhalabi_comment_form(); ?>
</div>