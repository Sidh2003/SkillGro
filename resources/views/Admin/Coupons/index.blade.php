@extends('layouts.admin')
@section('title')
    Coupon Code
@endsection
@section('content')
    <style>
        .table th {
                text-align: center !important;
                vertical-align: middle !important;
            }
    </style>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-header px-4 py-3 border-bottom">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-start">
                                <h5 class="card-title fw-semibold mb-0 lh-sm">Coupon Code</h5>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a href="{{ route('admin.coupons.create') }}" class="btn btn-info">
                                    Create
                                    &nbsp;
                                    <i class="ti ti-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive rounded-2 mb-4">
                            <table class="table border table-bordered table-sm text-nowrap mb-0 align-middle"
                                id="datatable">
                                <thead class="text-dark fs-3">
                                    <tr>
                                        <th width="3%">
                                            <h6 class="fs-3 fw-semibold mb-0">#</h6>
                                        </th>
                                        <th width="5%">
                                            <h6 class="fs-3 fw-semibold mb-0">Actions</h6>
                                        </th>
                                        <th width="5%">
                                            <h6 class="fs-3 fw-semibold mb-0">Status</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Package Type</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Coupon Code</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Discount Type</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Discount Percentage</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Discount Price</h6>
                                        </th>
                                         <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Start Date</h6>
                                        </th>
                                        <th>
                                            <h6 class="fs-3 fw-semibold mb-0">Expiry Date</h6>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script type="text/javascript">
        $(function() {
            var dataTable = $('#datatable').DataTable({
                dom: "Bfrtip",
                buttons: ["copy", "csv", "excel", "pdf", "print"],
                processing: true,
                serverSide: true,
                scrollCollapse: true,
                scrollX: false,
                ajax: {
                    url: '{!! route('admin.coupons.data') !!}',
                    type: 'POST',
                    data: function(d) {
                        d._token = $('meta[name=csrf-token]').attr('content');
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'coupons.id',
                        searchable: false
                    },
                    {
                        data: 'status',
                        name: 'coupons.id',
                        searchable: false
                    },
                    {
                        data: 'package_type',
                        name: 'coupons.package_type'
                    },
                    {
                        data: 'coupon_code',
                        name: 'coupons.coupon_code'
                    },
                    {
                        data: 'discount_type',
                        name: 'coupons.discount_type'
                    },
                    {
                        data: 'discount_percentage',
                        name: 'coupons.discount_percentage'
                    },
                    {
                        data: 'discount_price',
                        name: 'coupons.discount_price'
                    },
                    {
                        data: 'start_date',
                        name: 'coupons.start_date'
                    },
                    {
                        data: 'expiry_date',
                        name: 'coupons.expiry_date'
                    },
                ],
                order: [],
                columnDefs: [{
                    targets: [0, 2],
                    className: "text-center"
                }, ],
            });
            $(
                ".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
            ).addClass("btn btn-primary mr-1");

            $(document).on('change', '.coupons-status-switch, .coupons-home_featured-switch', function(e) {
                e.preventDefault();
                var routeKey = $(this).data('routekey');
                var column = $(this).data('column') ||
                    'status'; // Default to 'status' if 'column' is not defined
                var status = $(this).is(':checked') ? 'ACTIVE' : 'INACTIVE';

                // alert('column')
                var url = (column === 'home_featured') ?
                    "{{ route('admin.coupons.change.home_featured.status') }}" :
                    "{{ route('admin.coupons.change.status') }}";

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: $('meta[name=csrf-token]').attr('content'),
                        route_key: routeKey,
                        status: status,
                        column: column
                    },
                    success: function(data) {
                        if (data.status == 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });
                            if ($.fn.DataTable.isDataTable("#datatable")) {
                                $('#datatable').DataTable().draw();
                            }
                        } else {
                            toastr.error(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });
                        }
                    },
                    error: function(data) {
                        toastr.error('Something went wrong!');
                    }
                });
            });
        });
    </script>
@endsection
