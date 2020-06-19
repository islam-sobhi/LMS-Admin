<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Semester;
use App\attendance;
class AttendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $x=1;
        return View('attendance.create')->with('teacheres', Teacher::all())
                                     ->with("semesters",Semester::all())
                                     ->with('x', $x);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
//dd($request->all());
 $this->validate($request,[
          "date"=>"required",
          "id_teacher" => "required",
      
        ]);
        
      dd($request->id_teacher);
        $teach=attendance::create([
          "teacher_id"=>$request->id_teacher,
          "date" =>$request->date,
            "status" =>"absent", 
        
        ]);
          return redirect()->back();
          
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function getdata()
    {
        $date=date("y/m/d");  
     $teachers = Teacher::select('teach_name', 'degree');
     return Datatables::of($teachers)
            ->addColumn('action', function($teachers){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$teachers->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="#" class="btn btn-xs btn-danger delete" id="'.$teachers->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
            ->addColumn('checkbox', '<input type="checkbox" name="student_checkbox[]" class="student_checkbox" value="{{$id}}" />')
            ->rawColumns(['checkbox','action'])
            ->make(true);
    }

    public function update(Request $request, $id)
    {
         dd($request->date);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
