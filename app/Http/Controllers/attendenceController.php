<?php

namespace App\Http\Controllers;

use App\attendenceModel;
use Illuminate\Http\Request;
use Validator;
class attendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=attendenceModel::get();
        return view('attendence.attendence_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/attendence.attendence_add');
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
        $validator=Validator::make($request->all(),[



            'dmy'=>'required',
            'student_id'=>'required',
            'class'=>'required',
            'roll'=>'required',
            'section'=>'required',
            'in_time'=>'required',
            'out_time'=>'required',
            'status'=>'required'


        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=attendenceModel::create($input);
        return redirect('/attendence')->with('success','Succesfylly data added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data=subjectModel::findOrFail($id);

//        $data=attendenceModel::get();
//        return view('attendence.attendence_list', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= attendenceModel::findorFail($id);
        return view('attendence.attendence_edit', compact('data'));
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
        $data=attendenceModel::findOrFail($id);
        $input=$request->all();
        $data->update($input);
        return redirect('attendence');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=attendenceModel::findOrFail($id);
        $data->delete();
        return redirect('/attendence')->with('error','Data deleted!!');
    }
}
