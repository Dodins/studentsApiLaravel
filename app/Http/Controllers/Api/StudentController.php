<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Student::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year' => 'required|in:First Year,Second Year,Third Year,Fourth Year,Fifth Year',
            'enrolled' => 'required|boolean',
        ]);

        $student = Student::create($request->all());
        return response()->json($student, 201);
    }
    public function show(Student $student)
     {
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year' => 'required|in:First Year,Second Year,Third Year,Fourth Year,Fifth Year',
            'enrolled' => 'required|boolean',
        ]);

        $student->update($request->all());
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
      public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(null, 204);
    }
}

