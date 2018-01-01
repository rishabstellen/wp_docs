<?php /* Template Name: Blog Post Loop */ ?>
 
<?php get_header(); ?>

<?php
	$title = "";
	$content = "";
	if(have_posts()):
		the_post();
		$title = get_the_title();
		$content = do_shortcode( get_the_content() );
		$post_loop = get_post_meta( $post->ID, 'post_loop' , true);
	endif;
	wp_reset_query();
?>

<div id="page-content-title">
	<div class="container clerafix">
    	<h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="innerContent">
	<div class="container">
		<?php

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$search_keyword = get_post_meta( $post->ID, 'search_keyword' , true);

		if(strlen($search_keyword) > 0)
			add_filter( 'posts_where', 'posts_where_condition_search' );

		$args = array( 'post_type' => $post_loop, 'paged' => $paged);
		$loop = new WP_Query( $args );

		if(strlen($search_keyword) > 0)
			remove_filter( 'posts_where', 'posts_where_condition_search' ); 

		if ($loop->have_posts()) {
			while ( $loop->have_posts() ) : $loop->the_post();
			  ?><h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2><?php

			  if(has_post_thumbnail())
			  	echo the_post_thumbnail();
			  
			  the_content();

			  echo custom_book_link();
			  
			endwhile;

			echo $content;
			?>

			<div class="col-md-6">
				<p class="left"><?php echo previous_posts_link( 'Newer Entries' ); ?></p>
			</div>
			<div class="col-md-6">
				<p class="right"><?php echo next_posts_link( 'Older Entries', $loop->max_num_pages ); ?></p>
			</div>

			<?php
		}

		?>

	</div>	
</div>  

<?php get_footer(); ?>