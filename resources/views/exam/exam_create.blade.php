@extends('layout.master')
@section('title', 'Add exam')

@section('content')
        <!DOCTYPE html>
<head>
    <link href="{{asset('admin/css/profile.css')}}" rel="stylesheet">
</head>
<div class="container">
    <h3 class="add">Add exam:-</h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route'=>'exam.store','class'=>'form-horizontal', 'files'=>true)) !!}

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('exam_name', 'Exam Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('exam_name', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Exam Name*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('exam_name'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('exam_name') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('held_on', 'Held On', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('held_on', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Held On*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('held_on'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('held_on') }}</p>
                  </span>
                    @endif
                </div>
            </div>

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('year', 'Year', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('year', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Year*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('year'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('year') }}</p>
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

    {!! Form::close() !!}
</div>
</div>
</div>
@endsection