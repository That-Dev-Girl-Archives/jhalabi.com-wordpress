<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package jhalabi
 */

if ( !function_exists('jhalabi_posted_on') ):
	function jhalabi_posted_on() {
		$time_string = '<time datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		echo '<p class="posted-on">' . $time_string . '</p>';

	}
endif;

if ( !function_exists('jhalabi_comments_nav') ):
	function jhalabi_comments_nav() {
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
			echo '<nav id="comment-nav-below" class="comment-navigation" role="navigation">';
			echo '<div class="nav-previous">' . previous_comments_link( __( '&larr; Older Comments', 'jhalabi' ) ) . '</div>';
			echo '<div class="nav-next">' . next_comments_link( __( 'Newer Comments &rarr;', 'jhalabi' ) ) . '</div>';
			echo '</nav>';
		}
	}
endif;

if ( !function_exists('jhalabi_comment_form') ):
	function jhalabi_comment_form() {
		$fields =  array(
		    'author' =>
			    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . ' <span class="required">*</span></label>' .
			    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			    '" size="30"' . $aria_req . ' /></p>' .
			    '<p class="comment-form-email"><label for="email">' . __( 'E-mail', 'domainreference' ) . ' <span class="required">*</span></label>' .
			    '<input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_email'] ) .
			    '" size="30"' . $aria_req . ' /></p>'
		);

		$args = array(
			'title_reply' 	=> __( 'Write a Comment' ),
			'label_submit'  => __( 'Submit Comment' ),
			'fields'		=> apply_filters( 'comment_form_default_fields', $fields ),
			'comment_notes_before' => '',
			'comment_notes_after' => ''
		);

		comment_form($args);
	}
endif;

if ( !function_exists('jhalabi_format_comment') ):
	function jhalabi_format_comment() {
		$html  = '<li>';
		$html .= '<p>' . get_comment_author() . '<br />';
		$html .= '<time>' . get_comment_date() . ' ' . get_comment_time() . '</time></p>';
		$html .= '<p class="comment-content">' . get_comment_text() . '</p>';;
		$html .= '</li>';

		echo $html;
	}
endif;

if ( !function_exists('jhalabi_posts_navigation') ):
	function jhalabi_posts_navigation() {
		$args = array(
			'prev_text'          => __( '<i class="fa fa-arrow-left"></i> Older posts' ),
            'next_text'          => __( '<i class="fa fa-arrow-right"></i> Newer posts' ),
            'screen_reader_text' => ' '
        );

        the_posts_navigation($args);
	}
endif;

if ( !function_exists('jhalabi_blog_recent') ):
	function jhalabi_blog_recent() {
		query_posts( 'posts_per_page=1' );

		while (have_posts()):
			the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
	}
endif;

if ( !function_exists('jhalabi_blog_categories') ):
	function jhalabi_blog_categories() {
		$cats = get_categories();
		
		foreach ($cats as $cat) {
			$link = get_category_link($cat->term_id);

			$posts_count = get_term_by('id', $cat->term_id, 'category')->count;

			$html  = sprintf( __('<h2><a href="%s">%s</a></h2>', 'jhalabi'), $link, $cat->name );
			$html .= '<p>' . $cat->description . '</p>';
			$html .= sprintf( __('<p><a href="%s" rel="bookmark" class="continue">Read %s Posts</a></p>', 'jhalabi'), $link, $posts_count );
			echo '<article>' . $html . '</article>';
		}
	}
endif;