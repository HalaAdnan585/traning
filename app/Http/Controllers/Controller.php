<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\first;
use App\Models\second;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insertNewTeacher(Request $request){
        $second = new second();
        $second->id="1";
        $second->Name="saeed";
        $second->save();
        echo"DONE";

    }
    function insertNewStudent(Request $request){
        $first = new first();
        $first->id="1";
        $first->name="saeed";
        $first->teacher="1";
        $first->save();
        echo"DONE";

    }
    function getStudentTeacher(Request $request){

        $second = Teacher::find($second->input("S")); 
    }
    public function getStudent(Request $request){
        $first =first::find(1);
        echo $first->name;
    }
    function ShowStudentList(Request $request){
        $varid = $request->input("id");
        $teacher =second::find($varid);
        $stu = $teacher->students;
        
        return view("List", [
            "teacher" =>$teacher,
            "students"=> $stu
        ]);

    }
    function insertTeacherPost(Request $request){
        $second = new second();
        $second->id=$request->id;
        // $second->Name="saeed";
        $second->Name=$request->Name;
        $second->save();
        echo"DONE";

    }
    function showDashboardBage(Request $request){
      return view('dashboard');

    }
    
    
}
