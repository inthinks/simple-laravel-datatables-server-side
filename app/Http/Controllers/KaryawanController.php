<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Yajra\Datatables\Datatables;

class KaryawanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // all karyawan
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Karyawan::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'karyawan-action')
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function list()
    {
        return view('karyawan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $karyawanId = $request->id;
 
        $karyawan   =   Karyawan::updateOrCreate(
                    [
                     'id' => $karyawanId
                    ],
                    [
                    'nama' => $request->nama, 
                    'nip' => $request->nip,
                    'gaji' => $request->gaji
                    ]);    
                         
        return Response()->json($karyawan);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $karyawan  = Karyawan::where($where)->first();
      
        return Response()->json($karyawan);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $karyawan = Karyawan::where('id',$request->id)->delete();
      
        return Response()->json($karyawan);
    }
}
