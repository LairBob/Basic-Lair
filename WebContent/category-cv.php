<?php get_header(); ?>
		
	<div id="container">

		<div id="toptags">
			<h3><?php _e( 'Categories', 'basicmaths' ) ?></h3>
			<ul>
				<?php basic_categories(); ?>
			</ul>
		</div>

			<h2 class="archive-title-cv"> <span><?php single_cat_title() ?></span></h2>
			<div class="single-entry-meta archive-meta">
			</div>

		<div id="content">

<?php while ( have_posts() ) : the_post(); ?>

			<div class="hentry post">
				<h2 class="entry-title-cv"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="entry-content entry-summary">
<?php the_excerpt(); ?>
				</div>
				
				<div class="entry-meta">
					<span class="continue-link"><a href="<?php the_permalink() ?>"><?php _e( 'More&hellip;', 'basicmaths' ) ?></a></span>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'basicmaths' ), __( 'Comments (1)', 'basicmaths' ), __( 'Comments (%)', 'basicmaths' ) ) ?></span>
					<?php edit_post_link(__( 'Edit', 'basicmaths' ), '<span class="edit">', '</span>'); ?> 
				</div><!-- .entry-meta -->
			</div><!-- .post -->

<?php endwhile ?>

			<div class="nextprev pagination">
				<div class="nav-previous"><span class="nextprev-arrow">&lsaquo;</span><?php next_posts_link(__( '<span class="nextprev-link-title">Older posts</span>', 'basicmaths' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( '<span class="nextprev-link-title">Newer posts</span>', 'basicmaths' )) ?><span class="nextprev-arrow">&rsaquo;</span></div>
			</div><!-- .nextprev -->

		</div><!-- #content -->
	
<?php get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer(); ?>