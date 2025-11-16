@extends('layouts.frontend')
@section('title')
    Thank You | SkillGro
@endsection
@section('content')
    <!-- error-area -->
    <section class="error-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-wrap text-center">
                        {{-- <div class="error-img">
                            <img src="/frontend/my-img/thankyou.jpg" alt="img" class="injectable">
                        </div> --}}
                        <div class="error-content">
                            <h2 class="title">Thank You! <span>for Contacting Us</span>
                            </h2>
                            <p>We appreciate your message and have received it. Our team will review it and contact you
                                soon.</p>
                            <div class="tg-button-wrap">
                                <a href="/" class="btn arrow-btn">Go To Home Page <img
                                        src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                        class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error-area-end -->
@endsection
