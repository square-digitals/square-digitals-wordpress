<?php
/**
 * Square Digitals — page-web-maintenance.php
 * Web Maintenance service page.
 * Template Name: Web Maintenance
 */
get_header();
?>

<main id="main-content" role="main">

<!-- =====================================================
     HERO
     ===================================================== -->
<section style="background:#000;padding:160px 0 100px;position:relative;overflow:hidden;" aria-label="Web Maintenance hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 50% 60% at 70% 40%,rgba(161,3,112,0.22) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(161,3,112,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(161,3,112,0.04) 1px,transparent 1px);background-size:64px 64px;pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div style="max-width:760px;" class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Website Maintenance Services</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:24px;">
                Don't Let a Broken Website<br><span style="color:var(--color-primary);">Cost You Customers</span>
            </h1>
            <p style="color:rgba(255,255,255,0.75);font-size:1.15rem;line-height:1.75;max-width:600px;margin-bottom:40px;">
                Every minute your website is down, slow, or hacked, you're losing customers and credibility. Square Digitals' website maintenance services in Nigeria keep your site fast, secure, and performing at its best around the clock, 365 days a year.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:16px;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary pulse" style="font-size:1rem;padding:16px 36px;">
                    Get a Maintenance Plan
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="#pricing" style="display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,0.75);font-family:var(--font-heading);font-weight:600;padding:14px 28px;border:2px solid rgba(255,255,255,0.2);border-radius:9999px;text-decoration:none;transition:all 0.3s;" onmouseover="this.style.borderColor='#A10370'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)'">
                    View Pricing
                </a>
            </div>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="#ffffff"><path d="M0,80 C360,0 1080,80 1440,20 L1440,80 Z"/></svg>
    </div>
</section>

<!-- =====================================================
     PAIN POINTS
     ===================================================== -->
<section class="section-padding" aria-labelledby="maint-pain-heading">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;" class="responsive-2col">

            <div data-aos="fade-right">
                <div class="section-label">The Cost of Neglect</div>
                <h2 class="section-title" id="maint-pain-heading" style="text-align:left;">
                    What Happens When You<br><span>Ignore Website Maintenance</span>
                </h2>
                <p style="margin-bottom:20px;">
                    Nigerian business owners are often so busy running their companies that website maintenance falls to the bottom of the priority list. It seems like something you can handle "later." Until your site goes down on a Monday morning. Until a hacker plants malware and Google blacklists you. Until a customer calls to say they've been trying to reach your website for three days.
                </p>
                <p style="margin-bottom:20px;">
                    The average cost of website downtime for a small business is not just lost revenue. It costs trust, Google rankings, and a compromised reputation that can take months to rebuild. WordPress websites with outdated plugins are the most common entry point for cyberattacks. Security vulnerabilities in Nigerian business websites are exploited within hours of disclosure.
                </p>
                <p style="margin-bottom:32px;">
                    Our website maintenance services in Nigeria remove all of this risk from your plate. We handle everything proactively, professionally, and with full reporting so you always know what's been done and why.
                </p>
            </div>

            <div data-aos="fade-left" data-aos-delay="100">
                <?php
                $risks = [
                    ['icon'=>'lock',  'label'=>'Security Breaches',      'desc'=>'Outdated WordPress plugins and themes are exploited by hackers daily. We patch vulnerabilities before they become breaches.'],
                    ['icon'=>'clock', 'label'=>'Website Downtime',        'desc'=>'We monitor your website every 5 minutes. If it goes down, we know about it before you do and we fix it immediately.'],
                    ['icon'=>'zap',   'label'=>'Slow Page Speed',         'desc'=>'Google penalises slow websites. We run monthly speed optimisations to ensure your site loads in under 3 seconds.'],
                    ['icon'=>'refresh','label'=>'Outdated Plugins & Core', 'desc'=>'We update WordPress core, themes, and plugins monthly, tested and staged first to ensure nothing breaks.'],
                ];
                foreach ( $risks as $i => $r ) : ?>
                    <div style="display:flex;gap:16px;padding:20px;background:#fff;border-radius:14px;box-shadow:var(--shadow-card);margin-bottom:16px;transition:all 0.3s;" data-aos="fade-up" data-aos-delay="<?php echo $i * 80; ?>" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 12px 40px rgba(161,3,112,0.15)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-card)'">
                        <div style="width:48px;height:48px;border-radius:12px;background:var(--color-primary-light);display:flex;align-items:center;justify-content:center;color:var(--color-primary);flex-shrink:0;">
                            <?php sd_icon( $r['icon'] ); ?>
                        </div>
                        <div>
                            <h4 style="font-size:0.95rem;margin-bottom:6px;"><?php echo esc_html( $r['label'] ); ?></h4>
                            <p style="font-size:0.85rem;margin:0;"><?php echo esc_html( $r['desc'] ); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     WHAT'S INCLUDED
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="included-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">What You Get</div>
            <h2 class="section-title" id="included-heading">
                Comprehensive Website Maintenance<br><span>for Nigerian Businesses</span>
            </h2>
            <p class="section-subtitle">Every maintenance plan from Square Digitals covers the full spectrum of website health, going beyond ticking boxes to genuinely protect your digital asset.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:28px;">
            <?php
            $services = [
                ['icon'=>'refresh','title'=>'WordPress & Plugin Updates',
                 'desc'=>'We update WordPress core, all plugins, and your theme monthly, tested on a staging environment first. No broken websites from untested updates.'],
                ['icon'=>'shield', 'title'=>'Daily Website Backups',
                 'desc'=>'We back up your complete website daily, files and database, and store them securely off-site. If anything goes wrong, restoration takes minutes, not days.'],
                ['icon'=>'clock',  'title'=>'24/7 Uptime Monitoring',
                 'desc'=>'We monitor your website every 5 minutes from multiple locations. If your site goes down, our team is notified immediately and works to restore it before your customers notice.'],
                ['icon'=>'lock',   'title'=>'Security Scans & Hardening',
                 'desc'=>'Weekly malware scans, firewall management, login security hardening, and SSL certificate monitoring. We keep Nigerian business websites off Google\'s blacklist.'],
                ['icon'=>'zap',    'title'=>'Speed Optimisation',
                 'desc'=>'Monthly performance audits and optimisations including image compression, caching configuration, and database cleanup. Your site stays fast as your content grows.'],
                ['icon'=>'bar-chart','title'=>'Monthly Reports',
                 'desc'=>'Every month you receive a plain-English report covering: uptime record, tasks completed, security status, speed scores, and recommendations. Full transparency, always.'],
            ];
            foreach ( $services as $i => $svc ) : ?>
                <div class="sd-card" style="padding:32px;" data-aos="fade-up" data-aos-delay="<?php echo $i * 70; ?>">
                    <div class="service-card-icon" style="color:var(--color-primary);">
                        <?php sd_icon( $svc['icon'] ); ?>
                    </div>
                    <h3 style="font-size:1rem;margin-bottom:12px;"><?php echo esc_html( $svc['title'] ); ?></h3>
                    <p style="font-size:0.875rem;"><?php echo esc_html( $svc['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =====================================================
     EXTENDED COPY
     ===================================================== -->
<section class="section-padding" aria-labelledby="maint-why-heading">
    <div class="container-sd" style="max-width:860px;margin:0 auto;">
        <div data-aos="fade-up">
            <div class="section-label">Why Maintenance Matters</div>
            <h2 class="section-title" id="maint-why-heading" style="text-align:left;">
                Website Maintenance in Nigeria:<br><span>The Investment That Pays for Itself</span>
            </h2>
            <p style="margin-bottom:20px;">Let's be direct: website maintenance is not glamorous. It's not the exciting part of digital marketing. But it is the part that determines whether all the money you've invested in web design, SEO, and paid advertising actually pays off. Without proper care, that investment evaporates when your site goes down, gets hacked, or starts loading like it's still 2009.</p>
            <p style="margin-bottom:20px;">Nigerian business websites face a specific set of maintenance challenges that many international tools and agencies don't understand. Local hosting infrastructure, Nigerian internet patterns, mobile-first traffic, and the reality that most SME website owners don't have the time or technical expertise to maintain their site properly. These are all factors we account for in our maintenance approach.</p>
            <p style="margin-bottom:20px;">Our website management company in Lagos has maintained hundreds of Nigerian business websites. We've seen what happens when maintenance is neglected. We've seen the recovery process first-hand. Trust us when we say: prevention is a fraction of the cost of recovery. A hacked WordPress site in Nigeria can take weeks to fully clean and restore. A website that crashes right before a product launch can wipe out months of marketing spend.</p>
            <p style="margin-bottom:20px;">Our website support services in Nigeria are built to eliminate all of that. We monitor proactively, update systematically, back up religiously, and report transparently. Your website runs like clockwork. You never have to think about it at all.</p>
            <p style="margin-bottom:32px;">Whether you're running a WordPress blog, a WooCommerce store, a corporate website, or a custom web application, our team provides the professional website management your business deserves. As one of Nigeria's fastest growing website maintenance providers, we protect Nigerian websites in Lagos, Abuja, Port Harcourt, and every state every single day.</p>
        </div>
    </div>
</section>

<!-- =====================================================
     SLA GUARANTEES
     ===================================================== -->
<section class="section-padding-sm" style="background:var(--color-secondary);" aria-labelledby="sla-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:48px;" data-aos="fade-up">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Our Guarantees</div>
            <h2 style="color:#fff;" id="sla-heading">Service Level Agreements That <span style="color:var(--color-primary);">Mean Something</span></h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px;">
            <?php
            $slas = [
                ['metric'=>'99.9%','label'=>'Uptime Target','desc'=>'We monitor and act to ensure your site stays online.'],
                ['metric'=>'< 1hr','label'=>'Critical Issue Response','desc'=>'Hacks, outages, and critical bugs resolved within 1 hour.'],
                ['metric'=>'24hrs','label'=>'Standard Request Turnaround','desc'=>'Content updates and non-critical fixes done within 24 hours.'],
                ['metric'=>'Monthly','label'=>'Maintenance Reports','desc'=>'Full status report delivered every month without fail.'],
            ];
            foreach ( $slas as $i => $sla ) : ?>
                <div style="text-align:center;padding:32px 20px;border:1px solid rgba(161,3,112,0.2);border-radius:16px;" data-aos="zoom-in" data-aos-delay="<?php echo $i * 80; ?>">
                    <div style="font-family:var(--font-heading);font-size:2.2rem;font-weight:800;color:var(--color-primary);margin-bottom:8px;"><?php echo esc_html( $sla['metric'] ); ?></div>
                    <div style="font-family:var(--font-heading);font-weight:700;font-size:0.9rem;color:#fff;margin-bottom:8px;"><?php echo esc_html( $sla['label'] ); ?></div>
                    <p style="font-size:0.8rem;color:rgba(255,255,255,0.5);"><?php echo esc_html( $sla['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     PRICING
     ===================================================== -->
<section id="pricing" class="section-padding" aria-labelledby="maint-pricing-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">Pricing</div>
            <h2 class="section-title" id="maint-pricing-heading">
                Website Maintenance Plans <span>for Nigerian Businesses</span>
            </h2>
            <p class="section-subtitle">Straightforward, all-inclusive monthly plans. No surprises, no extras.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:28px;">
            <?php
            $plans = [
                [
                    'name'=>'Basic','featured'=>false,
                    'price'=>'₦35,000','period'=>'/month',
                    'desc'=>'Essential care for small WordPress websites with minimal traffic.',
                    'features'=>['Monthly plugin & core updates','Weekly security scans','Daily backups (7-day retention)','Uptime monitoring','Monthly report'],
                ],
                [
                    'name'=>'Standard','featured'=>true,
                    'price'=>'₦65,000','period'=>'/month',
                    'desc'=>'Full-coverage maintenance for growing Nigerian business websites.',
                    'features'=>['Weekly updates & testing','Daily malware scans','Daily backups (30-day retention)','5-minute uptime monitoring','Speed optimisation (monthly)','2 hours content updates/month','Priority email support','Monthly detailed report'],
                ],
                [
                    'name'=>'Premium','featured'=>false,
                    'price'=>'₦120,000','period'=>'/month',
                    'desc'=>'Enterprise-grade care for high-traffic sites, e-commerce, and critical business platforms.',
                    'features'=>['Daily updates & staging tests','Real-time security monitoring','Hourly backups (90-day retention)','1-minute uptime monitoring','Monthly performance audit','5 hours content updates/month','Phone & priority email support','Weekly reports','Emergency support (24/7)'],
                ],
            ];
            foreach ( $plans as $plan ) : ?>
                <div class="pricing-card <?php echo $plan['featured'] ? 'featured' : ''; ?>" data-aos="fade-up">
                    <?php if ( $plan['featured'] ) : ?>
                        <div class="pricing-badge">Most Popular</div>
                    <?php endif; ?>
                    <h3 style="font-size:1.1rem;margin-bottom:4px;"><?php echo esc_html( $plan['name'] ); ?></h3>
                    <div style="display:flex;align-items:baseline;gap:4px;margin-bottom:4px;">
                        <div class="price-amount"><?php echo esc_html( $plan['price'] ); ?></div>
                        <span class="price-period"><?php echo esc_html( $plan['period'] ); ?></span>
                    </div>
                    <p style="font-size:0.875rem;color:var(--color-text-muted);margin-bottom:16px;"><?php echo esc_html( $plan['desc'] ); ?></p>
                    <hr style="border:none;border-top:1px solid rgba(161,3,112,0.1);margin:16px 0;">
                    <?php foreach ( $plan['features'] as $feat ) : ?>
                        <div class="pricing-feature">
                            <span class="check">✓</span>
                            <span><?php echo esc_html( $feat ); ?></span>
                        </div>
                    <?php endforeach; ?>
                    <div style="margin-top:28px;">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="<?php echo $plan['featured'] ? 'btn-primary' : 'btn-secondary'; ?>" style="width:100%;justify-content:center;">
                            Get Started →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     FAQs
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="maintfaq-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:56px;" data-aos="fade-up">
            <div class="section-label">FAQ</div>
            <h2 class="section-title" id="maintfaq-heading">Maintenance Questions <span>Answered</span></h2>
        </div>
        <div style="max-width:800px;margin:0 auto;" data-aos="fade-up" data-aos-delay="100">
            <?php
            $faqs = [
                ['q'=>'Do I need a website maintenance plan if my site is new?',
                 'a'=>'Yes, and actually new websites need maintenance the most. WordPress plugins release security patches frequently, and new sites are just as vulnerable as old ones. Starting a maintenance plan from day one means you never have to deal with the headache of a neglected, compromised site later.'],
                ['q'=>'What does "website support services Nigeria" actually include?',
                 'a'=>'At Square Digitals, our website support services include plugin and core updates, security monitoring, daily backups, uptime monitoring, speed optimisation, and content updates depending on your plan. We also provide a monthly written report so you always know exactly what\'s been done.'],
                ['q'=>'Can you take over maintenance of my existing WordPress website?',
                 'a'=>'Yes. We perform an initial site health audit to understand the current state of your website, covering security vulnerabilities, outdated plugins, and speed issues, and then we onboard you to a maintenance plan and begin managing it immediately. We\'ve brought dozens of neglected Nigerian business websites back to health.'],
                ['q'=>'What happens if my website gets hacked?',
                 'a'=>'Under our Standard and Premium plans, if your site gets hacked, we treat it as a critical emergency and begin malware removal and restoration immediately. Our Premium plan includes 24/7 emergency support with a 1-hour response SLA. We restore from clean backups and implement additional hardening to prevent recurrence.'],
                ['q'=>'How do I know what work is being done on my website each month?',
                 'a'=>'Every client receives a monthly maintenance report that documents every action taken, including updates applied, backups confirmed, security scans completed, speed scores, uptime percentage, and any issues found and resolved. You\'ll always have a clear, written record of exactly what\'s been done.'],
            ];
            foreach ( $faqs as $i => $faq ) :
                $id = 'mfaq-' . ($i+1);
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

<!-- CTA -->
<section class="cta-banner section-padding" aria-label="Maintenance CTA">
    <div class="container-sd" style="position:relative;z-index:1;text-align:center;">
        <div data-aos="zoom-in">
            <h2 style="color:#fff;margin-bottom:20px;">Stop Gambling With Your Website.<br>Put a Professional Team Behind It.</h2>
            <p style="color:rgba(255,255,255,0.85);font-size:1.05rem;max-width:520px;margin:0 auto 36px;">Get a free website health audit. We'll identify your current vulnerabilities and show you exactly what our maintenance plan would do for your site.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-white" style="font-size:1rem;padding:16px 36px;">
                Get a Free Site Health Audit
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

</main>
<style>.responsive-2col{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}@media(max-width:768px){.responsive-2col{grid-template-columns:1fr!important;gap:40px!important;}}</style>
<?php get_footer(); ?>
