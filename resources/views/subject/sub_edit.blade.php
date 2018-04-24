@extends('layout.master')
@section('title', 'Edit Subject Table')

@section('content')
        <!DOCTYPE html>
<head>
    <link href="{{asset('admin/css/profile.css')}}" rel="stylesheet">
</head>
<div class="container">
    <h3 class="add">Edit Subject Table:-</h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route'=>['subject.update',$info->id],'method'=>'PUT','class'=>'form-horizontal', 'files'=>true)) !!}

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('subject_code', 'Subject Code', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('subject_code', $info->subject_code, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Code*'))}}
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
                {{ Form::label('subName', 'Subject Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('subName', $info->subName, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Subject Name*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('subName'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('subName') }}</p>
                  </span>
                    @endif
                </div>
            </div>

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('fMark', 'Full Mark', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('fMark', $info->fMark, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Full Mark'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('subName'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('subName') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-8" style="margin-bottom:10px; font-weight: 600;">
                {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('class', ['Null'=>'Select Class*','Six'=>'Six', 'Seven'=>'Seven','Eight'=>'Eight','Eight'=>'Eight','Ten'=>'Ten'] ,$info->class,array('class'=>'form-control col-md-8'),array('class'=>'form-control'))}}

            </div>

        </div>
    </div>


    <div class="row col-md-8" style="font-weight: 600;">
        {{ Form::label('tId', 'Teacher Id', array('class'=>'col-md-4 form-group'))}}
        {{ Form::text('tId', $info->tId, array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Teacher Id*'))}}
        <div class="col-md-4"></div>
        <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
            @if($errors->has('tId'))
                <span class="help-block" style="display:block">
           <p>{{ $errors->first('tId') }}</p>
                  </span>
            @endif
        </div>

    </div>





    <div class="row">
        <div class="h-60"></div>
        <div class="col-md-6">
            <button style="width: 100px;" type="submit" class="btn button btn-style blue a"><b>Submit</b></button>
        </div>
        <div class="col-md-3"></div>
    </div>

    {!! Form::close() !!}
</div>
</div>
</div>
@endsection