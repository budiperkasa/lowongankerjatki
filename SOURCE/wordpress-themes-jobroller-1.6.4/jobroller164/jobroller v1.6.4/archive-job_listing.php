<?php get_header('search'); ?>

<?php do_action('jobs_will_display'); ?>

<?php
if ( get_query_var('paged') )
    $paged = get_query_var('paged');
elseif ( get_query_var('page') )
    $paged = get_query_var('page');
else
    $paged = 1;

?>
	<?php do_action('before_front_page_jobs'); ?>

	<div class="section">

		<h2 class="pagetitle">

			<small class="rss"><a href="<?php echo add_query_arg('post_type', 'job_listing', get_bloginfo('rss2_url')); ?>"><img src="<?php bloginfo('template_url'); ?>/images/feed.png" title="<?php _e('Latest Jobs RSS Feed','appthemes'); ?>" alt="<?php _e('Latest Jobs RSS Feed','appthemes'); ?>" /></a></small>

			<?php _e('Latest Jobs','appthemes'); ?> <?php if ($paged>1) { ?>(<?php _e('page', 'appthemes' ) ?> <?php echo $paged; ?>)<?php } ?>

			<?php if (isset($_GET['action']) && $_GET['action'] == 'Filter') { ?>
				<small> &mdash; <a href="<?php echo jr_get_current_url(); ?>"><?php _e('Remove Filters','appthemes'); ?></a></small>
			<?php } ?>

		</h2>

		<?php
			$args = jr_filter_form();
			query_posts($args);

			// call the main loop-job.php file
			get_template_part( 'loop', 'job' );
		?>

		<?php jr_paging(); ?>

		<?php wp_reset_query(); ?>

		<div class="clear"></div>

	</div><!-- end section -->

	<?php do_action('after_front_page_jobs'); ?>

    <div class="clear"></div>

</div><!-- end main content -->

<?php if (get_option('jr_show_sidebar')!=='no') get_sidebar(); ?>
