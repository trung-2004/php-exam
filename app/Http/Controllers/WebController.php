<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view("welcome");
    }

    public function listStudent() {
        $students =Student::paginate(12);
        return view("list-student", [
            "students" => $students
        ]);
    }

    public function createStudent() {
        return view("create-student", [

        ]);
    }
    public function saveStudent(Request $request) {
        $request->validate([
            "name"=>"required",
            "age"=>"required|numeric|min:0",
            "address"=>"required",
            "telephone" => "required|min:10|max:12"
        ],[
            // thong bao gi thi thong bao
        ]);
        Student::create([
            "name" => $request->get("name"),
            "age" => $request->get("age"),
            "address" => $request->get("address"),
            "telephone" => $request->get("telephone")
        ]);
        return redirect()->to("/list-student");
    }
}
