@extends('layouts.frontend')
@section('title')
    Contact Us | SkillGro
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Contact With Us</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Contact</span>
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

    <!-- contact-area -->
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-wrap">
                        <ul class="list-wrap">
                            <li>
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/map.svg" alt="img" class="injectable">
                                </div>
                                <div class="content">
                                    <h4 class="title">Address</h4>
                                    <p>Awamileaug Drive, Kensington <br> London, UK</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/contact_phone.svg" alt="img"
                                        class="injectable">
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <a href="tel:0123456789">+1 (800) 123 456 789</a>
                                    <a href="tel:0123456789">+1 (800) 123 456 789</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/emial.svg" alt="img" class="injectable">
                                </div>
                                <div class="content">
                                    <h4 class="title">E-mail Address</h4>
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-wrap">
                        <h4 class="title">Send Us Message</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form action="/contact-enquiry" enctype="multipart/form-data" method="POST" id="contactForm"
                            data-wow-delay="0.5s">
                            @csrf

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-grp">
                                        <input name="full_name" id="full_name" type="text" placeholder="Name *">
                                        <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp">
                                        <input name="email" id="email" type="email" placeholder="E-mail *">
                                        <div class="field_error" id="email-error" style="color:#ff0000;"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-grp">
                                        <input name="subject" id="subject" type="text" placeholder="Subject*">
                                        <div class="field_error" id="subject-error" style="color:#ff0000;"></div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" id="message" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-two arrow-btn">Submit Now <img
                                    src="/frontend/assets/img/icons/right_arrow.svg" alt="img"
                                    class="injectable"></button>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
            </div>
            <!-- contact-map -->
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60271.51171523702!2d73.1305436!3d19.240161749999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be796f457b1b76f%3A0x35df463ca445bd26!2sKalyan%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1763289174778!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact-map-end -->
        </div>
    </section>
    <!-- contact-area-end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contactForm').submit(function(e) {
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
