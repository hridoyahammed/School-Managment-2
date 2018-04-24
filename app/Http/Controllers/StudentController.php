<?php

namespace App\Http\Controllers;
use App\studentModel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=studentModel::get();
        return view('/admin.student_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_student');
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

                'ename'=>'required',
                'bname'=>'required',
                'roll'=>'required',
                'reg'=>'required',
                'class'=>'required',
                'shift'=>'required',
                'sid'=>'required',
                'dmy'=>'required',
                'phone'=>'required',
                'address'=>'required',
                'fname'=>'required',
                'mname'=>'required',
                'guardian_name'=>'required',
                'guardian_id'=>'required'

        ]);

        if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['photo']=$fileName;
        }

        $data=studentModel::create($input);
        return redirect('/student')->with('success','Succesfylly data added!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info=studentModel::findOrFail($id);

       // $info=studentModel::get();
        return view('/admin.student_profile', compact('info'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info= studentModel::findorFail($id);
        return view('admin.edit_student', compact('info'));
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

        $info=studentModel::findOrFail($id);
        $input=$request->all();
        $info->update($input);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=studentModel::findOrFail($id);
        $data->delete();
        return redirect('/student')->with('error','Data deleted!!');
    }
    

    public function search(Request $request)
    {
        $class = $request['class'];
        $section = $request['section'];
        $data=DB::table('student_add')->where('class','=',$class)->where('section','=',$section)-> get();
        return view('/admin.student_list', compact('data'));
    }
}

