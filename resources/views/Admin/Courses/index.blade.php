@extends('layouts.admin')

@section('title')
    Courses
@endsection

@section('content')
    <style>
        .select2-container .select2-selection--single {
            height: 38px;
            display: flex;
            align-items: center;
            border: 1px solid #ced4da;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #495057;
            padding-left: 8px;
            padding-right: 8px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
        }
    </style>

    <section>
        <div class="row">
            <div class="col-12">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-header px-4 py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title fw-semibold mb-0 lh-sm">Courses</h5>
                            <a href="{{ route('admin.courses.create') }}" class="btn btn-info">
                                Create&nbsp;<i class="ti ti-plus"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Filter Section -->
                    <div class="card-body">
                        <div class="row mb-2">

                            <div class="col-md-3 mb-2">
                                <label class="form-label">Category</label>
                                <select class="form-control select2" id="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control" id="status">
                                    <option value="">Select Status</option>
                                    <option value="ACTIVE">Active</option>
                                    <option value="INACTIVE">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="form-label">Level</label>
                                <select class="form-control" id="level">
                                    <option value="">Select Level</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Advanced">Advanced</option>
                                </select>
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="form-label">Title</label>
                                <input class="form-control" type="text" id="title_search" placeholder="Search Title">
                            </div>

                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="card-body p-4">
                        <div class="table-responsive rounded-2 mb-4">
                            <table class="table table-bordered table-sm text-nowrap mb-0 align-middle" id="datatable">
                                <thead class="text-dark fs-3">
                                    <tr>
                                        <th width="3%">#</th>
                                        <th width="5%">Edit</th>
                                        <th width="5%">Status</th>
                                        <th width="8%">Photo</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Price</th>
                                        <th>Teacher</th>
                                        <th>Level</th>
                                        <th>Duration</th>
                                        <th>Home Featured</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTable AJAX -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Show -->
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="modalTitle" class="modal-title">Course Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalBody">
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('.select2').select2();

            let dataTable = $('#datatable').DataTable({
                dom: "Bfrtip",
                buttons: ["copy", "csv", "excel", "pdf", "print"],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.courses.data') }}',
                    type: 'POST',
                    data: function(d) {
                        d._token = $('meta[name=csrf-token]').attr('content');
                        d.category_id = $('#category_id').val();
                        d.status = $('#status').val();
                        d.level = $('#level').val();
                        d.title_search = $('#title_search').val();
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        searchable: false
                    },
                    {
                        data: 'status',
                        searchable: false
                    },
                    {
                        data: 'photo',
                        name: 'photo',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'slug'
                    },
                    {
                        data: 'price'
                    },
                    {
                        data: 'teacher'
                    },
                    {
                        data: 'level'
                    },
                    {
                        data: 'duration'
                    },
                    {
                        data: 'home_featured'
                    }
                ],
                columnDefs: [{
                    targets: [0, 1, 2],
                    className: "text-center"
                }]
            });

            // Filter Redraw
            $('#category_id, #status, #level').on('change', function() {
                dataTable.draw();
            });

            $('#title_search').on('keyup', function() {
                dataTable.draw();
            });

            // Status Toggle
            $(document).on('change', '.course-status-switch', function() {
                const routeKey = $(this).data('routekey');
                const column = $(this).data('column');
                const status = $(this).is(':checked') ? 'ACTIVE' : 'INACTIVE';

                $.post("{{ route('admin.courses.change.status') }}", {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    route_key: routeKey,
                    column: column,
                    status: status
                }, function(res) {
                    toastr.success(res.message);
                });
            });

            // Delete
            $(document).on('click', '.delete-course', function() {
                const routeKey = $(this).data('routekey');

                if (confirm("Are you sure you want to delete this course?")) {
                    $.ajax({
                        url: `/admin/courses/${routeKey}`,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name=csrf-token]').attr('content')
                        },
                        success: function(data) {
                            if (data.status === 'success') {
                                toastr.success(data.message);
                                dataTable.ajax.reload();
                            } else {
                                toastr.error(data.message);
                            }
                        },
                        error: function() {
                            toastr.error("Failed to delete course.");
                        }
                    });
                }
            });

            // Style buttons
            $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel")
                .addClass("btn btn-primary me-1");
        });
    </script>
@endsection
