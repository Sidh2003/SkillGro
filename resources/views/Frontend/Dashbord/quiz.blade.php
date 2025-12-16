@extends('layouts.frontend')
@section('title')
    Quiz | SkillGro
@endsection
@section('content')
    <section class="error-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-wrap text-center">
                        {{-- <div class="error-img">
                        <img src="/frontend/my-img/thankyou.jpg" alt="img" class="injectable">
                    </div> --}}
                        <div class="error-content">
                            <h2 class="title">Exciting features and <span>updates coming soon!</span></h2>
                            <div class="tg-button-wrap">
                                <a href="/" class="btn arrow-btn">
                                    Go To Home Page
                                    <img src="/frontend/assets/img/icons/right_arrow.svg" alt="img" class="injectable">
                                </a>
                            </div>
                            {{-- 🚀 Exciting features and updates coming soon! --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
