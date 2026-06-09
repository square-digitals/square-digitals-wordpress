<?php
/**
 * Square Digitals — page-ppc.php
 * PPC / Paid Advertising — Coming Soon page.
 * Template Name: PPC Advertising
 */
get_header();
?>

<main id="main-content" role="main">

<section style="min-height:100vh;background:#000;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:120px 0 80px;" aria-label="PPC Coming Soon">

    <!-- Decorative background -->
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 60% 70% at 50% 40%,rgba(161,3,112,0.2) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(161,3,112,0.05) 1px,transparent 1px),linear-gradient(90deg,rgba(161,3,112,0.05) 1px,transparent 1px);background-size:64px 64px;pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;top:10%;right:10%;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(161,3,112,0.15) 0%,transparent 70%);animation:float 7s ease-in-out infinite;pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;bottom:10%;left:8%;width:200px;height:200px;border-radius:50%;background:radial-gradient(circle,rgba(161,3,112,0.1) 0%,transparent 70%);animation:float 9s ease-in-out infinite reverse;pointer-events:none;" aria-hidden="true"></div>

    <div class="container-sd" style="position:relative;z-index:1;text-align:center;max-width:720px;">

        <!-- Icon -->
        <div style="width:96px;height:96px;border-radius:24px;background:rgba(161,3,112,0.15);border:2px solid rgba(161,3,112,0.3);display:flex;align-items:center;justify-content:center;margin:0 auto 32px;color:var(--color-primary);" class="animate__animated animate__bounceIn" aria-hidden="true">
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
        </div>

        <!-- Badge -->
        <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(245,158,11,0.15);border:1px solid rgba(245,158,11,0.3);color:#f59e0b;font-family:var(--font-heading);font-weight:700;font-size:0.8rem;padding:6px 16px;border-radius:100px;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:24px;" class="animate__animated animate__fadeInDown">
            <span style="width:6px;height:6px;background:#f59e0b;border-radius:50%;animation:blink 1s step-end infinite;"></span>
            Coming Soon
        </div>

        <h1 style="color:#fff;margin-bottom:20px;" class="animate__animated animate__fadeInUp">
            Google &amp; Meta Ads Management —<br><span style="color:var(--color-primary);">Coming Soon to Square Digitals</span>
        </h1>

        <p style="color:rgba(255,255,255,0.7);font-size:1.1rem;line-height:1.75;margin-bottom:40px;" class="animate__animated animate__fadeInUp">
            We're building out our PPC division to offer world-class paid advertising management specifically for Nigerian businesses. Google Ads, Meta Ads (Facebook &amp; Instagram), and strategic paid campaigns that generate real ROI — not just clicks.
        </p>

        <!-- What's coming -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:16px;margin-bottom:48px;" class="animate__animated animate__fadeInUp">
            <?php
            $coming = [
                ['icon'=>'globe',     'label'=>'Google Search Ads'],
                ['icon'=>'target',    'label'=>'Meta / Facebook Ads'],
                ['icon'=>'bar-chart', 'label'=>'Instagram Advertising'],
                ['icon'=>'trending-up','label'=>'YouTube Campaigns'],
            ];
            foreach ( $coming as $item ) : ?>
                <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:14px;padding:20px 16px;text-align:center;color:rgba(255,255,255,0.7);">
                    <div style="color:var(--color-primary);margin-bottom:10px;display:flex;justify-content:center;">
                        <?php sd_icon( $item['icon'] ); ?>
                    </div>
                    <p style="font-family:var(--font-heading);font-weight:600;font-size:0.875rem;margin:0;color:rgba(255,255,255,0.8);"><?php echo esc_html( $item['label'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Email capture form -->
        <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.1);border-radius:20px;padding:40px;" class="animate__animated animate__fadeInUp">
            <h2 style="color:#fff;font-size:1.3rem;margin-bottom:8px;">Be the First to Know When We Launch</h2>
            <p style="color:rgba(255,255,255,0.6);font-size:0.9rem;margin-bottom:28px;">Register your interest now and get early access pricing — exclusively for subscribers on our waiting list.</p>
            <form
                method="post"
                action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
                style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;"
                novalidate
            >
                <?php wp_nonce_field( 'sd_ppc_interest', 'sd_ppc_nonce' ); ?>
                <input type="hidden" name="action" value="sd_ppc_interest">
                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email address"
                    required
                    style="flex:1;min-width:240px;padding:14px 18px;border:2px solid rgba(161,3,112,0.3);border-radius:100px;background:rgba(255,255,255,0.05);color:#fff;font-family:var(--font-body);font-size:0.95rem;outline:none;transition:border-color 0.3s;"
                    onfocus="this.style.borderColor='#A10370'"
                    onblur="this.style.borderColor='rgba(161,3,112,0.3)'"
                    aria-label="Email address for PPC waiting list"
                >
                <button type="submit" class="btn-primary" style="white-space:nowrap;">
                    Notify Me
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </button>
            </form>
            <p style="font-size:0.8rem;color:rgba(255,255,255,0.35);margin-top:16px;">We respect your privacy. No spam — just a single email when PPC services launch.</p>
        </div>

        <!-- Back to services -->
        <div style="margin-top:48px;display:flex;flex-wrap:wrap;gap:16px;justify-content:center;">
            <a href="<?php echo esc_url( home_url( '/web-design/' ) ); ?>" class="btn-secondary" style="border-color:rgba(255,255,255,0.2);color:rgba(255,255,255,0.7);" onmouseover="this.style.borderColor='#A10370';this.style.color='#A10370'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)';this.style.color='rgba(255,255,255,0.7)'">
                Web Design →
            </a>
            <a href="<?php echo esc_url( home_url( '/seo-services/' ) ); ?>" class="btn-secondary" style="border-color:rgba(255,255,255,0.2);color:rgba(255,255,255,0.7);" onmouseover="this.style.borderColor='#A10370';this.style.color='#A10370'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)';this.style.color='rgba(255,255,255,0.7)'">
                SEO Services →
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary">
                Talk to Us →
            </a>
        </div>

    </div>
</section>

</main>
<?php get_footer(); ?>
