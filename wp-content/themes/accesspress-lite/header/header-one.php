<?php
$accesspresslite_options = accesspress_default_setting_value();
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );?>
<div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">				
				<?php if ( get_header_image() ) { ?>
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
				<?php }else{ ?>
					<h1 class="site-title"><?php echo bloginfo('title'); ?></h1>
					<div class="tagline site-description"><?php echo bloginfo('description'); ?></div>
				<?php } ?>		
				</a>
				
			</div><!-- .site-branding -->
        

			<div class="right-header clearfix">
				<?php 
				do_action( 'accesspresslite_header_text' ); 
                ?>
                <div class="clearfix"></div>
                <?php
				/** 
				* @hooked accesspresslite_social_cb - 10
				*/
				$show_social_header  = isset( $accesspresslite_settings[ 'show_social_header' ] ) ? $accesspresslite_settings[ 'show_social_header' ] : '';
				if($show_social_header == 1){
				do_action( 'accesspresslite_social_links' ); 
				}

				$show_search  = isset( $accesspresslite_settings[ 'show_search' ] ) ? $accesspresslite_settings[ 'show_search' ] : true;
				if($show_search == 1){ ?>
				<div class="ak-search">
					<?php get_search_form(); ?>
				</div>
				<?php } ?>
			</div><!-- .right-header -->
		</div><!-- .ak-container -->
  </div><!-- #top-header -->

		
		<nav id="site-navigation" class="main-navigation <?php do_action( 'accesspresslite_menu_alignment' ); ?>">
			<div class="ak-container">
				<button class="menu-toggle btn-transparent-toggle"><?php esc_html_e( 'Menu', 'accesspress-lite' ); ?></button>

				<?php wp_nav_menu( array( 
				'theme_location' => 'primary' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->