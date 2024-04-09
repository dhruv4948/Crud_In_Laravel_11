<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent()
    {
        $stu = DB::table('student')->get();
        return view('student', ['dt' => $stu]);
    }
    public function showSingleStudent(string $id)
    {
        $studennn = DB::table('student')->where('id', $id)->get();
        return view('studentdetail', ['singledt' => $studennn]);
    }

    public function addStudent(Request $req)
    {
        $student = DB::table('student')->insert([
            'name' => $req->studentname,
            'age' => $req->studentage,
            'email' => $req->studentemail,
            'city' => $req->studentcity,
            'phone' => $req->studentphone,
            'password' => $req->studentpassword,
            'adress' => $req->studentaddress,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if ($student) {
            return redirect()->route('view.student');
        } else {
            echo '<h1>Error while Entering data</h1>';
        }
    }
    public function updateStudent(Request $req, $id)
    {
        $update = DB::table('student')->where('id', $id)->update(
            [
                'name' => $req->studentname,
                'age' => $req->studentage,
                'email' => $req->studentemail,
                'city' => $req->studentcity,
                'phone' => $req->studentphone,
                'password' => $req->studentpassword,
                'adress' => $req->studentaddress,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        if ($update) {
            return redirect()->route('view.student');
        } else {
            echo ('data not updated');
        }
    }

    //this function is used to  get details and fill textInputs When you update
    public function updatestudentdetails(string $id)
    {
        $updateDetails = DB::table('student')->where('id', $id)->find($id);
        // return ($updateDetails);
        return view('updatestudent', ['data' => $updateDetails]);
    }


    public function deleteStudent(string $id)
    {
        $delete = DB::table('student')->where('id', $id)->delete();

        if ($delete) {
            return redirect()->route('view.student');
        } else {
            echo ('err');
        }
    }
}