<?php
/**
 * Square Digitals — page-terms.php
 * Terms of Use page template.
 * Template Name: Terms of Use
 */
get_header();
?>

<main id="main-content" role="main">

<section style="background:#000;padding:140px 0 80px;position:relative;" aria-label="Terms of Use hero">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 40% 50% at 70% 40%,rgba(161,3,112,0.15) 0%,transparent 65%);pointer-events:none;" aria-hidden="true"></div>
    <div class="container-sd" style="position:relative;z-index:1;">
        <div class="animate__animated animate__fadeInUp">
            <div class="section-label" style="background:rgba(161,3,112,0.2);color:#e879c8;">Legal</div>
            <h1 style="color:#fff;margin-top:16px;margin-bottom:16px;">Terms of Use</h1>
            <p style="color:rgba(255,255,255,0.6);font-size:0.95rem;">Last updated: <?php echo esc_html( date('F j, Y') ); ?></p>
        </div>
    </div>
    <div class="wave-divider" aria-hidden="true" style="position:absolute;bottom:0;left:0;right:0;">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="#ffffff"><path d="M0,60 C480,0 960,60 1440,20 L1440,60 Z"/></svg>
    </div>
</section>

<section class="section-padding" aria-labelledby="terms-content">
    <div class="container-sd" style="max-width:800px;margin:0 auto;">
        <div data-aos="fade-up" style="line-height:1.85;">

            <div style="background:var(--color-primary-light);border-radius:14px;padding:20px 24px;margin-bottom:40px;border-left:4px solid var(--color-primary);">
                <p style="font-size:0.9rem;font-family:var(--font-heading);font-weight:600;color:var(--color-primary);margin:0;">
                    Please read these Terms of Use carefully before using the Square Digitals website or engaging our services. By accessing our website or entering a service agreement with us, you agree to be bound by these terms. These terms are governed by the laws of the Federal Republic of Nigeria.
                </p>
            </div>

            <?php
            $terms = [
                [
                    'title' => '1. Acceptance of Terms',
                    'content' => "By accessing squaredigitals.com.ng (the 'Website') or using any services provided by Square Digitals ('we', 'us', 'our'), you confirm that you have read, understood, and agree to be bound by these Terms of Use and our Privacy Policy.\n\nIf you are entering into these terms on behalf of a business or organisation, you confirm that you have the authority to bind that entity to these terms.\n\nIf you do not agree to these terms, you must not use our website or services.",
                ],
                [
                    'title' => '2. Services',
                    'content' => "Square Digitals provides digital marketing services including, but not limited to, web design, web development, website maintenance, search engine optimisation (SEO), and paid advertising management.\n\nAll service agreements are subject to a separate written proposal or service agreement that sets out the specific scope, deliverables, timeline, and fees. In the event of any conflict between these Terms of Use and a specific service agreement, the service agreement shall take precedence.\n\nWe reserve the right to refuse service to any individual or entity at our sole discretion.",
                ],
                [
                    'title' => '3. Payment Terms',
                    'content' => "3.1 Fees and Invoicing:\nAll fees for services are set out in the relevant service proposal or agreement. Invoices are issued in Nigerian Naira (NGN) unless otherwise agreed in writing.\n\n3.2 Payment Schedule:\nProject-based services typically require a 50% deposit before work commences, with the balance due upon project completion or as specified in the service agreement. Retainer services (such as SEO and maintenance) are invoiced monthly in advance.\n\n3.3 Late Payment:\nPayments not received within 14 days of the invoice due date may incur a late payment fee of 5% of the outstanding amount per month. We reserve the right to pause service delivery until outstanding invoices are settled.\n\n3.4 Refunds:\nDeposits are non-refundable once work has commenced. If a project is cancelled by the client after work has begun, fees for work completed to date remain payable. We will provide a statement of work completed upon request.\n\n3.5 Disputed Invoices:\nAny disputed invoices must be raised in writing within 7 days of receipt. Undisputed portions of invoices remain due for payment.",
                ],
                [
                    'title' => '4. Intellectual Property',
                    'content' => "4.1 Client Ownership:\nUpon full payment of all fees, the client will own all custom work product specifically created for them under the service agreement — including website designs, custom code, and written content created exclusively for the client's project.\n\n4.2 Square Digitals IP:\nWe retain ownership of all pre-existing intellectual property, proprietary tools, frameworks, code libraries, methodologies, and know-how that we bring to or develop independently of client projects. Any such materials incorporated into client deliverables are licensed to the client on a non-exclusive, perpetual basis.\n\n4.3 Third-Party IP:\nSome deliverables may incorporate third-party software, fonts, stock images, or plugins subject to their own licensing terms. The client is responsible for ensuring continued compliance with such third-party licences after project delivery.\n\n4.4 Portfolio Rights:\nUnless the client requests otherwise in writing, Square Digitals reserves the right to display completed work in our portfolio, case studies, and marketing materials.",
                ],
                [
                    'title' => '5. Client Responsibilities',
                    'content' => "The client agrees to:\n\n• Provide accurate, complete, and timely information, materials, and feedback required for project delivery\n• Ensure that all content, images, and materials provided to us do not infringe any third-party intellectual property rights, and indemnify Square Digitals against any claims arising from such content\n• Designate a primary point of contact with authority to approve deliverables and make decisions\n• Review and provide feedback on deliverables within agreed timeframes — delays caused by the client may extend project timelines accordingly\n• Ensure timely payment of all invoices in accordance with agreed payment terms",
                ],
                [
                    'title' => '6. Confidentiality',
                    'content' => "Both parties agree to maintain the confidentiality of non-public information shared during the course of the engagement. This obligation does not apply to information that:\n\n• Is or becomes publicly available through no fault of the receiving party\n• Was already known to the receiving party prior to disclosure\n• Is required to be disclosed by law or regulatory authority\n\nThis confidentiality obligation survives the termination of the service agreement.",
                ],
                [
                    'title' => '7. Limitation of Liability',
                    'content' => "7.1 To the maximum extent permitted by Nigerian law, Square Digitals' total liability to you for any claim arising out of or in connection with our services shall not exceed the total fees paid by you to us in the 3 months preceding the claim.\n\n7.2 We shall not be liable for any indirect, consequential, special, or incidental losses, including but not limited to: loss of profits, loss of business, loss of revenue, loss of data, damage to reputation, or loss of anticipated savings — even if we have been advised of the possibility of such losses.\n\n7.3 We do not guarantee specific outcomes such as search engine rankings, website traffic volumes, conversion rates, or revenue increases. Digital marketing results depend on numerous factors outside our control, including Google algorithm changes, market conditions, and client-side actions.",
                ],
                [
                    'title' => '8. Warranties and Disclaimers',
                    'content' => "8.1 We warrant that our services will be delivered with reasonable skill, care, and professionalism, and in accordance with the agreed service specifications.\n\n8.2 Our website and content are provided 'as is' without warranty of any kind. We do not warrant that the website will be uninterrupted, error-free, or free from viruses or harmful components.\n\n8.3 We do not warrant the accuracy, completeness, or fitness for purpose of any third-party tools, plugins, or platforms incorporated into our services.",
                ],
                [
                    'title' => '9. Termination',
                    'content' => "9.1 Either party may terminate a retainer or ongoing service agreement by providing 30 days' written notice to the other party.\n\n9.2 We may terminate a service agreement immediately upon written notice if:\n• The client fails to make payment within 30 days of a due date\n• The client breaches these terms and fails to remedy the breach within 14 days of written notice\n• The client engages in conduct that is unlawful, abusive, or harmful to our team or reputation\n\n9.3 Upon termination, the client shall pay for all services rendered up to the termination date. We will provide all completed deliverables and transfer any client-owned assets upon receipt of final payment.",
                ],
                [
                    'title' => '10. Dispute Resolution',
                    'content' => "10.1 In the event of any dispute arising from or in connection with these terms or our services, the parties agree to first attempt resolution through good-faith negotiation within 30 days of written notice of the dispute.\n\n10.2 If negotiation fails, the parties agree to submit the dispute to mediation under the auspices of the Lagos Multi-Door Courthouse (LMDC) or such other mediation body as the parties may agree.\n\n10.3 If mediation fails to resolve the dispute within 60 days, either party may pursue legal proceedings in the courts of the Federal Republic of Nigeria. The parties submit to the exclusive jurisdiction of the Nigerian courts.\n\n10.4 These terms are governed by and construed in accordance with the laws of the Federal Republic of Nigeria.",
                ],
                [
                    'title' => '11. Website Use',
                    'content' => "You agree not to use our website in any way that:\n\n• Violates any applicable Nigerian or international law or regulation\n• Is unlawful, harmful, defamatory, obscene, or otherwise objectionable\n• Infringes any intellectual property rights\n• Involves transmitting unsolicited commercial communications\n• Involves any attempt to gain unauthorised access to our systems or those of our clients\n\nWe reserve the right to restrict or terminate your access to the website at any time for violation of these terms.",
                ],
                [
                    'title' => '12. Changes to These Terms',
                    'content' => "We may update these Terms of Use from time to time. When we make material changes, we will update the 'Last updated' date at the top of this page. Continued use of our website or services after changes are posted constitutes your acceptance of the revised terms.\n\nFor ongoing service agreements, material changes to these terms will be communicated in writing with at least 30 days' notice.",
                ],
                [
                    'title' => '13. Contact Information',
                    'content' => "For questions, concerns, or notices under these Terms of Use:\n\nSquare Digitals\nEmail: info@squaredigitals.com.ng\nAddress: Lagos, Nigeria\n\nAll legal notices must be in writing and sent to the above email address. Notices are deemed received on the next business day following the date of email transmission.",
                ],
            ];

            foreach ( $terms as $term ) :
                $paragraphs = explode( "\n\n", $term['content'] );
            ?>
                <div style="margin-bottom:40px;" id="terms-content">
                    <h2 style="font-size:1.2rem;color:var(--color-text);margin-bottom:16px;padding-bottom:10px;border-bottom:2px solid rgba(161,3,112,0.15);">
                        <?php echo esc_html( $term['title'] ); ?>
                    </h2>
                    <?php foreach ( $paragraphs as $para ) : ?>
                        <p style="margin-bottom:14px;white-space:pre-line;"><?php echo esc_html( trim( $para ) ); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

        </div>

        <div style="margin-top:48px;padding:28px;background:var(--color-primary-light);border-radius:16px;text-align:center;">
            <p style="font-family:var(--font-heading);font-weight:600;color:var(--color-primary);margin-bottom:12px;">Questions about these terms?</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-primary">Contact Us →</a>
        </div>
    </div>
</section>

</main>
<?php get_footer(); ?>
