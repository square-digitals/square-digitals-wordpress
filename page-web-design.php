<?php
/**
 * Square Digitals — page-web-design.php
 * Web Design & Development service page.
 * Template Name: Web Design & Development
 */
get_header();
?>

<main id="main-content" role="main">

<!-- =====================================================
     HERO
     ===================================================== -->
<section style="background:#000;padding:160px 0 100px;position:relative;overflow:hidden;" aria-label="Web Design hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 55% 65% at 75% 35%,rgba(161,3,112,0.25) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(161,3,112,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(161,3,112,0.04) 1px,transparent 1px);background-size:64px 64px;pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div style="max-width:760px;" class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Web Design &amp; Development</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:24px;">
                Nigeria's Go-To Web Design<br>&amp; <span style="color:var(--color-primary);">Development Agency</span>
            </h1>
            <p style="color:rgba(255,255,255,0.75);font-size:1.15rem;line-height:1.75;max-width:600px;margin-bottom:40px;">
                We build professional, fast, and conversion-optimised websites for Nigerian businesses, from Lagos startups to Abuja enterprises. Your website should be your best salesperson. We make it that.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:16px;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary pulse" style="font-size:1rem;padding:16px 36px;">
                    Get a Free Quote
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="#portfolio" style="display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,0.75);font-family:var(--font-heading);font-weight:600;padding:14px 28px;border:2px solid rgba(255,255,255,0.2);border-radius:9999px;text-decoration:none;transition:all 0.3s;" onmouseover="this.style.borderColor='#A10370'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)'">
                    See Our Work
                </a>
            </div>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="#ffffff"><path d="M0,80 C360,0 1080,80 1440,20 L1440,80 Z"/></svg>
    </div>
</section>

<!-- =====================================================
     PAIN SECTION
     ===================================================== -->
<section class="section-padding" aria-labelledby="pain-heading">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;" class="responsive-2col">
            <div data-aos="fade-right">
                <div class="section-label">The Real Problem</div>
                <h2 class="section-title" id="pain-heading" style="text-align:left;">
                    Your Website Is Your #1 Salesperson.<br><span>Is It Doing Its Job?</span>
                </h2>
                <p style="margin-bottom:20px;">
                    In Nigeria today, 72% of consumers research a business online before making a purchase decision. If your website looks outdated, loads slowly, or fails to communicate your value within 5 seconds, you've already lost that customer to a competitor.
                </p>
                <p style="margin-bottom:20px;">
                    We see this every day: brilliant Nigerian businesses with incredible products and services, losing customers to inferior competitors simply because their website doesn't reflect the quality they actually deliver. A weak web presence in Lagos's competitive market is commercial suicide.
                </p>
                <p style="margin-bottom:32px;">
                    A professionally designed, strategically built website doesn't just look good. It works. It loads in under 3 seconds on mobile. It guides visitors through a clear journey. It builds trust. And it converts browsers into buyers. That's exactly what Square Digitals builds for Nigerian businesses.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-delay="100">
                <?php
                $pains = [
                    'Your website loses customers to competitors with better-designed sites',
                    'Slow load times on mobile networks drive Nigerian visitors away immediately',
                    'No clear call-to-action means visitors leave without taking action',
                    'Outdated design signals low credibility and costs you trust',
                    'Poor mobile experience excludes 76% of Nigerian internet users',
                ];
                ?>
                <div style="background:#fff8fe;border-radius:20px;padding:36px;border:1px solid rgba(161,3,112,0.15);">
                    <h4 style="font-size:1rem;margin-bottom:20px;color:var(--color-primary);">Does Your Current Website Have These Problems?</h4>
                    <?php foreach ( $pains as $pain ) : ?>
                        <div style="display:flex;gap:12px;align-items:flex-start;padding:10px 0;border-bottom:1px solid rgba(161,3,112,0.08);">
                            <span style="width:20px;height:20px;border-radius:50%;background:#fee2ef;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:0.75rem;margin-top:2px;">✗</span>
                            <p style="font-size:0.9rem;margin:0;"><?php echo esc_html( $pain ); ?></p>
                        </div>
                    <?php endforeach; ?>
                    <div style="margin-top:24px;">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary" style="font-size:0.875rem;padding:12px 24px;">Fix My Website Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     SERVICES BREAKDOWN
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="webservices-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">What We Build</div>
            <h2 class="section-title" id="webservices-heading">
                Professional Web Design Services<br><span>for Nigerian Businesses</span>
            </h2>
            <p class="section-subtitle">Every website we build is custom-designed, hand-coded, and built with one goal: to grow your business. Here's what we offer.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:28px;">
            <?php
            $services = [
                ['icon'=>'globe','title'=>'Custom WordPress Websites',
                 'desc'=>'We build bespoke WordPress websites from scratch for Nigerian businesses. No templates, no shortcuts. Every site is designed to reflect your brand identity and built to perform on both desktop and the mobile-first Nigerian audience. We include SEO foundations, fast hosting setup, security hardening, and a full admin walkthrough so you can manage your site with confidence.'],
                ['icon'=>'settings','title'=>'E-Commerce Development',
                 'desc'=>'Launch your Nigerian online store with a fully-featured WooCommerce setup. We integrate local payment gateways including Paystack, Flutterwave, and Remita, configure product catalogues, and build a seamless checkout experience optimised for Nigerian consumers. Whether you\'re selling physical products, digital downloads, or services, we build it right.'],
                ['icon'=>'zap','title'=>'Landing Page Design',
                 'desc'=>'Need a high-converting landing page for a product launch, a webinar, or a lead-gen campaign? Our landing pages are built with conversion rate optimisation principles at their core. Every element (headline, copy, CTA placement, form design) is intentional and tested to maximise your cost per lead.'],
                ['icon'=>'star','title'=>'UI/UX Design',
                 'desc'=>'Great UI/UX is invisible. Users just feel that a website is easy, intuitive, and trustworthy. We conduct user journey mapping specific to Nigerian consumer behaviour, ensuring your visitors find what they need effortlessly, stay longer, and convert at higher rates. We deliver wireframes, prototypes, and production-ready designs.'],
            ];
            foreach ( $services as $i => $svc ) : ?>
                <div class="sd-card" style="padding:36px;" data-aos="fade-up" data-aos-delay="<?php echo $i * 80; ?>">
                    <div class="service-card-icon" style="color:var(--color-primary);">
                        <?php sd_icon( $svc['icon'] ); ?>
                    </div>
                    <h3 style="font-size:1.1rem;margin-bottom:14px;"><?php echo esc_html( $svc['title'] ); ?></h3>
                    <p style="font-size:0.875rem;line-height:1.75;"><?php echo esc_html( $svc['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =====================================================
     EXTENDED COPY — SEO RICH CONTENT
     ===================================================== -->
<section class="section-padding" aria-labelledby="why-web-heading">
    <div class="container-sd" style="max-width:860px;margin:0 auto;">
        <div data-aos="fade-up">
            <div class="section-label">Why It Matters</div>
            <h2 class="section-title" id="why-web-heading" style="text-align:left;">
                Why Professional Web Design in Nigeria<br><span>Is Non-Negotiable in 2025</span>
            </h2>
            <p style="margin-bottom:20px;">Nigeria's digital economy is exploding. With over 109 million active internet users and a population increasingly reliant on smartphones for commerce, communication, and research, your digital presence is no longer optional. It is your most important business asset.</p>
            <p style="margin-bottom:20px;">Yet, the vast majority of Nigerian small and medium businesses still operate with websites built years ago using free website builders, outdated WordPress templates, or worse, no website at all. These businesses are invisible online while their competitors capture every search query, every customer recommendation, and every social media click that should be theirs.</p>
            <p style="margin-bottom:20px;">A professional website built by a specialist web design company in Nigeria does the following for your business: it builds immediate credibility and trust with first-time visitors; it communicates your value proposition within seconds; it guides visitors through a clear, conversion-optimised journey from awareness to action; it ranks on Google for the keywords your customers search; and it works flawlessly on every device, from the latest iPhone to a basic Android phone on a 3G connection in Owerri.</p>
            <p style="margin-bottom:20px;">At Square Digitals, we design and develop websites that do all of the above. Our process is thorough, transparent, and focused entirely on your business outcomes. We don't measure success by whether your website looks pretty. We measure it by whether it grows your business.</p>
            <p style="margin-bottom:32px;">If you're searching for an affordable web design agency in Nigeria that delivers world-class results without the international price tag, you've found us. As one of Nigeria's fastest growing web design agencies, we've built professional websites for businesses across Lagos, Abuja, Port Harcourt, Ibadan, Enugu, and beyond. Every single one was built to perform, not just to impress.</p>
        </div>
    </div>
</section>

<!-- =====================================================
     PROCESS — 5 STEPS
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="webprocess-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">Our Process</div>
            <h2 class="section-title" id="webprocess-heading">
                How We Build Your Website,<br><span>Step by Step</span>
            </h2>
            <p class="section-subtitle">We don't disappear after taking your brief. You're involved at every stage, with full visibility and zero surprises.</p>
        </div>

        <div style="display:grid;grid-template-columns:1fr;gap:0;">
            <?php
            $steps = [
                ['num'=>'01','title'=>'Discovery & Brief',         'desc'=>'We start with a deep-dive consultation covering your business goals, target audience, competitor landscape, and the specific outcomes you want from your website. We ask the questions no one else asks, because the right brief is where great websites are born.'],
                ['num'=>'02','title'=>'Wireframe & Architecture',  'desc'=>'Before a single line of code is written, we map out your website\'s structure, user journeys, and information architecture. You review and approve the wireframe so we\'re both aligned on direction before design begins.'],
                ['num'=>'03','title'=>'Design & Prototyping',      'desc'=>'Our designers bring your brand to life with a custom design that reflects your identity, communicates your value, and is optimised for Nigerian user behaviour. You get a clickable prototype to review before development starts.'],
                ['num'=>'04','title'=>'Development & Integration', 'desc'=>'We build your site on a staging server with clean code, optimised performance, integrated with all the tools you need (payment gateways, CRM, analytics, email marketing). Every page is tested across devices and browsers.'],
                ['num'=>'05','title'=>'Launch, Training & Support','desc'=>'We launch your site with a go-live checklist, submit it to Google Search Console, configure analytics, and give you a full admin walkthrough. You\'re not left alone after launch. Our support is ongoing.'],
            ];
            foreach ( $steps as $i => $step ) : ?>
                <div style="display:flex;gap:24px;padding:28px 0;border-bottom:1px solid rgba(161,3,112,0.1);<?php echo $i === 0 ? 'border-top:1px solid rgba(161,3,112,0.1);' : ''; ?>" data-aos="fade-up" data-aos-delay="<?php echo $i * 80; ?>">
                    <div style="flex-shrink:0;width:56px;height:56px;background:var(--color-primary);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-family:var(--font-heading);font-weight:800;font-size:0.9rem;">
                        <?php echo esc_html( $step['num'] ); ?>
                    </div>
                    <div>
                        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo esc_html( $step['title'] ); ?></h3>
                        <p style="font-size:0.9rem;margin:0;"><?php echo esc_html( $step['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =====================================================
     TECH STACK
     ===================================================== -->
<section class="section-padding" aria-labelledby="tech-heading">
    <div class="container-sd" style="text-align:center;">
        <div data-aos="fade-up">
            <div class="section-label">Technology</div>
            <h2 class="section-title" id="tech-heading">Built on the World's Best <span>Web Technologies</span></h2>
            <p class="section-subtitle" style="margin-bottom:48px;">We use proven, enterprise-grade technology stacks, the same tools powering 43% of the entire internet.</p>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:16px;justify-content:center;" data-aos="fade-up" data-aos-delay="100">
            <?php
            $techs = ['WordPress','WooCommerce','PHP 8','MySQL','Tailwind CSS','Alpine.js','Google Analytics','Paystack','Flutterwave','Cloudflare','cPanel','GitHub'];
            foreach ( $techs as $tech ) : ?>
                <div style="background:#fff;border:2px solid rgba(161,3,112,0.15);border-radius:12px;padding:12px 20px;font-family:var(--font-heading);font-weight:600;font-size:0.875rem;color:var(--color-text);transition:all 0.3s;" onmouseover="this.style.borderColor='#A10370';this.style.color='#A10370'" onmouseout="this.style.borderColor='rgba(161,3,112,0.15)';this.style.color='var(--color-text)'">
                    <?php echo esc_html( $tech ); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     PORTFOLIO
     ===================================================== -->
<section id="portfolio" class="section-padding bg-primary-tint" aria-labelledby="portfolio-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">Our Work</div>
            <h2 class="section-title" id="portfolio-heading">Recent Web Design <span>Projects</span></h2>
            <p class="section-subtitle">Every website we build is unique, purposeful, and built to deliver results for Nigerian businesses.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;">
            <?php
            $portfolio = [
                ['cat'=>'E-Commerce',   'name'=>'Nigerian Fashion Retailer',  'desc'=>'A full WooCommerce store with Paystack integration, handling 500+ product SKUs with seamless mobile checkout optimised for Nigerian shoppers.'],
                ['cat'=>'Corporate',    'name'=>'Lagos Law Firm',              'desc'=>'A trust-building, professional website for a leading Lagos legal practice, designed to convert first-time visitors into consultation bookings.'],
                ['cat'=>'Real Estate',  'name'=>'Abuja Property Developers',  'desc'=>'A visually stunning real estate site with property listings, virtual tour integrations, and a lead capture system generating 80+ enquiries per month.'],
            ];
            foreach ( $portfolio as $i => $p ) : ?>
                <div class="sd-card" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                    <div style="height:200px;background:linear-gradient(135deg,rgba(161,3,112,0.15) 0%,rgba(161,3,112,0.05) 100%);display:flex;align-items:center;justify-content:center;position:relative;">
                        <span style="font-family:var(--font-heading);font-weight:800;font-size:1.1rem;color:var(--color-primary);opacity:0.4;">[ Project Screenshot ]</span>
                        <div style="position:absolute;top:16px;left:16px;background:var(--color-primary);color:#fff;font-size:0.7rem;font-weight:700;padding:4px 12px;border-radius:100px;font-family:var(--font-heading);text-transform:uppercase;letter-spacing:0.08em;"><?php echo esc_html( $p['cat'] ); ?></div>
                    </div>
                    <div style="padding:24px;">
                        <h3 style="font-size:1rem;margin-bottom:10px;"><?php echo esc_html( $p['name'] ); ?></h3>
                        <p style="font-size:0.875rem;"><?php echo esc_html( $p['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     PRICING
     ===================================================== -->
<section class="section-padding" aria-labelledby="pricing-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">Investment</div>
            <h2 class="section-title" id="pricing-heading">
                Affordable Web Design Packages<br><span>for Every Nigerian Business</span>
            </h2>
            <p class="section-subtitle">Transparent, honest pricing. No hidden fees. Every package includes mobile-optimised design, SEO setup, and ongoing support.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:28px;">
            <?php
            $plans = [
                [
                    'name'=>'Starter', 'featured'=>false,
                    'price'=>'From ₦250,000','desc'=>'Perfect for small businesses, freelancers, and sole traders launching their first professional website.',
                    'features'=>['Up to 5 pages','Custom responsive design','WordPress CMS setup','Contact form','Basic SEO setup','Google Analytics','1 month support'],
                ],
                [
                    'name'=>'Business', 'featured'=>true,
                    'price'=>'From ₦450,000','desc'=>'Ideal for established Nigerian SMEs needing a complete, conversion-optimised web presence.',
                    'features'=>['Up to 12 pages','Custom responsive design','WordPress CMS + Plugins','Contact & booking forms','Full SEO foundation','Google Analytics & Search Console','Blog setup','3 months support','Speed optimisation'],
                ],
                [
                    'name'=>'Enterprise', 'featured'=>false,
                    'price'=>'Custom Quote','desc'=>'For large businesses, e-commerce stores, and organisations needing a fully custom digital solution.',
                    'features'=>['Unlimited pages','Custom UX/UI design','E-commerce / WooCommerce','Payment gateway integration','Advanced SEO setup','CRM integration','Priority support (12 months)','Performance SLA'],
                ],
            ];
            foreach ( $plans as $plan ) : ?>
                <div class="pricing-card <?php echo $plan['featured'] ? 'featured' : ''; ?>" data-aos="fade-up">
                    <?php if ( $plan['featured'] ) : ?>
                        <div class="pricing-badge">Most Popular</div>
                    <?php endif; ?>
                    <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo esc_html( $plan['name'] ); ?></h3>
                    <div class="price-amount" style="margin-bottom:4px;"><?php echo esc_html( $plan['price'] ); ?></div>
                    <p class="price-period" style="margin-bottom:20px;"><?php echo esc_html( $plan['desc'] ); ?></p>
                    <hr style="border:none;border-top:1px solid rgba(161,3,112,0.1);margin:20px 0;">
                    <?php foreach ( $plan['features'] as $feat ) : ?>
                        <div class="pricing-feature">
                            <span class="check">✓</span>
                            <span><?php echo esc_html( $feat ); ?></span>
                        </div>
                    <?php endforeach; ?>
                    <div style="margin-top:28px;">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="<?php echo $plan['featured'] ? 'btn-primary' : 'btn-secondary'; ?>" style="width:100%;justify-content:center;">
                            Get a Quote →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p style="text-align:center;font-size:0.875rem;color:var(--color-text-muted);margin-top:32px;" data-aos="fade-up">All prices are starting points. Final cost depends on scope, complexity, and custom integrations. We provide detailed quotes after a free consultation.</p>
    </div>
</section>

<!-- =====================================================
     FAQs
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="webfaq-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:56px;" data-aos="fade-up">
            <div class="section-label">FAQ</div>
            <h2 class="section-title" id="webfaq-heading">Web Design Questions <span>Answered</span></h2>
        </div>
        <div style="max-width:800px;margin:0 auto;" data-aos="fade-up" data-aos-delay="100">
            <?php
            $faqs = [
                ['q'=>'How long does it take to build a website in Nigeria?',
                 'a'=>'For most projects, a standard business website takes between 3 to 6 weeks from kickoff to launch. E-commerce sites and complex projects may take 6 to 10 weeks. We provide a detailed timeline before we start, and we stick to it. We know how frustrating delays are, and we\'ve built our process to eliminate them.'],
                ['q'=>'Do you build websites outside of Lagos?',
                 'a'=>'Absolutely. We work with businesses across Nigeria: Abuja, Port Harcourt, Enugu, Ibadan, Kano, and every state. We operate fully remotely and use project management tools that keep communication seamless regardless of location.'],
                ['q'=>'Will my website work well on mobile phones in Nigeria?',
                 'a'=>'Yes, and this is a non-negotiable requirement for us. Over 76% of Nigerian internet users access the web on mobile devices. Every website we build is mobile-first, tested on multiple devices and screen sizes, and optimised to load quickly even on 3G connections.'],
                ['q'=>'Can you redesign my existing website?',
                 'a'=>'Yes. Website redesigns make up a significant portion of our work. We audit your existing site, identify what\'s working and what\'s costing you customers, and build you a new site that corrects those issues. We also ensure a smooth transition with 301 redirects to protect your existing Google rankings.'],
                ['q'=>'What happens after my website launches?',
                 'a'=>'We don\'t disappear after launch. Every package includes a post-launch support period. We also offer our Web Maintenance plans to keep your site fast, secure, and up-to-date on an ongoing basis. You\'ll always have a team in your corner.'],
            ];
            foreach ( $faqs as $i => $faq ) :
                $id = 'webfaq-' . ($i+1);
            ?>
                <div class="faq-item" x-data="{ open: false }">
                    <button class="faq-trigger" @click="open=!open" :aria-expanded="open.toString()" aria-controls="<?php echo esc_attr($id); ?>">
                        <span><?php echo esc_html( $faq['q'] ); ?></span>
                        <span class="faq-icon" :style="open?'background:var(--color-primary);color:#fff;':''"><span x-text="open?'−':'+'">+</span></span>
                    </button>
                    <div class="faq-content" id="<?php echo esc_attr($id); ?>" x-show="open" x-collapse style="display:none;">
                        <p><?php echo esc_html( $faq['a'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     FINAL CTA
     ===================================================== -->
<section class="cta-banner section-padding" aria-label="Web design page call to action">
    <div class="container-sd" style="position:relative;z-index:1;text-align:center;">
        <div data-aos="zoom-in">
            <h2 style="color:#fff;margin-bottom:20px;">Your Competitors Are Online.<br>It's Time You Outrank Them.</h2>
            <p style="color:rgba(255,255,255,0.85);font-size:1.05rem;max-width:520px;margin:0 auto 36px;">Get a free website audit and strategy consultation. We'll show you exactly what your current site is costing you, and precisely how we fix it.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-white" style="font-size:1rem;padding:16px 36px;">
                Get Your Free Website Audit
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

</main>
<style>.responsive-2col{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}@media(max-width:768px){.responsive-2col{grid-template-columns:1fr!important;gap:40px!important;}}</style>
<?php get_footer(); ?>
