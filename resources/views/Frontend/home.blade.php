@extends('layouts.frontend')
@section('title')
    SkillGro - Online Courses & Education Platform
@endsection
@section('content')
    <!-- main-area -->
    <main class="main-area fix">

        <!-- banner-area -->
        <section class="banner-area banner-bg tg-motion-effects" data-background="/frontend/assets/img/banner/banner_bg.png">
            <div class="container">
                <div class="row justify-content-between align-items-start">
                    <div class="col-xl-5 col-lg-6">
                        <div class="banner__content">
                            <h3 class="title tg-svg" data-aos="fade-right" data-aos-delay="400">
                                Never Stop
                                <span class="position-relative">
                                    <span class="svg-icon" id="banner-svg"
                                        data-svg-icon="/frontend/assets/img/objects/title_shape.svg"></span>
                                    <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                            fill="currentcolor" />
                                    </svg>
                                    Learning
                                </span>
                                <br>Life <b>Never Stop</b> Teaching
                            </h3>
                            <p data-aos="fade-right" data-aos-delay="600">Every teaching and learning journey is
                                unique Following We'll help guide your way.</p>
                            <div class="banner__btn-wrap" data-aos="fade-right" data-aos-delay="800">
                                <a href="#0" class="btn arrow-btn">Start Free Trial <img
                                        src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                        class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__images">
                            <img src="/frontend/assets/img/banner/banner_img.png" alt="img" class="main-img">
                            <div class="shape big-shape" data-aos="fade-up-right" data-aos-delay="600">
                                <img src="/frontend/assets/img/banner/banner_shape01.png" alt="shape"
                                    class="tg-motion-effects1">
                            </div>
                            <img src="/frontend/assets/img/banner/bg_dots.svg" alt="shape"
                                class="shape bg-dots rotateme">
                            <img src="/frontend/assets/img/banner/banner_shape02.png" alt="shape"
                                class="shape small-shape tg-motion-effects3">
                        </div>
                    </div>
                </div>
            </div>
            <img src="/frontend/assets/img/banner/banner_shape01.svg" alt="shape" class="line-shape"
                data-aos="fade-right" data-aos-delay="1600">
        </section>
        <!-- banner-area-end -->

        <!-- categories-area -->
        <section class="categories-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Trending Categories</span>
                            <h2 class="title">Top Category We Have</h2>
                            <p class="desc">when known printer took a galley of type scrambl edmake</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="categories__wrap">
                            <div class="swiper categories-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-graphic-design"></i>
                                                </div>
                                                <span class="name">Graphic Design</span>
                                                <span class="courses">(22)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-investment"></i>
                                                </div>
                                                <span class="name">Finance</span>
                                                <span class="courses">(41)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-coding"></i>
                                                </div>
                                                <span class="name">Development</span>
                                                <span class="courses">(29)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-email"></i>
                                                </div>
                                                <span class="name">Marketing</span>
                                                <span class="courses">(31)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-fashion"></i>
                                                </div>
                                                <span class="name">Life Style</span>
                                                <span class="courses">(23)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-interaction"></i>
                                                </div>
                                                <span class="name">Management</span>
                                                <span class="courses">(19)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="categories__item">
                                            <a href="#0">
                                                <div class="icon">
                                                    <i class="flaticon-web-design"></i>
                                                </div>
                                                <span class="name">App Design</span>
                                                <span class="courses">(18)</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories__nav">
                                <button class="categories-button-prev">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 7L1 7M1 7L7 1M1 7L7 13" stroke="#161439" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="categories-button-next">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="#161439" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- categories-area-end -->

        <!-- brand-area -->
        <div class="brand-area">
            <div class="container-fluid">
                <div class="marquee_mode">
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand01.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand02.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand03.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand04.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand05.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand06.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand07.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand04.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                    <div class="brand__item">
                        <a href="#"><img src="/frontend/assets/img/brand/brand03.png" alt="brand"></a>
                        <img src="/frontend/assets/img/icons/brand_star.svg" alt="star">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- about-area -->
        <section class="about-area tg-motion-effects section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about__images">
                            <img src="/frontend/assets/img/others/about_img.png" alt="img" class="main-img">
                            <img src="/frontend/assets/img/others/about_shape.svg" alt="img"
                                class="shape alltuchtopdown">

                            </a>
                            <div class="about__enrolled" data-aos="fade-right" data-aos-delay="200">
                                <p class="title"><span>36K+</span> Enrolled Students</p>
                                <img src="/frontend/assets/img/others/student_grp.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <div class="section__title">
                                <span class="sub-title">Get More About Us</span>
                                <h2 class="title">
                                    Thousand Of Top
                                    <span class="position-relative">
                                        <svg x="0px" y="0px" preserveAspectRatio="none" viewBox="0 0 209 59"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.74438 7.70565C69.7006 -1.18799 136.097 -2.38304 203.934 4.1205C207.178 4.48495 209.422 7.14626 208.933 10.0534C206.793 23.6481 205.415 36.5704 204.801 48.8204C204.756 51.3291 202.246 53.5582 199.213 53.7955C136.093 59.7623 74.1922 60.5985 13.5091 56.3043C10.5653 56.0924 7.84371 53.7277 7.42158 51.0325C5.20725 38.2627 2.76333 25.6511 0.0898448 13.1978C-0.465589 10.5873 1.61173 8.1379 4.73327 7.70565"
                                                fill="currentcolor" />
                                        </svg>
                                        Courses
                                    </span>
                                    Now in One Place
                                </h2>
                            </div>
                            <p class="desc">Groove’s intuitive shared inbox makes it easy for team members to
                                organize, prioritize and.In this episode of the Smashing Pod we’re talking about Web
                                Platform Baseline.</p>
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

        <!-- course-area -->
        <section class="courses-area section-pt-120 section-pb-90"
            data-background="/frontend/assets/img/bg/courses_bg.jpg">
            <div class="container">
                <div class="section__title-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section__title text-center mb-40">
                                <span class="sub-title">Top Class Courses</span>
                                <h2 class="title">Explore Our World's Best Courses</h2>
                                <p class="desc">When known printer took a galley of type scrambl edmake</p>
                            </div>
                            <div class="courses__nav">
                                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                                            data-bs-target="#all-tab-pane" type="button" role="tab"
                                            aria-controls="all-tab-pane" aria-selected="true">
                                            All Courses
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="design-tab" data-bs-toggle="tab"
                                            data-bs-target="#design-tab-pane" type="button" role="tab"
                                            aria-controls="design-tab-pane" aria-selected="false">
                                            Design
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="business-tab" data-bs-toggle="tab"
                                            data-bs-target="#business-tab-pane" type="button" role="tab"
                                            aria-controls="business-tab-pane" aria-selected="false">
                                            Business
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="development-tab" data-bs-toggle="tab"
                                            data-bs-target="#development-tab-pane" type="button" role="tab"
                                            aria-controls="development-tab-pane" aria-selected="false">
                                            Development
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="courseTabContent">
                    <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                        tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Development</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning JavaScript With
                                                    Imagination</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$15.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Design</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">The Complete Graphic
                                                    Design for Beginners</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$19.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb03.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Marketing</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning Digital
                                                    Marketing on Facebook</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$24.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb04.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Business</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Financial Analyst
                                                    Training & Investing Course</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$12.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb05.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data Science</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Data Analysis &
                                                    Visualization Masterclass</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$27.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb06.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Mathematic</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Master the Fundamentals
                                                    of Math</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$10.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab"
                        tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb03.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Marketing</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning Digital
                                                    Marketing on Facebook</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$24.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb04.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Business</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Financial Analyst
                                                    Training & Investing Course</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$12.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Development</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning JavaScript With
                                                    Imagination</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$15.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Design</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">The Complete Graphic
                                                    Design for Beginners</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$19.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb05.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data Science</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Data Analysis &
                                                    Visualization Masterclass</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$27.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb06.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Mathematic</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Master the Fundamentals
                                                    of Math</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$10.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="business-tab-pane" role="tabpanel" aria-labelledby="business-tab"
                        tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Design</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">The Complete Graphic
                                                    Design for Beginners</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$19.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb03.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Marketing</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning Digital
                                                    Marketing on Facebook</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$24.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb04.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Business</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Financial Analyst
                                                    Training & Investing Course</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$12.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb05.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data Science</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Data Analysis &
                                                    Visualization Masterclass</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$27.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Development</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning JavaScript With
                                                    Imagination</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$15.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb06.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Mathematic</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Master the Fundamentals
                                                    of Math</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$10.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="development-tab-pane" role="tabpanel"
                        aria-labelledby="development-tab" tabindex="0">
                        <div class="swiper courses-swiper-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb04.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Business</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Financial Analyst
                                                    Training & Investing Course</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$12.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb05.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data Science</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Data Analysis &
                                                    Visualization Masterclass</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$27.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb06.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Mathematic</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Master the Fundamentals
                                                    of Math</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$10.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Development</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning JavaScript
                                                    With Imagination</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$15.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Design</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">The Complete Graphic
                                                    Design for Beginners</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$19.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb03.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Marketing</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.3 Reviews)
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning Digital
                                                    Marketing on Facebook</a></h5>
                                            <p class="author">By <a href="#">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">$24.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courses__nav">
                            <div class="courses-button-prev"><i class="flaticon-arrow-right"></i></div>
                            <div class="courses-button-next"><i class="flaticon-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-area-end -->

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
                                    study?</span></h2>
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

        <!-- instructor-area -->
        <section class="instructor__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="instructor__content-wrap">
                            <div class="section__title mb-15">
                                <span class="sub-title">Skilled Introduce</span>
                                <h2 class="title">Our Top Class & Expert Instructors in One Place</h2>
                            </div>
                            <p>when an unknown printer took a galley of type and scrambled makespecimen book has
                                survived not only five centuries</p>
                            <div class="tg-button-wrap">
                                <a href="#0" class="btn arrow-btn">See All Instructors <img
                                        src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                        class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="instructor__item-wrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="#0"><img src="/frontend/assets/img/instructor/instructor01.png"
                                                    alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="#0">Mark Jukarberg</a>
                                            </h2>
                                            <span class="designation">UX Design Lead</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="#0"><img src="/frontend/assets/img/instructor/instructor02.png"
                                                    alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="#0">Olivia Mia</a></h2>
                                            <span class="designation">Web Design</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="#0"><img src="/frontend/assets/img/instructor/instructor03.png"
                                                    alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="#0">William Hope</a>
                                            </h2>
                                            <span class="designation">Digital Marketing</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <a href="#0"><img
                                                    src="/frontend/assets/img/instructor/instructor04.png"
                                                    alt="img"></a>
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="#0">Sophia Ava</a></h2>
                                            <span class="designation">Web Development</span>
                                            <p class="avg-rating">
                                                <i class="fas fa-star"></i>
                                                (4.8 Ratings)
                                            </p>
                                            <div class="instructor__social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-area-end -->

        <!-- fact-area -->
        <section class="fact__area">
            <div class="container">
                <div class="fact__inner-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="45"></span>K+</h2>
                                <p>Active Students</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="89"></span>+</h2>
                                <p>Faculty Courses</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="156"></span>K</h2>
                                <p>Best Professors</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="42"></span>K</h2>
                                <p>Award Achieved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- faq-area -->
        <section class="faq__area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq__img-wrap tg-svg">
                            <div class="faq__round-text">
                                <div class="curved-circle">
                                    * Education * System * can * Make * Change *
                                </div>
                            </div>
                            <div class="faq__img">
                                <img src="/frontend/assets/img/others/faq_img.png" alt="img">
                                <div class="shape-one">
                                    <img src="/frontend/assets/img/others/faq_shape01.svg"
                                        class="injectable tg-motion-effects4" alt="img">
                                </div>
                                <div class="shape-two">
                                    <span class="svg-icon" id="faq-svg"
                                        data-svg-icon="/frontend/assets/img/others/faq_shape02.svg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__content">
                            <div class="section__title pb-10">
                                <span class="sub-title">Faq’s</span>
                                <h2 class="title">Start Learning From <br> World’s Pro Instructors</h2>
                            </div>
                            <p>Groove’s intuitive shared inbox makes it easy for team members to organize, prioritize
                                and.In this episode.</p>
                            <div class="faq__wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                What’s Skillgrow Want to give you?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Groove’s intuitive shared inbox makes it easy for team members
                                                    organize prioritize and.In this episode.urvived not only five
                                                    centuries.Edhen an unknown printer took a galley of type and scrambl
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Why choose us for your education?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Groove’s intuitive shared inbox makes it easy for team members
                                                    organize prioritize and.In this episode.urvived not only five
                                                    centuries.Edhen an unknown printer took a galley of type and scrambl
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How We Provide Service For you?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Groove’s intuitive shared inbox makes it easy for team members
                                                    organize prioritize and.In this episode.urvived not only five
                                                    centuries.Edhen an unknown printer took a galley of type and scrambl
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                Are you Affordable For Your Course
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Groove’s intuitive shared inbox makes it easy for team members
                                                    organize prioritize and.In this episode.urvived not only five
                                                    centuries.Edhen an unknown printer took a galley of type and scrambl
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- features-area -->
        <section class="features__area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section__title white-title text-center mb-50">
                            <span class="sub-title">How We Start Journey</span>
                            <h2 class="title">Start your Learning Journey Today!</h2>
                            <p>Groove’s intuitive shared inbox makesteam members together <br> organize, prioritize
                                and.In this episode.</p>
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

        <!-- instructor-area-two -->
        <section class="instructor__area-two">
            <div class="container">
                <div class="instructor__item-wrap-two">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="instructor__item-two tg-svg">
                                <div class="instructor__thumb-two">
                                    <img src="/frontend/assets/img/instructor/instructor_two01.png" alt="img">
                                    <div class="shape-one">
                                        <img src="/frontend/assets/img/instructor/instructor_shape01.svg" alt="img"
                                            class="injectable">
                                    </div>
                                    <div class="shape-two">
                                        <span class="svg-icon" id="instructor-svg"
                                            data-svg-icon="/frontend/assets/img/instructor/instructor_shape02.svg"></span>
                                    </div>
                                </div>
                                <div class="instructor__content-two">
                                    <h3 class="title"><a href="#0">Become a Instructor</a></h3>
                                    <p>To take a trivial example, which of us undertakes physical exercise yes is this
                                        happen here.</p>
                                    <div class="tg-button-wrap">
                                        <a href="#0" class="btn arrow-btn">Apply Now <img
                                                src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                                class="injectable"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="instructor__item-two tg-svg">
                                <div class="instructor__thumb-two">
                                    <img src="/frontend/assets/img/instructor/instructor_two02.png" alt="img">
                                    <div class="shape-one">
                                        <img src="/frontend/assets/img/instructor/instructor_shape01.svg" alt="img"
                                            class="injectable">
                                    </div>
                                    <div class="shape-two">
                                        <span class="svg-icon" id="instructor-svg-two"
                                            data-svg-icon="/frontend/assets/img/instructor/instructor_shape02.svg"></span>
                                    </div>
                                </div>
                                <div class="instructor__content-two">
                                    <h3 class="title"><a href="#0">Become a Student</a></h3>
                                    <p>Join millions of people from around the world learning together. Online learning.
                                    </p>
                                    <div class="tg-button-wrap">
                                        <a href="#0" class="btn arrow-btn">Apply Now <img
                                                src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                                class="injectable"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instructor-area-two-end -->

        <!-- blog-area -->
        <section class="blog__post-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-40">
                            <span class="sub-title">Upcoming Events</span>
                            <h2 class="title">Our Latest Upcoming Events</h2>
                            <p>Stay updated with our exciting new workshops, seminars, and special events.</p>
                        </div>
                    </div>
                </div>
                <div class="row gutter-20">

                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#0" class="shine__animate-link"><img src="/frontend/my-img/seminar.avif"
                                        alt="event"></a>
                                <a href="#0" class="post-tag">Workshop</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>12 January, 2025</li>
                                        <li><i class="flaticon-user-1"></i>Hosted by <a href="#0">SkillGro</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#0">Full Stack Development Live Workshop</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#0" class="shine__animate-link"><img src="/frontend/my-img/seminar.avif"
                                        alt="event"></a>
                                <a href="#0" class="post-tag">Seminar</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>25 January, 2025</li>
                                        <li><i class="flaticon-user-1"></i>Hosted by <a href="#0">SkillGro</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#0">Career Building Guidance Seminar</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#0" class="shine__animate-link"><img
                                        src="/frontend/my-img/coding-bootcamp.jpg" alt="event"></a>
                                <a href="#0" class="post-tag">Bootcamp</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>10 February, 2025</li>
                                        <li><i class="flaticon-user-1"></i>Hosted by <a href="#0">SkillGro</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#0">UI/UX Creative Design Bootcamp</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#0" class="shine__animate-link"><img
                                        src="/frontend/my-img/conference.jpg" alt="event"></a>
                                <a href="#0" class="post-tag">Conference</a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>28 February, 2025</li>
                                        <li><i class="flaticon-user-1"></i>Hosted by <a href="#0">SkillGro</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="#0">Tech Innovators Annual Conference</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
