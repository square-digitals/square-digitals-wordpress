<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#A10370">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- =====================================================
     SITE HEADER
     ===================================================== -->
<header id="site-header" class="transparent" role="banner" x-data="{ mobileOpen: false, servicesOpen: false }">

    <div class="header-inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?> — Home">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/logo-square-digitals-white.png' ); ?>"
                 alt="Square Digitals"
                 class="site-logo-img"
                 width="180" height="47"
                 loading="eager">
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-desktop" role="navigation" aria-label="Primary navigation">

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Home</a>

            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-link <?php echo is_page( 'about' ) ? 'active' : ''; ?>">About</a>

            <!-- Services dropdown -->
            <div class="nav-dropdown" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button class="nav-link flex items-center gap-1" aria-haspopup="true" :aria-expanded="open.toString()">
                    Services
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" :style="open ? 'transform:rotate(180deg);transition:transform 0.2s' : 'transition:transform 0.2s'"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="nav-dropdown-menu" x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" x-cloak>
                    <a href="<?php echo esc_url( home_url( '/web-design/' ) ); ?>">
                        <span style="color:var(--color-primary)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        </span>
                        Web Design &amp; Development
                    </a>
                    <a href="<?php echo esc_url( home_url( '/web-maintenance/' ) ); ?>">
                        <span style="color:var(--color-primary)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                        </span>
                        Web Maintenance
                    </a>
                    <a href="<?php echo esc_url( home_url( '/seo-services/' ) ); ?>">
                        <span style="color:var(--color-primary)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        </span>
                        SEO Services
                    </a>
                    <a href="<?php echo esc_url( home_url( '/ppc-advertising/' ) ); ?>">
                        <span style="color:var(--color-primary)">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                        </span>
                        PPC Advertising <span style="font-size:0.7rem;color:#f59e0b;font-weight:700;margin-left:4px;">SOON</span>
                    </a>
                </div>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-link <?php echo is_page( 'contact' ) ? 'active' : ''; ?>">Contact</a>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary ml-2" style="padding:10px 22px;font-size:0.875rem;">
                Get a Free Quote
            </a>
        </nav>

        <!-- Hamburger (mobile) -->
        <button
            class="hamburger-btn"
            aria-label="Toggle mobile menu"
            aria-expanded="false"
            @click="mobileOpen = !mobileOpen"
            :aria-expanded="mobileOpen.toString()"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div><!-- /.header-inner -->

    <!-- Mobile Drawer -->
    <div
        class="mobile-drawer"
        role="dialog"
        aria-modal="true"
        aria-label="Mobile navigation"
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-250"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        x-cloak
        @keydown.escape.window="mobileOpen = false"
    >
        <!-- Drawer header -->
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:32px;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" @click="mobileOpen = false">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/logo-square-digitals-white.png' ); ?>"
                     alt="Square Digitals"
                     class="site-logo-img"
                     width="160" height="42"
                     loading="lazy">
            </a>
            <button
                @click="mobileOpen = false"
                aria-label="Close menu"
                style="background:rgba(255,255,255,0.1);border:none;border-radius:8px;padding:10px;cursor:pointer;color:white;"
            >
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        <!-- Mobile links -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-nav-link" @click="mobileOpen = false">Home</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mobile-nav-link" @click="mobileOpen = false">About</a>

        <!-- Mobile Services accordion -->
        <div x-data="{ servOpen: false }">
            <button
                class="mobile-nav-link"
                style="width:100%;display:flex;justify-content:space-between;align-items:center;background:none;border:none;cursor:pointer;text-align:left;"
                @click="servOpen = !servOpen"
                :aria-expanded="servOpen.toString()"
            >
                Services
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" :style="servOpen ? 'transform:rotate(180deg);transition:0.2s' : 'transition:0.2s'"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div x-show="servOpen" x-collapse style="padding-left:16px;" x-cloak>
                <a href="<?php echo esc_url( home_url( '/web-design/' ) ); ?>" class="mobile-nav-link" style="font-size:0.95rem;opacity:0.8;" @click="mobileOpen = false">↳ Web Design &amp; Development</a>
                <a href="<?php echo esc_url( home_url( '/web-maintenance/' ) ); ?>" class="mobile-nav-link" style="font-size:0.95rem;opacity:0.8;" @click="mobileOpen = false">↳ Web Maintenance</a>
                <a href="<?php echo esc_url( home_url( '/seo-services/' ) ); ?>" class="mobile-nav-link" style="font-size:0.95rem;opacity:0.8;" @click="mobileOpen = false">↳ SEO Services</a>
                <a href="<?php echo esc_url( home_url( '/ppc-advertising/' ) ); ?>" class="mobile-nav-link" style="font-size:0.95rem;opacity:0.8;" @click="mobileOpen = false">↳ PPC Advertising <span style="color:#f59e0b;font-size:0.7rem;font-weight:700;">SOON</span></a>
            </div>
        </div>

        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mobile-nav-link" @click="mobileOpen = false">Contact</a>

        <div style="margin-top:32px;">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary" style="width:100%;justify-content:center;" @click="mobileOpen = false">
                Get a Free Quote
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>

        <!-- Social links in mobile drawer -->
        <div class="social-links" style="margin-top:auto;padding-top:32px;">
            <a href="#" class="social-link" aria-label="LinkedIn" rel="noopener noreferrer">
                <svg viewBox="0 0 24 24" fill="white" width="16" height="16"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
            <a href="#" class="social-link" aria-label="Twitter / X" rel="noopener noreferrer">
                <svg viewBox="0 0 24 24" fill="white" width="16" height="16"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a href="#" class="social-link" aria-label="Instagram" rel="noopener noreferrer">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" width="16" height="16"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
            </a>
            <a href="#" class="social-link" aria-label="Facebook" rel="noopener noreferrer">
                <svg viewBox="0 0 24 24" fill="white" width="16" height="16"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
        </div>

    </div><!-- /.mobile-drawer -->

</header><!-- /#site-header -->

<div id="page-wrap">
