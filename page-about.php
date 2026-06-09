<?php
/**
 * Square Digitals — page-about.php
 * About Us page template.
 * Template Name: About Us
 */
get_header();
?>

<main id="main-content" role="main">

<!-- =====================================================
     HERO
     ===================================================== -->
<section style="background:#000;padding:160px 0 100px;position:relative;overflow:hidden;" aria-label="About Square Digitals hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 50% 60% at 80% 40%,rgba(161,3,112,0.2) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div style="max-width:720px;" class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Our Story</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:24px;">
                Built in Nigeria.<br>Built for <span style="color:var(--color-primary);">Nigerian Business.</span>
            </h1>
            <p style="color:rgba(255,255,255,0.7);font-size:1.15rem;line-height:1.75;max-width:580px;">
                Square Digitals was founded because Nigerian businesses deserve a digital marketing agency that understands their market, speaks their language, and delivers real results. No recycled Western strategies that miss the mark. Everything we do is built specifically for Nigeria.
            </p>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="#ffffff"><path d="M0,80 C360,0 1080,80 1440,20 L1440,80 Z"/></svg>
    </div>
</section>

<!-- =====================================================
     ORIGIN STORY
     ===================================================== -->
<section class="section-padding" aria-labelledby="story-heading">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;" class="responsive-2col">

            <div data-aos="fade-right">
                <div class="section-label">Who We Are</div>
                <h2 class="section-title" id="story-heading" style="text-align:left;">
                    The Agency Nigerian Businesses<br><span>Were Waiting For</span>
                </h2>
                <p style="margin-bottom:20px;">
                    When we launched Square Digitals, the Nigerian digital marketing landscape was dominated by two extremes: overpriced international agencies that didn't understand the local market, and cheap freelancers with no accountability. Nigerian business owners, from the ambitious SME in Ikeja to the growing law firm in Abuja, were being underserved, overcharged, and left with no real results to show.
                </p>
                <p style="margin-bottom:20px;">
                    We built Square Digitals specifically to close that gap. Our team is Nigerian, our strategies are built for Nigerian markets, and our KPIs are tied to your business outcomes, never vanity metrics. We measure success the same way you do: more customers, more revenue, stronger market position.
                </p>
                <p style="margin-bottom:32px;">
                    Today, Square Digitals is one of Nigeria's fastest growing digital marketing agencies, serving businesses across Lagos, Abuja, Port Harcourt, and every major city. We are a digital marketing agency that Nigerian business owners can trust. Our reputation is built on results, not retainers.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary">Start a Conversation →</a>
            </div>

            <div data-aos="fade-left" data-aos-delay="100">
                <div style="background:var(--color-primary-light);border-radius:24px;padding:48px;position:relative;">
                    <div style="position:absolute;top:-16px;right:-16px;width:80px;height:80px;background:var(--color-primary);border-radius:16px;display:flex;align-items:center;justify-content:center;" aria-hidden="true">
                        <svg width="36" height="36" viewBox="0 0 22 22" fill="white"><rect x="1" y="1" width="9" height="9" rx="2"/><rect x="12" y="1" width="9" height="9" rx="2" opacity="0.6"/><rect x="1" y="12" width="9" height="9" rx="2" opacity="0.6"/><rect x="12" y="12" width="9" height="9" rx="2" opacity="0.3"/></svg>
                    </div>
                    <blockquote style="font-family:var(--font-heading);font-size:1.3rem;font-weight:700;color:var(--color-text);line-height:1.5;margin-bottom:24px;font-style:italic;">
                        "Nigerian businesses don't need a digital agency. They need a digital partner who understands the terrain and fights in their corner."
                    </blockquote>
                    <p style="font-size:0.9rem;color:var(--color-primary);font-family:var(--font-heading);font-weight:600;">The Square Digitals Mission</p>
                </div>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:24px;">
                    <div style="background:#fff;border-radius:16px;padding:20px;box-shadow:var(--shadow-card);text-align:center;">
                        <div class="stat-number" style="font-size:2rem;" data-counter="5" data-suffix="">5</div>
                        <p style="font-size:0.8rem;font-family:var(--font-heading);color:var(--color-text-muted);margin-top:4px;">Happy Clients</p>
                    </div>
                    <div style="background:#fff;border-radius:16px;padding:20px;box-shadow:var(--shadow-card);text-align:center;">
                        <div class="stat-number" style="font-size:2rem;" data-counter="5" data-suffix="">5</div>
                        <p style="font-size:0.8rem;font-family:var(--font-heading);color:var(--color-text-muted);margin-top:4px;">Projects Done</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     MISSION
     ===================================================== -->
<section class="section-padding-sm" style="background:var(--color-secondary);" aria-labelledby="mission-heading">
    <div class="container-sd" style="text-align:center;max-width:800px;margin:0 auto;">
        <div data-aos="zoom-in">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Our Mission</div>
            <h2 style="color:#fff;margin:20px 0;" id="mission-heading">
                To Make Every Nigerian Business <span style="color:var(--color-primary);">Digitally Unstoppable</span>
            </h2>
            <p style="color:rgba(255,255,255,0.65);font-size:1.1rem;line-height:1.75;">
                We believe every Nigerian business, whether you're a one-person operation or a 200-employee enterprise, deserves a world-class digital presence that attracts customers, builds authority, and drives sustainable growth. Our mission is to make that a reality for as many Nigerian businesses as possible, using data-driven strategy, exceptional execution, and a relentless focus on results.
            </p>
        </div>
    </div>
</section>

<!-- =====================================================
     CORE VALUES
     ===================================================== -->
<section class="section-padding" aria-labelledby="values-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">What We Stand For</div>
            <h2 class="section-title" id="values-heading">Our Core <span>Values</span></h2>
            <p class="section-subtitle">These aren't values written on a wall. They're principles that shape every decision, every strategy, and every interaction we have with clients.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:28px;">
            <?php
            $values = [
                ['icon'=>'zap',         'title'=>'Results Without Excuses',    'color'=>'#A10370',
                 'desc'=>'We don\'t trade in promises. We trade in outcomes. Every service we offer is structured around delivering measurable, tangible results that move the needle for your business.'],
                ['icon'=>'users',       'title'=>'Client-First, Always',       'color'=>'#A10370',
                 'desc'=>'Your business goals drive every decision we make. We don\'t have favourite strategies. We have what works for you. If something isn\'t serving your growth, we change it.'],
                ['icon'=>'bar-chart',   'title'=>'Radical Transparency',       'color'=>'#A10370',
                 'desc'=>'No hidden fees. No inflated reports. No jargon designed to confuse. You will always know exactly where your investment is going and what it\'s producing.'],
                ['icon'=>'trending-up', 'title'=>'Continuous Improvement',     'color'=>'#A10370',
                 'desc'=>'Digital marketing is not a set-and-forget discipline. We monitor, test, and optimise continuously. Your campaigns improve every single month.'],
            ];
            foreach ( $values as $i => $v ) : ?>
                <div class="sd-card" style="padding:36px;" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                    <div style="width:56px;height:56px;border-radius:14px;background:var(--color-primary-light);display:flex;align-items:center;justify-content:center;color:var(--color-primary);margin-bottom:20px;">
                        <?php sd_icon( $v['icon'] ); ?>
                    </div>
                    <h3 style="font-size:1.1rem;margin-bottom:12px;"><?php echo esc_html( $v['title'] ); ?></h3>
                    <p style="font-size:0.9rem;"><?php echo esc_html( $v['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =====================================================
     STATS COUNTER
     ===================================================== -->
<section class="section-padding-sm bg-primary-tint" aria-label="Agency milestones">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;text-align:center;" class="stats-grid">
            <?php
            $stats = [
                ['num'=>5,  'suffix'=>'',   'label'=>'Happy Clients',      'prefix'=>''],
                ['num'=>5,  'suffix'=>'',   'label'=>'Projects Delivered', 'prefix'=>''],
                ['num'=>3,  'suffix'=>'+',  'label'=>'Years Experience',   'prefix'=>''],
                ['num'=>5,  'suffix'=>' ★', 'label'=>'Google Rating',      'prefix'=>''],
            ];
            foreach ( $stats as $i => $s ) : ?>
                <div data-aos="zoom-in" data-aos-delay="<?php echo $i * 80; ?>">
                    <div class="stat-number" data-counter="<?php echo esc_attr($s['num']); ?>" data-suffix="<?php echo esc_attr($s['suffix']); ?>">
                        <?php echo esc_html( $s['num'] . $s['suffix'] ); ?>
                    </div>
                    <p style="color:var(--color-text-muted);font-size:0.875rem;margin-top:8px;font-family:var(--font-heading);"><?php echo esc_html( $s['label'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     TEAM
     ===================================================== -->
<section class="section-padding" aria-labelledby="team-heading">
    <div class="container-sd">

        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">The People Behind the Results</div>
            <h2 class="section-title" id="team-heading">Meet the <span>Square Digitals Team</span></h2>
            <p class="section-subtitle">A focused team of Nigerian digital marketing specialists: strategists, designers, developers, and SEO experts who live and breathe online growth.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;">
            <?php
            $team = [
                ['name'=>'Yoma Okeremeta',     'role'=>'Team Lead',              'bio'=>'With over 5 years in web design and development, Yoma has designed and deployed more than 150 websites for businesses across different industries. He leads the Square Digitals team with a hands-on approach, ensuring every project is delivered to a standard he would be proud to put his name on.'],
                ['name'=>'John Ojile',         'role'=>'Web Designer & Developer','bio'=>'John brings sharp design instincts and solid development skills to every project. In 2+ years building websites, he has designed and deployed over 50 sites, consistently delivering clean, fast, and conversion-focused work that clients love.'],
                ['name'=>'Dotun Adekoyejo',    'role'=>'Head of Operations',     'bio'=>'Dotun has spent 5+ years in the digital marketing space, working extensively with online course creators, coaches, and knowledge-based businesses. He understands how to position a brand online, drive the right audience to it, and turn that attention into revenue.'],
            ];
            foreach ( $team as $i => $member ) : ?>
                <div class="sd-card" style="overflow:hidden;" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                    <!-- Placeholder avatar -->
                    <div style="height:240px;background:linear-gradient(135deg,var(--color-primary-light) 0%,rgba(161,3,112,0.08) 100%);display:flex;align-items:center;justify-content:center;">
                        <div style="width:100px;height:100px;border-radius:50%;background:var(--color-primary);display:flex;align-items:center;justify-content:center;font-family:var(--font-heading);font-weight:800;font-size:2.5rem;color:#fff;">
                            <?php echo esc_html( substr( $member['name'], 0, 1 ) ); ?>
                        </div>
                    </div>
                    <div style="padding:28px;">
                        <h3 style="font-size:1.1rem;margin-bottom:4px;"><?php echo esc_html( $member['name'] ); ?></h3>
                        <p style="font-size:0.8rem;color:var(--color-primary);font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.08em;margin-bottom:14px;"><?php echo esc_html( $member['role'] ); ?></p>
                        <p style="font-size:0.875rem;"><?php echo esc_html( $member['bio'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =====================================================
     CTA
     ===================================================== -->
<section class="cta-banner section-padding" aria-label="About page call to action">
    <div class="container-sd" style="position:relative;z-index:1;text-align:center;">
        <div data-aos="zoom-in">
            <h2 style="color:#fff;margin-bottom:20px;">Ready to Work With a Digital Marketing Agency<br>That Actually Delivers?</h2>
            <p style="color:rgba(255,255,255,0.85);font-size:1.05rem;max-width:520px;margin:0 auto 36px;">Let's talk about your business, your goals, and exactly how Square Digitals can help you dominate your market online.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-white" style="font-size:1rem;padding:16px 36px;">
                Get Your Free Strategy Call
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

</main>
<style>.responsive-2col{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}@media(max-width:768px){.responsive-2col{grid-template-columns:1fr!important;gap:40px!important;}.stats-grid{grid-template-columns:1fr 1fr!important;}}</style>
<?php get_footer(); ?>
