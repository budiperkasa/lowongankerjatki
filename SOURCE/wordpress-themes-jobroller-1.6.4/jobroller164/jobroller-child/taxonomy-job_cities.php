<?php get_header('search'); ?>
	
<?php do_action('jobs_will_display'); ?>

	<div class="section">

		<?php
		$job_type_slug = get_query_var('job_cities');
		$job_type = get_term_by( 'slug', $job_type_slug, 'job_cities');
		?>

		<h1 class="pagetitle"><?php echo '<small class="rss"><a href="'.jr_get_current_url().'rss"><img src="'.get_bloginfo('template_url').'/images/feed.png" title="'.single_cat_title("", false).' '.__('Jobs RSS Feed','appthemes').'" alt="'.single_cat_title("", false).' '.__('Jobs RSS Feed','appthemes').'" /></a></small>'; ?> <?php echo wptexturize($job_type->name); ?> <?php _e('Jobs','appthemes'); ?> <?php
		?></h1>

		<?php get_template_part( 'loop', 'job' ); ?>

		<?php jr_paging(); ?>
		
		<div class="clear"></div>

	</div><!-- end section -->

	<div class="clear"></div>

</div><!-- end main content -->

<?php if (get_option('jr_show_sidebar')!=='no') get_sidebar(); ?>

<?php get_footer(); ?>