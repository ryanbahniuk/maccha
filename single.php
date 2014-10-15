<?php get_header(); ?>

<?php 
 if ( has_post_thumbnail()) {
?>
<div class="jumbotron" 
   <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
    echo 'style="background-image: url(' . $image_url[0] . ');"';
    ?>
>
</div>
<?php }  ?>

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
                <?php the_content(); ?>
            </div>

            <?php if (get_the_tags()) { ?>
            <div class="tags"><?php the_tags(""); ?></div>
            <?php } ?>
        </article>
        
        <?php comments_template(); ?>
        
        <?php endwhile; ?>
        <?php else : ?>
        <article id="post-not-found" class="hentry">
            <header>
                <h1>No Post Found!</h1>
            </header>
            Uh, oh! There appears to be no content that meets this criteria.
        </article>
        <?php endif; ?>

    </section>
    
</div>

<?php get_footer(); ?>