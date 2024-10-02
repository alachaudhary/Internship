<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("student_view", compact("students"));
    }

    public function studentProfile()
    {
        // Get the logged-in user's email
        $userEmail = Auth::user()->email;

        // Find the student by matching email
        $student = Student::where('email', $userEmail)->first();

        // Check if student data exists
        if ($student) {
            // Return the view with student data
            return view('user.studentProfile', ['student' => $student]);
        } else {
            // Return an error view or redirect if no matching student is found
            return redirect()->back()->with('error', 'No student data found for this user.');
        }
    }

public function studentCourse()
{
    $userEmail = Auth::user()->email;

    // Find the student by matching email
    $student = Student::where('email', $userEmail)->first();
    $st = Student::with('sections.course')->findOrFail($student->id);

    return view('user.studentCourse', compact('st'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $st=new Student();
        $st->name= $request->name;
        $st->father_name= $request->father_name;
        $st->gender= $request->gender;
        $st->age= $request->age;
        $st->program= $request->program;

        $st->email= $request->email;
        $st->phone= $request->phone;
        $st->address= $request->address;
        $st->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $query = Student::query();
    
        $query->where('name', 'like', '%' . $request->search_name . '%');
    
        $students = $query->get();
    
        return view('search', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show()
    {
    }
    public function edit($id)
    {
        $id= Student::find($id);
        return view('edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $st=Student::find($id);
        $st->name= $request->name;
        $st->father_name= $request->father_name;
        $st->gender= $request->gender;
        $st->age= $request->age;
        $st->program= $request->program;
        $st->email= $request->email;
        $st->phone= $request->phone;
        $st->address= $request->address;
        $st->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $st=Student::find($id)->delete();
        return redirect()->route('students.index');
    }
    public function uploadImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $student = Student::findOrFail($id);
    
        if ($request->hasFile('image')) {
            if ($student->image) {
                Storage::delete('public/' . $student->image);
            }
    
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName, 'public');
            $student->image = 'images/' . $imageName;
        }
    
        $student->save();
    
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
    

}
