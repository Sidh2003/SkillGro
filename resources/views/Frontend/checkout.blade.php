@extends('layouts.frontend')

@section('title')
    Checkout | SkillGro
@endsection

@section('content')
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3 class="title">Checkout</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="/">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Checkout</span>
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

        <!-- checkout-area -->
        <div class="checkout__area section-py-120">
            <div class="container">
                <div class="row">
                    <!-- Billing Details -->
                    <div class="col-lg-7">
                        <form action="#0" class="customer__form-wrap">
                            <span class="title">Billing Details</span>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <label for="full-name">Full name *</label>
                                        <input type="text" id="full-name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="phone">Phone *</label>
                                        <input type="number" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="email">Email address *</label>
                                        <input type="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Coupon Code -->
                            <span class="title title-two">Have a coupon?</span>
                            <div class="form-grp d-flex flex-wrap mb-3" style="gap:10px;">
                                <input type="text" id="coupon-code" class="form-control"
                                    placeholder="Enter your code here" style="flex:1;">
                                <button type="button" class="btn btn-primary">Apply</button>
                            </div>

                        </form>
                    </div>

                    <!-- Order Summary -->
                    <div class="col-lg-5">
                        <div class="order__info-wrap">
                            <h2 class="title">YOUR ORDER</h2>
                            <ul class="list-wrap">
                                <li class="title">Product <span>Subtotal</span></li>
                                <li>Antiaging and Longevity × 1 <span>$19.99</span></li>
                                <li>Subtotal <span>$19.99</span></li>
                                <li>Total <span>$19.99</span></li>
                            </ul>
                            <p>Sorry, it seems that there are no available payment methods for your state. Please contact us
                                if you require assistance or wish to make alternate arrangements.</p>
                            <p>Your personal data will be used to process your order, support your experience throughout
                                this website, and for other purposes described in our <a href="#0">privacy
                                    policy.</a></p>
                            <button class="btn btn-success w-100">Place order</button>
                            <div class="mt-3 text-center">
                                <p class="mb-2 fs_14">100% Safe Checkout - Secured by Razorpay</p>
                                <img class="w-75" src="/frontend/my-img/payment-method.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area-end -->

    </main>
@endsection
