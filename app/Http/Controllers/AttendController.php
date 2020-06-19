<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Semester;
use App\attendance;
use DB;
class AttendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x=1;
 return View('attendance.index')->with('teacheres', Teacher::all())
                                     ->with("semesters",Semester::all())
                                      ->with("attendances",attendance::all())
                                     ->with('x', $x);    }

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
                                      ->with("attendances",attendance::all())
                                     ->with('x', $x);
    }


    public function store(Request $request )
    {
        if($request->teachAttend){
        $count = count($request->teachAttend);
        for ($i=0;$i<$count;$i++){
             $teach=attendance::create([
                  "teacher_id"=>$request->teachAttend[$i],
                    "status" =>"absent", 
                ]);
        }
    }
          return redirect()->back();
          
          
    }

   public function show($id)
    {
        //
    }

    public function edit($id)
    {
      
    }

    public function update(Request $request, $id)
    {
         dd($request->date);
    }

   
    public function destroy($id)
    {
        //
    }
}
