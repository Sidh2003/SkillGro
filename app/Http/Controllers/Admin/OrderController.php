<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    // Display orders index page
    public function index()
    {
        return view('Admin.Orders.index');
    }

    // Fetch data for DataTable
    public function data(Request $request)
    {
        $query = Order::query();

        return DataTables::eloquent($query)
            ->editColumn('full_name', function ($order) {
                return $order->full_name;
            })
            ->editColumn('mobile', function ($order) {
                return $order->mobile;
            })
            ->editColumn('email', function ($order) {
                return $order->email;
            })
            ->editColumn('coupon_code', function ($order) {
                return $order->coupon_code;
            })
            ->editColumn('price', function ($order) {
                return $order->price;
            })
            ->editColumn('course_name', function ($order) {
                return $order->course_name;
            })
            ->editColumn('razorpay_order_id', function ($order) {
                return $order->razorpay_order_id;
            })
            ->addIndexColumn()
            ->rawColumns(['full_name', 'mobile', 'email', 'coupon_code', 'price', 'course_name', 'razorpay_order_id'])
            ->setRowId('id')
            ->make(true);
    }

    // Fetch all orders for API or JSON response
    public function list()
    {
        $orders = Order::with('customer', 'vendor')->get(); // Eager loading related models for optimization
        return response()->json([
            'status' => 'success',
            'list' => $orders
        ], 200);
    }

    // Show create form
    public function create()
    {
        //
    }

    // Store new order in database
    public function store(Request $request)
    {
        //
    }

    // Show order details for editing
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('Admin.Orders.show', compact('order'));
    }

    // Show edit form
    public function edit($id)
    {
        //
    }

    // Update an existing order
    public function update(Request $request, $id)
    {
        //
    }

    // Delete an order
    public function destroy($id)
    {
        //
    }
}
