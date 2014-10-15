<?php get_header(); ?>

<div class="jumbotron">
    <div class="container">
        <h1><?php identify_template(); ?></h1>
    </div>
</div>

<div class="container">
    
    <?php get_sidebar(); ?>

    <section class="pull-left col-md-9">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <h3 class="post-byline">By: <?php the_author_posts_link(); ?></h3>
                <h3 class="post-date"><?php the_date(); ?></h3>
            </header>
            <?php the_content(); ?>
        </article>
        
        <?php endwhile; ?>
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