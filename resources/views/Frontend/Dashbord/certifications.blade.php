@extends('layouts.frontend')
@section('title')
    Certificate | SkillGro
@endsection
@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Certificate</h3>
                        <nav class="breadcrumb">

                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Certificate</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="/frontend/assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="/frontend/assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="/frontend/assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="/frontend/assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="/frontend/assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <section class="dashboard__area section-pb-120">
        <div class="dashboard__bg"><img src="/frontend/assets/img/bg/dashboard_bg.jpg" alt=""></div>
        <div class="container">
            <div class="dashboard__top-wrap">
                <div class="dashboard__top-bg" data-background="/frontend/assets/img/bg/student_bg.jpg"></div>
                <div class="dashboard__instructor-info">
                    <div class="dashboard__instructor-info-left">
                        <div class="thumb">
                            <img src="/frontend/assets/img/courses/details_instructors02.jpg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="title">Emily Hannah</h4>
                            <ul class="list-wrap">
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon03.svg" alt="img"
                                        class="injectable">
                                    10 Courses Enrolled
                                </li>
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon05.svg" alt="img"
                                        class="injectable">
                                    7 Certificate
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dashboard__instructor-info-right">
                        <a href="#0" class="btn btn-two arrow-btn">Become an Instructor <img
                                src="/frontend/assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="dashboard__inner-wrap">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="dashboard__sidebar-wrap">
                            <div class="dashboard__sidebar-title mb-20">
                                <h6 class="title">Welcome, Emily Hannah</h6>
                            </div>
                            <nav class="dashboard__sidebar-menu">
                                <ul class="list-wrap">
                                    <li class="active">
                                        <a href="#0">
                                            <i class="fas fa-home"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/profile">
                                            <i class="skillgro-avatar"></i>
                                            My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/enrolled_courses">
                                            <i class="skillgro-book"></i>
                                            Enrolled Courses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quiz">
                                            <i class="skillgro-question"></i>
                                            My Quiz Attempts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/weekly_test">
                                            <i class="fas fa-file-alt"></i>
                                            Weekly Test & Result
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/certifications">
                                            <i class="fas fa-graduation-cap"></i>
                                            Certifications
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="dashboard__sidebar-title mt-30 mb-20">
                                <h6 class="title">User</h6>
                            </div>
                            <nav class="dashboard__sidebar-menu">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="/setting">
                                            <i class="skillgro-settings"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/">
                                            <i class="skillgro-logout"></i>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">

                        <div class="progress__courses-wrap">
                            <div class="dashboard__content-title">
                                <h4 class="title">Your Achivement</h4>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="/frontend/my-img/certificate-1.avif" download
                                                class="shine__animate-link">
                                                <img src="/frontend/my-img/certificate-1.avif" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content courses__item-content-two">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="/frontend/my-img/certificate-1.avif" download>Download
                                                        Certificate</a>
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Full Stack Web Development
                                                    Certificate</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="/frontend/my-img/certificate-2.jpg" download
                                                class="shine__animate-link">
                                                <img src="/frontend/my-img/certificate-2.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content courses__item-content-two">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="/frontend/my-img/certificate-2.jpg" download>Download
                                                        Certificate</a>
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Backend Development Essentials
                                                    Certificate</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="courses__item courses__item-two shine__animate-item">
                                        <div class="courses__item-thumb courses__item-thumb-two">
                                            <a href="/frontend/my-img/certificate-3.jpg" download
                                                class="shine__animate-link">
                                                <img src="/frontend/my-img/certificate-3.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content courses__item-content-two">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="/frontend/my-img/certificate-3.jpg" download>Download
                                                        Certificate</a>
                                                </li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Backend Development Professional
                                                    Certificate</a></h5>
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
@endsection
