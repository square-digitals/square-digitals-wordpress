<?php
/**
 * Square Digitals — front-page.php
 * Home page template.
 */
get_header();
?>

<main id="main-content" role="main">

<!-- =====================================================
     HERO SECTION
     ===================================================== -->
<section class="hero-section" aria-label="Hero — Nigeria's #1 Digital Marketing Agency">
    <div class="hero-bg-gradient"></div>
    <div class="hero-grid-overlay"></div>

    <!-- Floating decorative blobs -->
    <div aria-hidden="true" style="position:absolute;top:15%;right:8%;width:320px;height:320px;border-radius:50%;background:radial-gradient(circle,rgba(161,3,112,0.18) 0%,transparent 70%);animation:float 6s ease-in-out infinite;pointer-events:none;"></div>
    <div aria-hidden="true" style="position:absolute;bottom:20%;left:5%;width:200px;height:200px;border-radius:50%;background:radial-gradient(circle,rgba(161,3,112,0.12) 0%,transparent 70%);animation:float 8s ease-in-out infinite reverse;pointer-events:none;"></div>

    <div class="container-sd" style="position:relative;z-index:1;padding-top:120px;padding-bottom:80px;width:100%;">

        <h1 class="animate__animated animate__fadeInDown" style="display:inline-block;background:rgba(161,3,112,0.2);color:#e879c8;font-size:0.8rem !important;font-weight:800 !important;letter-spacing:0.12em;text-transform:uppercase;padding:6px 16px;border-radius:100px;margin-bottom:0;line-height:1.5;">
            Nigeria's Premier Digital Marketing Agency
        </h1>

        <h2 style="color:#ffffff;margin-top:20px;margin-bottom:24px;font-size:clamp(1.9rem,4vw,3.2rem);line-height:1.15;letter-spacing:-0.02em;font-weight:900;" class="animate__animated animate__fadeInUp">
            Your Competitors<br>
            Are Growing Online.<br>
            <span style="color:var(--color-primary);font-weight:900;">It's Your Turn.</span>
        </h2>

        <p style="font-size:clamp(1rem,2vw,1.2rem);color:rgba(255,255,255,0.7);max-width:600px;line-height:1.75;margin-bottom:40px;" class="animate__animated animate__fadeInUp">
            Square Digitals is one of Nigeria's fastest growing digital marketing agencies. We build powerful websites, rank businesses on Google, and turn clicks into paying customers. From Lagos to Port Harcourt, Nigerian businesses trust us to grow their online presence.
        </p>

        <div style="display:flex;flex-wrap:wrap;gap:16px;" class="animate__animated animate__fadeInUp">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary pulse" style="font-size:1rem;padding:16px 36px;">
                Get a Free Strategy Call
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <a href="#services" class="btn-secondary" style="font-size:1rem;padding:14px 36px;border-color:rgba(255,255,255,0.3);color:rgba(255,255,255,0.85);" onmouseover="this.style.borderColor='#A10370';this.style.background='#A10370';this.style.color='#ffffff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.3)';this.style.background='transparent';this.style.color='rgba(255,255,255,0.85)'">
                See Our Services
            </a>
        </div>

        <!-- Social proof mini-bar -->
        <div class="hero-stats-bar" style="display:flex;flex-wrap:wrap;align-items:center;gap:24px;margin-top:56px;padding-top:40px;border-top:1px solid rgba(255,255,255,0.1);">
            <div style="text-align:center;">
                <div class="stat-number" style="font-size:2rem;">5</div>
                <p style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-top:2px;">Projects Delivered</p>
            </div>
            <div class="hero-stats-divider" style="width:1px;height:40px;background:rgba(255,255,255,0.1);"></div>
            <div style="text-align:center;">
                <div class="stat-number" style="font-size:2rem;">5</div>
                <p style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-top:2px;">Happy Clients</p>
            </div>
            <div class="hero-stats-divider" style="width:1px;height:40px;background:rgba(255,255,255,0.1);"></div>
            <div style="text-align:center;">
                <div class="stat-number" style="font-size:2rem;">3+</div>
                <p style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-top:2px;">Years Experience</p>
            </div>
            <div class="hero-stats-divider" style="width:1px;height:40px;background:rgba(255,255,255,0.1);"></div>
            <div style="text-align:center;">
                <div class="stat-number" style="font-size:2rem;">5 ★</div>
                <p style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-top:2px;">Google Rating</p>
            </div>
        </div>

    </div>

    <!-- Bottom wave -->
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="#ffffff"><path d="M0,80 C360,0 1080,80 1440,20 L1440,80 Z"/></svg>
    </div>
</section>

<!-- =====================================================
     TRUST BAR
     ===================================================== -->
<section class="trust-bar" aria-label="Cities we serve across Nigeria">
    <div class="trust-bar-inner" aria-hidden="true">
        <?php
        $cities = ['Lagos', 'Abuja', 'Port Harcourt', 'Ibadan', 'Kano', 'Enugu', 'Benin City', 'Calabar', 'Warri', 'Owerri', 'Uyo', 'Abeokuta'];
        foreach ( array_merge( $cities, $cities ) as $city ) {
            echo '<div class="trust-item"><span class="trust-dot"></span>' . esc_html( $city ) . '</div>';
        }
        ?>
    </div>
    <p style="text-align:center;font-size:0.8rem;color:var(--color-text-muted);margin-top:10px;font-family:var(--font-heading);font-weight:600;letter-spacing:0.05em;text-transform:uppercase;">Trusted by Nigerian businesses across every state</p>
</section>

<!-- =====================================================
     SERVICES OVERVIEW
     ===================================================== -->
<section id="services" class="section-padding" aria-labelledby="services-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">What We Do</div>
            <h2 class="section-title" id="services-heading">
                Digital Marketing Services Built for<br><span>Nigerian Business Growth</span>
            </h2>
            <p class="section-subtitle">
                From building your website to ranking it on Google and running paid ads, we handle every piece of your digital presence so you can focus on running your business.
            </p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:28px;">

            <!-- Web Design Card -->
            <article class="sd-card" style="padding:36px;" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card-icon" style="color:var(--color-primary);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3 style="margin-bottom:12px;font-size:1.2rem;">Web Design &amp; Development</h3>
                <p style="font-size:0.9rem;margin-bottom:24px;">We design and develop stunning, conversion-optimised websites that position your business as the authority in your industry. Built on WordPress, built to rank, built to sell.</p>
                <a href="<?php echo esc_url( home_url( '/web-design/' ) ); ?>" class="btn-secondary" style="padding:10px 20px;font-size:0.875rem;">
                    Learn More →
                </a>
            </article>

            <!-- Web Maintenance Card -->
            <article class="sd-card" style="padding:36px;" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-icon" style="color:var(--color-primary);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                </div>
                <h3 style="margin-bottom:12px;font-size:1.2rem;">Web Maintenance</h3>
                <p style="font-size:0.9rem;margin-bottom:24px;">Your website is a 24/7 sales machine. It cannot afford downtime, security breaches, or outdated code. Our maintenance plans keep it fast, secure, and fully operational, always.</p>
                <a href="<?php echo esc_url( home_url( '/web-maintenance/' ) ); ?>" class="btn-secondary" style="padding:10px 20px;font-size:0.875rem;">
                    Learn More →
                </a>
            </article>

            <!-- SEO Card -->
            <article class="sd-card" style="padding:36px;" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-icon" style="color:var(--color-primary);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 style="margin-bottom:12px;font-size:1.2rem;">SEO Services</h3>
                <p style="font-size:0.9rem;margin-bottom:24px;">We get your business to page 1 on Google for the keywords your customers are already searching. More visibility, more organic traffic, more revenue. All without paying for every click.</p>
                <a href="<?php echo esc_url( home_url( '/seo-services/' ) ); ?>" class="btn-secondary" style="padding:10px 20px;font-size:0.875rem;">
                    Learn More →
                </a>
            </article>

            <!-- PPC Card (Coming Soon) -->
            <article class="sd-card" style="padding:36px;position:relative;overflow:hidden;opacity:0.85;" data-aos="fade-up" data-aos-delay="300">
                <div style="position:absolute;top:16px;right:-24px;background:#f59e0b;color:#000;font-size:0.65rem;font-weight:800;padding:3px 36px;transform:rotate(35deg);letter-spacing:0.1em;text-transform:uppercase;font-family:var(--font-heading);">COMING SOON</div>
                <div class="service-card-icon" style="color:var(--color-primary);opacity:0.7;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </div>
                <h3 style="margin-bottom:12px;font-size:1.2rem;">PPC / Paid Advertising</h3>
                <p style="font-size:0.9rem;margin-bottom:24px;">Google Ads, Meta Ads, and strategic paid campaigns tailored to the Nigerian market. Coming soon. Register your interest to be first in line.</p>
                <a href="<?php echo esc_url( home_url( '/ppc-advertising/' ) ); ?>" class="btn-secondary" style="padding:10px 20px;font-size:0.875rem;opacity:0.7;">
                    Notify Me →
                </a>
            </article>

        </div>
    </div>
</section>

<!-- =====================================================
     WHY SQUARE DIGITALS
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="why-heading">
    <div class="container-sd">

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;" class="responsive-2col">

            <div data-aos="fade-right">
                <div class="section-label">Why Choose Us</div>
                <h2 class="section-title" id="why-heading" style="text-align:left;margin-bottom:20px;">
                    We're Not Just Another Agency.<br><span>We Deliver Proof.</span>
                </h2>
                <p style="margin-bottom:32px;">Most digital marketing agencies in Nigeria sell you promises. We sell results. Our entire operation is built around one question: <strong>is this growing your business?</strong> If the answer isn't a clear yes, we change the strategy. No excuses.</p>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn-primary">Meet the Team →</a>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;" data-aos="fade-left" data-aos-delay="100">

                <?php
                $differentiators = [
                    ['icon' => 'trending-up', 'title' => 'Results-First Approach', 'desc' => 'Every strategy, every campaign, every deliverable is measured against one metric: business growth for your Nigerian enterprise.'],
                    ['icon' => 'map-pin', 'title' => 'Local Market Expertise', 'desc' => 'We understand the Nigerian digital landscape: search behaviour, mobile-first users, local SEO, and what resonates with your audience.'],
                    ['icon' => 'bar-chart', 'title' => 'Transparent Reporting', 'desc' => 'You get real-time dashboards and monthly reports with plain-English explanations. You always know exactly where your money is going.'],
                    ['icon' => 'lock', 'title' => 'No Lock-In Contracts', 'desc' => 'Our work earns your trust month after month. We don\'t trap you in 12-month contracts. We keep you because you\'re seeing results.'],
                ];
                foreach ( $differentiators as $d ) : ?>
                    <div class="sd-card" style="padding:24px;" data-aos="zoom-in">
                        <div style="width:48px;height:48px;border-radius:12px;background:var(--color-primary-light);display:flex;align-items:center;justify-content:center;color:var(--color-primary);margin-bottom:16px;">
                            <?php sd_icon( $d['icon'], '' ); ?>
                        </div>
                        <h4 style="margin-bottom:8px;font-size:1rem;"><?php echo esc_html( $d['title'] ); ?></h4>
                        <p style="font-size:0.85rem;"><?php echo esc_html( $d['desc'] ); ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>

<style>
@media(max-width:768px){
    .responsive-2col { grid-template-columns:1fr !important; gap:40px !important; }
}
</style>

<!-- =====================================================
     HOW WE WORK — 4-STEP PROCESS
     ===================================================== -->
<section class="section-padding" aria-labelledby="process-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">Our Process</div>
            <h2 class="section-title" id="process-heading">
                From First Call to <span>Measurable Growth</span>
            </h2>
            <p class="section-subtitle">We follow a proven 4-step framework that eliminates guesswork and gets your business growing online faster.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;position:relative;" class="process-grid">

            <?php
            $steps = [
                ['num'=>'01','title'=>'Discovery','desc'=>'We deep-dive into your business, industry, competitors, and target audience. We don\'t skip this. It\'s where strategies are won or lost.','icon'=>'search'],
                ['num'=>'02','title'=>'Strategy','desc'=>'Using our research, we build a custom digital marketing roadmap tailored specifically to your Nigerian market and business goals.','icon'=>'target'],
                ['num'=>'03','title'=>'Execution','desc'=>'Our team executes with precision: building, optimising, and launching. No delays, no corners cut, no excuses.','icon'=>'zap'],
                ['num'=>'04','title'=>'Growth','desc'=>'We monitor, report, and continuously optimise. Your results compound month on month. This is where ROI becomes undeniable.','icon'=>'trending-up'],
            ];
            foreach ( $steps as $i => $step ) : ?>
                <div style="text-align:center;position:relative;" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                    <?php if ( $i < count($steps) - 1 ) : ?>
                        <div style="position:absolute;top:32px;left:calc(50% + 40px);right:calc(-50% + 40px);height:2px;background:linear-gradient(90deg,var(--color-primary),rgba(161,3,112,0.15));z-index:0;" class="hidden-mobile" aria-hidden="true"></div>
                    <?php endif; ?>
                    <div class="step-number" style="position:relative;z-index:1;"><?php echo esc_html( $step['num'] ); ?></div>
                    <h3 style="font-size:1.1rem;margin-bottom:12px;"><?php echo esc_html( $step['title'] ); ?></h3>
                    <p style="font-size:0.875rem;"><?php echo esc_html( $step['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<style>
@media(max-width:768px){
    .process-grid { grid-template-columns:1fr 1fr !important; }
    .hidden-mobile { display:none !important; }
}
@media(max-width:480px){
    .process-grid { grid-template-columns:1fr !important; }
}
</style>

<!-- =====================================================
     STATS COUNTER
     ===================================================== -->
<section class="section-padding-sm" style="background:var(--color-secondary);" aria-label="Company statistics">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;text-align:center;" class="stats-grid">
            <?php
            $stats = [
                ['num'=>5,  'suffix'=>'',   'label'=>'Projects Delivered', 'prefix'=>''],
                ['num'=>5,  'suffix'=>'',   'label'=>'Happy Clients',      'prefix'=>''],
                ['num'=>3,  'suffix'=>'+',  'label'=>'Years Experience',    'prefix'=>''],
                ['num'=>5,  'suffix'=>' ★', 'label'=>'Google Rating',       'prefix'=>''],
            ];
            foreach ( $stats as $i => $s ) : ?>
                <div data-aos="zoom-in" data-aos-delay="<?php echo $i * 80; ?>">
                    <div class="stat-number" data-counter="<?php echo esc_attr( $s['num'] ); ?>" data-suffix="<?php echo esc_attr( $s['suffix'] ); ?>" data-prefix="<?php echo esc_attr( $s['prefix'] ); ?>">
                        <?php echo esc_html( $s['prefix'] . $s['num'] . $s['suffix'] ); ?>
                    </div>
                    <p style="color:rgba(255,255,255,0.5);font-size:0.875rem;margin-top:8px;font-family:var(--font-heading);"><?php echo esc_html( $s['label'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
@media(max-width:600px){ .stats-grid { grid-template-columns:1fr 1fr !important; } }
@media(max-width:768px){
    .hero-stats-bar { display:grid !important; grid-template-columns:1fr 1fr; justify-items:center; }
    .hero-stats-divider { display:none; }
}
</style>

<!-- =====================================================
     TESTIMONIALS
     ===================================================== -->
<section class="section-padding" aria-labelledby="testimonials-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">Client Stories</div>
            <h2 class="section-title" id="testimonials-heading">
                Nigerian Business Owners <span>Trust Square Digitals</span>
            </h2>
            <p class="section-subtitle">Don't take our word for it. Here's what our clients across Nigeria say about working with us.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;">

            <?php
            $testimonials = [
                [
                    'text'    => 'Square Digitals built our business website from scratch and the result was beyond what we expected. It looks professional, loads fast, and our customers keep complimenting how easy it is to navigate. We started getting enquiries through the site within the first week of launching.',
                    'name'    => 'Chukwuemeka Obi',
                    'company' => 'Apex Realty, Lagos',
                    'rating'  => 5,
                ],
                [
                    'text'    => 'We needed a website that would make our law firm look credible and trustworthy online. Square Digitals delivered exactly that: clean design, clear messaging, and a site our clients actually compliment. The entire process was smooth and they kept us informed at every stage.',
                    'name'    => 'Adaeze Nwosu',
                    'company' => 'NwosuLaw & Associates, Abuja',
                    'rating'  => 5,
                ],
                [
                    'text'    => 'Before Square Digitals, our company had no real online presence. They built us a website that properly represents who we are and what we do. It works perfectly on mobile and we\'ve already had new clients reach out after finding us online. Absolutely worth it.',
                    'name'    => 'Babatunde Fashola-Akin',
                    'company' => 'Fashola Logistics, Port Harcourt',
                    'rating'  => 5,
                ],
            ];

            foreach ( $testimonials as $i => $t ) : ?>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                    <div class="stars" aria-label="<?php echo esc_attr( $t['rating'] ); ?> out of 5 stars">
                        <?php echo str_repeat( '★', $t['rating'] ); ?>
                    </div>
                    <p style="font-size:0.95rem;line-height:1.75;color:var(--color-text);margin-bottom:24px;font-style:italic;">
                        "<?php echo esc_html( $t['text'] ); ?>"
                    </p>
                    <p style="font-size:0.8rem;color:var(--color-text-muted);font-family:var(--font-heading);font-weight:600;">Satisfied Client</p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- =====================================================
     CTA BANNER
     ===================================================== -->
<section class="cta-banner section-padding" aria-label="Call to action">
    <div class="container-sd" style="position:relative;z-index:1;text-align:center;">
        <div data-aos="zoom-in">
            <div class="section-label" style="background:rgba(255,255,255,0.15);color:#ffffff;margin-bottom:24px;">Limited Spots Available Each Month</div>
            <h2 style="color:#ffffff;margin-bottom:20px;font-size:clamp(1.8rem,4vw,3rem);">
                Ready to Dominate Your Market Online?
            </h2>
            <p style="color:rgba(255,255,255,0.85);font-size:1.1rem;max-width:560px;margin:0 auto 40px;line-height:1.7;">
                Every month, a competitor in your industry is climbing Google's rankings and stealing your potential customers. Don't let that continue. Let's build your digital dominance. Start today.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:16px;justify-content:center;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-white" style="font-size:1rem;padding:16px 36px;">
                    Book a Free Strategy Call
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/web-design/' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,0.8);font-family:var(--font-heading);font-weight:600;padding:16px 28px;border:2px solid rgba(255,255,255,0.25);border-radius:9999px;text-decoration:none;transition:all 0.3s;" onmouseover="this.style.borderColor='rgba(255,255,255,0.6)';this.style.color='#fff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.25)';this.style.color='rgba(255,255,255,0.8)'">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     FAQ SECTION
     ===================================================== -->
<section class="section-padding" aria-labelledby="faq-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">FAQ</div>
            <h2 class="section-title" id="faq-heading">
                Questions Nigerian Business Owners <span>Ask Us Most</span>
            </h2>
            <p class="section-subtitle">Straight answers about digital marketing in Nigeria. No jargon, no runaround.</p>
        </div>

        <div style="max-width:800px;margin:0 auto;" data-aos="fade-up" data-aos-delay="100">

            <?php
            $faqs = [
                [
                    'q' => 'How much does SEO cost in Nigeria?',
                    'a' => 'SEO pricing in Nigeria varies based on industry competition, the number of target keywords, and what your website currently looks like. At Square Digitals, our SEO retainer packages start from ₦150,000 per month and scale based on scope. We offer a free SEO audit before any commitment, so you know exactly what you\'re getting into before spending a naira.',
                ],
                [
                    'q' => 'How long does it take to see SEO results in Nigeria?',
                    'a' => 'Honest answer: most businesses see meaningful ranking improvements within 3 to 6 months, depending on competition in your niche. Nigerian search markets are maturing fast. The sooner you start, the bigger your head start. We track and report every step, so you\'re never in the dark.',
                ],
                [
                    'q' => 'Can you build a website for my Nigerian business?',
                    'a' => 'Absolutely. We specialise in professional WordPress website design for Nigerian businesses, from small SMEs in Lagos to multi-location enterprises across the country. Every website we build is mobile-optimised, fast-loading, and designed to convert visitors into customers. We handle everything: design, development, content, and launch.',
                ],
                [
                    'q' => 'Do you work with businesses outside Lagos?',
                    'a' => 'Yes, 100%. We serve businesses across Nigeria: Lagos, Abuja, Port Harcourt, Ibadan, Enugu, Kano, and beyond. We operate 100% remotely, and our clients across the country receive the same premium service regardless of location. Distance is not a barrier.',
                ],
                [
                    'q' => 'What makes Square Digitals different from other digital marketing agencies in Nigeria?',
                    'a' => 'Three things: we are results-obsessed (every action is measured against ROI), we understand the Nigerian market deeply (consumer behaviour, mobile usage, local search patterns), and we operate with full transparency. No hidden fees, no inflated reports, no excuses. We have no lock-in contracts because our work speaks for itself month after month.',
                ],
            ];

            foreach ( $faqs as $i => $faq ) :
                $id = 'faq-' . ($i + 1);
            ?>
                <div class="faq-item" x-data="{ open: false }" data-aos="fade-up" data-aos-delay="<?php echo $i * 60; ?>">
                    <button
                        class="faq-trigger"
                        @click="open = !open"
                        :aria-expanded="open.toString()"
                        aria-controls="<?php echo esc_attr( $id ); ?>"
                        id="<?php echo esc_attr( $id . '-btn' ); ?>"
                    >
                        <span><?php echo esc_html( $faq['q'] ); ?></span>
                        <span class="faq-icon" :style="open ? 'background:var(--color-primary);color:#fff;' : ''" aria-hidden="true">
                            <span x-text="open ? '−' : '+'">+</span>
                        </span>
                    </button>
                    <div
                        class="faq-content"
                        id="<?php echo esc_attr( $id ); ?>"
                        role="region"
                        :aria-labelledby="'<?php echo esc_attr( $id . '-btn' ); ?>'"
                        x-show="open"
                        x-collapse
                        style="display:none;"
                    >
                        <p><?php echo esc_html( $faq['a'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>

</main><!-- /#main-content -->

<?php get_footer(); ?>
