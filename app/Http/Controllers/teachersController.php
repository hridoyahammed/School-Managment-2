<?php

namespace App\Http\Controllers;

use App\teacherModel;
use Illuminate\Http\Request;
use Validator;
class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=teacherModel::paginate(5);
      return view('/teachers.show_teacher_info',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('/teachers.create_teacher_info');
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
        //validator FACADE
        $validator=Validator::make($request->all(),[

            // rules here

            'tName'=>'required',
            'tNid'=>'required',
            'religion'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'photo'=>'required',

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/teachers',$fileName);
            $input['photo']=$fileName;
        }

        $data=teacherModel::create($input);
        return redirect('/teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=teacherModel::findOrFail($id);

        // $info=studentModel::get();
        return view('/teachers.teacher_profile', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info= teacherModel::findorFail($id);
        return view('teachers.edit_teacher_info', compact('info'));
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
        $info=teacherModel::findOrFail($id);
        $input=$request->all();
        $info->update($input);
        return redirect('/teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=teacherModel::findOrFail($id);
        $teacher->delete();
        return redirect('/teachers');
    }
}
