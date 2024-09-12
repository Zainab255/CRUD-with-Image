<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['studentList']=Students::all();
        return view('students.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Students;

            if ($request->hasFile('image')) {
            $student = $request->file('image');
            $imageName = time() . '.' . $student->getClientOriginalExtension();
            $student->move(public_path('images'), $imageName);
            Students::create(['path' => 'images/' . $imageName]);
        }
        
        
        $student = Students::create([
        'image' => $request->input('image'),
        'name' => $request->input('name'),
        ]);
        $student->save();
                return redirect('/student');
        
    }
    

    /**
     * Display the specified resource.
     */
    public function detail(Students $students)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['alldata']=Students::find($id);

        return view('students.edit',$data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $i=Students::find($id);
        $i->name=$request->name;
        $i->image=$request->image;
        $i->save();
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletestudent($id)
    {
        
        $data=Students::find($id);
        $data->delete();
        return redirect('/student');
    }
}
