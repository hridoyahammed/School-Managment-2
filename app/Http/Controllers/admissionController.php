<?php

namespace App\Http\Controllers;

use App\admissionModel;
use Illuminate\Http\Request;
use Validator;

class admissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admission.student_registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admission.student_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

//        $validator=Validator::make($request->all(),[
//            'sname'=>'required',
//            'sbname'=>'required',
//            'class'=>'required',
//            'year'=>'required',
//            'fname'=>'required',
//            'mname'=>'required',
//            'foccupation'=>'required',
//            'moccupation'=>'required',
//            'income'=>'required',
//            'gnid'=>'required',
//            'gender'=>'required',
//            'dob'=>'required',
//            'blood'=>'required',
//            'religion'=>'required',
//            'phone'=>'required|unique:admission',
//            'preschool'=>'required',
//            'status'=>'required',
//            'preaddress'=>'required',
//            'peraddress'=>'required',
//            'image'=> 'required|mimes:jpeg,jpg,png,JPG'
//        ]);


        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/candidate',$fileName);
            $input['image']=$fileName;
        }

        $data=admissionModel::create($input);
        return redirect('/admission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data=admissionModel::get();
        return view('admission.candidate_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data=admissionModel::findOrFail($id);
        $data->delete();
        return redirect('/admission/candidate_show');
    }
}
