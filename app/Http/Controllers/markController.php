<?php

namespace App\Http\Controllers;
use App\markModel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class markController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=markModel::get();
    return view('mark.mark_show',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=markModel::get();
        return view('mark.mark_add',compact('data'));
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

            'student_id'=>'required',
            'exam_id'=>'required',
            'subject_code'=>'required',
            'year'=>'required',
            'mark'=>'required',

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data=markModel::create($input);
        return redirect('/mark')->with('success','Succesfylly data added!!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$data=markModel::findOrFail($id);
        //$data=markModel::get();
        return view('/mark.mark_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= markModel::findorFail($id);
        return view('mark.mark_edit', compact('data'));
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
        $info=markModel::findOrFail($id);
        $input=$request->all();
        $info->update($input);
        return redirect('/mark')->with('success','Successfully data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=markModel::findOrFail($id);
        $data->delete();
        return redirect('/mark')->with('error','Data deleted!!');
    }
    public function marks($id)
    {
        $student=DB::table('student_add')->where('id','=',$id)->get();
        $class=DB::table('student_add')->where('id','=',$id)->pluck('class');
        $subjects=DB::table('subject')->where('class','=',$class)->get();
        return view('mark.mark_entry', compact('subjects', 'student'));
    }
}
