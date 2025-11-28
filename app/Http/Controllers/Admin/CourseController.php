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
    public function index()
    {
        $courses = Course::all();
        $teachers = Course::distinct()->pluck('teacher');
        $categories = Category::all();
        return view('Admin.Courses.index', compact('courses', 'teachers', 'categories'));
    }

    public function data(Request $request)
    {
        $query = Course::query();

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->title_id) {
            $query->where('id', $request->title_id);
        }

        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        $query->orderByDesc('id');

        return DataTables::eloquent($query)
            ->editColumn('category', function ($course) {
                return $course->category ? $course->category->name : 'N/A';
            })
            ->editColumn('title', function ($course) {
                return $course->title ?? 'N/A';
            })

            // ⭐ FINAL FIXED IMAGE DISPLAY ⭐
            ->editColumn('photo', function ($course) {
                if (!$course->photo) {
                    return '<img src="' . asset('default-image.jpg') . '" width="80" height="80" style="object-fit:cover;border-radius:8px;">';
                }

                // Correct path (guaranteed working)
                $photoUrl = asset('storage/' . $course->photo);

                return '<img src="' . $photoUrl . '" width="80" height="80" style="object-fit:cover;border-radius:8px;">';
            })

            ->editColumn('price', function ($course) {
                return $course->price ?? 'N/A';
            })

            ->editColumn('teacher', function ($course) {
                return $course->teacher ?? 'N/A';
            })

            ->editColumn('status', function ($course) {
                return '<div class="form-check form-switch">
                        <input class="form-check-input course-status-switch" type="checkbox" ' .
                    ($course->status === 'ACTIVE' ? 'checked' : '') . ' data-id="' . $course->id . '">
                    </div>';
            })

            ->addColumn('action', function ($course) {
                $edit = '<a href="' . route('admin.courses.edit', ['course' => $course->id]) . '" class="badge bg-warning fs-1">
                            <i class="fa fa-edit"></i>
                         </a>';

                $delete = '<a href="javascript:void(0);" class="badge bg-danger fs-1 delete-course" data-id="' . $course->id . '">
                            <i class="fa fa-trash"></i>
                           </a>';

                return $edit . ' ' . $delete;
            })

            ->addIndexColumn()
            ->rawColumns(['photo', 'status', 'action'])
            ->setRowId('id')
            ->make(true);
    }

    public function list()
    {
        $courses = Course::all();
        return response()->json([
            'status' => 'success',
            'list' => $courses
        ], 200);
    }

    public function create()
    {
        $categories = Category::all();
        $course = null;
        return view('Admin.Courses.form', compact('categories', 'course'));
    }

    public function store(Request $request)
    {
        $rules = [
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
            'weekly_test' => 'nullable|numeric',
            'certificate' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'status' => 'nullable|in:ACTIVE,INACTIVE',
            'home_featured' => 'nullable|in:ACTIVE,INACTIVE',
        ];

        $validated = $request->validate($rules);

        $course = new Course();
        $course->fill($validated);

        if (!$course->slug && $course->title) {
            $course->slug = Str::slug($course->title) . '-' . Str::random(6);
        }

        // ⭐ FIXED IMAGE STORAGE ⭐
        if ($request->hasFile('photo')) {
            $course->photo = $request->photo->store('photos', 'public');
        }

        if (Auth::check()) {
            $course->created_by = Auth::id();
        }

        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course created successfully',
            'course' => $course
        ], 201);
    }

    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('Admin.Courses.form', compact('categories', 'course'));
    }

    public function update(Request $request, Course $course)
    {
        $rules = [
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
            'weekly_test' => 'nullable|numeric',
            'certificate' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'status' => 'nullable|in:ACTIVE,INACTIVE',
            'home_featured' => 'nullable|in:ACTIVE,INACTIVE',
        ];

        $validated = $request->validate($rules);

        $course->fill($validated);

        if (!$course->slug && $course->title) {
            $course->slug = Str::slug($course->title) . '-' . Str::random(6);
        }

        // ⭐ FIXED UPDATE IMAGE ⭐
        if ($request->hasFile('photo')) {
            if ($course->photo && Storage::disk('public')->exists($course->photo)) {
                Storage::disk('public')->delete($course->photo);
            }

            $course->photo = $request->photo->store('photos', 'public');
        }

        if (Auth::check()) {
            $course->updated_by = Auth::id();
        }

        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course updated successfully',
            'course' => $course
        ], 200);
    }

    public function changeHomeFeaturedStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:courses,id',
            'status' => 'required|in:ACTIVE,INACTIVE'
        ]);

        $course = Course::findOrFail($request->id);
        $course->home_featured = $request->status;
        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Home featured status updated',
            'course' => $course
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:courses,id',
            'status' => 'required|in:ACTIVE,INACTIVE'
        ]);

        $course = Course::findOrFail($request->id);
        $course->status = $request->status;

        if (Auth::check()) {
            $course->updated_by = Auth::id();
        }

        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Status updated',
            'course' => $course
        ], 200);
    }

    public function destroy(Course $course)
    {
        try {
            if ($course->photo && Storage::disk('public')->exists($course->photo)) {
                Storage::disk('public')->delete($course->photo);
            }

            $course->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Course deleted successfully.'
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete course: ' . $e->getMessage()
            ], 500);
        }
    }
}
