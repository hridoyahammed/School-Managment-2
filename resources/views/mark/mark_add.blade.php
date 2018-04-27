@extends('layout.master')
@section('title', 'Mark Add')

@section('content')
 <!DOCTYPE html>
<head>
    <link href="{{asset('admin/css/profile.css')}}" rel="stylesheet">
</head>
<div class="container">
    <h3 class="add">Mark Add:-</h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route'=>'mark.store','class'=>'form-horizontal', 'files'=>true)) !!}

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('student_id', 'Student Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('student_id', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Student Id*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('student_id'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('student_id') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('exam_id', 'Exam Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('exam_id', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Exam Id*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('exam_id'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('exam_id') }}</p>
                  </span>
                    @endif
                </div>
            </div>

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('subject_code', 'Subject Code', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('subject_code', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Code*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('subject_code'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('subject_code') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('year', 'Exam Year', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('year', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Year*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('year'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('year') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('mark', 'Mark', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('mark', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mark*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('mark'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('mark') }}</p>
                  </span>
                    @endif
                </div>
            </div>
        </div>
    </div>








    <div class="row">
        <div class="h-60"></div>
        <div class="col-md-6">
            <button style="width: 100px; border-radius:0px;" type="submit" class="btn button"><b>Submit</b></button>
        </div>
        <div class="col-md-3"></div>
    </div>
    +

    {!! Form::close() !!}
</div>
@endsection