<?php 

function st_cm_light_slider(){
	$labels = array(
    'name' => _x('Light Slider', 'post type general name'),
    'singular_name' => _x('Light Slider', 'post type singular name'),
    'all_items' => __('View Slides'),
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_icon'           => 'dashicons-images-alt2',
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 
  register_post_type('cm_light_slider',$args);
}

function st_cm_sh_light_slider($attr){

    $pram = shortcode_atts( array(
        'container' => "true",
    ), $attr );

    $result .= "";

    $args = array( 'post_type' => 'cm_light_slider', 'order' => 'ASC' );
    $loop = new WP_Query( $args );

    $result .= '<ul id="st-light-slider">';

        $count = 1;
        while ( $loop->have_posts() ) : $loop->the_post();
            $result .= '<li class="slide-'.$count.'"';

            if ( has_post_thumbnail() ){
                $result .= ' style="background-image: url(\''.get_the_post_thumbnail_url().'\');  background-repeat: no-repeat; background-size: cover; background-position: center; height: 100%; " ';
            }

            $result .= '>'; // <li> starts

            if( $pram['container'] == "true" )
                $result .= '<div class="container">';
                
            $result .= get_the_content();
            
            if( $pram['container'] == "true" )
                $result .= '</div>';
            
            $result .= '</li>';

            $count++;
        endwhile;

    $result .= '</ul>';

    return $result;
}


function st_cm_slider_script() {
?>
    <script type="text/javascript">
        if ( undefined !== window.jQuery ) {
            $('#st-light-slider').lightSlider({
                item: 1,
                slideMove: 1,
                slideMargin: 0,
                enableDrag: false
            });
        }
    </script>
<?php
}
