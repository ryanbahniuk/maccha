<?php get_header(); ?>

<div class="container">

<?php get_sidebar(); ?>

    <section class="pull-right col-md-9">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <h3 class="post-byline">By: <?php the_author_posts_link(); ?></h3>
                <h3 class="post-date"><?php the_date(); ?></h3>
            </header>
            <div class="body-content">
                <?php the_excerpt(); ?>
            </div>
            <?php
                $comment_count = get_comments_number();
                if ($comment_count != 0) {
                    if ($comment_count > 1) {
                        $comment_class = "multiple";
                    } elseif ($comment_count == 1) {
                        $comment_class = "single";
                    }
                    echo '<a href="' . get_permalink() . '#comments"><div class="comment-count ' . $comment_class . '">' . get_comments_number() . ' Comments</div></a>';
                }
            ?>
        </article>
        
        <?php endwhile; ?>
        
        <?php if (show_posts_nav()) { ?>
        <div id="pagination">
            <div class="pagination-container">
                <?php if (get_previous_posts_link()) { ?><div class="page-link-previous"><?php previous_posts_link("Previous"); ?></div><?php } ?>
                <div class="page-link-seperator"></div>
                <?php if (get_next_posts_link()) { ?><div class="page-link-next"><?php next_posts_link("Next"); ?></div><?php } ?>
            </div>
        </div>
        <?php } ?>
        
        <?php else : ?>
        <article id="post-not-found" class="hentry">
            <header>
                <h1>No Posts Found!</h1>
            </header>
            Uh, oh! There appears to be no content that meets your criteria.
        </article>
        <?php endif; ?>

    </section>
    
</div>

<?php get_footer(); ?>