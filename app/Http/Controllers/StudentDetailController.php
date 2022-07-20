<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentDetailRequest;
use App\Http\Requests\UpdateStudentDetailRequest;
use App\Models\StudentDetail;
use App\Models\GuardianDetail;
use App\Models\Relationship;

class StudentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $studentDetail = StudentDetail::all();
        return view('student.studentDetails', compact('studentDetail'));

    }



    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relationships = Relationship::all();
       
        return view('student.newStudent', compact('relationships'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentDetailRequest $request)
    {


        $studentDetails = new StudentDetail;
        $studentDetails->fullname = $request->input('fullname');
        $studentDetails->namewithinitial = $request->input('namewithinitial');
        $studentDetails->student_id = $request->input('studentnumber');
        $studentDetails->address = $request->input('address');
        $studentDetails->dob = date('d-m-Y', strtotime($request->input('dob')));
        $studentDetails->gender = $request->input('gender');
        $studentDetails->registereddate = date('d-m-Y', strtotime($request->input('registereddate')));
        $studentDetails->status = 1;

        //dd($request->hasfile('image'));

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move(public_path('uploads/students/'), $filename);
            $studentDetails->photo = $filename;
        }
           
        $studentDetails->save();
       


        $guardianDetail = new GuardianDetail;
        $guardianDetail->guarname = $request->input('guarname');
        $guardianDetail->address = $request->input('guaraddress');
        $guardianDetail->contactno = $request->input('guarcontact');
        $guardianDetail->relationship_id = $request->input('relation');
        $guardianDetail->student_details_id = $studentDetails->id;
        $guardianDetail->nic = '';
        $guardianDetail->status = 1;

        $guardianDetail->save();

        return redirect()->back()->with('success','Student Added Successfully');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentDetail $studentDetail)
    {
        return view('student.studentDetails');
    }

    public function showProfile($id)
    {
        $studentDetails = StudentDetail::find($id);
        $relationships = Relationship::find($studentDetails->guardians->relationship_id);
        return view('student.studentProfile', compact('studentDetails','relationships'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentDetails = StudentDetail::find($id);
        $relationships = Relationship::all();
       
        return view('student.editStudent', compact('studentDetails','relationships'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentDetailRequest  $request
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentDetailRequest $request, $id)
    {
        //dd($request);
      
        $studentDetails = StudentDetail::find($id);
        $studentDetails->fullname = $request->input('fullname');
        $studentDetails->namewithinitial = $request->input('namewithinitial');
        $studentDetails->student_id = $request->input('studentnumber');
        $studentDetails->address = $request->input('address');
        $studentDetails->dob = date('d-m-Y', strtotime($request->input('dob')));
        $studentDetails->gender = $request->input('gender');
        $studentDetails->registereddate = date('d-m-Y', strtotime($request->input('registereddate')));
        $studentDetails->status = 1;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move(public_path('uploads/students/'), $filename);
            $studentDetails->photo = $filename;
        }
           
        $studentDetails->update();
        //dd($id);
        $guardianDetail = GuardianDetail::where('student_details_id',$id)->first();
        //dd($guardianDetail);
        $guardianDetail->guarname = $request->input('guarname');
        $guardianDetail->address = $request->input('guaraddress');
        $guardianDetail->contactno = $request->input('guarcontact');
        $guardianDetail->relationship_id = $request->input('relation');
        $guardianDetail->nic = '';
        $guardianDetail->status = 1;

        $guardianDetail->update();
        return redirect()->back()->with('success','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentDetail  $studentDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentDetails = StudentDetail::find($id);
        $studentDetails->delete();

        $guardianDetail = GuardianDetail::where('student_details_id',$id)->first();
        $guardianDetail->delete();
        return redirect()->back()->with('success','Student Deleted Successfully');
    }

    // public function search()
    // {
    //      $studentDetail = StudentDetail::all();
    //     return view('student.studentSearch', compact('studentDetail'));

    // }

}
