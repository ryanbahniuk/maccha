<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>

	<h3 class="comments-title">Comments</h3>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="comment-navigation" role="navigation">
		<h1>Comment Navigation</h1>
		<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments') ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments') ); ?></div>
	</nav>
	<?php endif; ?>

	<ul class="comment-list">
		<?php
			wp_list_comments( array(
				'style'         => 'ul',
				'short_ping'    => false,
				'avatar_size'   => 34,
                'max_depth'     => '2',
                'type'          => 'comment',
                
			) );
		?>
	</ul>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php
    $comments_args = array(
            // change the title of send button 
            'label_submit'=>'Send',
            // change the title of the reply section
            'title_reply'=>'Write a Comment or Reply',
            // remove "Text or HTML to be displayed after the set of comment fields"
            'comment_notes_after' => '',
            // redefine your own textarea (the comment body)
            'comment_field' => '<div class="comment-form-comment input-group"><span class="input-group-addon">Comment</span><textarea id="comment" name="comment" class="form-control" aria-required="true"></textarea></div>',
            //change the fields in the comment form
            'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' =>
                  '<div class="comment-form-author input-group">' .
                  '<span class="input-group-addon">' . __('Name') . ( $req ? '<span class="required">*</span>' : '' ) . '</span> ' .
                  '<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                  '" size="30"' . $aria_req . ' /></div>',

                'email' =>
                  '<div class="comment-form-email input-group">' .
                  '<span class="input-group-addon">' . __('Email') . ( $req ? '<span class="required">*</span>' : '' ) . '</span> ' .
                  '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                  '" size="30"' . $aria_req . ' /></div>'
                )
              ),
    );

    comment_form($comments_args);
    ?>

</div>
