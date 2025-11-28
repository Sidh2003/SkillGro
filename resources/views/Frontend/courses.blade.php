@extends('layouts.frontend')
@section('title')
    Courses | SkillGro
@endsection
@section('content')
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">All Courses</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Courses</span>
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

    <!-- all-courses -->
    <section class="all-courses-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <div
                                class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                                <div class="col">
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
                                            <p class="author">By <a href="#0">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹15.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
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
                                            <p class="author">By <a href="#0">Jenny Wilson</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹19.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
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
                                            <p class="author">By <a href="#0">Wade Warren</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹24.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
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
                                            <p class="author">By <a href="#0">Robert Fox</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹12.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb05.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data
                                                        Science</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Data Analysis &
                                                    Visualization Masterclass</a></h5>
                                            <p class="author">By <a href="#0">Guy Hawkins</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹27.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
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
                                            <p class="author">By <a href="#0">Sawpawlo Mark</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹10.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb07.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Business</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">How To Build A Localized
                                                    Website With Hugo And Strapi</a></h5>
                                            <p class="author">By <a href="#0">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹11.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb08.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Desing</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Designing Effective
                                                    Pricing Plans UX</a></h5>
                                            <p class="author">By <a href="#0">Sawpawlo Mark</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹17.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb09.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Language</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.6 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Accelerating UX Maturity
                                                    With A Breakthrough Project</a></h5>
                                            <p class="author">By <a href="#0">David Millar</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹22.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb10.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Creative</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.7 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Demystifying The New
                                                    Gatsby Framework</a></h5>
                                            <p class="author">By <a href="#0">Jack & Jon</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹29.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb11.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.8 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Voice Control Usability
                                                    Considerations For Partially</a></h5>
                                            <p class="author">By <a href="#0">Lily Rebeca</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹12.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb12.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Finance</a>
                                                </li>
                                                <li class="avg-rating"><i class="fas fa-star"></i> (4.5 Reviews)</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Things I Wish I’d Known
                                                    Earlier In My Career</a></h5>
                                            <p class="author">By <a href="#0">Sawpawlo Mark</a></p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                                <h5 class="price">₹9.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="pagination__wrap mt-30">
                                <ul class="list-wrap">
                                    <li class="active"><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="row courses__list-wrap row-cols-1">
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb01.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Development</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.8 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price"><del>₹29.00</del>₹15.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Resolving Conflicts
                                                    Between Designers And Engineers</a></h5>
                                            <p class="author">By <a href="#0">David Millar</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb02.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Design</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.5 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price">₹41.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Powerful Image
                                                    Optimization Tools for this year</a></h5>
                                            <p class="author">By <a href="#0">Jenny Wilson</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb03.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Marketing</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.6 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price"><del>₹24.00</del>₹12.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Learning JavaScript With
                                                    Imagination</a></h5>
                                            <p class="author">By <a href="#0">Wade Warren</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb04.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Finance</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.9 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price"><del>₹32.00</del>₹19.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">Resolving Conflicts
                                                    Between Designers And Engineers</a></h5>
                                            <p class="author">By <a href="#0">Robert Fox</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb05.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Data
                                                        Science</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.7 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price"><del>₹50.00</del>₹40.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">A Look At Remix And The
                                                    Differences With Next.js</a></h5>
                                            <p class="author">By <a href="#0">Guy Hawkins</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb06.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Mathematic</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.8 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price"><del>₹30.00</del>₹19.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">An Accessibility-First
                                                    Approach To Chart Visual</a></h5>
                                            <p class="author">By <a href="#0">Sawpawlo Mark</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="courses__item courses__item-three shine__animate-item">
                                        <div class="courses__item-thumb">
                                            <a href="#0" class="shine__animate-link">
                                                <img src="/frontend/assets/img/courses/course_thumb07.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="courses__item-content">
                                            <ul class="courses__item-meta list-wrap">
                                                <li class="courses__item-tag">
                                                    <a href="#0">Development</a>
                                                    <div class="avg-rating">
                                                        <i class="fas fa-star"></i> (4.6 Reviews)
                                                    </div>
                                                </li>
                                                <li class="price">₹11.00</li>
                                            </ul>
                                            <h5 class="title"><a href="#0">How To Build A Localized
                                                    Website With Hugo And Strapi</a></h5>
                                            <p class="author">By <a href="#0">Robert Fox</a></p>
                                            <p class="info">when an unknown printer took a galley of type and
                                                scrambled type specimen book It has survived not only.</p>
                                            <div class="courses__item-bottom">
                                                <div class="button">
                                                    <a href="#0">
                                                        <span class="text">Enroll Now</span>
                                                        <i class="flaticon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="pagination__wrap mt-30">
                                <ul class="list-wrap">
                                    <li class="active"><a href="#0">1</a></li>
                                    <li><a href="#0">2</a></li>
                                    <li><a href="#0">3</a></li>
                                    <li><a href="#0">4</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all-courses-end -->
@endsection
