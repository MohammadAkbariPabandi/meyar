<?php
/**
 * Template Name: collaboration
 */
get_header(); ?>


<section class="collaboration">
    <div class="container">
        <div class="collaboration-bace-image">
            <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/collaboration.png" alt="">
        </div>
        <div class="collaboration-cards">
            <div class="row">
                <div class="col-6 collaboration-item-right" id="c-117">
                    <div class="line"></div>
                    <span class="Dana-Bold NumberSpan">01</span>
                    <div class="collaboration-card">
                        <h1 class="Dana-ExtraBold">همکاری آموزشی</h1>
                        <p class="Dana-DemiBold">اساتیـد و مدرسیـن محترم می‌توانند با تکمیـل ایـن فرم، دوره‌هـای پیشنـهادی خود را ارائه نمایند.</p>
                    </div>
                </div>
                <div class="col-6 collaboration-item-left">

                </div>
            </div>
            <div class="row">
                <div class="col-6 collaboration-item-right">
                </div>
                <div class="col-6 collaboration-item-left" id="c-118">
                    <div class="line"></div>
                    <span class="Dana-Bold NumberSpan">02</span>
                    <div class="collaboration-card">
                        <h1 class="Dana-ExtraBold">درخواست خدمات</h1>
                        <p class="Dana-DemiBold">سـازمـان‌هـا و شـرکـت‌ها مـی‌تواننـد بـا تکمیل این فرم، خدمات مورد نیاز خود را از معیار درخواست نمایند.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 collaboration-item-right" id="c-119">
                    <div class="line"></div>
                    <span class="Dana-Bold NumberSpan">03</span>
                    <div class="collaboration-card">
                        <h1 class="Dana-ExtraBold">هـم‌افـزایـی و مشـارکـت با معیار</h1>
                        <p class="Dana-DemiBold">سایر برندها با تکمیل این فرم، می‌توانند محصولات و یـا خدمـات خود را با معیار به اشتراک بگذارند.</p>
                    </div>
                </div>
                <div class="col-6 collaboration-item-left">

                </div>
            </div>
            <div class="row">
                <div class="col-6 collaboration-item-right">
                </div>
                <div class="col-6 collaboration-item-left" id="c-120">
                    <div class="line"></div>
                    <span class="Dana-Bold NumberSpan">04</span>
                    <div class="collaboration-card">
                        <h1 class="Dana-ExtraBold">فرصتهای شغلی معیار</h1>
                        <p class="Dana-DemiBold">اشخاص حقیقی که درخواست همکاری بـا معیـار را دارنـد بـا تکمیـل ایـن فـرم، رزومه خود را ارسال نمایند.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collaboration-cloud-image">
        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud.png" alt="">
    </div>
    <div class="collaboration-form">
        <div class="container Dana-ExtraBold collaboration-form-card">
            <h1 class="Dana-ExtraBold" id="form-title">همکاری آموزشی</h1>
            <div class="collaboration-form-card-content" id="f-117">
                <?php
                if ( function_exists( 'wpforms_display' ) ) {
                    wpforms_display( 117 );
                }
                ?>
            </div>
            <div class="collaboration-form-card-content" id="f-118">
                <?php
                if ( function_exists( 'wpforms_display' ) ) {
                    wpforms_display( 508 );
                }
                ?>
            </div>
            <div class="collaboration-form-card-content" id="f-119">
                <?php
                if ( function_exists( 'wpforms_display' ) ) {
                    wpforms_display( 523 );
                }
                ?>
            </div>
            <div class="collaboration-form-card-content" id="f-120">
                <?php
                if ( function_exists( 'wpforms_display' ) ) {
                    wpforms_display( 529 );
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>