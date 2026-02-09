<?php
/**
 * Front page template – Spotlight homepage.
 *
 * @package Spotlight
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary" role="main">

    <!-- ============================================================
         HERO SECTION
         ============================================================ -->
    <section class="relative bg-brand-900 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 flex flex-col md:flex-row items-center gap-12">

            <!-- Text -->
            <div class="flex-1 text-center md:text-left">
                <!-- Decorative dots -->
                <div class="flex justify-center md:justify-start gap-2 mb-6">
                    <span class="w-3 h-3 rounded-full bg-accent"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="w-3 h-3 rounded-full bg-blue-400"></span>
                    <span class="w-3 h-3 rounded-full bg-red-400"></span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    <?php esc_html_e('Welcome to Spotlight', 'spotlight'); ?>
                </h1>

                <p class="text-white/70 text-lg md:text-xl max-w-xl leading-relaxed">
                    <?php esc_html_e('Spotlight is a customized staffing platform that lets you instantly find, evaluate, and interview pre-vetted talent — so you can build teams at the speed your business demands.', 'spotlight'); ?>
                </p>
            </div>

            <!-- Hero Image Placeholder -->
            <div class="flex-1 flex justify-center">
                <div class="relative w-64 md:w-80">
                    <!-- Replace this with your actual phone mockup image -->
                    <div class="bg-brand-800 rounded-3xl p-4 shadow-2xl border border-white/10">
                        <div class="bg-brand-700 rounded-2xl h-96 flex items-center justify-center">
                            <span class="text-white/30 text-sm text-center px-4"><?php esc_html_e('Phone mockup — replace with your app screenshot', 'spotlight'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Curved bottom edge -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0 60L1440 60L1440 0C1440 0 1080 60 720 60C360 60 0 0 0 0L0 60Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- ============================================================
         READY, SET, STAFF
         ============================================================ -->
    <section class="bg-white py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <span class="inline-block bg-brand-900 text-white text-xs font-semibold tracking-wider uppercase px-4 py-1.5 rounded-full mb-6">
                <?php esc_html_e('Candidate Hub', 'spotlight'); ?>
            </span>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-brand-900 mb-4">
                <?php esc_html_e('Ready, Set,', 'spotlight'); ?>
                <span class="text-accent font-display italic"><?php esc_html_e('Staff', 'spotlight'); ?></span>
            </h2>

            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-16 leading-relaxed">
                <?php esc_html_e('When a project gets approved, momentum matters. But for tech leaders, that urgency collides with slow, costly, unpredictable hiring cycles. Your Spotlight candidate hub changes that.', 'spotlight'); ?>
            </p>

            <!-- Three Feature Cards -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="group rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow bg-white">
                    <div class="h-52 bg-brand-800 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/feature-fast.jpg'); ?>"
                             alt="<?php esc_attr_e('Move fast with less risk', 'spotlight'); ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             onerror="this.style.display='none'">
                    </div>
                    <div class="p-6 text-left">
                        <h3 class="text-lg font-bold text-brand-900 mb-2">
                            <?php esc_html_e('Move Fast, with Less Risk', 'spotlight'); ?>
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php esc_html_e('Spotlight is built for fast decisions and immediate momentum. With pre-vetted talent, ready to hire, you can go from review to interview in hours, not weeks.', 'spotlight'); ?>
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow bg-white">
                    <div class="h-52 bg-brand-800 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/feature-inbox.jpg'); ?>"
                             alt="<?php esc_attr_e('Zero inbox chaos', 'spotlight'); ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             onerror="this.style.display='none'">
                    </div>
                    <div class="p-6 text-left">
                        <h3 class="text-lg font-bold text-brand-900 mb-2">
                            <?php esc_html_e('Zero Inbox Chaos', 'spotlight'); ?>
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php esc_html_e('Spotlight puts an end to hundreds of DMs and resumes, from job listings, with a short list of qualified candidates, vetted resumes, skill ratings and screening scores.', 'spotlight'); ?>
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow bg-white">
                    <div class="h-52 bg-brand-800 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/feature-confidence.jpg'); ?>"
                             alt="<?php esc_attr_e('Confidence in every candidate', 'spotlight'); ?>"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             onerror="this.style.display='none'">
                    </div>
                    <div class="p-6 text-left">
                        <h3 class="text-lg font-bold text-brand-900 mb-2">
                            <?php esc_html_e('Confidence in Every Candidate', 'spotlight'); ?>
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php esc_html_e('Spotlight combines resumes, recorded videos, and technical ratings. So you\'ll know who can execute upfront and can schedule interviews right away.', 'spotlight'); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         CANDIDATE PROFILES – DARK SECTION
         ============================================================ -->
    <section class="relative bg-brand-900 py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Mockup Area -->
            <div class="flex justify-center mb-16">
                <div class="relative w-full max-w-4xl">
                    <!-- Laptop frame placeholder -->
                    <div class="bg-brand-800 rounded-xl border border-white/10 shadow-2xl overflow-hidden">
                        <div class="bg-brand-700 h-8 flex items-center px-4 gap-2">
                            <span class="w-3 h-3 rounded-full bg-red-400"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                            <span class="w-3 h-3 rounded-full bg-green-400"></span>
                        </div>
                        <div class="aspect-video bg-brand-800 flex items-center justify-center p-8">
                            <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/dashboard-mockup.jpg'); ?>"
                                 alt="<?php esc_attr_e('Spotlight candidate dashboard', 'spotlight'); ?>"
                                 class="w-full h-full object-cover rounded"
                                 onerror="this.parentElement.innerHTML='<span class=\'text-white/20 text-sm\'>Dashboard screenshot placeholder</span>'">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    <?php esc_html_e('Candidate Profiles Contain', 'spotlight'); ?>
                </h2>
                <p class="text-white/60 text-lg max-w-2xl mx-auto">
                    <?php esc_html_e('Skills Summary, Resume, Introductory Video, Ratings and Notes, Availability', 'spotlight'); ?>
                </p>
            </div>

        </div>

        <!-- Four Feature Items (on white strip) -->
        <div class="bg-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Picture & Video -->
                    <div class="text-center">
                        <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Picture & Video', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('See how candidates communicate before you schedule an interview', 'spotlight'); ?></p>
                    </div>

                    <!-- Resume -->
                    <div class="text-center">
                        <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Resume', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('Easily scan resume, skill summary and certifications', 'spotlight'); ?></p>
                    </div>

                    <!-- Rate Candidates -->
                    <div class="text-center">
                        <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Rate Candidates', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('Higher scores mean fewer interviews and better conversations', 'spotlight'); ?></p>
                    </div>

                    <!-- Schedule Interview -->
                    <div class="text-center">
                        <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Schedule Interview', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('Direct access to talent. You control how fast you move', 'spotlight'); ?></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         TESTIMONIALS
         ============================================================ -->
    <section class="bg-white py-20 md:py-28">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

            <!-- Testimonial 1 — text left, image right -->
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1">
                    <blockquote class="text-2xl sm:text-3xl font-display italic text-brand-900 leading-snug">
                        <?php esc_html_e('Spotlight cut our hiring time from weeks to hours. We staffed an entire project faster than we\'d ever imagined', 'spotlight'); ?>
                    </blockquote>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-52 h-52 rounded-2xl bg-gray-200 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/testimonial-1.jpg'); ?>"
                             alt="<?php esc_attr_e('Testimonial', 'spotlight'); ?>"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 — image left, text right -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="flex-1">
                    <blockquote class="text-2xl sm:text-3xl font-display italic text-brand-900 leading-snug">
                        <?php esc_html_e('The quality of talent was shocking – in the best way. Every candidate felt like someone we\'d already worked with.', 'spotlight'); ?>
                    </blockquote>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-52 h-52 rounded-2xl bg-gray-200 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/testimonial-2.jpg'); ?>"
                             alt="<?php esc_attr_e('Testimonial', 'spotlight'); ?>"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 — text left, image right -->
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1">
                    <blockquote class="text-2xl sm:text-3xl font-display italic text-brand-900 leading-snug">
                        <?php esc_html_e('Spotlight let us start a major initiative immediately. No delays, no friction just instant momentum.', 'spotlight'); ?>
                    </blockquote>
                </div>
                <div class="flex-shrink-0">
                    <div class="w-52 h-52 rounded-2xl bg-gray-200 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/testimonial-3.jpg'); ?>"
                             alt="<?php esc_attr_e('Testimonial', 'spotlight'); ?>"
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================================
         CTA — GET STARTED
         ============================================================ -->
    <section class="bg-brand-900 py-20 md:py-28">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-2">
                <?php esc_html_e('Get started!', 'spotlight'); ?>
            </h2>

            <!-- Decorative dots -->
            <div class="flex justify-center gap-1.5 mb-6">
                <span class="w-2 h-2 rounded-full bg-accent"></span>
                <span class="w-2 h-2 rounded-full bg-yellow-400"></span>
                <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                <span class="w-2 h-2 rounded-full bg-red-400"></span>
            </div>

            <p class="text-white/60 text-lg mb-10 max-w-xl mx-auto">
                <?php esc_html_e('Start finding pre-vetted talent today and move at the speed your business demands', 'spotlight'); ?>
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-brand-900 font-semibold px-8 py-3 rounded-full transition-colors text-sm">
                    <?php esc_html_e('Contact us', 'spotlight'); ?>
                </a>
                <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-brand-900 font-semibold px-8 py-3 rounded-full transition-colors text-sm">
                    <?php esc_html_e('Talk to an Expert', 'spotlight'); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
