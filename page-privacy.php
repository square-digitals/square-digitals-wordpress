<?php
/**
 * Square Digitals — page-privacy.php
 * Privacy Policy — GDPR + NDPR compliant.
 * Template Name: Privacy Policy
 */
get_header();
?>

<main id="main-content" role="main">

<section style="background:#000;padding:140px 0 80px;position:relative;" aria-label="Privacy Policy hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 40% 50% at 70% 40%,rgba(161,3,112,0.15) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Legal</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:16px;">Privacy Policy</h1>
            <p style="color:rgba(255,255,255,0.6);font-size:0.95rem;">Last updated: <?php echo esc_html( date('F j, Y') ); ?></p>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="#ffffff"><path d="M0,60 C480,0 960,60 1440,20 L1440,60 Z"/></svg>
    </div>
</section>

<section class="section-padding" aria-labelledby="privacy-content">
    <div class="container-sd" style="max-width:800px;margin:0 auto;">
        <div data-aos="fade-up" style="line-height:1.85;">

            <div style="background:var(--color-primary-light);border-radius:14px;padding:20px 24px;margin-bottom:40px;border-left:4px solid var(--color-primary);">
                <p style="font-size:0.9rem;font-family:var(--font-heading);font-weight:600;color:var(--color-primary);margin:0;">
                    This Privacy Policy applies to Square Digitals (squaredigitals.com.ng). We are committed to protecting your personal data in accordance with the Nigeria Data Protection Regulation (NDPR) 2019, the Nigeria Data Protection Act (NDPA) 2023, and the General Data Protection Regulation (GDPR) where applicable.
                </p>
            </div>

            <?php
            $sections = [
                [
                    'title' => '1. Who We Are',
                    'content' => "Square Digitals is a digital marketing agency based in Lagos, Nigeria. We provide web design, web development, SEO, and digital marketing services to businesses across Nigeria and internationally.\n\nData Controller: Square Digitals\nEmail: info@squaredigitals.com.ng\nAddress: Lagos, Nigeria\n\nFor all data protection enquiries, please contact us at info@squaredigitals.com.ng.",
                ],
                [
                    'title' => '2. Data We Collect',
                    'content' => "We collect personal data in the following circumstances:\n\n2.1 Information you provide directly:\n• Full name and contact details (email address, phone number) when you submit a contact or enquiry form\n• Business name and details when you engage our services\n• Payment information processed through secure third-party payment providers\n• Communications you send us via email or our website\n\n2.2 Information collected automatically:\n• IP address and browser type\n• Pages visited on our website, time spent, and referral sources\n• Cookie data (see Section 6)\n• Device and operating system information\n\n2.3 Information from third parties:\n• Business contact information sourced from publicly available platforms for marketing purposes (processed in compliance with NDPR/GDPR legitimate interests provisions)",
                ],
                [
                    'title' => '3. How We Use Your Data',
                    'content' => "We use your personal data for the following purposes:\n\n• To respond to your enquiries and provide the services you have requested\n• To send you service proposals, quotes, and project communications\n• To process payments for services rendered\n• To send you marketing communications where you have given consent or where we have a legitimate interest to do so\n• To improve our website, services, and user experience through analytics\n• To comply with legal obligations under Nigerian law and applicable international regulations\n• To detect and prevent fraud or abuse of our services\n\nLegal Basis for Processing (NDPR/GDPR):\n• Contract performance — when processing is necessary to fulfil a service agreement\n• Legitimate interests — for business communications and website analytics\n• Consent — for marketing communications (you can withdraw at any time)\n• Legal obligation — where required by Nigerian law or regulation",
                ],
                [
                    'title' => '4. How We Share Your Data',
                    'content' => "Square Digitals does not sell your personal data. We may share your data in the following circumstances:\n\n• Service providers: We share data with trusted third-party service providers who assist us in delivering our services (e.g., web hosting providers, email platforms, analytics tools). These providers are contractually obligated to protect your data.\n• Payment processors: Payment information is processed by PCI-DSS compliant third-party payment processors. We do not store card details.\n• Legal compliance: We may disclose your data where required by Nigerian law, court order, or regulatory authority.\n• Business transfers: In the event of a merger or acquisition, your data may be transferred to a successor entity, and you will be notified.\n\nWe require all third parties to handle your data securely and in accordance with applicable data protection laws.",
                ],
                [
                    'title' => '5. Data Retention',
                    'content' => "We retain your personal data only for as long as necessary to fulfil the purposes outlined in this policy:\n\n• Enquiry and contact data: 24 months from last contact\n• Client project data: 5 years from project completion (for legal and financial compliance)\n• Marketing consent records: Until withdrawal of consent plus 12 months\n• Website analytics data: 26 months (Google Analytics standard)\n\nWhen data is no longer required, we securely delete or anonymise it.",
                ],
                [
                    'title' => '6. Cookies',
                    'content' => "Our website uses cookies to improve your experience and analyse site usage. Types of cookies we use:\n\n• Essential cookies: Required for the website to function (session management, security). Cannot be disabled.\n• Analytics cookies: We use Google Analytics to understand how visitors use our site. This data is aggregated and anonymised.\n• Marketing cookies: Used to deliver relevant content and track campaign effectiveness. Only set with your consent.\n\nYou can control cookies through your browser settings. Disabling non-essential cookies will not affect your ability to use our website. By continuing to use our website, you consent to our use of cookies as described above.",
                ],
                [
                    'title' => '7. Your Rights',
                    'content' => "Under the NDPR 2019, NDPA 2023, and GDPR (where applicable), you have the following rights regarding your personal data:\n\n• Right to access: Request a copy of the personal data we hold about you\n• Right to rectification: Request correction of inaccurate or incomplete data\n• Right to erasure: Request deletion of your personal data (the 'right to be forgotten')\n• Right to restrict processing: Request that we limit how we use your data\n• Right to data portability: Receive your data in a portable format\n• Right to object: Object to processing based on legitimate interests or for direct marketing\n• Right to withdraw consent: Withdraw marketing consent at any time without penalty\n\nTo exercise any of these rights, please contact us at info@squaredigitals.com.ng. We will respond within 30 days.\n\nIf you are unsatisfied with our response, you have the right to lodge a complaint with the Nigeria Data Protection Commission (NDPC) at ndpc.gov.ng.",
                ],
                [
                    'title' => '8. Data Security',
                    'content' => "We implement appropriate technical and organisational security measures to protect your personal data against unauthorised access, loss, destruction, or alteration. These include:\n\n• SSL/TLS encryption for all data transmitted through our website\n• Secure, access-controlled hosting infrastructure\n• Regular security audits and vulnerability assessments\n• Staff training on data protection best practices\n• Incident response procedures in case of a data breach\n\nIn the event of a data breach that poses a risk to your rights and freedoms, we will notify you and the relevant regulatory authority within the legally required timeframe.",
                ],
                [
                    'title' => '9. International Data Transfers',
                    'content' => "Some of our service providers (such as Google Analytics, email platforms, and cloud hosting services) may process data outside of Nigeria. Where data is transferred internationally, we ensure appropriate safeguards are in place, including standard contractual clauses and adequacy decisions where applicable.\n\nWe will not transfer your data to countries that do not provide an adequate level of data protection without your explicit consent.",
                ],
                [
                    'title' => '10. Children\'s Privacy',
                    'content' => "Our services are not directed at individuals under the age of 18. We do not knowingly collect personal data from children. If you believe we have collected data from a child, please contact us immediately at info@squaredigitals.com.ng and we will take steps to delete it.",
                ],
                [
                    'title' => '11. Third-Party Links',
                    'content' => "Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those sites. We encourage you to read the privacy policy of any third-party site you visit.",
                ],
                [
                    'title' => '12. Changes to This Policy',
                    'content' => "We may update this Privacy Policy from time to time to reflect changes in our practices, technology, or legal requirements. When we make material changes, we will update the 'Last updated' date at the top of this page and, where appropriate, notify you by email.\n\nWe encourage you to review this policy periodically.",
                ],
                [
                    'title' => '13. Contact Us',
                    'content' => "For any questions, concerns, or requests regarding this Privacy Policy or our data handling practices:\n\nSquare Digitals\nEmail: info@squaredigitals.com.ng\nAddress: Lagos, Nigeria\n\nWe take all data protection enquiries seriously and will respond within 30 days.",
                ],
            ];

            foreach ( $sections as $section ) :
                $paragraphs = explode( "\n\n", $section['content'] );
            ?>
                <div style="margin-bottom:40px;" id="privacy-content">
                    <h2 style="font-size:1.2rem;color:var(--color-text);margin-bottom:16px;padding-bottom:10px;border-bottom:2px solid rgba(161,3,112,0.15);">
                        <?php echo esc_html( $section['title'] ); ?>
                    </h2>
                    <?php foreach ( $paragraphs as $para ) : ?>
                        <p style="margin-bottom:14px;white-space:pre-line;"><?php echo esc_html( trim( $para ) ); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

        </div>

        <div style="margin-top:48px;padding:28px;background:var(--color-primary-light);border-radius:16px;text-align:center;">
            <p style="font-family:var(--font-heading);font-weight:600;color:var(--color-primary);margin-bottom:12px;">Questions about this policy?</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary">Contact Us →</a>
        </div>
    </div>
</section>

</main>
<?php get_footer(); ?>
