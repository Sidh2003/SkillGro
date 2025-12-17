@extends('layouts.admin')
@section('title')
    Coupon Code Management
@endsection
@section('content')
    <form method="POST"
        action="{{ Route::is('admin.coupons.create') ? route('admin.coupons.store') : route('admin.coupons.update', ['coupon' => $coupon->id]) }}"
        enctype="multipart/form-data" autocomplete="off" id="coupons-form">
        @csrf
        {{ Route::is('admin.coupons.create') ? '' : method_field('PUT') }}
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5> {{ Route::is('admin.coupons.create') ? 'Create' : 'Edit' }} Coupon Code </h5>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="control-label col-form-label">Course Title <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <select class="form-control" name="package_type">
                                    <option value="">Select Course</option>
                                    @foreach ($courses as $courseItem)
                                        <option value="{{ $courseItem->title }}"
                                            {{ isset($coupon) && $coupon->package_type == $courseItem->title ? 'selected' : '' }}>
                                            {{ $courseItem->title }}
                                        </option>
                                    @endforeach
                                </select>
                                <div id="package_type-error" style="color:red"></div>
                            </div>


                            <div class="col-sm-12 col-md-6">
                                <label class="control-label col-form-label">Coupon Code <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <input type="text" class="form-control" placeholder="Enter Coupon Code..."
                                    name="coupon_code" value="{{ isset($coupon) ? $coupon->coupon_code : '' }}" />
                                <div id="coupon_code-error" style="color:red"></div>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-4">
                                <label class="control-label col-form-label">Discount Type <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <select name="discount_type" id="discount_type" class="form-control">
                                    <option value="">Select Discount Type</option>
                                    <option value="percentage"
                                        {{ isset($coupon) && $coupon->discount_type === 'percentage' ? 'selected' : '' }}>
                                        Discount Percentage</option>
                                    <option value="price"
                                        {{ isset($coupon) && $coupon->discount_type === 'price' ? 'selected' : '' }}>
                                        Discount Price</option>
                                </select>
                                <div id="discount_type-error" style="color:red"></div>
                            </div>

                            <!-- Discount Percentage Field -->
                            <div class="col-sm-12 col-md-6" id="percentage_field" style="display:none">
                                <label class="control-label col-form-label">Discount Percentage <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <input type="number" class="form-control" placeholder="Enter Discount %"
                                    name="discount_percentage"
                                    value="{{ isset($coupon) ? $coupon->discount_percentage : '' }}" min="0"
                                    max="100" step="0.01" />
                                <div id="discount_percentage-error" style="color:red"></div>
                            </div>

                            <!-- Discount Price Field -->
                            <div class="col-sm-12 col-md-4" id="price_field" style="display:none">
                                <label class="control-label col-form-label">Discount Price <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <input type="number" class="form-control" placeholder="Enter Discount Price"
                                    name="discount_price" value="{{ isset($coupon) ? $coupon->discount_price : '' }}"
                                    min="0" step="0.01" />
                                <div id="discount_price-error" style="color:red"></div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label class="control-label col-form-label">Start Date <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <input type="date" class="form-control" name="start_date"
                                    value="{{ isset($coupon) ? $coupon->start_date : '' }}" />
                                <div id="start_date-error" style="color:red"></div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <label class="control-label col-form-label">Expiry Date <sup
                                        class="tcul-star-restrict">*</sup></label>
                                <input type="date" class="form-control" name="expiry_date"
                                    value="{{ isset($coupon) ? $coupon->expiry_date : '' }}" />
                                <div id="expiry_date-error" style="color:red"></div>
                            </div>

                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            Save
                            &nbsp;
                            <i class="ti ti-device-floppy"></i>
                        </button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('admin.coupons.index') }}" type="button" class="btn btn-secondary">
                            Cancel
                            &nbsp;
                            <i class="ti ti-arrow-back-up-double"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $('#coupons-form').submit(function(e) {
            e.preventDefault();
            $('div[id$="-error"]').empty();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status == 'success') {
                        toastr.success(data.message, '', {
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            timeOut: 1500,
                            closeButton: true,
                        });
                        setTimeout(function() {
                            window.location.href = "{!! route('admin.coupons.index') !!}";
                        }, 100);
                    } else {
                        toastr.error('There is some error!!', '', {
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            timeOut: 1500,
                            closeButton: true,
                        });
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    toastr.error('There are some errors in Form. Please check your inputs', '', {
                        showMethod: "slideDown",
                        hideMethod: "slideUp",
                        timeOut: 1500,
                        closeButton: true,
                    });
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        $('#' + key + '-error').html(value);
                    });
                    $('html, body').animate({
                        scrollTop: $('#' + Object.keys(xhr.responseJSON.errors)[0] + '-error')
                            .offset().top - 200
                    }, 500);
                }
            });
        });


        var otherImage = [];

        function deleteOtherImage(count) {
            $('#otherimageSpan' + count).removeAttr("style");
            $('#other_photo' + count).hide();
            var image = $('#otherimageSpan' + count).data('source');
            otherImage.push(image);
            $("input[name=delete_images_source]").val(otherImage.join(","));
        }
    </script>

    <script>
        function toggleDiscountFields() {
            var selected = $('#discount_type').val();
            if (selected === 'percentage') {
                $('#percentage_field').show();
                $('#price_field').hide();
            } else if (selected === 'price') {
                $('#percentage_field').hide();
                $('#price_field').show();
            } else {
                $('#percentage_field').hide();
                $('#price_field').hide();
            }
        }

        $(document).ready(function() {
            // Trigger on change
            $('#discount_type').on('change', toggleDiscountFields);

            // Run once on load (for edit form pre-selected values)
            toggleDiscountFields();
        });
    </script>
@endsection
