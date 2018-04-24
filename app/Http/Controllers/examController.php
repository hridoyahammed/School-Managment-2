<?php

namespace App\Http\Controllers;

use App\examModel;
use Illuminate\Http\Request;
use Validator;
class examController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=examModel::get();
        return view('exam/exam_show',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam/exam_create')->with('success','Successfully data added');
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



            'exam_name'=>'required',
            'held_on'=>'required',
            'year'=>'required',

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=examModel::create($input);
        return redirect('/exam')->with('success','Succesfylly data added!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=examModel::get();
        return view('/exam.exam_show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= examModel::findorFail($id);
        return view('exam.exam_edit', compact('data'));
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
        $data=examModel::findOrFail($id);
        $input=$request->all();
        $data->update($input);
        return redirect('/exam')->with('success','Successfully data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=examModel::findOrFail($id);
        $data->delete();
        return redirect('/exam')->with('error','Data deleted!!');
    }
}
