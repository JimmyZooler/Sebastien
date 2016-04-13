<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar row" id="top-bar-menu">
	<div class="top-bar-left-1 ">
            <a href="<?php echo home_url(); ?>"><img src="wp-content/themes/Sebastien_Schwab/Sebastien_logo_crop.jpg" width="266px"/></a>
	</div>
	<div class="top-bar-right-1 show-for-medium">
            <div class="nav-container">
		<div class="top-nav right">
                    <?php joints_top_nav(); ?>	
                </div>
                 <div class="top-nav-social right">
                     <i class="fa fa-facebook" aria-hidden="true"></i>
                     <i class="fa fa-youtube" aria-hidden="true"></i>
                </div>   
            </div>
            <div class="tagline">
                <?php bloginfo('description'); ?>
            </div>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
            <div class="mobile-container">
                <div class="mobile-social">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </div>
                <ul class="mobile-menu">
                    <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> 
                    <!--<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>-->
                </ul>
            </div>
            <div class="tagline">
                <?php bloginfo('description'); ?>
            </div>
	</div>
</div>