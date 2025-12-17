@extends('layouts.frontend')

@section('title')
    Courses | SkillGro
@endsection

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">All Courses</h3>
                        <nav class="breadcrumb">
                            <a href="/">Home</a>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span>Courses</span>
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

    <!-- Courses Section -->
    <section class="all-courses-area section-py-120">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4 order-2 order-lg-0">
                    <aside class="courses__sidebar">

                        <form method="GET" action="{{ route('courses') }}">

                            <!-- Categories -->
                            <div class="courses-widget">
                                <h4 class="widget-title">Categories</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        @foreach ($categories as $cat)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        value="{{ $cat->slug }}" onchange="this.form.submit()"
                                                        {{ request('category') == $cat->slug ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        {{ $cat->name }} ({{ $cat->courses_count }})
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Language -->
                            <div class="courses-widget">
                                <h4 class="widget-title">Language</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        @php
                                            $languages = ['All', 'English', 'Hindi', 'Marathi'];
                                        @endphp
                                        @foreach ($languages as $lang)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="language"
                                                        value="{{ $lang == 'All' ? '' : $lang }}"
                                                        onchange="this.form.submit()"
                                                        {{ request('language') == ($lang == 'All' ? '' : $lang) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        {{ $lang }}
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Skill Level -->
                            <div class="courses-widget">
                                <h4 class="widget-title">Skill Level</h4>
                                <div class="courses-cat-list">
                                    <ul class="list-wrap">
                                        @php
                                            $skills = ['All', 'Beginner', 'Intermediate', 'Advanced'];
                                        @endphp
                                        @foreach ($skills as $skill)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="level"
                                                        value="{{ $skill == 'All' ? '' : $skill }}"
                                                        onchange="this.form.submit()"
                                                        {{ request('level') == ($skill == 'All' ? '' : $skill) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        {{ $skill }}
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Reset -->
                            <div class="courses-widget">
                                <a href="{{ route('courses') }}" class="btn btn-sm btn-outline-secondary w-100">
                                    Reset Filters
                                </a>
                            </div>

                        </form>

                    </aside>
                </div>

                <!-- Course Listing -->
                <div class="col-xl-9 col-lg-8">
                    <div class="courses-top-wrap mb-3">
                        <p>Showing {{ $courses->count() }} results</p>
                    </div>

                    <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2">

                        @forelse ($courses as $course)
                            <div class="col">
                                <div class="courses__item shine__animate-item">
                                    <div class="courses__item-thumb">
                                        <a href="{{ route('course.details', $course->slug) }}">
                                            @if ($course->photo)
                                                <img src="{{ Storage::url($course->photo) }}" alt="{{ $course->title }}">
                                            @else
                                                <img src="{{ asset('frontend/assets/img/no-image.png') }}" alt="No Image">
                                            @endif
                                        </a>
                                    </div>

                                    <div class="courses__item-content">
                                        <ul class="courses__item-meta list-wrap">
                                            <li class="courses__item-tag">
                                                {{ $course->category->name ?? 'N/A' }}
                                            </li>
                                        </ul>

                                        <h5 class="title">
                                            <a href="{{ route('course.details', $course->slug) }}">
                                                {{ $course->title }}
                                            </a>
                                        </h5>

                                        <p class="author">
                                            By {{ $course->teacher }}
                                        </p>

                                        <div class="courses__item-bottom">
                                            <div class="button">
                                                <a href="{{ route('course.details', $course->slug) }}">
                                                    <span class="text">Enroll Now</span>
                                                    <i class="flaticon-arrow-right"></i>
                                                </a>
                                            </div>
                                            <h5 class="price">
                                                ₹{{ $course->price }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p class="text-center">No courses found.</p>
                            </div>
                        @endforelse

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
