<?php get_header(); ?>
<!-- Add a microformats dumb ass!!!-->
<div id="container">
	<div id="content">
		<div id="post-17" class="hentry p1 page publish author-alex category-uncategorized tag- y2007 m07 d19 h23">
			<h2 class="entry-title"><a href="<?php echo get_option('siteurl'); ?>/artists/" title="Return to all our artists.">Artists</a></h2>
		
<?php while ( have_artists () ) : the_artist(); ?>
	<div class="entry-content">
		<img src="<?php artist_thumb ();?>" align="right" style="margin: 20px; border: 1px solid #000; clear:both;" />
		<a href="<?php echo get_option('siteurl'); ?>/artists/<?php artist_slug(); ?>" title="<?php artist_name(); ?>"><h3><?php artist_name(); ?></h3></a>
		<p><?php artist_blurb_tiny(); ?></p>
		</div>
<?php endwhile; ?>
			<!-- .entry-content -->
		</div><!-- .post -->
	</div><!-- #content -->
</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>