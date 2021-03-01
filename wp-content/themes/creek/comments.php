<div class="post-comments inner" id="comments">
	
	<?php 
		if(have_comments()):
			
			if ( comments_open() ) :
			echo '<div class="post-box"><h4 class="post-box-title h3 padding-vertical text-center"><span>';
			comments_number(esc_html( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'creek' ) ),
						number_format_i18n( get_comments_number() ));
			echo '</span></h4></div>';
			endif;

			echo "<ul class='comments padding-vertical '>";
				wp_list_comments(array(
					'avatar_size'	=> 60,
					'max_depth'		=> 5,
					'style'			=> 'ul',
					'callback'		=> 'creek_comments',
					'type'			=> 'all'
				));
			echo "</ul>";

			echo "<div id='comments_pagination'>";
				paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
			echo "</div>";

		endif;
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$comment_args = array( 
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<div class="comment-form-author col-6 padding-bottom"><input id="author" placeholder="'.esc_html__( 'Name', 'creek' ).'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',   
			'email'  => '<div class="comment-form-email col-6 padding-bottom"><input id="email" placeholder="'.esc_html__( 'Email', 'creek' ).'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
			'url'    => '' 
		)),
    'comment_field' => '<div class="col col-12 padding-vertical"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',
		'comment_notes_after' => '',
		);
		comment_form($comment_args); ?>


</div> <!-- end comments div -->