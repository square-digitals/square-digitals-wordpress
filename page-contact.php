<?php
/**
 * Square Digitals — page-contact.php
 * Contact page template.
 * Template Name: Contact
 */
get_header();
?>

<main id="main-content" role="main">

<!-- HERO -->
<section style="background:#000;padding:160px 0 100px;position:relative;overflow:hidden;" aria-label="Contact hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 50% 60% at 65% 40%,rgba(161,3,112,0.22) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div style="max-width:640px;" class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Let's Talk</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:20px;">
                Ready to Grow Your<br><span style="color:var(--color-primary);">Nigerian Business Online?</span>
            </h1>
            <p style="color:rgba(255,255,255,0.7);font-size:1.1rem;line-height:1.75;">
                Tell us about your business and your goals. We respond within 24 hours, usually faster. No hard sell, no obligation. Just a straight conversation about how we can help.
            </p>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="#ffffff"><path d="M0,80 C360,0 1080,80 1440,20 L1440,80 Z"/></svg>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="section-padding" aria-labelledby="contact-form-heading">
    <div class="container-sd">
        <div style="display:grid;grid-template-columns:1.4fr 1fr;gap:64px;align-items:start;" class="responsive-2col">

            <!-- Form -->
            <div data-aos="fade-right">
                <div class="section-label" style="margin-bottom:20px;">Send Us a Message</div>
                <h2 class="section-title" id="contact-form-heading" style="text-align:left;margin-bottom:8px;">
                    Start the Conversation
                </h2>
                <p style="margin-bottom:36px;">Fill in the form below and one of our digital marketing specialists will be in touch to discuss your project, goals, and how Square Digitals can help.</p>

                <!-- Success/error message container -->
                <div id="form-response" style="display:none;padding:16px 20px;border-radius:12px;margin-bottom:24px;font-family:var(--font-heading);font-weight:600;font-size:0.9rem;" role="alert"></div>

                <form id="contact-form" novalidate>
                    <?php
                    $nonce = wp_create_nonce( 'sd_contact_form' );
                    ?>
                    <input type="hidden" name="sd_nonce" value="<?php echo esc_attr( $nonce ); ?>">

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-name">Full Name <span style="color:var(--color-primary);">*</span></label>
                            <input type="text" id="contact-name" name="name" class="sd-input" placeholder="e.g. Chukwuemeka Obi" required autocomplete="name">
                        </div>
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-email">Email Address <span style="color:var(--color-primary);">*</span></label>
                            <input type="email" id="contact-email" name="email" class="sd-input" placeholder="your@company.com" required autocomplete="email">
                        </div>
                    </div>

                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-phone">Phone Number</label>
                            <input type="tel" id="contact-phone" name="phone" class="sd-input" placeholder="+234 800 000 0000" autocomplete="tel">
                        </div>
                        <div class="sd-form-group">
                            <label class="sd-label" for="contact-service">Service You're Interested In</label>
                            <select id="contact-service" name="service" class="sd-select">
                                <option value="">Select a service…</option>
                                <option value="Web Design & Development">Web Design &amp; Development</option>
                                <option value="Web Maintenance">Web Maintenance</option>
                                <option value="SEO Services">SEO Services</option>
                                <option value="PPC Advertising">PPC Advertising (Coming Soon)</option>
                                <option value="Multiple Services">Multiple Services</option>
                                <option value="Not Sure Yet">Not Sure Yet: Need Advice</option>
                            </select>
                        </div>
                    </div>

                    <div class="sd-form-group">
                        <label class="sd-label" for="contact-message">Tell Us About Your Project <span style="color:var(--color-primary);">*</span></label>
                        <textarea id="contact-message" name="message" class="sd-textarea" placeholder="Tell us about your business, what you're trying to achieve, and any specific challenges you're facing online…" required></textarea>
                    </div>

                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:28px;">
                        <input type="checkbox" id="privacy-agree" name="privacy_agree" required style="width:18px;height:18px;accent-color:var(--color-primary);flex-shrink:0;">
                        <label for="privacy-agree" style="font-size:0.85rem;color:var(--color-text-muted);font-family:var(--font-body);">
                            I agree to Square Digitals' <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" style="color:var(--color-primary);">Privacy Policy</a> and consent to being contacted about my enquiry.
                        </label>
                    </div>

                    <button type="submit" class="btn-primary" style="font-size:1rem;padding:16px 36px;" id="submit-btn">
                        Send Message
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </form>

                <script>
                document.getElementById('contact-form').addEventListener('submit', function(e) {
                    e.preventDefault();
                    var btn = document.getElementById('submit-btn');
                    var resp = document.getElementById('form-response');
                    btn.disabled = true;
                    btn.textContent = 'Sending…';

                    var formData = new FormData(this);
                    formData.append('action', 'sd_contact');

                    fetch('<?php echo esc_url( admin_url('admin-ajax.php') ); ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(function(r){ return r.json(); })
                    .then(function(data) {
                        resp.style.display = 'block';
                        if (data.success) {
                            resp.style.background = 'rgba(161,3,112,0.08)';
                            resp.style.border = '1px solid rgba(161,3,112,0.3)';
                            resp.style.color = 'var(--color-primary)';
                            resp.textContent = data.data.message;
                            document.getElementById('contact-form').reset();
                        } else {
                            resp.style.background = 'rgba(239,68,68,0.08)';
                            resp.style.border = '1px solid rgba(239,68,68,0.3)';
                            resp.style.color = '#dc2626';
                            resp.textContent = data.data.message;
                        }
                        btn.disabled = false;
                        btn.innerHTML = 'Send Message <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>';
                    })
                    .catch(function() {
                        resp.style.display = 'block';
                        resp.style.background = 'rgba(239,68,68,0.08)';
                        resp.style.border = '1px solid rgba(239,68,68,0.3)';
                        resp.style.color = '#dc2626';
                        resp.textContent = 'Something went wrong. Please email us directly at info@squaredigitals.com.ng';
                        btn.disabled = false;
                    });
                });
                </script>
            </div>

            <!-- Contact info -->
            <div data-aos="fade-left" data-aos-delay="100">

                <!-- Response promise -->
                <div style="background:var(--color-primary);border-radius:16px;padding:28px;margin-bottom:28px;color:#fff;">
                    <div style="display:flex;align-items:center;gap:14px;margin-bottom:12px;">
                        <div style="width:44px;height:44px;background:rgba(255,255,255,0.15);border-radius:12px;display:flex;align-items:center;justify-content:center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <strong style="font-family:var(--font-heading);font-size:1rem;">We Respond Fast</strong>
                    </div>
                    <p style="font-size:0.9rem;color:rgba(255,255,255,0.85);margin:0;">We respond within 24 hours, usually within a few hours during business days. No automated replies. A real human reads every enquiry.</p>
                </div>

                <!-- Contact details -->
                <div style="background:#fff;border-radius:16px;padding:28px;box-shadow:var(--shadow-card);margin-bottom:28px;">
                    <h3 style="font-size:1rem;margin-bottom:20px;">Contact Details</h3>

                    <div style="display:flex;gap:14px;align-items:flex-start;margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid rgba(161,3,112,0.08);">
                        <div style="width:40px;height:40px;background:var(--color-primary-light);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--color-primary);flex-shrink:0;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <p style="font-size:0.75rem;font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--color-text-muted);margin-bottom:4px;">Email</p>
                            <a href="mailto:info@squaredigitals.com.ng" style="font-weight:600;color:var(--color-text);font-size:0.95rem;">info@squaredigitals.com.ng</a>
                        </div>
                    </div>

                    <div style="display:flex;gap:14px;align-items:flex-start;margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid rgba(161,3,112,0.08);">
                        <div style="width:40px;height:40px;background:var(--color-primary-light);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--color-primary);flex-shrink:0;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <p style="font-size:0.75rem;font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--color-text-muted);margin-bottom:4px;">Location</p>
                            <p style="font-weight:600;color:var(--color-text);font-size:0.95rem;margin:0;">Lagos, Nigeria<br><span style="font-weight:400;font-size:0.85rem;color:var(--color-text-muted);">Serving clients nationwide</span></p>
                        </div>
                    </div>

                    <div style="display:flex;gap:14px;align-items:flex-start;">
                        <div style="width:40px;height:40px;background:var(--color-primary-light);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--color-primary);flex-shrink:0;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <p style="font-size:0.75rem;font-family:var(--font-heading);font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--color-text-muted);margin-bottom:4px;">Business Hours</p>
                            <p style="font-weight:600;color:var(--color-text);font-size:0.95rem;margin:0;">Mon–Fri: 9:00am – 6:00pm WAT<br><span style="font-weight:400;font-size:0.85rem;color:var(--color-text-muted);">Urgent enquiries handled outside hours</span></p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps placeholder -->
                <div style="background:#f3f4f6;border-radius:16px;height:200px;display:flex;align-items:center;justify-content:center;overflow:hidden;position:relative;" aria-label="Office location map placeholder">
                    <div style="text-align:center;color:var(--color-text-muted);">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" style="margin-bottom:10px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <p style="font-size:0.85rem;font-family:var(--font-heading);font-weight:600;">Lagos, Nigeria</p>
                        <p style="font-size:0.75rem;">Map integration available on live site</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

</main>
<style>.responsive-2col{display:grid;grid-template-columns:1.4fr 1fr;gap:64px;align-items:start;}@media(max-width:900px){.responsive-2col{grid-template-columns:1fr!important;gap:40px!important;}}</style>
<?php get_footer(); ?>
