<?php
/**
 * Square Digitals — functions.php
 * Theme setup, asset enqueuing, menus, widget areas, custom post types.
 */

defined( 'ABSPATH' ) || exit;

define( 'SD_VERSION', '1.0.0' );
define( 'SD_DIR',     get_template_directory() );
define( 'SD_URI',     get_template_directory_uri() );

/* =========================================================
   THEME SETUP
   ========================================================= */
function sd_theme_setup() {
    load_theme_textdomain( 'square-digitals', SD_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    // Image sizes
    add_image_size( 'sd-hero',     1600, 900,  true );
    add_image_size( 'sd-card',     800,  500,  true );
    add_image_size( 'sd-thumb',    400,  300,  true );
    add_image_size( 'sd-team',     400,  500,  true );
    add_image_size( 'sd-portfolio',600,  450,  true );

    // Navigation menus
    register_nav_menus( [
        'primary'    => __( 'Primary Navigation', 'square-digitals' ),
        'footer-col2'=> __( 'Footer — Services', 'square-digitals' ),
        'footer-col3'=> __( 'Footer — Company',  'square-digitals' ),
    ] );
}
add_action( 'after_setup_theme', 'sd_theme_setup' );

/* =========================================================
   CONTENT WIDTH
   ========================================================= */
function sd_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'sd_content_width', 0 );

/* =========================================================
   ENQUEUE SCRIPTS & STYLES
   ========================================================= */
function sd_enqueue_assets() {

    // Google Fonts
    wp_enqueue_style(
        'sd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'sd-style',
        get_stylesheet_uri(),
        [ 'sd-google-fonts' ],
        SD_VERSION
    );

    // Animate.css
    wp_enqueue_style(
        'animate-css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        [],
        '4.1.1'
    );

    // AOS (Animate On Scroll) — CSS
    wp_enqueue_style(
        'aos-css',
        'https://unpkg.com/aos@2.3.4/dist/aos.css',
        [],
        '2.3.4'
    );

    // Tailwind CSS Play CDN
    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false
    );

    // Alpine.js
    wp_enqueue_script(
        'alpinejs',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        [],
        '3.13.3',
        true
    );

    // AOS JS
    wp_enqueue_script(
        'aos-js',
        'https://unpkg.com/aos@2.3.4/dist/aos.js',
        [],
        '2.3.4',
        true
    );

    // Theme main JS (inline, loaded last)
    add_action( 'wp_footer', 'sd_inline_footer_js', 99 );

    // Comment reply
    if ( is_singular() && comments_open() ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'sd_enqueue_assets' );

/* =========================================================
   TAILWIND CONFIG (injected inline after Tailwind CDN)
   ========================================================= */
function sd_tailwind_config() {
    ?>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary:  '#A10370',
                    'primary-dark': '#7d0257',
                    secondary:'#000000',
                    accent:   '#FFFFFF',
                },
                fontFamily: {
                    heading: ['"Plus Jakarta Sans"', 'sans-serif'],
                    body:    ['"Inter"', 'sans-serif'],
                },
                borderRadius: {
                    card: '16px',
                },
                boxShadow: {
                    card:       '0 4px 24px rgba(0,0,0,0.08)',
                    'card-hover':'0 12px 40px rgba(161,3,112,0.18)',
                },
            },
        },
        plugins: [],
    };
    </script>
    <?php
}
add_action( 'wp_head', 'sd_tailwind_config', 8 );

/* =========================================================
   INLINE FOOTER JS — AOS init, header scroll, counters, typewriter
   ========================================================= */
function sd_inline_footer_js() {
    ?>
    <script>
    // AOS init
    AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
    });

    // Sticky header behaviour
    (function() {
        var header = document.getElementById('site-header');
        if (!header) return;
        function onScroll() {
            if (window.scrollY > 60) {
                header.classList.add('scrolled');
                header.classList.remove('transparent');
            } else {
                header.classList.remove('scrolled');
                header.classList.add('transparent');
            }
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();

    // Animated stat counters
    (function() {
        var counters = document.querySelectorAll('[data-counter]');
        if (!counters.length) return;

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !entry.target.dataset.counted) {
                    entry.target.dataset.counted = '1';
                    var target  = parseInt(entry.target.dataset.counter, 10);
                    var suffix  = entry.target.dataset.suffix  || '';
                    var prefix  = entry.target.dataset.prefix  || '';
                    var duration = 1800;
                    var step     = Math.ceil(target / (duration / 16));
                    var current  = 0;
                    var interval = setInterval(function() {
                        current = Math.min(current + step, target);
                        entry.target.textContent = prefix + current.toLocaleString() + suffix;
                        if (current >= target) clearInterval(interval);
                    }, 16);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(function(el) { observer.observe(el); });
    })();

    </script>
    <?php
}

/* =========================================================
   WIDGET AREAS
   ========================================================= */
function sd_register_sidebars() {
    register_sidebar( [
        'name'          => __( 'Blog Sidebar', 'square-digitals' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets for the blog sidebar.', 'square-digitals' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="section-label mb-4">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'sd_register_sidebars' );

/* =========================================================
   TITLE TAG FILTER
   ========================================================= */
function sd_document_title_separator( $sep ) {
    return '|';
}
add_filter( 'document_title_separator', 'sd_document_title_separator' );

/* =========================================================
   CUSTOM EXCERPT LENGTH
   ========================================================= */
function sd_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'sd_excerpt_length', 999 );

function sd_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'sd_excerpt_more' );

/* =========================================================
   CONTACT FORM HANDLER (AJAX)
   ========================================================= */
function sd_handle_contact_form() {
    if ( ! isset( $_POST['sd_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sd_nonce'] ) ), 'sd_contact_form' ) ) {
        wp_send_json_error( [ 'message' => 'Security check failed.' ] );
    }

    $name    = sanitize_text_field( wp_unslash( $_POST['name']    ?? '' ) );
    $email   = sanitize_email(      wp_unslash( $_POST['email']   ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['phone']   ?? '' ) );
    $service = sanitize_text_field( wp_unslash( $_POST['service'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( [ 'message' => 'Please fill in all required fields.' ] );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please enter a valid email address.' ] );
    }

    $to      = 'info@squaredigitals.com.ng';
    $subject = "New Enquiry from {$name} — Square Digitals Website";
    $body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$name} <{$email}>",
    ];

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => "Thank you {$name}! We'll be in touch within 24 hours." ] );
    } else {
        wp_send_json_error( [ 'message' => 'There was an issue sending your message. Please email us directly at info@squaredigitals.com.ng.' ] );
    }
}
add_action( 'wp_ajax_sd_contact',        'sd_handle_contact_form' );
add_action( 'wp_ajax_nopriv_sd_contact', 'sd_handle_contact_form' );

/* =========================================================
   CONTACT FORM AJAX URL LOCALISATION
   ========================================================= */
function sd_localise_ajax() {
    wp_localize_script( 'sd-style', 'SD_AJAX', [
        'url'   => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'sd_contact_form' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'sd_localise_ajax', 20 );

/* =========================================================
   BODY CLASS ADDITIONS
   ========================================================= */
function sd_body_classes( $classes ) {
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }
    return $classes;
}
add_filter( 'body_class', 'sd_body_classes' );

/* =========================================================
   SEO — CLEAN UP <HEAD>
   ========================================================= */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/* =========================================================
   DISABLE BLOCK EDITOR STYLES ON FRONT-END (optional)
   ========================================================= */
function sd_remove_block_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'sd_remove_block_css', 100 );

/* =========================================================
   SCHEMA.ORG JSON-LD — ORGANISATION
   ========================================================= */
function sd_schema_org() {
    if ( ! is_front_page() ) return;
    $schema = [
        '@context'  => 'https://schema.org',
        '@type'     => 'ProfessionalService',
        'name'      => 'Square Digitals',
        'url'       => 'https://squaredigitals.com.ng',
        'logo'      => SD_URI . '/assets/images/logo.png',
        'email'     => 'info@squaredigitals.com.ng',
        'address'   => [
            '@type'           => 'PostalAddress',
            'addressCountry'  => 'NG',
            'addressLocality' => 'Lagos',
        ],
        'sameAs'    => [
            'https://www.linkedin.com/company/squaredigitals',
            'https://twitter.com/squaredigitals',
            'https://www.instagram.com/squaredigitals',
            'https://www.facebook.com/squaredigitals',
        ],
        'description' => 'Square Digitals is Nigeria\'s leading digital marketing agency offering web design, SEO, web maintenance, and PPC advertising services.',
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'sd_schema_org' );

/* =========================================================
   HELPER: render inline SVG icon
   ========================================================= */
function sd_icon( $name, $class = '' ) {
    $icons = [
        'globe'   => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'shield'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
        'search'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
        'bar-chart'=>'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>',
        'check'   => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>',
        'arrow-right'=>'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>',
        'star'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        'mail'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'phone'   => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'map-pin' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'users'   => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'zap'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
        'target'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
        'trending-up'=>'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
        'clock'   => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'lock'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>',
        'refresh' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>',
        'link'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
        'settings'=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>',
    ];
    $svg = $icons[ $name ] ?? '';
    if ( $class ) {
        $svg = str_replace( '<svg ', '<svg class="' . esc_attr( $class ) . '" ', $svg );
    }
    echo $svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/* =========================================================
   THEME SETUP ADMIN PAGE
   ========================================================= */

function sd_register_admin_page() {
    add_theme_page(
        'Square Digitals Setup',
        'SD Setup',
        'manage_options',
        'sd-setup',
        'sd_admin_page_render'
    );
}
add_action( 'admin_menu', 'sd_register_admin_page' );

/**
 * Pages to auto-create: [ title, slug, template, set_as_front ]
 */
function sd_pages_manifest() {
    return [
        [ 'title' => 'Home',                     'slug' => 'home',            'template' => '',                              'front' => true  ],
        [ 'title' => 'About Us',                 'slug' => 'about',           'template' => 'page-about.php',                'front' => false ],
        [ 'title' => 'Web Design & Development', 'slug' => 'web-design',      'template' => 'page-web-design.php',           'front' => false ],
        [ 'title' => 'Web Maintenance',          'slug' => 'web-maintenance', 'template' => 'page-web-maintenance.php',      'front' => false ],
        [ 'title' => 'SEO Services',             'slug' => 'seo-services',    'template' => 'page-seo.php',                  'front' => false ],
        [ 'title' => 'PPC Advertising',          'slug' => 'ppc-advertising', 'template' => 'page-ppc.php',                  'front' => false ],
        [ 'title' => 'Contact',                  'slug' => 'contact',         'template' => 'page-contact.php',              'front' => false ],
        [ 'title' => 'Privacy Policy',           'slug' => 'privacy-policy',  'template' => 'page-privacy.php',              'front' => false ],
        [ 'title' => 'Terms of Use',             'slug' => 'terms-of-use',    'template' => 'page-terms.php',                'front' => false ],
    ];
}

/**
 * Handle the create-pages form submission.
 */
function sd_handle_create_pages() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Unauthorised.' );
    }
    check_admin_referer( 'sd_create_pages' );

    $results  = [];
    $front_id = 0;

    foreach ( sd_pages_manifest() as $page ) {
        // Check if a page with this slug already exists.
        $existing = get_page_by_path( $page['slug'], OBJECT, 'page' );

        if ( $existing ) {
            $results[] = [
                'title'  => $page['title'],
                'status' => 'skipped',
                'url'    => get_permalink( $existing->ID ),
            ];
            if ( $page['front'] ) {
                $front_id = $existing->ID;
            }
            continue;
        }

        $page_id = wp_insert_post( [
            'post_title'  => $page['title'],
            'post_name'   => $page['slug'],
            'post_status' => 'publish',
            'post_type'   => 'page',
            'post_author' => get_current_user_id(),
        ] );

        if ( is_wp_error( $page_id ) ) {
            $results[] = [
                'title'  => $page['title'],
                'status' => 'error',
                'url'    => '',
            ];
            continue;
        }

        // Assign template (empty string = default template for front page).
        if ( ! empty( $page['template'] ) ) {
            update_post_meta( $page_id, '_wp_page_template', $page['template'] );
        }

        if ( $page['front'] ) {
            $front_id = $page_id;
        }

        $results[] = [
            'title'  => $page['title'],
            'status' => 'created',
            'url'    => get_permalink( $page_id ),
        ];
    }

    // Set static front page.
    if ( $front_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_id );
    }

    // Flush rewrite rules so the new slugs resolve immediately.
    flush_rewrite_rules();

    // Store results in a transient and redirect back to the admin page.
    set_transient( 'sd_setup_results_' . get_current_user_id(), $results, 60 );
    wp_safe_redirect( admin_url( 'themes.php?page=sd-setup&sd_done=1' ) );
    exit;
}
add_action( 'admin_post_sd_create_pages', 'sd_handle_create_pages' );

/**
 * Render the admin setup page.
 */
function sd_admin_page_render() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $results    = get_transient( 'sd_setup_results_' . get_current_user_id() );
    $just_done  = isset( $_GET['sd_done'] ) && $results;
    if ( $just_done ) {
        delete_transient( 'sd_setup_results_' . get_current_user_id() );
    }

    // Check current status of each page.
    $manifest = sd_pages_manifest();
    $statuses = [];
    foreach ( $manifest as $page ) {
        $existing           = get_page_by_path( $page['slug'], OBJECT, 'page' );
        $statuses[ $page['slug'] ] = $existing ? $existing : null;
    }
    $all_exist = ! in_array( null, $statuses, true );

    ?>
    <style>
        #sd-setup-wrap { max-width: 780px; margin: 32px auto; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        #sd-setup-wrap .sd-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 28px 32px; margin-bottom: 24px; }
        #sd-setup-wrap .sd-header { display: flex; align-items: center; gap: 16px; margin-bottom: 8px; }
        #sd-setup-wrap .sd-logo-box { width: 48px; height: 48px; background: #A10370; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        #sd-setup-wrap h1 { font-size: 1.5rem; font-weight: 700; color: #111; margin: 0; }
        #sd-setup-wrap .sd-subtitle { color: #6b7280; font-size: 0.9rem; margin: 0; }
        #sd-setup-wrap table { width: 100%; border-collapse: collapse; font-size: 0.9rem; }
        #sd-setup-wrap th { text-align: left; padding: 10px 12px; background: #f9fafb; border-bottom: 2px solid #e5e7eb; color: #374151; font-weight: 600; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; }
        #sd-setup-wrap td { padding: 11px 12px; border-bottom: 1px solid #f3f4f6; color: #374151; vertical-align: middle; }
        #sd-setup-wrap tr:last-child td { border-bottom: none; }
        #sd-setup-wrap .badge { display: inline-block; padding: 3px 10px; border-radius: 100px; font-size: 0.75rem; font-weight: 700; }
        #sd-setup-wrap .badge-exists  { background: #dcfce7; color: #166534; }
        #sd-setup-wrap .badge-missing { background: #fef3c7; color: #92400e; }
        #sd-setup-wrap .badge-created { background: #dcfce7; color: #166534; }
        #sd-setup-wrap .badge-skipped { background: #e0e7ff; color: #3730a3; }
        #sd-setup-wrap .badge-error   { background: #fee2e2; color: #991b1b; }
        #sd-setup-wrap .sd-btn { display: inline-flex; align-items: center; gap: 8px; background: #A10370; color: #fff; border: none; border-radius: 100px; padding: 13px 28px; font-size: 0.95rem; font-weight: 700; cursor: pointer; transition: filter 0.2s; text-decoration: none; }
        #sd-setup-wrap .sd-btn:hover { filter: brightness(1.15); color: #fff; }
        #sd-setup-wrap .sd-btn:disabled { opacity: 0.5; cursor: not-allowed; }
        #sd-setup-wrap .sd-btn-secondary { background: transparent; border: 2px solid #A10370; color: #A10370; }
        #sd-setup-wrap .sd-btn-secondary:hover { background: #A10370; color: #fff; filter: none; }
        #sd-setup-wrap .notice-box { border-radius: 10px; padding: 14px 18px; font-size: 0.9rem; margin-bottom: 20px; }
        #sd-setup-wrap .notice-success { background: #f0fdf4; border: 1px solid #86efac; color: #166534; }
        #sd-setup-wrap .notice-info    { background: #eff6ff; border: 1px solid #93c5fd; color: #1e40af; }
        #sd-setup-wrap .notice-warn    { background: #fffbeb; border: 1px solid #fcd34d; color: #92400e; }
        #sd-setup-wrap .divider { border: none; border-top: 1px solid #e5e7eb; margin: 20px 0; }
        #sd-setup-wrap a.page-link { color: #A10370; text-decoration: none; font-size: 0.8rem; }
        #sd-setup-wrap a.page-link:hover { text-decoration: underline; }
    </style>

    <div id="sd-setup-wrap">

        <!-- Header card -->
        <div class="sd-card">
            <div class="sd-header">
                <div class="sd-logo-box" aria-hidden="true">
                    <svg viewBox="0 0 22 22" fill="white" width="26" height="26"><rect x="1" y="1" width="9" height="9" rx="2"/><rect x="12" y="1" width="9" height="9" rx="2" opacity="0.6"/><rect x="1" y="12" width="9" height="9" rx="2" opacity="0.6"/><rect x="12" y="12" width="9" height="9" rx="2" opacity="0.3"/></svg>
                </div>
                <div>
                    <h1>Square Digitals — Theme Setup</h1>
                    <p class="sd-subtitle">Automatically create all required pages, assign templates, and set the static front page.</p>
                </div>
            </div>
        </div>

        <?php if ( $just_done && $results ) : ?>
            <!-- Results card -->
            <div class="sd-card">
                <div class="notice-box notice-success">
                    <strong>✓ Done!</strong> Pages have been processed. The Home page has been set as the static front page and permalink rules have been flushed.
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Status</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $results as $r ) : ?>
                            <tr>
                                <td><strong><?php echo esc_html( $r['title'] ); ?></strong></td>
                                <td><span class="badge badge-<?php echo esc_attr( $r['status'] ); ?>"><?php echo esc_html( ucfirst( $r['status'] ) ); ?></span></td>
                                <td>
                                    <?php if ( $r['url'] ) : ?>
                                        <a href="<?php echo esc_url( $r['url'] ); ?>" target="_blank" rel="noopener" class="page-link">
                                            <?php echo esc_html( $r['url'] ); ?> ↗
                                        </a>
                                    <?php else : ?>
                                        <span style="color:#9ca3af;">—</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr class="divider">
                <p style="font-size:0.875rem;color:#6b7280;margin:0;">
                    <strong>Next steps:</strong>
                    <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" class="page-link">Set up your navigation menu</a> &nbsp;·&nbsp;
                    <a href="<?php echo esc_url( admin_url( 'options-reading.php' ) ); ?>" class="page-link">Confirm Reading settings</a> &nbsp;·&nbsp;
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="page-link">View your site ↗</a>
                </p>
            </div>

        <?php else : ?>

            <!-- Status overview card -->
            <div class="sd-card">
                <h2 style="font-size:1.1rem;font-weight:700;margin:0 0 16px;color:#111;">Page Status</h2>

                <?php if ( $all_exist ) : ?>
                    <div class="notice-box notice-success">
                        <strong>✓ All pages already exist.</strong> You can re-run setup — existing pages will be skipped and missing templates re-applied if needed.
                    </div>
                <?php else : ?>
                    <div class="notice-box notice-info">
                        Pages marked <strong>Missing</strong> will be created and their templates auto-assigned. Existing pages are skipped.
                    </div>
                <?php endif; ?>

                <table>
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Slug</th>
                            <th>Template File</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $manifest as $page ) :
                            $existing = $statuses[ $page['slug'] ];
                        ?>
                            <tr>
                                <td>
                                    <strong><?php echo esc_html( $page['title'] ); ?></strong>
                                    <?php if ( $page['front'] ) : ?>
                                        <span style="font-size:0.7rem;background:#fef3c7;color:#92400e;border-radius:100px;padding:2px 8px;margin-left:6px;font-weight:700;">FRONT PAGE</span>
                                    <?php endif; ?>
                                </td>
                                <td><code style="background:#f3f4f6;padding:2px 7px;border-radius:5px;font-size:0.8rem;">/<?php echo esc_html( $page['slug'] ); ?>/</code></td>
                                <td><code style="background:#f3f4f6;padding:2px 7px;border-radius:5px;font-size:0.8rem;color:#6b7280;"><?php echo $page['template'] ? esc_html( $page['template'] ) : 'default'; ?></code></td>
                                <td>
                                    <?php if ( $existing ) : ?>
                                        <span class="badge badge-exists">Exists</span>
                                        <a href="<?php echo esc_url( get_permalink( $existing->ID ) ); ?>" target="_blank" class="page-link" style="margin-left:8px;">View ↗</a>
                                    <?php else : ?>
                                        <span class="badge badge-missing">Missing</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <hr class="divider">

                <!-- The create button -->
                <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" id="sd-create-form">
                    <?php wp_nonce_field( 'sd_create_pages' ); ?>
                    <input type="hidden" name="action" value="sd_create_pages">
                    <div style="display:flex;align-items:center;gap:16px;flex-wrap:wrap;">
                        <button type="submit" class="sd-btn" id="sd-create-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                            <?php echo $all_exist ? 'Re-run Page Setup' : 'Create All Pages'; ?>
                        </button>
                        <?php if ( $all_exist ) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="sd-btn sd-btn-secondary">
                                View Site ↗
                            </a>
                        <?php endif; ?>
                        <p style="font-size:0.8rem;color:#9ca3af;margin:0;">This is safe to run multiple times — existing pages are never overwritten or deleted.</p>
                    </div>
                </form>
            </div>

        <?php endif; ?>

        <!-- Next steps card (always shown after first run or when all exist) -->
        <?php if ( $all_exist || $just_done ) : ?>
        <div class="sd-card">
            <h2 style="font-size:1.1rem;font-weight:700;margin:0 0 16px;color:#111;">Remaining Setup Steps</h2>
            <ol style="margin:0;padding-left:20px;color:#374151;font-size:0.9rem;line-height:1.9;">
                <li>
                    <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" style="color:#A10370;">Appearance → Menus</a>
                    — Create a menu, add all pages, assign to <strong>Primary Navigation</strong>.
                </li>
                <li>
                    <a href="<?php echo esc_url( admin_url( 'options-reading.php' ) ); ?>" style="color:#A10370;">Settings → Reading</a>
                    — Confirm <strong>Home</strong> is set as the static front page.
                </li>
                <li>
                    <a href="<?php echo esc_url( admin_url( 'options-permalink.php' ) ); ?>" style="color:#A10370;">Settings → Permalinks</a>
                    — Select <strong>Post name</strong> and save to flush rewrite rules.
                </li>
                <li>Configure your SMTP email plugin so contact form submissions deliver to <strong>info@squaredigitals.com.ng</strong>.</li>
                <li>Upload your real logo, team photos, and portfolio screenshots via the Media Library.</li>
            </ol>
        </div>
        <?php endif; ?>

    </div>

    <script>
    document.getElementById('sd-create-form') && document.getElementById('sd-create-form').addEventListener('submit', function() {
        var btn = document.getElementById('sd-create-btn');
        btn.disabled = true;
        btn.innerHTML = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="animation:spin 0.8s linear infinite"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg> Creating pages…';
    });
    </script>
    <style>@keyframes spin{to{transform:rotate(360deg);}}</style>
    <?php
}
