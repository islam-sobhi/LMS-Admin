<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Teacher;
class TeacherController extends Controller
{
     
    public function index()
    {
        $x=1;
        return View('teacheres.index')->with('teacheres', Teacher::all())
                                     ->with("semesters",Semester::all())
                                     ->with('x', $x);
              
    }

    public function create()
    {
        return View('teacheres.teacherCreate')->with('semesters',Semester::all());
    }

   
   
    public function store(Request $request)
    {
        
        $this->validate($request,[
          "name"=>"required",
          "phone" => "required",
          "address" => "required",
          "degree" => "required",
          "email" => "required",
          "sem" => "required",
        
        ]);
        
      
        $teach=Teacher::create([
          "teach_name"=>$request->name,
          "phone_number" =>$request->phone,
          "teacher_email" =>$request->email,
          "degree" =>$request->degree,
          "address"=>$request->address,
        
        ]);

        $teach->semester()->attach($request->sem);
          return redirect()->back();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
          $teach= Teacher::find($id);
           return View('teacheres.edit')->with('teacheres', $teach)
                                        ->with("semesters",Semester::all());
    }

    public function update(Request $request, $id)
    {
        
      $this->validate($request,[
          "name"=>"required",
          "phone" => "required",
          "address" => "required",
          "degree" => "required",
          "email" => "required",
          "sem" => "required",
        
        ]);
       $teach= Teacher::find($id);

       $teach->teach_name= $request->name;
       $teach->phone_number = $request->phone;
       $teach->teacher_email= $request->email;
       $teach->degree = $request->degree;
       $teach->address= $request->address;

        $teach->save();
        $teach->semester()->sync( $request->sem);
        return redirect()->back();

    }

    public function destroy($id)
    {
       $teach= Teacher::find($id);   
        $teach->delete();
       return redirect()->back();
    }
}
