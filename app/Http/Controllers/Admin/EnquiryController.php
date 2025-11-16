<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('Admin.Enquiries.index');
    }

    public function data(Request $request)
    {
        $query = Enquiry::where('id', '!=', 0);

        return DataTables::eloquent($query)
            ->editColumn('datetime', function ($enquiry) {
                return toIndianDateTime($enquiry->created_at);
            })
            ->editColumn('full_name', function ($enquiry) {
                return $enquiry->full_name;
            })
            ->editColumn('subject', function ($enquiry) {
                return $enquiry->subject;
            })
            ->editColumn('email', function ($enquiry) {
                return $enquiry->email;
            })
            ->editColumn('message', function ($enquiry) {
                return mb_strimwidth($enquiry->message, 0, 97, '...');
            })
            ->addColumn('action', function ($enquiry) {
                $show = '<a href="' . route('admin.enquiries.show', ['enquiry' => $enquiry->route_key]) . '" class="badge bg-info fs-1 modal-one-btn" data-entity="enquiries" data-title="Enquiry" data-route-key="' . $enquiry->route_key . '"><i class="fa fa-eye"></i></a>';
                return $show;
            })
            ->addIndexColumn()
            ->rawColumns(['datetime', 'full_name', 'subject', 'email', 'mobile', 'status', 'action'])->setRowId('id')->make(true);
    }

    public function list()
    {
        $enquiries = Enquiry::all();
        return response()->json([
            'status' => 'success',
            'list' => $enquiries
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(Enquiry $enquiry)
    {
        return view('Admin.Enquiries.show', compact('enquiry'));
    }

    public function edit(Enquiry $enquiry)
    {
        //
    }

    public function update(Request $request, $enquiry)
    {
        //
    }

    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
