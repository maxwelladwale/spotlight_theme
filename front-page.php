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
    <section class="relative bg-brand-900 bg-left bg-no-repeat min-h-[80vh] flex items-baseline"
             style="background-image: url('<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/HeadlineImage.jpg'); ?>'); background-size: 114%;">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-brand-900/60"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-36 w-full">
            <div class="max-w-2xl">
                <!-- Decorative dots -->
                <div class="mb-6">
                    <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/Group.png'); ?>"
                         alt="" class="h-4 w-auto" aria-hidden="true">
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    <?php esc_html_e('Welcome to Spotlight', 'spotlight'); ?>
                </h1>

                <p class="text-white/80 text-lg md:text-xl leading-relaxed">
                    <?php esc_html_e('Spotlight is a customized staffing platform that lets you instantly find, evaluate, and interview pre-vetted talent — so you can build teams at the speed your business demands.', 'spotlight'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
         GRADIENT WRAPPER — Ready Set Staff + Candidate Profiles
         ============================================================ -->
    <div style="background: linear-gradient(to bottom, rgba(1,58,67,0.05) 33%, rgba(1,58,67,0.08) 100%), #fff;">

    <!-- ============================================================
         READY, SET, STAFF
         ============================================================ -->
    <section class="py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <span class="inline-block bg-brand-900 text-white text-xs font-semibold tracking-wider uppercase px-4 py-1.5 rounded-full mb-6">
                <?php esc_html_e('Candidate Hub', 'spotlight'); ?>
            </span>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-brand-900 mb-4">
                <?php esc_html_e('Ready, Set,', 'spotlight'); ?>
                <span class="text-[#F2970D] font-display"><?php esc_html_e('Staff', 'spotlight'); ?></span>
            </h2>

            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-16 leading-relaxed">
                <?php esc_html_e('When a project gets approved, momentum matters. But for tech leaders, that urgency collides with slow, costly, unpredictable hiring cycles. Your Spotlight candidate hub changes that.', 'spotlight'); ?>
            </p>

            <!-- Three Feature Cards -->
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="group rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow bg-white">
                    <div class="h-52 bg-brand-800 overflow-hidden">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/MoveFast_LessRisk.png'); ?>"
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
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/InBoxChaos.png'); ?>"
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
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/Confidence_Every_Candidate.png'); ?>"
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
    <section class="relative py-20 md:py-28">
        <div class="mx-auto px-4 sm:px-6 lg:px-8" style="max-width: 90%;">

            <!-- Mockup Area -->
            <div class="mb-16">
                <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/spotlight_app.jpg'); ?>"
                     alt="<?php esc_attr_e('Spotlight candidate dashboard', 'spotlight'); ?>"
                     class="w-full h-auto object-cover">
            </div>

            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-brand-900 mb-4">
                    <?php esc_html_e('Candidate Profiles Contain', 'spotlight'); ?>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    <?php esc_html_e('Skills Summary, Resume, Introductory Video, Ratings and Notes, Availability', 'spotlight'); ?>
                </p>
            </div>

        </div>

        <!-- Four Feature Items (on white strip) -->
        <div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Picture & Video -->
                    <div class="text-center">
                        <div class="mx-auto mb-4">
                            <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/camera.png'); ?>"
                                 alt="" class="w-14 h-14 mx-auto" aria-hidden="true">
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Picture & Video', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('See how candidates communicate before you schedule an interview', 'spotlight'); ?></p>
                    </div>

                    <!-- Resume -->
                    <div class="text-center">
                        <div class="mx-auto mb-4">
                            <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/resume.png'); ?>"
                                 alt="" class="w-14 h-14 mx-auto" aria-hidden="true">
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Resume', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('Easily scan resume, skill summary and certifications', 'spotlight'); ?></p>
                    </div>

                    <!-- Rate Candidates -->
                    <div class="text-center">
                        <div class="mx-auto mb-4">
                            <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/candidates.png'); ?>"
                                 alt="" class="w-14 h-14 mx-auto" aria-hidden="true">
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Rate Candidates', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('Higher scores mean fewer interviews and better conversations', 'spotlight'); ?></p>
                    </div>

                    <!-- Schedule Interview -->
                    <div class="text-center">
                        <div class="mx-auto mb-4">
                            <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/schedule.png'); ?>"
                                 alt="" class="w-14 h-14 mx-auto" aria-hidden="true">
                        </div>
                        <h4 class="font-bold text-brand-900 mb-1"><?php esc_html_e('Schedule Interview', 'spotlight'); ?></h4>
                        <p class="text-gray-500 text-sm"><?php esc_html_e('Direct access to talent. You control how fast you move', 'spotlight'); ?></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    </div><!-- end gradient wrapper -->

    <!-- ============================================================
         TESTIMONIALS
         ============================================================ -->

    <!-- Testimonial 1 — white bg, text left, image right, blue dots -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-10 md:gap-16">
                <div class="flex-1">
                    <blockquote class="text-xl sm:text-2xl lg:text-3xl font-medium text-brand-900 leading-snug">
                        <?php esc_html_e('Spotlight cut our hiring time from weeks to hours. We staffed an entire project faster than we\'d ever imagined', 'spotlight'); ?>
                    </blockquote>
                </div>
                <div class="flex-shrink-0 relative">
                    <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/dots_blue.png'); ?>"
                         alt="" class="absolute -top-5 -left-5 w-28 h-28 opacity-70" aria-hidden="true">
                    <div class="relative w-56 h-40 sm:w-72 sm:h-48 rounded-2xl overflow-hidden shadow-lg">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/Golf.png'); ?>"
                             alt="<?php esc_attr_e('Testimonial', 'spotlight'); ?>"
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial 2 — light blue-gray bg, image left, text right, red dots -->
    <section class="bg-[#f0f5fa] py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-16">
                <div class="flex-1">
                    <blockquote class="text-xl sm:text-2xl lg:text-3xl font-medium text-brand-900 leading-snug">
                        <?php esc_html_e('The quality of talent was shocking – in the best way. Every candidate felt like someone we\'d already worked with.', 'spotlight'); ?>
                    </blockquote>
                </div>
                <div class="flex-shrink-0 relative">
                    <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/dots_red.png'); ?>"
                         alt="" class="absolute -bottom-5 -right-5 w-28 h-28 opacity-70" aria-hidden="true">
                    <div class="relative w-56 h-40 sm:w-72 sm:h-48 rounded-2xl overflow-hidden shadow-lg">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/Guitar.jpg'); ?>"
                             alt="<?php esc_attr_e('Testimonial', 'spotlight'); ?>"
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial 3 — white bg, text left, image right, blue dots -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-10 md:gap-16">
                <div class="flex-1">
                    <blockquote class="text-xl sm:text-2xl lg:text-3xl font-medium text-brand-900 leading-snug">
                        <?php esc_html_e('Spotlight let us start a major initiative immediately. No delays, no friction just instant momentum.', 'spotlight'); ?>
                    </blockquote>
                </div>
                <div class="flex-shrink-0 relative">
                    <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/dots_blue.png'); ?>"
                         alt="" class="absolute -top-5 -left-5 w-28 h-28 opacity-70" aria-hidden="true">
                    <div class="relative w-56 h-40 sm:w-72 sm:h-48 rounded-2xl overflow-hidden shadow-lg">
                        <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/Hallway.png'); ?>"
                             alt="<?php esc_attr_e('Testimonial', 'spotlight'); ?>"
                             class="w-full h-full object-cover">
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
            <div class="flex justify-center mb-6">
                <img src="<?php echo esc_url(SPOTLIGHT_URI . '/assets/images/icons/Group.png'); ?>"
                     alt="" class="h-3 w-auto" aria-hidden="true">
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
