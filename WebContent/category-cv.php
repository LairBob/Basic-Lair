<?php get_header(); ?>
		
	<div id="container">

		<div id="toptags">
			<h3><?php _e( 'Categories', 'basicmaths' ) ?></h3>
			<ul>
				<?php basic_categories(); ?>
			</ul>
		</div>

			<h2 class="archive-title-cv"> <span>Experienced Digital Leadership</span></h2>
			<div class="single-entry-meta archive-meta">
			</div>

		<div id="content">
		
<?php $posts = query_posts( $query_string . '&orderby=start_date&order=asc' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

			<div class="hentry post">
				<h2 class="entry-title-cv"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="entry-content entry-summary">
					<?php the_excerpt(); ?>
				</div>
				
				<div class="entry-meta">
					<!-- The "meta" stuff from the original "Basic Maths" template file needs to go here, but for some reason I'm not able to comment out PHP code right now -->
				</div> <!-- .entry-meta -->
			</div><!-- .post -->

 <?php endwhile ?>


		</div><!-- #content -->
	
	</div><!-- #container -->

<?php get_footer(); ?>