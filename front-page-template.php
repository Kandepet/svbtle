<?php 
/*
Template Name: front-page
*/

get_header();

//get_template_part( 'loop', 'index' );

?>


<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>

<?php endif; ?>

	<article id="post-0">
		<!--<h5 class="frontpage-title"><?php echo bloginfo( 'description' ); ?></h5>-->
		<!--<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'boilerplate' ); ?></p>
			<?php get_search_form(); ?>
		</div>--><!-- .entry-content -->
	</article><!-- #post-0 -->


    <article style="border-left: 10px solid #C0143C; padding: 3em 50px">
    <h2> Welcome to hacker labs.  </h2>
    <!--<h3>by Deepak Kandepet</h3>-->
    <p>I am a software engineer working for one the best search companies. Hacker labs is my playground where I experiment with the latest innovations, technologies and products that fascinates me. You can view some of my work, hacks and blog here. </p>
    
    <a class="continue" href="blog/about">More →</a>
    </article>

	<article id="post-0" style="padding: 0px 50px">
			<h2>BLOG POSTS</h2>
    </article><!-- #post-0 -->

    <frontpage-list id="post-0" style="padding: 0px 50px">
        <ul class="frontpage-blog-list">
<?php 
    $archive_query = new WP_Query('showposts=1000');
        while ($archive_query->have_posts()) : $archive_query->the_post(); 
        $categoryclasses = "";
        foreach((get_the_category()) as $category) { 
            $categoryclasses .= $category->cat_name . '-category '; 
        } 
?>
    <a href="<?php the_permalink() ?>" rel="post" title="<?php the_title(); ?>" class="frontpage-blog-link" ><li class="<?php echo $categoryclasses ?>"><span class="frontpage-date"><?php the_time('m/d/Y') ?></span><?php the_title(); ?> (<?php comments_number('0', '1', '%'); ?>)</li> </a>
<?php endwhile; ?>

        </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </frontpage-list><!-- #post-0 -->

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<nav id="nav-below" class="navigation">
		<?php next_posts_link( __( '&larr; Previous', 'boilerplate' ) ); ?>
		<div class="next">
			<?php previous_posts_link( __( 'Next &rarr;', 'boilerplate' ) ); ?>
		</div>
	</nav><!-- #nav-below -->
<?php endif; ?>

<?php get_footer(); ?>
