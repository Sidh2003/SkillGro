<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /* =========================
        INDEX
    ========================== */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.Courses.index', compact('categories'));
    }

    /* =========================
        DATATABLE DATA
    ========================== */
    public function data(Request $request)
    {
        $query = Course::with('category');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }

        if ($request->filled('title_search')) {
            $query->where('title', 'like', '%' . $request->title_search . '%');
        }

        $query->orderByDesc('id');

        return DataTables::eloquent($query)
            ->addIndexColumn()

            ->editColumn('photo', function ($course) {
                $url = $course->photo
                    ? asset('storage/' . $course->photo)
                    : asset('default-image.jpg');

                return '<img src="' . $url . '" width="70" height="70" style="border-radius:8px;object-fit:cover;">';
            })

            ->editColumn('status', function ($course) {
                return '
                <div class="form-check form-switch">
                    <input class="form-check-input course-status-switch"
                        type="checkbox"
                        data-id="' . $course->id . '"
                        ' . ($course->status === 'ACTIVE' ? 'checked' : '') . '>
                </div>';
            })

            ->addColumn('action', function ($course) {
                return '
                <a href="' . route('admin.courses.edit', $course->id) . '" class="badge bg-warning">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="javascript:void(0)" class="badge bg-danger delete-course" data-id="' . $course->id . '">
                    <i class="fa fa-trash"></i>
                </a>';
            })

            ->rawColumns(['photo', 'status', 'action'])
            ->make(true);
    }

    /* =========================
        CREATE
    ========================== */
    public function create()
    {
        $categories = Category::all();
        $course = null;
        return view('Admin.Courses.form', compact('categories', 'course'));
    }

    /* =========================
        STORE
    ========================== */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|alpha_dash|unique:courses,slug',
            'price' => 'nullable|numeric',
            'teacher' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'course_description' => 'nullable|string',
            'short_description' => 'nullable|string|max:1000',
            'level' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'lesson' => 'nullable|numeric',
            'quizzes' => 'nullable|numeric',
            'weekly_test' => 'nullable|string|max:255',
            'certificate' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'status' => 'nullable|in:ACTIVE,INACTIVE',
            'home_featured' => 'nullable|in:ACTIVE,INACTIVE',
        ]);

        $course = new Course();
        $course->fill($validated);

        if (!$course->slug) {
            $course->slug = Str::slug($course->title) . '-' . Str::random(6);
        }

        if ($request->hasFile('photo')) {
            $course->photo = $request->photo->store('photos', 'public');
        }

        if ($request->has('pointers')) {
            $course->pointers = json_encode(array_filter($request->pointers));
        }

        $course->created_by = Auth::id();
        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course created successfully'
        ], 201);
    }

    /* =========================
        EDIT
    ========================== */
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('Admin.Courses.form', compact('categories', 'course'));
    }

    /* =========================
        UPDATE
    ========================== */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|alpha_dash|unique:courses,slug,' . $course->id,
            'price' => 'nullable|numeric',
            'teacher' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'course_description' => 'nullable|string',
            'short_description' => 'nullable|string|max:1000',
            'level' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'lesson' => 'nullable|numeric',
            'quizzes' => 'nullable|numeric',
            'weekly_test' => 'nullable|string|max:255',
            'certificate' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'status' => 'nullable|in:ACTIVE,INACTIVE',
            'home_featured' => 'nullable|in:ACTIVE,INACTIVE',
        ]);

        $course->fill($validated);

        if (!$course->slug) {
            $course->slug = Str::slug($course->title) . '-' . Str::random(6);
        }

        if ($request->hasFile('photo')) {
            if ($course->photo && Storage::disk('public')->exists($course->photo)) {
                Storage::disk('public')->delete($course->photo);
            }
            $course->photo = $request->photo->store('photos', 'public');
        }

        if ($request->has('pointers')) {
            $course->pointers = json_encode(array_filter($request->pointers));
        }

        $course->updated_by = Auth::id();
        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course updated successfully'
        ], 200);
    }

    /* =========================
        STATUS CHANGE
    ========================== */
    public function changeStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:courses,id',
            'status' => 'required|in:ACTIVE,INACTIVE'
        ]);

        $course = Course::findOrFail($request->id);
        $course->status = $request->status;
        $course->updated_by = Auth::id();
        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Status updated successfully'
        ]);
    }

    /* =========================
        DELETE
    ========================== */
    public function destroy(Course $course)
    {
        if ($course->photo && Storage::disk('public')->exists($course->photo)) {
            Storage::disk('public')->delete($course->photo);
        }

        $course->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Course deleted successfully'
        ]);
    }
}
