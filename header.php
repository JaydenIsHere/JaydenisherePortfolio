<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jaydenishere
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<section class="nav-bar">
				<div class="container">
					<div class="row">
							<!-- site Logo -->
						<div class="col-6 logo-wrapper">
							<a href="<?php echo esc_url(home_url( '/' )); ?>">
								<?php if( has_custom_logo() ): ?>
									<div class="logo-image">
									<img src="https://lh3.googleusercontent.com/jWwwtxYh9FlIVx-0PmdA809U4sWTePl0AyuYtkL9V0q9qop8Kz-gspE2gQBBx75j-Ld9EP00sZ5maiXC1eTh6huwOuBMw1HcMt_Wqce1TL3jEI24_3JHl25RQLq3r_zCTqgSWcKYDg=w2400" alt="">
									</div>
								<?php else: ?>
									<p class="site-title"><?php bloginfo( 'title' ); ?></p>
								<?php endif; ?>
							</a>
							</div>
								<!-- main nav menu -->
				<div class="col-6 nav-wrapper">
				<nav class="main-menu">
											<?php
											wp_nav_menu( array(
												'theme_location'  => 'jaydenishere_main_menu',
											) );
											?>
									</nav>				
				   
<div class="ham" >  
  <span class="bar1"></span>  
  <span class="bar2"></span>  
  <span class="bar3"></span>  
  </div> 	
						</div>	

						

					 <!-- social icons sidebar widget-->
					 <?php if(is_active_sidebar('social_icons')): ?>  
						<div class="col-2 social-wrapper">
                        <?php dynamic_sidebar('social_icons') ?> 
                        </div>
                    <?php endif; ?>     
					
					</div>
				</div>
			</section>
		</header>		
