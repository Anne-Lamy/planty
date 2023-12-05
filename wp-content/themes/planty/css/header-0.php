<header
        class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline"
        id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">

    <div class="planty_navigation">

        <div class="planty_logo">
            <span class="site-logo-img">
                <a href="http://localhost/planty/" class="custom-logo-link" rel="home" aria-current="page">
                    <img width="201" height="19"
                        src="http://localhost/planty/wp-content/uploads/2023/11/cropped-Logo-mini.png"
                        class="custom-logo" alt="" decoding="async">
                </a>
            </span>
        </div class="planty_menu">
			<?php wp_nav_menu(
			    array(
			        'theme_location' => 'primary',
			        'menu_class' => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border stack-on-mobile',
			    )
			)?>
        <div>

        </div>
    </div>

</header>