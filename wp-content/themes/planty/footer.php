<!DOCTYPE html>

        <footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope"
            itemid="#colophon">
            <div class="site-above-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-full ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-inline ast-footer-row-tablet-stack ast-footer-row-mobile-stack"
                data-section="section-above-footer-builder">
                <div class="ast-builder-grid-row-container-inner">
                    <div class="ast-builder-footer-grid-columns site-above-footer-inner-wrap ast-builder-grid-row">
                        <div class="site-footer-above-section-1 site-footer-section site-footer-section-1">
                            <div class="footer-widget-area widget-area site-footer-focus-item"
                                data-section="section-footer-menu">
                                <div class="footer-bar-navigation">

                                    <!-- INSERTION du MENU du FOOTER WP -->			
                                    <?php wp_nav_menu(
                                        array(
                                            'theme_location' => 'footer',
                                            'menu_class' => 'ast-nav-menu ast-flex astra-footer-horizontal-menu astra-footer-tablet-vertical-menu astra-footer-mobile-vertical-menu',
                                        )
                                        );
                                    ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
              <?php wp_footer(); ?>
	</body>
</html>
