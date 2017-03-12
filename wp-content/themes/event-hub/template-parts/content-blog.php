<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package event-hub
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <div class="post-thumb">
        <a href="blog-single.html"><?php the_post_thumbnail();?></a>
    </div>
    <div class="content-outer">
        <div class="content">
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
            <div class="meta-post">
                <span class="date"><i class="fa fa-calendar"></i><?php the_date(); ?></span>
                <span class="border"></span>
                <a href="#" class="comment"><i class="fa fa-comment"></i><?php the_comment(); ?></a>
                <span class="border"></span>
                <span class="like"><i class="fa fa-heart"></i> 26 likes</span>
            </div>
            <div class="excerpt">
                <?php the_content(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="custom-btn hvr-bounce-to-bottom">Load More</a>
        </div><!-- /.content -->
    </div><!-- /.content-outer -->
</div><!-- /.post-item -->
                        
                     
                    

