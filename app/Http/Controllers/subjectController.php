<?php

namespace App\Http\Controllers;

use App\subjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=subjectModel::get();
        return view('/subject.sub_show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DB::table('teacher')->get();
        return view('subject.sub_create',compact('data'));
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



            'subject_code'=>'required',
            'subName'=>'required',
            'fMark'=>'required',
            'tId'=>'required'

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=subjectModel::create($input);
        return redirect('/subject')->with('success','Succesfylly data added!!');
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

        // $data=subjectModel::get();
        //return view('/subject.sub_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info= subjectModel::findorFail($id);
        return view('subject.sub_edit', compact('info'));
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

        $info=subjectModel::findOrFail($id);
        $input=$request->all();
        $info->update($input);
        return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=subjectModel::findOrFail($id);
        $data->delete();
        return redirect('/subject')->with('error','Data deleted!!');
    }
}
