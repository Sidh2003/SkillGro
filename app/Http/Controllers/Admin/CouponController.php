<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Coupon;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CouponController extends Controller
{
    public function index()
    {
        return view('Admin.Coupons.index');
    }

    public function data(Request $request)
    {
        $query = Coupon::query()->orderByDesc('id');

        return DataTables::eloquent($query)
            ->editColumn('coupon_code', fn($coupon) => $coupon->coupon_code)
            ->editColumn('discount_type', fn($coupon) => ucfirst($coupon->discount_type))
            ->editColumn('discount_percentage', function ($coupon) {
                return $coupon->discount_percentage ? $coupon->discount_percentage . ' %' : 'NA';
            })
            ->editColumn('discount_price', function ($coupon) {
                return $coupon->discount_price ? '₹ ' . number_format($coupon->discount_price, 2) : 'NA';
            })

            ->editColumn('package_type', fn($coupon) => $coupon->package_type)
            ->editColumn('expiry_date', fn($coupon) => Carbon::parse($coupon->expiry_date)->format('d-m-Y'))
            ->addColumn('start_date', function ($coupon) {
                if (!$coupon->start_date) {
                    return 'N/A';
                }
                return Carbon::parse($coupon->start_date)->format('d-m-Y');
            })
            ->editColumn('status', function ($coupon) {
                $checked = $coupon->status === 'ACTIVE' ? 'checked' : '';
                return '<div class="form-check form-switch">
                            <input class="form-check-input coupons-status-switch" type="checkbox" ' . $checked . ' data-routekey="' . $coupon->route_key . '"/>
                        </div>';
            })
            ->addColumn('action', function ($coupon) {
                $edit = '<a href="' . route('admin.coupons.edit', $coupon->id) . '" class="badge bg-warning fs-1"><i class="fa fa-edit"></i></a>';
                $show = '<a href="' . route('admin.coupons.show', $coupon->id) . '" class="badge bg-info fs-1 modal-one-btn" data-entity="coupons" data-title="Coupon Details" data-route-key="' . $coupon->route_key . '"><i class="fa fa-eye"></i></a>';
                return $edit . ' ' . $show;
            })
            ->addIndexColumn()
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    public function create()
    {
        $courses = Course::where('status', 'ACTIVE')->get(); // Only active courses
        return view('admin.coupons.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules(), $this->messages());

        $coupon = new Coupon();
        $coupon->coupon_code = $validated['coupon_code'];
        $coupon->discount_type = $validated['discount_type'];
        $coupon->package_type = $validated['package_type'];
        $coupon->expiry_date = $validated['expiry_date'];
        $coupon->start_date = $request->start_date ?? now()->toDateString();
        $coupon->status = 'ACTIVE';

        if ($request->discount_type === 'percentage') {
            $coupon->discount_percentage = $request->discount_percentage;
            $coupon->discount_price = null;
        } elseif ($request->discount_type === 'price') {
            $coupon->discount_price = $request->discount_price;
            $coupon->discount_percentage = null;
        }

        $coupon->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Coupon created successfully.',
            'coupon' => $coupon
        ], 201);
    }

    public function edit(Coupon $coupon)
    {
        $courses = Course::where('status', 'ACTIVE')->get();
        return view('admin.coupons.form', compact('coupon', 'courses'));
    }

    public function update(Request $request, Coupon $coupon)
    {
        $validated = $request->validate($this->rules($coupon->id), $this->messages());

        $coupon->coupon_code = $validated['coupon_code'];
        $coupon->discount_type = $validated['discount_type'];
        $coupon->package_type = $validated['package_type'];
        $coupon->start_date = $request->start_date ?? now()->toDateString();
        $coupon->expiry_date = $validated['expiry_date'];

        $coupon->expiry_date = $validated['expiry_date'];
        if ($request->discount_type === 'percentage') {
            $coupon->discount_percentage = $request->discount_percentage;
            $coupon->discount_price = null;
        } elseif ($request->discount_type === 'price') {
            $coupon->discount_price = $request->discount_price;
            $coupon->discount_percentage = null;
        }

        $coupon->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Coupon updated successfully.',
            'coupon' => $coupon
        ], 200);
    }

    public function show(Coupon $coupon)
    {
        return view('Admin.Coupons.show', compact('coupon'));
    }

    public function list()
    {
        $coupons = Coupon::all();
        return view('Admin.Coupons.index', compact('coupons'));
    }

    public function changeStatus(Request $request)
    {
        $coupon = Coupon::findByKey($request->route_key);
        $coupon->status = $request->status;
        $coupon->save();

        return response()->json([
            'status' => 'success',
            'message' => "{$coupon->coupon_code} status updated to {$coupon->status}.",
            'coupon' => $coupon
        ]);
    }

    private function rules($id = null)
    {
        return [
            'coupon_code' => 'required|string|max:191|unique:coupons,coupon_code' . ($id ? ",$id" : ''),
            'discount_type' => 'required|in:percentage,price',
            'package_type' => 'required|string|max:191',
            'start_date' => 'required|date|after_or_equal:today',
            'expiry_date' => 'required|date|after_or_equal:start_date',
        ];
    }

    private function messages()
    {
        return [
            'coupon_code.required' => 'Coupon code is required.',
            'coupon_code.unique' => 'This coupon code already exists.',
            'discount_type.required' => 'Please select a discount type.',
            'discount_type.in' => 'Invalid discount type selected.',
            'package_type.required' => 'Package type is required.',
            'expiry_date.required' => 'Expiry date is required.',
            'expiry_date.after_or_equal' => 'Expiry date must be today or a future date.',
        ];
    }
}
