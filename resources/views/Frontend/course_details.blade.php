@extends('layouts.frontend')

@section('title')
    {{ $course->title }} | SkillGro
@endsection

@section('content')

    <Style>
        @media (max-width: 576px) {
            .courses__details-thumb {
                aspect-ratio: 16/9;
                /* Slightly smaller ratio for mobile */
            }
        }
    </Style>
    <!-- Breadcrumb -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">{{ $course->title }}</h3>
                        <nav class="breadcrumb">
                            <a href="{{ url('/') }}">Home</a>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <a href="{{ route('courses') }}">Courses</a>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span>{{ $course->title }}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Details -->
    <section class="courses__details-area section-py-120">
        <div class="container">
            <div class="row">

                <!-- LEFT CONTENT -->
                <div class="col-xl-9 col-lg-8">

                    <!-- Course Image -->
                    <div class="courses__details-thumb mb-4"
                        style="width:100%; max-width:1049px; aspect-ratio:1049/570; overflow:hidden;">
                        <img src="{{ $course->photo ? asset('storage/' . $course->photo) : asset('frontend/assets/img/courses/courses_details.jpg') }}"
                            alt="{{ $course->title }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>



                    <!-- Course Meta & Title -->
                    <div class="courses__details-content">
                        <ul class="courses__item-meta list-wrap mb-3">
                            <li class="courses__item-tag">
                                <a href="#">{{ $course->category->name ?? 'General' }}</a>
                            </li>
                            <li class="avg-rating">
                                <i class="fas fa-star"></i> (4.5 Reviews)
                            </li>
                        </ul>

                        <h2 class="title mb-3">{{ $course->title }}</h2>

                        <div class="courses__details-meta mb-4">
                            <ul class="list-wrap">
                                <li class="author-two">
                                    <img src="/frontend/assets/img/courses/course_author001.png" alt="img">
                                    By <a href="#0">{{ $course->teacher ?? 'SkillGro' }}</a>
                                </li>
                                <li class="date">
                                    <i class="flaticon-calendar"></i>
                                    {{ $course->created_at->format('d/m/Y') }}
                                </li>
                                <li>
                                    <i class="flaticon-mortarboard"></i>
                                    {{ $course->lesson ?? 0 }} Lessons
                                </li>
                            </ul>
                        </div>

                        <!-- Tabs -->
                        <ul class="nav nav-tabs mb-4" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active">Overview</button>
                            </li>
                        </ul>

                        <!-- Overview -->
                        <div class="courses__overview-wrap">

                            <!-- Course Description (EditorJS JSON Rendered) -->
                            <h3 class="title">Course Description</h3>
                            @php
                                $description = json_decode($course->course_description, true);
                            @endphp

                            @isset($description['blocks'])
                                @foreach ($description['blocks'] as $block)
                                    @if ($block['type'] === 'paragraph')
                                        <p>{!! $block['data']['text'] !!}</p>
                                    @elseif($block['type'] === 'header')
                                        <h3>{!! $block['data']['text'] !!}</h3>
                                    @elseif($block['type'] === 'list')
                                        <ul>
                                            @foreach ($block['data']['items'] as $item)
                                                <li>{!! $item['content'] !!}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endforeach
                            @endisset

                            <!-- Learning Points -->
                            <h3 class="title mt-4">What you'll learn in this course?</h3>
                            <ul class="about__info-list list-wrap">
                                @forelse(json_decode($course->pointers, true) ?? [] as $pointer)
                                    <li class="about__info-list-item">
                                        <i class="flaticon-angle-right"></i>
                                        <p class="content">{!! $pointer !!}</p>
                                    </li>
                                @empty
                                    <li class="about__info-list-item">
                                        <i class="flaticon-angle-right"></i>
                                        <p class="content">No learning points available</p>
                                    </li>
                                @endforelse
                            </ul>

                            <!-- Short Description -->
                            @if ($course->short_description)
                                <p class="last-info mt-3">{!! nl2br(e($course->short_description)) !!}</p>
                            @endif

                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="col-xl-3 col-lg-4">
                    <div class="courses__details-sidebar">

                        <!-- Price -->
                        <div class="courses__cost-wrap mb-4">
                            <span>This Course Fee:</span>
                            <h2 class="title">
                                ₹{{ $course->price ?? 'Free' }}
                            </h2>
                        </div>

                        <!-- Course Info -->
                        <div class="courses__information-wrap mb-4">
                            <h5 class="title">Course includes:</h5>
                            <ul class="list-wrap">
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon01.svg" class="injectable">
                                    Level <span>{{ $course->level ?? '-' }}</span>
                                </li>
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon02.svg" class="injectable">
                                    Duration <span>{{ $course->duration ?? '-' }}</span>
                                </li>
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon03.svg" class="injectable">
                                    Lessons <span>{{ $course->lesson ?? 0 }}</span>
                                </li>
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon04.svg" class="injectable">
                                    Quizzes <span>{{ $course->quizzes ?? 0 }}</span>
                                </li>
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon05.svg" class="injectable">
                                    Certificate <span>{{ $course->certificate ?? 'No' }}</span>
                                </li>
                                <li>
                                    <img src="/frontend/assets/img/icons/course_icon05.svg" class="injectable">
                                    Weekly Test <span>{{ $course->weekly_test ?? 'No' }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Payment -->
                        <div class="courses__payment mb-4">
                            <h5 class="title">Secure Payment:</h5>
                            <img src="/frontend/my-img/payment-method.png" alt="img">
                        </div>

                        <!-- Share -->
                        <div class="courses__details-social mb-4">
                            <h5 class="title">Share this course:</h5>
                            <ul class="list-wrap">
                                @php
                                    $courseUrl = urlencode(request()->fullUrl());
                                    $courseTitle = urlencode($course->title);
                                @endphp
                                <!-- Facebook -->
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $courseUrl }}"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <!-- Twitter -->
                                <li>
                                    <a href="https://twitter.com/intent/tweet?text={{ $courseTitle }}&url={{ $courseUrl }}"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <!-- WhatsApp -->
                                <li>
                                    <a href="https://api.whatsapp.com/send?text={{ $courseTitle }}%20{{ $courseUrl }}"
                                        target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <!-- Instagram -->
                                <li>
                                    <!-- Instagram doesn't allow direct URL sharing, you can link to your profile or remove -->
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <!-- Enroll -->
                        <div class="courses__details-enroll">
                            <a href="/checkout" class="btn btn-two arrow-btn w-100">
                                Enroll Now
                                <img src="/frontend/assets/img/icons/right_arrow.svg" class="injectable">
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
