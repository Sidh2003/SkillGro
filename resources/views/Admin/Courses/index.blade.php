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

                    <!-- Header -->
                    <div class="card-header px-4 py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title fw-semibold mb-0">Courses</h5>
                            <a href="{{ route('admin.courses.create') }}" class="btn btn-info">
                                Create <i class="ti ti-plus"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Filters -->
                    <div class="card-body">
                        <div class="row mb-2">

                            <div class="col-md-3 mb-2">
                                <label class="form-label">Category</label>
                                <select class="form-control select2" id="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                <input type="text" id="title_search" class="form-control" placeholder="Search Title">
                            </div>

                        </div>
                    </div>

                    <!-- Table -->
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm text-nowrap align-middle" id="datatable">
                                <thead class="text-dark fs-3">
                                    <tr>
                                        <th>#</th>
                                        <th>Edit</th>
                                        <th>Status</th>
                                        <th>Photo</th>
                                        <th>Course Name</th>
                                        <th>Category</th>
                                        <th>Slug</th>
                                        <th>Price</th>
                                        <th>Teacher</th>
                                        <th>Level</th>
                                        <th>Duration</th>
                                        <th>Home Featured</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {

            $('.select2').select2({
                width: '100%'
            });

            let table = $('#datatable').DataTable({
                dom: "Bfrtip",
                buttons: ["copy", "csv", "excel", "pdf", "print"],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.courses.data') }}",
                    type: "POST",
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
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'photo',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'course_name'
                    },
                    {
                        data: 'category',
                        name: 'category.name'
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
                    className: 'text-center'
                }]
            });

            // Filters
            $('#category_id, #status, #level').on('change', function() {
                table.draw();
            });

            $('#title_search').on('keyup', function() {
                table.draw();
            });

            // Status Toggle (FIXED)
            $(document).on('change', '.course-status-switch', function() {
                let id = $(this).data('id');

                $.post("{{ route('admin.courses.change.status') }}", {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    id: id,
                    status: $(this).is(':checked') ? 'ACTIVE' : 'INACTIVE'
                }, function(res) {
                    toastr.success(res.message);
                }).fail(function(xhr) {
                    toastr.error(xhr.responseJSON.message);
                });
            });

            // Delete Course
            $(document).on('click', '.delete-course', function() {
                let id = $(this).data('id');

                if (confirm('Are you sure you want to delete this course?')) {
                    $.ajax({
                        url: `/admin/courses/${id}`,
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name=csrf-token]').attr('content')
                        },
                        success: function(res) {
                            toastr.success(res.message);
                            table.ajax.reload();
                        }
                    });
                }
            });

            $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel")
                .addClass("btn btn-primary me-1");
        });
    </script>
@endsection
