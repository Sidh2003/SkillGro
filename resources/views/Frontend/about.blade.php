@extends('layouts.frontend')
@section('title')
    About US | SkillGro
@endsection
@section('content')
    <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/my_img/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">About US</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="/">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">About Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape-wrap">
                <img src="/frontend/my_img/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="/frontend/my_img/breadcrumb_shape02.svg" alt="img" data-aos="fade-right"
                    data-aos-delay="300">
                <img src="/frontend/my_img/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="/frontend/my_img/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left"
                    data-aos-delay="400">
                <img src="/frontend/my_img/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- about-area -->
        <section class="about-area-three section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about__images-three tg-svg">
                            <img src="/frontend/my_img/inner_about_img.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                <span class="sub-title">Get More About Us</span>
                                <h2 class="title">
                                    Empowering Students to reach their
                                    <span class="position-relative">
                                        <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                                fill="currentcolor" />
                                        </svg>
                                        potential
                                    </span>
                                    Goal For Next Level Challenge.
                                </h2>
                            </div>
                            <p class="desc">when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into electronic
                                typesetting.</p>
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">The Most World Class Instructors</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Access Your Class anywhere</p>
                                </li>
                                <li class="about__info-list-item">
                                    <i class="flaticon-angle-right"></i>
                                    <p class="content">Flexible Course Plan</p>
                                </li>
                            </ul>
                            <div class="tg-button-wrap">
                                <a href="#0" class="btn arrow-btn">Start Free Trial <img
                                        src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                        class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->


        <!-- features-area -->
        <section class="features__area-three section-pt-120 section-pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-8">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">What We Offer</span>
                            <h2 class="title">Learn New Skills When And Where You Like</h2>
                            <p>when known printer took a galley of type scrambl edmake</p>
                        </div>
                    </div>
                </div>
                <div class="features__item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <img src="/frontend/assets/img/icons/h2_features_icon01.svg" alt="img"
                                                class="injectable">
                                        </div>
                                        <h2 class="title">Expert Tutors</h2>
                                    </div>
                                    <p>when an unknown printer took a galley offe type and scrambled makes.</p>
                                    </br>
                                </div>
                                <div class="features__item-shape">
                                    <img src="/frontend/assets/img/others/features_item_shape.svg" alt="img"
                                        class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <img src="/frontend/assets/img/icons/h2_features_icon02.svg" alt="img"
                                                class="injectable">
                                        </div>
                                        <h2 class="title">Effective Courses</h2>
                                    </div>
                                    <p>when an unknown printer took a galley offe type and scrambled makes.</p>
                                    </br>
                                </div>
                                <div class="features__item-shape">
                                    <img src="/frontend/assets/img/others/features_item_shape.svg" alt="img"
                                        class="injectable">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features__item-two">
                                <div class="features__content-two">
                                    <div class="content-top">
                                        <div class="features__icon-two">
                                            <!-- Font Awesome Certificate Icon -->
                                            <i class="fa-solid fa-certificate"
                                                style="font-size: 40px; color: #ffb400;"></i>
                                        </div>
                                        <h2 class="title">Earn Certificate</h2>
                                    </div>
                                    <p>When an unknown printer took a galley of type and scrambled it to make a specimen
                                        book.</p>
                                </div>
                                <div class="features__item-shape">
                                    <img src="/frontend/assets/img/others/features_item_shape.svg" alt="img"
                                        class="injectable">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsletter__img-wrap">
                            <img src="/frontend/assets/img/others/newsletter_img.png" alt="img">
                            <img src="/frontend/assets/img/others/newsletter_shape01.png" alt="img"
                                data-aos="fade-up" data-aos-delay="400">
                            <img src="/frontend/assets/img/others/newsletter_shape02.png" alt="img"
                                class="alltuchtopdown">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="newsletter__content">
                            <h2 class="title">Want to stay <span>informed</span> about <br> new <span>courses &
                                    study?</span>
                            </h2>
                            <div class="newsletter__form">
                                <form action="#">
                                    <input type="email" placeholder="Type your e-mail">
                                    <button type="submit" class="btn">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter__shape">
                <img src="/frontend/assets/img/others/newsletter_shape03.png" alt="img" data-aos="fade-left"
                    data-aos-delay="400">
            </div>
        </section>
        <!-- newsletter-area-end -->

        <!-- features-area -->
        <section class="features__area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section__title white-title text-center mb-50">
                            <span class="sub-title">How We Start Journey</span>
                            <h2 class="title">Start your Learning Journey Today!</h2>
                            <p>Groove’s intuitive shared inbox makesteam members together <br> organize, prioritize and.In
                                this episode.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="/frontend/assets/img/icons/features_icon01.svg" class="injectable"
                                    alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Learn with Experts</h4>
                                <p>Curate anding area share Pluralsight content to reach your</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="/frontend/assets/img/icons/features_icon02.svg" class="injectable"
                                    alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Learn Anything</h4>
                                <p>Curate anding area share Pluralsight content to reach your</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="/frontend/assets/img/icons/features_icon03.svg" class="injectable"
                                    alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Get Online Certificate</h4>
                                <p>Curate anding area share Pluralsight content to reach your</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="/frontend/assets/img/icons/features_icon04.svg" class="injectable"
                                    alt="img">
                            </div>
                            <div class="features__content">
                                <h4 class="title">E-mail Marketing</h4>
                                <p>Curate anding area share Pluralsight content to reach your</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial__area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">Our Testimonials</span>
                            <h2 class="title">What Students Think and Say About SkillGrow</h2>
                            <p>when known printer took a galley of type scrambl edmake</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial__item-wrap">
                            <div class="swiper-container testimonial-swiper-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__item-top">
                                                <div class="testimonial__author">
                                                    <div class="testimonial__author-thumb">
                                                        <img src="/frontend/assets/img/others/testi_author01.html"
                                                            alt="img">
                                                    </div>
                                                    <div class="testimonial__author-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h2 class="title">Wade Warren</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                    make a type specimen book hass”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__item-top">
                                                <div class="testimonial__author">
                                                    <div class="testimonial__author-thumb">
                                                        <img src="/frontend/assets/img/others/testi_author02.png"
                                                            alt="img">
                                                    </div>
                                                    <div class="testimonial__author-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h2 class="title">Jenny Wilson</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                    make a type specimen book hass”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__item-top">
                                                <div class="testimonial__author">
                                                    <div class="testimonial__author-thumb">
                                                        <img src="/frontend/assets/img/others/testi_author03.png"
                                                            alt="img">
                                                    </div>
                                                    <div class="testimonial__author-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h2 class="title">Guy Hawkins</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                    make a type specimen book hass”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__item">
                                            <div class="testimonial__item-top">
                                                <div class="testimonial__author">
                                                    <div class="testimonial__author-thumb">
                                                        <img src="/frontend/assets/img/others/testi_author02.png"
                                                            alt="img">
                                                    </div>
                                                    <div class="testimonial__author-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h2 class="title">Jenny Wilson</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial__content">
                                                <p>“ when an unknown printer took alley ffferer area typey and scrambled to
                                                    make a type specimen book hass”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__nav">
                                <button class="testimonial-button-prev"><i class="flaticon-arrow-right"></i></button>
                                <button class="testimonial-button-next"><i class="flaticon-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

    </main>
@endsection
