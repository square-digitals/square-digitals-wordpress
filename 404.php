<?php
/**
 * Square Digitals — 404.php
 * 404 Not Found template.
 */
get_header();
?>

<main id="main-content" role="main">

<section style="min-height:100vh;background:#000;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:120px 0;" aria-label="404 Page Not Found">

    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 50% 60% at 50% 40%,rgba(161,3,112,0.18) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(161,3,112,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(161,3,112,0.04) 1px,transparent 1px);background-size:64px 64px;pointer-events:none;" aria-hidden="true"></div>

    <div class="container-sd" style="position:relative;z-index:1;text-align:center;">

        <div style="font-family:var(--font-heading);font-size:clamp(6rem,20vw,14rem);font-weight:800;color:transparent;-webkit-text-stroke:2px rgba(161,3,112,0.4);line-height:1;margin-bottom:8px;" aria-hidden="true">404</div>

        <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;margin-bottom:24px;">Page Not Found</div>

        <h1 style="color:#fff;margin-bottom:20px;font-size:clamp(1.8rem,4vw,2.8rem);">
            This Page Seems to Have<br><span style="color:var(--color-primary);">Gone Offline</span>
        </h1>

        <p style="color:rgba(255,255,255,0.65);font-size:1.05rem;max-width:480px;margin:0 auto 40px;line-height:1.75;">
            The page you're looking for doesn't exist, has been moved, or the URL might be wrong. Let's get you back on track.
        </p>

        <div style="display:flex;flex-wrap:wrap;gap:16px;justify-content:center;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary" style="font-size:1rem;padding:14px 32px;">
                ← Back to Home
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-secondary" style="border-color:rgba(255,255,255,0.2);color:rgba(255,255,255,0.75);" onmouseover="this.style.borderColor='#A10370';this.style.color='#A10370'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)';this.style.color='rgba(255,255,255,0.75)'">
                Contact Us
            </a>
        </div>

        <!-- Quick links -->
        <div style="margin-top:64px;display:flex;flex-wrap:wrap;gap:12px;justify-content:center;">
            <?php
            $links = [
                ['label'=>'Web Design',     'url'=> home_url('/web-design/')],
                ['label'=>'Web Maintenance','url'=> home_url('/web-maintenance/')],
                ['label'=>'SEO Services',   'url'=> home_url('/seo-services/')],
                ['label'=>'About Us',       'url'=> home_url('/about/')],
            ];
            foreach ( $links as $link ) : ?>
                <a href="<?php echo esc_url( $link['url'] ); ?>" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);color:rgba(255,255,255,0.65);font-family:var(--font-heading);font-weight:600;font-size:0.875rem;padding:10px 20px;border-radius:100px;text-decoration:none;transition:all 0.3s;" onmouseover="this.style.background='rgba(161,3,112,0.2)';this.style.borderColor='rgba(161,3,112,0.4)';this.style.color='#e879c8'" onmouseout="this.style.background='rgba(255,255,255,0.05)';this.style.borderColor='rgba(255,255,255,0.1)';this.style.color='rgba(255,255,255,0.65)'">
                    <?php echo esc_html( $link['label'] ); ?>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

</main>
<?php get_footer(); ?>
