<?php
$accesspresslite_options = accesspress_default_setting_value();
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
$menu_align            = isset( $accesspresslite_settings[ 'menu_alignment' ] ) ? $accesspresslite_settings[ 'menu_alignment' ] : '';
//$menu_align = $accesspresslite_settings['menu_alignment'];?>
<div id="top-header" class="<?php if($menu_align == 'Center'){echo 'center_menu_top';}?>">
		<div class="ak-container">
            <div class="header_text_left">
    			<?php 
    			     do_action( 'accesspresslite_header_text' );
                ?>
            </div>
            <?php
             if($menu_align == 'Center'){ ?>
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
            <?php } ?>
			<div class="right-header clearfix">
                <div class="clearfix"></div>
                <div class="social_search_container">
                    <div class="search_right">
                        <?php
                        $show_search = isset( $accesspresslite_settings[ 'show_search' ] ) ? $accesspresslite_settings[ 'show_search' ] : true;

                        if($show_search == 1 || $show_search == ''){ ?>
            				<div class="ak-search">
            					<?php get_search_form(); ?>
                                <i class="fa fa-search search_one"></i>
            				</div>
        				<?php }?>
                    </div>
                    <div class="social_icon_right"><?php
                        
            				/** 
            				* @hooked accesspresslite_social_cb - 10
            				*/
                            $show_social_header = isset( $accesspresslite_settings[ 'show_social_header' ] ) ? $accesspresslite_settings[ 'show_social_header' ] : '';
            				if($show_social_header == 1){
            				do_action( 'accesspresslite_social_links' ); 
            				}?>
                    </div>      
                </div>
			</div><!-- .right-header -->
		</div><!-- .ak-container -->
  </div><!-- #top-header -->
        
		<nav id="site-navigation" class="main-navigation <?php do_action( 'accesspresslite_menu_alignment' ); ?>">
			<div class="ak-container">
            <?php if($menu_align == 'Right' || $menu_align == ''){ ?>
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
            <?php } ?>
            <button class="menu-toggle btn-transparent-toggle"><?php esc_html_e( 'Menu', 'accesspress-lite' ); ?></button>
                <div class="menu-menu-1-container_wraper">
    				<?php wp_nav_menu( array( 
    				'theme_location' => 'primary' ) ); ?>
                </div>
        <?php if($menu_align == 'Left'){ ?>
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
            <?php } ?>                
			</div>
		</nav><!-- #site-navigation -->