<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	 <link rel="profile" href="https://gmpg.org/xfn/11"> 
	 <?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

    <header
        class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline"
        id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
        <div id="ast-desktop-header" data-toggle-type="dropdown">
            <div class="ast-above-header-wrap">
                <div class="ast-above-header-bar ast-above-header site-header-focus-item right"
                    data-section="section-above-header-builder">
                    <div class="site-above-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container"
                        data-section="section-above-header-builder">
                        <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                            <div class="site-header-above-section-left site-header-section ast-flex site-header-section-left">
                                <div class="ast-builder-layout-element ast-flex site-header-focus-item"
                                    data-section="title_tagline">
                                    <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization"
                                        itemscope="itemscope">
                                        <span class="site-logo-img"><a href="/"
                                                class="custom-logo-link" rel="home" aria-current="page"><img width="201"
                                                    height="19"
                                                    src="../wp-content/uploads/2023/11/Logo-mini.png"
                                                    class="custom-logo" alt="" decoding="async"></a></span>
                                        <div class="ast-site-title-wrap">
                                            <span class="site-title" itemprop="name">
                                                <a href="/" rel="home" itemprop="url">
    
                                                </a>
                                            </span>
    
                                        </div>
                                    </div>
                                    <!-- .site-branding -->
                                </div>
                            </div>
                            <div
                                class="site-header-above-section-right site-header-section ast-flex ast-grid-right-section">
                                <div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item"
                                    data-section="section-hb-menu-1">
                                    <div class="ast-main-header-bar-alignment">
                                        <div class="main-header-bar-navigation">
                            
                                        

							<!-- INSERTION du MENU du HEADER WP -->			
							<?php wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class' => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border stack-on-mobile',
								)
                                );

							?>
                        <!--
                        <ul id="menu-menu-du-header" 
                            class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border stack-on-mobile">
                            <li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899">
                                <a href="http://localhost/planty/rencontrez-nous/" class="menu-link">Nous rencontrer</a></li>
                            <li id="menu-item-409" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-409">
                                <a target="_blank" class="menu-link" href="/planty/wp-admin/">Admin</a>
                            </li>
                            <li id="menu-item-747" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-747">
                                <a href="http://localhost/planty/precommande/" class="menu-link">Commander</a>
                            </li>
                        </ul>
                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ast-desktop-header-content content-align-flex-start " style="display: none;">
        </div>
    </div> <!-- Main Header Bar Wrap -->
    <div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
        <div class="ast-main-header-wrap main-header-bar-wrap">
            <div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default"
                data-section="section-primary-header-builder">
                <div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
                    <div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
                        <div class="ast-builder-layout-element ast-flex site-header-focus-item"
                            data-section="title_tagline">
                            <div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization"
                                itemscope="itemscope">
                                <span class="site-logo-img"><a href="/" class="custom-logo-link"
                                        rel="home" aria-current="page"><img width="201" height="19"
                                            src="/wp-content/uploads/2023/11/Logo-mini.png"
                                            class="custom-logo" alt="" decoding="async"></a></span>
                                <div class="ast-site-title-wrap">
                                    <span class="site-title" itemprop="name">
                                        <a href="/" rel="home" itemprop="url">

                                        </a>
                                    </span>

                                </div>
                            </div>
                            <!-- .site-branding -->
                        </div>
                    </div>
                    <div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
                        <div class="ast-builder-layout-element ast-flex site-header-focus-item"
                            data-section="section-header-mobile-trigger">
                            <div class="ast-button-wrap">
                                <button type="button"
                                    class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal"
                                    aria-expanded="false" data-index="0">
                                    <span class="screen-reader-text">Main Menu</span>
                                    <span class="mobile-menu-toggle-icon">
                                        <span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
                                                class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z">
                                                </path>
                                            </svg></span><span
                                            class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg
                                                class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z">
                                                </path>
                                            </svg></span> </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ast-mobile-header-content content-align-flex-start ">
            <div class="ast-builder-menu-mobile ast-builder-menu ast-builder-menu-mobile-focus-item ast-builder-layout-element site-header-focus-item"
                data-section="section-header-mobile-menu">
                <div class="ast-main-header-bar-alignment">
                    <div class="main-header-bar-navigation">
                        <nav class="site-navigation" id="ast-mobile-site-navigation"
                            itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"
                            aria-label="Navigation du site">
                            <div id="ast-hf-mobile-menu" class="main-navigation">
                                <ul
                                    class="main-header-menu ast-nav-menu ast-flex  submenu-with-border astra-menu-animation-fade  stack-on-mobile">
                                    <li class="page_item page-item-7 current-menu-item menu-item current-menu-item"><a
                                            href="/" class="menu-link">Accueil</a></li>
                                    <li class="page_item page-item-11 menu-item"><a
                                            href="/precommande/" class="menu-link">Commander</a>
                                    </li>
                                    <li class="page_item page-item-3 menu-item"><a
                                            href="/politique-de-confidentialite/"
                                            class="menu-link">Mentions légales</a></li>
                                    <li class="page_item page-item-9 menu-item"><a
                                            href="/rencontrez-nous/"
                                            class="menu-link">Nous-rencontrer</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>