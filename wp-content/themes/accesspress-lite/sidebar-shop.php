<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package AccesspressLite
 */
?>

<?php 
global $post, $accesspresslite_options;
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );

$event_category  	= isset( $accesspresslite_settings[ 'event_cat' ] ) ? $accesspresslite_settings[ 'event_cat' ] : '';
$show_events  	= isset( $accesspresslite_settings[ 'rightsidebar_show_latest_events' ] ) ? $accesspresslite_settings[ 'rightsidebar_show_latest_events' ] : '';
$testimonial_category  	= isset( $accesspresslite_settings[ 'testimonial_cat' ] ) ? $accesspresslite_settings[ 'testimonial_cat' ] : '';
$show_testimonials  	= isset( $accesspresslite_settings[ 'rightsidebar_show_testimonials' ] ) ? $accesspresslite_settings[ 'rightsidebar_show_testimonials' ] : '';


$post_class = "";

if(!empty($post)){
	if(is_front_page()){
		$postID = get_option('page_on_front');
	}else{
		$postID = $post->ID;
	}
	$post_class = get_post_meta( $postID, 'accesspresslite_sidebar_layout', true );
}

if($post_class=='right-sidebar' || $post_class=='both-sidebar' || empty($post_class) || is_archive()){
?>
	<div id="secondary-right" class="widget-area right-sidebar sidebar">
		<?php
			if($show_events==1) {
				if(!empty($event_category)){
				$loop = new WP_Query( array(
	                'cat' => $event_category,
	                'posts_per_page' => 3,
	            )); ?>
	        <aside id="latest-events" class="clearfix">
	        <h3 class="widget-title"><?php echo esc_html(get_cat_name($event_category)); ?></h3>

	        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
	        	<div class="event-list clearfix">
	        		
	        		<figure class="event-thumbnail">
						<a href="<?php the_permalink(); ?>">
						<?php 
						if( has_post_thumbnail() ){
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'event-thumbnail', false ); 
						?>
						<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
						<?php } ?>
						
						
						<div class="event-date">
							<span class="event-date-day"><?php echo get_the_date('j'); ?></span>
							<span class="event-date-month"><?php echo get_the_date('M'); ?></span>
						</div>
						</a>
					</figure>	

					<div class="event-detail">
		        		<h4 class="event-title">
		        			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        		</h4>

		        		<div class="event-excerpt">
		        			<?php echo esc_html(accesspresslite_excerpt( get_the_content() , 50 )); ?> 
		        		</div>
	        		</div>
	        	</div>
	        <?php endwhile; ?>
	        <?php if(!empty($accesspresslite_settings['view_all_text'])){ ?>
	        <a class="all-events" href="<?php echo esc_url(get_category_link( $event_category )); ?>"><?php echo esc_html($accesspresslite_settings['view_all_text']); ?></a>
	        <?php } ?>
	        <?php wp_reset_postdata(); ?>
	        </aside>
	        <?php
	        } 
	        }?>

        <?php wp_reset_query(); ?>

	    <?php if($show_testimonials == 1){ ?>
		<aside class="widget testimonial-sidebar clearfix">
			<?php
			
			if(!empty($testimonial_category)) { ?>
			<h3 class="widget-title"><?php echo esc_html(get_cat_name($testimonial_category)); ?></h3>
				
	        <?php    
	        		$loop = new WP_Query( array(
	                'cat' => $testimonial_category,
	                'posts_per_page' => 3,
	            )); ?>
	        <div class="testimonial-wrap">
		        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

			        <div class="testimonial-list">
			        	<div class="testimonial-thumbnail">
			        		<?php 
                            if(has_post_thumbnail()){
                            the_post_thumbnail('thumbnail'); 
                            }else{ ?>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/testimonial-dummy.jpg" alt="no-image"/>
                            <?php }?>
		        		</div>

			        	<div class="testimonial-excerpt">
			        		<?php echo esc_html(accesspresslite_excerpt( get_the_content() , 90 )); ?>
			        	</div>
			        	<div class="clearfix"></div>
					<div class="testimoinal-client-name"><?php the_title(); ?></div>
					</div>
			<?php endwhile; ?>
	        </div>
            <?php if(!empty($accesspresslite_settings['view_all_text'])){ ?>
            <a class="all-testimonial" href="<?php echo esc_url(get_category_link( $testimonial_category )); ?>"><?php echo esc_html($accesspresslite_settings['view_all_text']); ?></a>
            <?php } ?>
            
	        <?php wp_reset_postdata(); 
			} ?>
		</aside>
		<?php } ?>
		

		<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		<?php endif; ?>
	</div><!-- #secondary -->
<?php }