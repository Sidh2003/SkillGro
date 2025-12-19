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
                        <form action="/paymentstore" enctype="multipart/form-data" method="POST" id="paymentForm"
                            data-wow-delay="0.5s" class="customer__form-wrap">
                            @csrf
                            <span class="title">Billing Details</span>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <label for="full_name">Full name *</label>
                                        <input type="text" id="full_name" name="full_name" class="form-control">
                                        <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="phone">Phone *</label>
                                        <input type="number" id="mobile" name="mobile" class="form-control">
                                        <div class="field_error" id="mobile-error" style="color:#ff0000;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="email">Email address *</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <div class="field_error" id="email-error" style="color:#ff0000;"></div>
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
                            <button class="btn btn-success w-100" type="submit">Place order</button>
                            </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#paymentForm').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                form.find('div[id$="-error"]').empty();

                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('#started').attr('disabled', true).hide();
                        form.find('#form_loader').show();
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                form.find('#' + key + '-error').html(
                                    errorText); // ✅ Scoped to form
                            });

                            // ✅ Scroll to first error in this form only
                            var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: form.find('#' + firstErrorKey + '-error')
                                    .offset().top - 200
                            }, 500);

                        } else {
                            toastr.error(
                                'An unexpected error occurred. Please try again later.',
                                '', {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 1500,
                                    closeButton: true,
                                });
                        }
                    },
                    complete: function() {
                        form.find('#started').attr('disabled', false).show();
                        form.find('#form_loader').hide();
                    }
                });
            });
        });
    </script>
@endsection
