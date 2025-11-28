@extends('layouts.frontend')
@section('title')
    Profile | SkillGro
@endsection
@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Profile</h3>
                        <nav class="breadcrumb">

                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/dashbord">Dashbord</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Profile</span>
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
                                    <li>
                                        <a href="#0">
                                            <i class="fas fa-home"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#0">
                                            <i class="skillgro-avatar"></i>
                                            My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="skillgro-book"></i>
                                            Enrolled Courses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="skillgro-label"></i>
                                            Wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="skillgro-book-2"></i>
                                            Reviews
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="skillgro-question"></i>
                                            My Quiz Attempts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="skillgro-satchel"></i>
                                            Order History
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
                                        <a href="#0">
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
                        <div class="dashboard__content-wrap">
                            <div class="dashboard__content-title">
                                <h4 class="title">My Profile</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="profile__content-wrap">
                                        <ul class="list-wrap">
                                            <li><span>Registration Date</span> February 28, 2026 8:01 am</li>
                                            <li><span>First Name</span> Emily</li>
                                            <li><span>Last Name</span> Hannah</li>
                                            <li><span>Username</span> instructor</li>
                                            <li><span>Email</span> info@skillgrodemo.com</li>
                                            <li><span>Phone Number</span> +123 599 8989</li>
                                            <li><span>Skill/Occupation</span> Graphic Design</li>
                                            <li><span>Biography</span> I am eager to bring my passion for creating
                                                user-friendly and efficient web interfaces to your dynamic team. I am
                                                applying for Front End Developer position in your company.</li>
                                        </ul>
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
