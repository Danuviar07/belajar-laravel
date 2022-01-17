<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create()
    {
       return view('admin.lecturer.create');
    }

    public function tabel()
    {
        //select * from Lecturers
        $lecturers = Lecturer::all();
        // return response()->json($lecturers);
        // dd($lecturers);
       return view('admin.lecturer.tabel',compact('lecturers'));
    }


    public function store(Request $request)
    {
        Lecturer::create ($request->all());
        return redirect()->route('tabel-lecturer')->with('status','sukses insert Data');
     }
   
}
