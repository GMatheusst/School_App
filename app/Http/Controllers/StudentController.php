<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Http\Requests\StoreUpdateStudentRequest;

class StudentController extends Controller
{
    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        return response()->json($student, 201);
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
       
        return response()->json($student, 200);
    }
}
