<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Section;


class CourseController extends Controller
{
    public function create(Request $request)
    {
       return view('create_course');

    }
    public function store(Request $request)
    {
        $c=new Course();
        $c->course_name= $request->course_name;
        $c->course_duration= $request->course_duration;
      
        $c->save();
        return redirect()->route('courses.index');
    }
    public function index()
{
    $courses = Course::all();
    return view("Course_view", compact("courses"));
}
public function show($id)
{
    $course = Course::findOrFail($id);
    $sections = $course->sections;

    return view("section_view", compact("sections"));
}
public function edit($id)
{
    $id= Course::find($id);
    return view('edit_course', compact('id'));
}

public function update(Request $request,$id)
{
    $course=Course::find($id);
    $course->course_name= $request->course_name;
    $course->course_duration= $request->course_duration;
    $course->save();
    return redirect()->route('courses.index');
}
public function destroy($id)
{
    $course = Course::findOrFail($id);
    $course->sections()->delete();
    $course->delete();

    return redirect()->route('courses.index')->with('success', 'Course and related sections deleted successfully.');
}

}


