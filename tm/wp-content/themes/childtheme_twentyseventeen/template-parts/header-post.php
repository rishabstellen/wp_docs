<?php 

$args = array( 'post_type' => 'header_posts', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );

?>
<ul id="header-slider">
<?php

while ( $loop->have_posts() ) : $loop->the_post();

	echo '<li class="slide-item">';
		if (has_post_thumbnail())
			echo '<img src="'.get_the_post_thumbnail_url().'" />';
		else
			echo '<h2>'.get_the_content().'</h2>';
	echo '</li>';

endwhile;

?>
</ul><!-- Header Slider -->
<?php

?>