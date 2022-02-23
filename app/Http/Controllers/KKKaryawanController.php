<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
 
class KKKaryawanController extends Controller
{
    // all karyawan
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Karyawan::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function list()
    {
        return view('karyawan');
    }

}
