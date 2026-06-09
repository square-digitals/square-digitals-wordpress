<?php
/**
 * Square Digitals — page-seo.php
 * SEO Services page.
 * Template Name: SEO Services
 */
get_header();
?>

<main id="main-content" role="main">

<!-- =====================================================
     HERO
     ===================================================== -->
<section style="background:#000;padding:160px 0 100px;position:relative;overflow:hidden;" aria-label="SEO Services hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 55% 65% at 72% 38%,rgba(161,3,112,0.25) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(161,3,112,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(161,3,112,0.04) 1px,transparent 1px);background-size:64px 64px;pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div style="max-width:780px;" class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">SEO Services Nigeria</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:24px;line-height:1.1;">
                Rank Higher. Get Found.<br>Grow Faster.<br>
                <span style="color:var(--color-primary);">SEO Built for Nigerian Businesses.</span>
            </h1>
            <p style="color:rgba(255,255,255,0.75);font-size:1.15rem;line-height:1.75;max-width:600px;margin-bottom:40px;">
                Your customers are searching Google right now for what you sell. If you're not on page 1, you don't exist to them. Square Digitals is one of Nigeria's fastest growing SEO agencies. We get Nigerian businesses to page 1 and keep them there.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:16px;">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary pulse" style="font-size:1rem;padding:16px 36px;">
                    Get a Free SEO Audit
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="#seo-process" style="display:inline-flex;align-items:center;gap:8px;color:rgba(255,255,255,0.75);font-family:var(--font-heading);font-weight:600;padding:14px 28px;border:2px solid rgba(255,255,255,0.2);border-radius:9999px;text-decoration:none;transition:all 0.3s;" onmouseover="this.style.borderColor='#A10370'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)'">
                    Our SEO Process
                </a>
            </div>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="#ffffff"><path d="M0,80 C360,0 1080,80 1440,20 L1440,80 Z"/></svg>
    </div>
</section>

<!-- =====================================================
     STATS BAR
     ===================================================== -->
<section class="section-padding-sm" style="background:var(--color-primary-light);border-bottom:1px solid rgba(161,3,112,0.12);" aria-label="SEO statistics">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:32px;text-align:center;" class="stats-grid">
            <?php
            $stats = [
                ['num'=>'93%','label'=>'of online experiences begin with a search engine'],
                ['num'=>'75%','label'=>'of users never scroll past the first page of Google'],
                ['num'=>'14.6%','label'=>'average close rate for SEO leads vs 1.7% for outbound'],
                ['num'=>'200+','label'=>'ranking factors Google uses to decide page 1 results'],
            ];
            foreach ( $stats as $i => $s ) : ?>
                <div data-aos="zoom-in" data-aos-delay="<?php echo $i * 70; ?>">
                    <div style="font-family:var(--font-heading);font-size:clamp(1.8rem,3vw,2.8rem);font-weight:800;color:var(--color-primary);line-height:1;"><?php echo esc_html( $s['num'] ); ?></div>
                    <p style="font-size:0.825rem;color:var(--color-text-muted);margin-top:8px;"><?php echo esc_html( $s['label'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     SEO SERVICES BREAKDOWN
     ===================================================== -->
<section class="section-padding" aria-labelledby="seo-services-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">What We Offer</div>
            <h2 class="section-title" id="seo-services-heading">
                Comprehensive SEO Services<br><span>for the Nigerian Market</span>
            </h2>
            <p class="section-subtitle">Our SEO approach covers every dimension of search engine optimisation, because ranking on Google in Nigeria requires a multi-layered, technical, and content-rich strategy.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:28px;">
            <?php
            $services = [
                ['icon'=>'settings','title'=>'Technical SEO',
                 'desc'=>'We conduct a deep technical audit of your website covering crawlability, indexability, page speed, Core Web Vitals, structured data, mobile usability, and more. Technical SEO is the foundation everything else stands on. Without it, even great content won\'t rank. We fix the foundations first.'],
                ['icon'=>'search','title'=>'On-Page SEO & Content Optimisation',
                 'desc'=>'Every page on your website is a ranking opportunity. We conduct keyword research specific to Nigerian search behaviour, optimise your title tags, meta descriptions, headings, content structure, and internal links, ensuring every page speaks clearly to Google about what it\'s about.'],
                ['icon'=>'link','title'=>'Off-Page SEO & Link Building',
                 'desc'=>'Backlinks from authoritative websites are one of Google\'s top ranking signals. We build high-quality, relevant backlinks from reputable Nigerian and international publications, directories, and industry sources, increasing your domain authority and pushing you higher in search results.'],
                ['icon'=>'map-pin','title'=>'Local SEO Nigeria',
                 'desc'=>'If your customers are in Lagos, Abuja, Port Harcourt, or any specific Nigerian city, local SEO is your fastest path to customers. We optimise your Google Business Profile, build local citations, and ensure you rank for location-specific searches like "web design company Lagos" or "law firm in Abuja".'],
                ['icon'=>'globe','title'=>'Content Strategy & Creation',
                 'desc'=>'Google rewards websites that publish expert, helpful content. We develop a content strategy based on keyword research, create SEO-optimised blog posts, service pages, and landing pages that attract organic traffic and build your authority in your industry.'],
                ['icon'=>'trending-up','title'=>'SEO Analytics & Reporting',
                 'desc'=>'We track every metric that matters: keyword rankings, organic traffic, click-through rates, conversions from organic. You receive monthly reports with plain-English summaries of your progress and the strategy for the next 30 days.'],
            ];
            foreach ( $services as $i => $svc ) : ?>
                <div class="sd-card" style="padding:36px;" data-aos="fade-up" data-aos-delay="<?php echo $i * 70; ?>">
                    <div class="service-card-icon" style="color:var(--color-primary);">
                        <?php sd_icon( $svc['icon'] ); ?>
                    </div>
                    <h3 style="font-size:1.05rem;margin-bottom:12px;"><?php echo esc_html( $svc['title'] ); ?></h3>
                    <p style="font-size:0.875rem;line-height:1.75;"><?php echo esc_html( $svc['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     EXTENDED SEO COPY
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="seo-why-heading">
    <div class="container-sd" style="max-width:860px;margin:0 auto;">
        <div data-aos="fade-up">
            <div class="section-label">Why SEO in Nigeria?</div>
            <h2 class="section-title" id="seo-why-heading" style="text-align:left;">
                The Untapped SEO Opportunity<br><span>for Nigerian Businesses in 2025</span>
            </h2>
            <p style="margin-bottom:20px;">Here is the single most important fact about digital marketing in Nigeria today: search engine optimisation in Nigeria is one of the most underutilised growth channels available to Nigerian businesses. While Nigerian consumers have fully adopted Google as their primary research tool, searching for everything from "best restaurants in Lagos" to "affordable web design Nigeria" to "law firms in Abuja", the majority of Nigerian businesses are either absent from these results or buried on page 4.</p>
            <p style="margin-bottom:20px;">This is a massive opportunity. The businesses that invest in SEO now and get to page 1 for the keywords their customers are searching are building a sustainable, compounding source of organic traffic and customers. While their competitors are paying for every click through Google Ads, SEO-optimised businesses are receiving high-intent traffic for free, month after month, year after year.</p>
            <p style="margin-bottom:20px;">But SEO in Nigeria is not as simple as stuffing keywords into web pages. Google's algorithm has evolved dramatically. What works in 2025 requires technical expertise, content quality, authoritative backlinks, local signals, and a deep understanding of Nigerian user intent and search behaviour. This is exactly what Square Digitals delivers.</p>
            <p style="margin-bottom:20px;">As one of Nigeria's fastest growing SEO companies, we've ranked Nigerian businesses across multiple industries including real estate, legal services, healthcare, e-commerce, finance, hospitality, and more. Our strategies are not recycled templates from international playbooks. They're built from the ground up for the Nigerian market, using local keyword research, Nigerian competitor analysis, and insights from years of working exclusively in this market.</p>
            <p style="margin-bottom:32px;">If you're serious about growing organic traffic in Nigeria, getting found by more customers on Google, and building a digital presence that pays dividends for years, your next step is a free SEO audit from Square Digitals. As one of Nigeria's fastest growing SEO agencies, we'll show you exactly where you stand, where your competitors are outranking you, and what a realistic SEO roadmap looks like for your business.</p>
        </div>
    </div>
</section>

<!-- =====================================================
     SEO PROCESS — 6 STEPS
     ===================================================== -->
<section id="seo-process" class="section-padding" aria-labelledby="seoprocess-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:64px;" data-aos="fade-up">
            <div class="section-label">How We Work</div>
            <h2 class="section-title" id="seoprocess-heading">
                Our Proven 6-Step SEO Process<br><span>for Nigerian Businesses</span>
            </h2>
            <p class="section-subtitle">Every SEO engagement at Square Digitals follows this systematic process that eliminates guesswork and ensures your ranking improvements are consistent, sustainable, and measurable.</p>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:28px;" class="seoprocess-grid">
            <?php
            $steps = [
                ['num'=>'01','title'=>'SEO Audit & Baseline',
                 'desc'=>'We begin with a comprehensive technical and content audit of your website. We identify every issue affecting your rankings, from crawl errors and page speed to thin content and missing schema markup. This establishes your baseline and informs every decision that follows.'],
                ['num'=>'02','title'=>'Keyword Research & Strategy',
                 'desc'=>'We conduct in-depth keyword research for the Nigerian market, mapping search volume, competition, and intent for every relevant keyword. We build a keyword matrix that targets quick wins alongside long-term authority keywords, aligned with your business goals.'],
                ['num'=>'03','title'=>'Technical SEO Implementation',
                 'desc'=>'We fix every technical issue identified in the audit. Site speed, mobile usability, crawlability, Core Web Vitals, structured data markup, XML sitemaps, and canonical tags are all addressed systematically to give your content the best possible foundation to rank.'],
                ['num'=>'04','title'=>'On-Page Optimisation',
                 'desc'=>'We optimise every page: title tags, meta descriptions, headings, body content, images, internal linking structure, and URL architecture. Each page is mapped to specific target keywords and optimised to clearly signal relevance and authority to Google.'],
                ['num'=>'05','title'=>'Content Creation & Link Building',
                 'desc'=>'We execute a content calendar of SEO-optimised articles, guides, and service pages that target your keyword opportunities. Simultaneously, we run a structured outreach and link-building campaign to acquire high-quality backlinks that increase your domain authority.'],
                ['num'=>'06','title'=>'Reporting, Analysis & Growth',
                 'desc'=>'Every month, you receive a comprehensive SEO report covering keyword movement, organic traffic growth, backlinks acquired, technical health, and next-month strategy. We review, adjust, and compound. Your rankings improve every single month.'],
            ];
            foreach ( $steps as $i => $step ) : ?>
                <div style="display:flex;gap:20px;padding:28px;background:#fff;border-radius:16px;box-shadow:var(--shadow-card);transition:all 0.3s;" data-aos="fade-up" data-aos-delay="<?php echo ($i % 2) * 100; ?>" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='var(--shadow-card-hover)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-card)'">
                    <div style="flex-shrink:0;width:52px;height:52px;background:var(--color-primary);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-family:var(--font-heading);font-weight:800;font-size:0.875rem;">
                        <?php echo esc_html( $step['num'] ); ?>
                    </div>
                    <div>
                        <h3 style="font-size:1rem;margin-bottom:8px;"><?php echo esc_html( $step['title'] ); ?></h3>
                        <p style="font-size:0.875rem;margin:0;"><?php echo esc_html( $step['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- =====================================================
     CASE STUDY
     ===================================================== -->
<section class="section-padding bg-primary-tint" aria-labelledby="casestudy-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:56px;" data-aos="fade-up">
            <div class="section-label">Client Success Story</div>
            <h2 class="section-title" id="casestudy-heading">
                From Page 5 to Page 1:<br><span>A Nigerian SEO Case Study</span>
            </h2>
        </div>

        <div style="max-width:900px;margin:0 auto;" data-aos="fade-up" data-aos-delay="100">
            <div style="background:#fff;border-radius:24px;padding:48px;box-shadow:var(--shadow-card);">
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start;" class="responsive-2col">
                    <div>
                        <div style="background:var(--color-primary-light);border-radius:12px;padding:16px;margin-bottom:24px;">
                            <p style="font-size:0.8rem;font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--color-primary);margin-bottom:4px;">Client</p>
                            <p style="font-size:1rem;font-weight:600;color:var(--color-text);margin:0;">Lagos-Based Real Estate Agency</p>
                        </div>
                        <div style="background:var(--color-primary-light);border-radius:12px;padding:16px;margin-bottom:24px;">
                            <p style="font-size:0.8rem;font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--color-primary);margin-bottom:4px;">Industry</p>
                            <p style="font-size:1rem;font-weight:600;color:var(--color-text);margin:0;">Real Estate: Lagos Property Sales and Lettings</p>
                        </div>
                        <div style="background:var(--color-primary-light);border-radius:12px;padding:16px;">
                            <p style="font-size:0.8rem;font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--color-primary);margin-bottom:4px;">Timeline</p>
                            <p style="font-size:1rem;font-weight:600;color:var(--color-text);margin:0;">6 months SEO campaign</p>
                        </div>
                    </div>
                    <div>
                        <h3 style="font-size:1.1rem;margin-bottom:16px;">The Challenge</h3>
                        <p style="font-size:0.9rem;margin-bottom:20px;">The agency had been operating for 7 years but had almost no online presence. Their website was ranking on page 5 for key terms like "properties for sale in Lagos" and "luxury apartments Lekki." They were losing leads daily to newer, better-optimised competitors.</p>
                        <h3 style="font-size:1.1rem;margin-bottom:16px;">What We Did</h3>
                        <p style="font-size:0.9rem;margin-bottom:20px;">We conducted a full technical audit, fixed 47 crawl errors, rebuilt their content architecture around high-intent Lagos property keywords, created 18 optimised location pages, and built 34 high-quality backlinks from Nigerian property and business publications.</p>
                        <h3 style="font-size:1.1rem;margin-bottom:16px;">The Results</h3>
                        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;">
                            <div style="text-align:center;padding:16px;background:var(--color-primary-light);border-radius:12px;">
                                <div style="font-size:1.5rem;font-weight:800;color:var(--color-primary);font-family:var(--font-heading);">#1</div>
                                <p style="font-size:0.75rem;margin:4px 0 0;">Google Position</p>
                            </div>
                            <div style="text-align:center;padding:16px;background:var(--color-primary-light);border-radius:12px;">
                                <div style="font-size:1.5rem;font-weight:800;color:var(--color-primary);font-family:var(--font-heading);">+847%</div>
                                <p style="font-size:0.75rem;margin:4px 0 0;">Organic Traffic</p>
                            </div>
                            <div style="text-align:center;padding:16px;background:var(--color-primary-light);border-radius:12px;">
                                <div style="font-size:1.5rem;font-weight:800;color:var(--color-primary);font-family:var(--font-heading);">3.2×</div>
                                <p style="font-size:0.75rem;margin:4px 0 0;">Monthly Leads</p>
                            </div>
                        </div>
                    </div>
                </div>
                <blockquote style="margin-top:36px;padding:24px;background:var(--color-primary-light);border-radius:12px;border-left:4px solid var(--color-primary);font-style:italic;font-size:0.95rem;color:var(--color-text);">
                    "We went from getting maybe 5 organic enquiries a month to over 60. Square Digitals changed our business. We're now the top-ranking real estate agency in Lagos for multiple search terms and the phone rings constantly."
                    <footer style="margin-top:12px;font-style:normal;font-size:0.85rem;font-weight:700;color:var(--color-primary);">Managing Director, Lagos Real Estate Agency</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     FAQs
     ===================================================== -->
<section class="section-padding" aria-labelledby="seofaq-heading">
    <div class="container-sd">
        <div style="text-align:center;margin-bottom:56px;" data-aos="fade-up">
            <div class="section-label">FAQ</div>
            <h2 class="section-title" id="seofaq-heading">SEO Questions <span>Nigerian Businesses Ask</span></h2>
            <p class="section-subtitle">Real answers about search engine optimisation in Nigeria, from how long it takes to how much it costs.</p>
        </div>
        <div style="max-width:800px;margin:0 auto;" data-aos="fade-up" data-aos-delay="100">
            <?php
            $faqs = [
                ['q'=>'How long does SEO take to show results in Nigeria?',
                 'a'=>'SEO is a medium-to-long-term strategy. Most Nigerian businesses start seeing measurable ranking improvements within 90 to 120 days, with significant organic traffic growth typically visible at the 4 to 6 month mark. Highly competitive industries like real estate in Lagos or legal services in Abuja may take 6 to 12 months to fully dominate page 1. The sooner you start, the sooner you compound.'],
                ['q'=>'What is local SEO and does my Nigerian business need it?',
                 'a'=>'Local SEO is the practice of optimising your online presence to appear in location-specific searches like "plumber in Ikeja", "accountant in Port Harcourt", or "dentist near me in Abuja". If your business serves customers in a specific Nigerian city or region, local SEO is not optional. It\'s your single most targeted source of high-intent leads. We optimise your Google Business Profile, build local citations, and create location-specific content to dominate local results.'],
                ['q'=>'How much does SEO cost for a Nigerian business?',
                 'a'=>'Our SEO retainers for Nigerian businesses start from ₦150,000 per month and scale based on competition level, the number of target keywords, and the scope of content and link-building required. We provide a detailed proposal with projected timelines and expected outcomes before you commit a single naira. We also offer a free SEO audit to establish your baseline first.'],
                ['q'=>'Is SEO better than Google Ads for Nigerian businesses?',
                 'a'=>'Both have their place. Google Ads delivers immediate visibility but costs you every time someone clicks, and stops the moment you stop paying. SEO is slower to build but creates lasting, compounding results that continue paying dividends long after your initial investment. For most Nigerian businesses, the ideal strategy is to use Google Ads for immediate traffic while building organic SEO authority for long-term, cost-effective growth.'],
                ['q'=>'Can you guarantee Google page 1 rankings for Nigerian search terms?',
                 'a'=>'No ethical SEO agency can guarantee specific rankings. Google controls those, and anyone who promises guaranteed rankings is either misleading you or using black-hat tactics that will eventually destroy your website\'s visibility. What we guarantee is a systematic, data-driven approach, transparent reporting, continuous optimisation, and a track record of consistently achieving page 1 results for Nigerian businesses. We\'ll show you case studies and give you realistic projections based on actual data from your market.'],
            ];
            foreach ( $faqs as $i => $faq ) :
                $id = 'seofaq-' . ($i+1);
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
<section class="cta-banner section-padding" aria-label="SEO CTA">
    <div class="container-sd" style="position:relative;z-index:1;text-align:center;">
        <div data-aos="zoom-in">
            <h2 style="color:#fff;margin-bottom:20px;">Your Customers Are on Google.<br>It's Time They Found You First.</h2>
            <p style="color:rgba(255,255,255,0.85);font-size:1.05rem;max-width:520px;margin:0 auto 36px;">Get a free SEO audit. We'll show you exactly where you rank today, what keywords you're missing, and the specific actions that will move you to page 1.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-white" style="font-size:1rem;padding:16px 36px;">
                Claim Your Free SEO Audit
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

</main>
<style>
.responsive-2col{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;}
.seoprocess-grid{display:grid;grid-template-columns:1fr 1fr;gap:28px;}
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:32px;}
@media(max-width:768px){
    .responsive-2col,.seoprocess-grid{grid-template-columns:1fr!important;gap:24px!important;}
    .stats-grid{grid-template-columns:1fr 1fr!important;}
}
</style>
<?php get_footer(); ?>
