<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Toastr;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(5);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = Filiere::all();
        return view('student.create', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email',
            'phone' => 'required',
            'filiere_id' => 'required|exists:filieres,id',
            'birthdate' => 'required',
        ]);
        $data = $request->except('_token');
        Student::create($data);
        Toastr::success('Etudiant ajouter avec success');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $filieres = Filiere::all();
        return view('student.edit', compact('filieres', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email,' . $student->id,
            'phone' => 'required',
            'filiere_id' => 'required|exists:filieres,id',
            'birthdate' => 'required',
        ]);
        $data = $request->except('_token');
        $student->update($data);
        Toastr::success('Etudiant Modifié avec success');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        Toastr::success('suppression effectuer avec success');
        return back();
    }

    public function guard()
    {
        $user = Auth::user();
        if ($user->email != 'admin@admin.com') {
            return $user;
        } else {
            return response()->json(['key' => 'l\'utilisateur n\'est pas un admin']);
        }
    }
}
