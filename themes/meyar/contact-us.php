<?php
/**
 * Template Name: contact-us
 */
get_header(); ?>


<section class="contactUs">
    <div class="container">
        <div class="row contactUs-header">
            <div class="col-md-6 contactUs-title">
                <h1 class="Dana-Black">تماس با ما</h1>
                <h2 class="Dana-Regular">Contact Us</h2>
            </div>
            <div class="col-md-6 contactUs-image">
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/contactUs.png" alt="">
            </div>
        </div>
        <div class="row contactUs-addressinfo">
            <div class="col-md-6 contactUs-address">
                <h4 class="Dana-Black mb-md-5"><span>نشانی :</span> یــوسف آبــاد، بـــالاتـــر از پمـپ بنــزیـــن، (روبـه روی بـانک کارآفرین/جنـب نوین چـرم) ساختـمان پزشـکان ۵۰۱، طبقه ۴، واحد ۱۷</h4>
                <h4 class="Dana-Black"><span>شماره تماس : </span>۸۸۲۱۰۶۵۵-۰۲۱</h4>
                <h4 class="Dana-Black"><span>شماره مبایل : </span>۵۵۵۵۳۰۴-۰۹۰۲</h4>
                <h4 class="Dana-Black"><span>ایمیل :</span> meyar@gmail.com</h4>
            </div>
            <div class="col-md-6 contact-map contactUs-location">
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/location.png" alt="">
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>