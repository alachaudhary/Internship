<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{


    public function index()
    {
        // Eager load the course relationship to avoid N+1 query problem
        $sections = Section::with('course')->get();
        return view('section_index', compact('sections'));
    }
    public function create($id)
    {
        $this->id=$id;
       return view('create_section',compact("id"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $st=new Section();
        $st->course_id= $request->course_id;
        $st->teacher_id= $request->teacher_id;
        $st->section_capacity= $request->section_capacity;
        $st->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id= Section::find($id);
        return view('edit_section', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $st=Section::find($id);
        $st->teacher_id= $request->teacher_id;
        $st->section_capacity= $request->section_capacity;
        $st->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $st=Section::find($id)->delete();
        return redirect()->route('courses.index');
    }
    public function showAddStudentForm($sectionId)
    {
        // Retrieve the section and all students
        $section = Section::findOrFail($sectionId);
        $students = Student::all();

        // Pass section and students to the view
        return view('register', compact('section', 'students'));
    }

    public function addStudentToSection(Request $request, $sectionId)
    {
        // Validate the request
        $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        // Find the section
        $section = Section::findOrFail($sectionId);

        // Attach the student to the section (in the registrations table)
        $section->students()->attach($request->student_id);

        // Redirect back or to another page with a success message
        return redirect()->back()->with('success', 'Student added to the section successfully!');
    }
}



