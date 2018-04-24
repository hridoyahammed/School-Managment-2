@extends('layout.master')
@section('title', 'Edit Student Table')

@section('content')
    <style type="text/css">
        select.form-control:not([size]):not([multiple]) {
            height: calc(2.25rem + 2px);
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Edit Student Table:-</h3>
        </div>

        {!! Form::open(array('route'=>['student.update',$info->id],'method'=>'PUT','class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('ename', 'Student Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('ename',$info->ename, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'English Name*'))}}

            </div>
            <div class="row col-md-6">
                {{ Form::label('bname', 'Student Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('bname',$info->bname, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Bangla Name*'))}}

            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;" >
            <div class="row col-md-6">
                {{ Form::label('roll', 'Roll Number', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('roll',$info->roll, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Roll Number*'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('reg', 'Registration', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number ('reg',$info->reg, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Registration*'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;" >
            <div class="row col-md-6">
                {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('class',$info->class, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Class*'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('shift', 'Shift', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('shift',$info->shift, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Shift*'))}}
            </div>
        </div>


        <div class="row col-md-12" style="font-weight: 600;" >
            <div class="row col-md-6">
                {{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('section',['Null'=>'Select section*','A'=>'Section A', 'B'=>'Section B'],$info->section,array('class'=>'form-control col-md-8'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('session', 'Session', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('session',['Null'=>'Select session*','2017-18'=>'2017-18', '2016-17'=>'2016-17','2015-16'=>'2015-16','2014-15'=>'2014-15'],$info->session,array('class'=>'form-control col-md-8'))}}
            </div>
        </div>


        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('sid', 'Student Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('sid',$info->sid, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'ID'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('dmy', 'Date of Birth', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('dmy',$info->dmy, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Date of Birth'))}}
            </div>
        </div>



        <div class="row col-md-12" style="font-weight: 600;" >
            <div class="row col-md-6 a">
                {{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('gender', ['Null'=>'Select Gender*','Male'=>'Male', 'Female'=>'Female'],$info->gender,array('class'=>'form-control col-md-8'))}}
            </div>
            <div class="row col-md-6 a">
                {{ Form::label('blood_group', 'Blood Group', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('blood_group', ['Null'=>'Select Blood Group*','A+'=>'A+', 'A-'=>'A-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-','B+'=>'B+','B-'=>'B-'] ,$info->blood_group,array('class'=>'form-control col-md-8'))}}
            </div>
        </div>


        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('phone', 'Phone', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('phone',$info->phone, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Phone*'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('address', 'Address', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('address', $info->address, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Address*'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('fname', 'Father name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('fname',$info->fname, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Father Name*'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('mname', 'Mother Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('mname',$info->mname, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mother Name*'))}}
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('guardian_name', 'Guardian Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('guardian_name',$info->guardian_name, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Guardian Name*'))}}
            </div>
            <div class="row col-md-6">
                {{ Form::label('guardian_id', 'Guardian Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('guardian_id',$info->guardian_id, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Guardian Name*'))}}
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('photo', 'Student Photo', array('class'=>'col-md-4 form-group'))}}
                {{ Form::file('photo','', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Photo*'))}}
            </div>
            <div class="row col-md-6">
            </div>
        </div>

        <div class="row">
            <div class="h-60"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn button btn-style blue a"><b>Update</b></button>
            </div>
            <div class="col-md-3"></div>
        </div>

        {!! Form::close() !!}

    </div>
@endsection