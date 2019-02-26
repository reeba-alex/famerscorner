<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$books=Books::all();
		$studentsdetails=Students::all();
		return view('Student.index',compact('studentsdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Student.stud');
    }
	public function sample()
    {
        return view('Student.stud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stud=new Students([
		 'name'=>$request->get('name'),
		 'course'=>$request->get('course'),
		  'no'=>$request->get('no')]
		 );
		 
		 $stud->save();
		 return redirect('/student/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
      return view('Student.stud');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $students=Students::find($id);
	 return view('Student.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $students=Students::find($id);
	   $students->name=$request->get('name');
	   $students->course=$request->get('course');
	   $students->no=$request->get('no');
	   $students->save();
	   return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students=Students::find($id);
		$students->delete();
		return redirect('/student')->with('success','Student has been deleted');
    }
}
