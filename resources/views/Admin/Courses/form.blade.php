@extends('layouts.admin')
@section('title', 'Course Management')

@section('content')

    <!-- Editor.js -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

    <form method="POST"
        action="{{ Route::is('admin.courses.create') ? route('admin.courses.store') : route('admin.courses.update', ['course' => $course->id ?? null]) }}"
        enctype="multipart/form-data" autocomplete="off" id="courses-form">

        @csrf
        {{ Route::is('admin.courses.create') ? '' : method_field('PUT') }}

        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5>{{ Route::is('admin.courses.create') ? 'Create' : 'Edit' }} Course</h5>
                    </div>

                    <div class="card-body border-top">
                        <div class="row mt-4">

                            <!-- Category -->
                            <div class="col-md-6 mb-3">
                                <label>Category <sup class="text-danger">*</sup></label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ isset($course) && $course->category_id == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div id="category_id-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Title -->
                            <div class="col-md-6 mb-3">
                                <label>Title <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ $course->title ?? '' }}" placeholder="Course title...">
                                <div id="title-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Slug -->
                            <div class="col-md-6 mb-3">
                                <label>Slug <sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    value="{{ $course->slug ?? '' }}" placeholder="Auto generated...">
                                <div id="slug-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Price -->
                            <div class="col-md-6 mb-3">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $course->price ?? '' }}"
                                    placeholder="Enter price...">
                                <div id="price-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Teacher -->
                            <div class="col-md-6 mb-3">
                                <label>Teacher Name</label>
                                <input type="text" class="form-control" name="teacher"
                                    value="{{ $course->teacher ?? '' }}" placeholder="Teacher name...">
                                <div id="teacher-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Photo -->
                            <div class="col-md-6 mb-3">
                                <label>Thumbnail Image</label>
                                <input type="file" class="form-control" name="photo">
                                <div id="photo-error" class="text-danger mt-1"></div>

                                @if (isset($course->photo))
                                    <img src="{{ Storage::url($course->photo) }}" width="100" height="100"
                                        class="mt-2 rounded">
                                @endif
                            </div>

                            <!-- Short Description -->
                            <div class="col-md-12 mb-3">
                                <label>Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3">{{ $course->short_description ?? '' }}</textarea>
                                <div id="short_description-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Level -->
                            <div class="col-md-4 mb-3">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="">Select Level</option>
                                    <option value="All Skill"
                                        {{ isset($course) && $course->level == 'All Skill' ? 'selected' : '' }}>All Skill
                                    </option>
                                    <option value="Beginner"
                                        {{ isset($course) && $course->level == 'Beginner' ? 'selected' : '' }}>Beginner
                                    </option>
                                    <option value="Intermediate"
                                        {{ isset($course) && $course->level == 'Intermediate' ? 'selected' : '' }}>
                                        Intermediate</option>
                                    <option value="High"
                                        {{ isset($course) && $course->level == 'High' ? 'selected' : '' }}>High</option>
                                </select>
                                <div id="level-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Duration -->
                            <div class="col-md-4 mb-3">
                                <label>Duration</label>
                                <input type="text" name="duration" class="form-control"
                                    value="{{ $course->duration ?? '' }}" placeholder="e.g. 3 Months...">
                                <div id="duration-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Lessons -->
                            <div class="col-md-4 mb-3">
                                <label>Total Lessons</label>
                                <input type="number" name="lesson" class="form-control"
                                    value="{{ $course->lesson ?? '' }}">
                                <div id="lesson-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Quizzes -->
                            <div class="col-md-4 mb-3">
                                <label>Quizzes</label>
                                <input type="number" name="quizzes" class="form-control"
                                    value="{{ $course->quizzes ?? '' }}">
                                <div id="quizzes-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Weekly Test -->
                            <div class="col-md-4 mb-3">
                                <label>Weekly Test</label>
                                <input type="text" name="weekly_test" class="form-control"
                                    value="{{ $course->weekly_test ?? '' }}">
                                <div id="weekly_test-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Certificate -->
                            <div class="col-md-4 mb-3">
                                <label>Certificate</label>
                                <input type="text" name="certificate" class="form-control"
                                    value="{{ $course->certificate ?? '' }}">
                                <div id="certificate-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Language -->
                            <div class="col-md-4 mb-3">
                                <label>Language</label>
                                <select name="language" class="form-control">
                                    <option value="">Select Language</option>
                                    <option value="All"
                                        {{ isset($course) && $course->language == 'All' ? 'selected' : '' }}>All</option>
                                    <option value="English"
                                        {{ isset($course) && $course->language == 'English' ? 'selected' : '' }}>English
                                    </option>
                                    <option value="Hindi"
                                        {{ isset($course) && $course->language == 'Hindi' ? 'selected' : '' }}>Hindi
                                    </option>
                                    <option value="Marathi"
                                        {{ isset($course) && $course->language == 'Marathi' ? 'selected' : '' }}>Marathi
                                    </option>
                                </select>
                                <div id="language-error" class="text-danger mt-1"></div>
                            </div>


                            <!-- Status -->
                            <div class="col-md-4 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="ACTIVE"
                                        {{ isset($course) && $course->status == 'ACTIVE' ? 'selected' : '' }}>ACTIVE
                                    </option>
                                    <option value="INACTIVE"
                                        {{ isset($course) && $course->status == 'INACTIVE' ? 'selected' : '' }}>INACTIVE
                                    </option>
                                </select>
                                <div id="status-error" class="text-danger mt-1"></div>
                            </div>

                            <!-- Home Featured -->
                            <div class="col-md-4 mb-3">
                                <label>Home Featured</label>
                                <select name="home_featured" class="form-control">
                                    <option value="ACTIVE"
                                        {{ isset($course) && $course->home_featured == 'ACTIVE' ? 'selected' : '' }}>ACTIVE
                                    </option>
                                    <option value="INACTIVE"
                                        {{ isset($course) && $course->home_featured == 'INACTIVE' ? 'selected' : '' }}>
                                        INACTIVE</option>
                                </select>
                                <div id="home_featured-error" class="text-danger mt-1"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Description (EditorJS) -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5>Course Description</h5>
                    </div>
                    <div class="card-body border-top">
                        <div id="editorjs"></div>
                        <div id="course_description-error" class="text-danger mt-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pointers -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-header">
                        <h5>Course Pointers</h5>
                    </div>

                    <div class="card-body border-top">
                        <div id="pointers-wrapper">
                            @if (isset($course) && $course->pointers)
                                @foreach (json_decode($course->pointers, true) as $point)
                                    <div class="pointer-row mb-2 d-flex">
                                        <input type="text" name="pointers[]" class="form-control"
                                            value="{{ $point }}">
                                        <button type="button" class="btn btn-danger ms-2 remove-pointer">X</button>
                                    </div>
                                @endforeach
                            @else
                                <div class="pointer-row mb-2 d-flex">
                                    <input type="text" name="pointers[]" class="form-control"
                                        placeholder="Enter point">
                                    <button type="button" class="btn btn-danger ms-2 remove-pointer">X</button>
                                </div>
                            @endif
                        </div>

                        <button type="button" id="add-pointer" class="btn btn-primary mt-2">+ Add More</button>
                        <div id="pointers-error" class="text-danger mt-1"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Scripts -->
    <script>
        const editor = new EditorJS({
            holder: 'editorjs',
            tools: {
                header: Header,
                list: EditorjsList,
                image: ImageTool,
                table: Table,
                quote: Quote,
                linkTool: LinkTool
            },
            data: {!! isset($course) && $course->course_description ? $course->course_description : '{}' !!}
        });

        /* Add More Pointer */
        $("#add-pointer").click(() => {
            $("#pointers-wrapper").append(`
        <div class="pointer-row mb-2 d-flex">
            <input type="text" name="pointers[]" class="form-control" placeholder="Enter point">
            <button type="button" class="btn btn-danger ms-2 remove-pointer">X</button>
        </div>
    `);
        });

        $(document).on("click", ".remove-pointer", function() {
            $(this).closest(".pointer-row").remove();
        });

        /* Submit Form */
        $('#courses-form').submit(async function(e) {
            e.preventDefault();

            const savedData = await editor.save();
            var formData = new FormData(this);
            formData.append('course_description', JSON.stringify(savedData));

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    toastr.success(data.message);
                    setTimeout(() => location.href = "{{ route('admin.courses.index') }}", 800);
                },
                error: function(xhr) {
                    $.each(xhr.responseJSON.errors, function(key, val) {
                        $('#' + key + '-error').html(val);
                    });
                }
            });
        });

        /* Auto Slug */
        $('#title').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().replace(/ /g, '-'));
        });
    </script>

@endsection
