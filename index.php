<?php
/**
 * Square Digitals — index.php
 * Fallback template. WordPress requires this file.
 */
get_header();
?>

<main id="main-content" role="main" style="padding-top:80px;">
    <div class="container-sd section-padding">
        <?php if ( have_posts() ) : ?>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:32px;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'sd-card' ); ?> style="padding:32px;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" style="display:block;margin-bottom:20px;border-radius:12px;overflow:hidden;">
                                <?php the_post_thumbnail( 'sd-card', [ 'style' => 'width:100%;height:220px;object-fit:cover;' ] ); ?>
                            </a>
                        <?php endif; ?>
                        <h2 style="font-size:1.25rem;margin-bottom:12px;">
                            <a href="<?php the_permalink(); ?>" style="color:var(--color-text);text-decoration:none;"><?php the_title(); ?></a>
                        </h2>
                        <p style="font-size:0.9rem;color:var(--color-text-muted);margin-bottom:20px;"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-secondary" style="padding:10px 20px;font-size:0.875rem;">Read More</a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="margin-top:48px;text-align:center;">
                <?php the_posts_pagination( [
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ] ); ?>
            </div>

        <?php else : ?>
            <div style="text-align:center;padding:80px 0;">
                <h2 class="section-title">Nothing here yet.</h2>
                <p class="section-subtitle" style="margin:16px auto 32px;">Check back soon — we're publishing great content for Nigerian businesses.</p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">← Back to Home</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
