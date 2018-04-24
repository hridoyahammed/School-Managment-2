@extends('layout.master')
@section('title', 'Add Attendence')

@section('content')
        <!DOCTYPE html>
<head>
    <link href="{{asset('admin/css/profile.css')}}" rel="stylesheet">
</head>
<div class="container">
    <h3 class="add">Add Attendence:-</h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route'=>'attendence.store','class'=>'form-horizontal', 'files'=>true)) !!}

            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('dmy', 'Date', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('dmy', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Date*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('dmy'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('dmy') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('student_id', 'Student Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('student_id', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Student Id*'))}}
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
                {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('class', ['Null'=>'Select Class*','Six'=>'Six', 'Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine','Ten'=>'Ten'] ,array('class'=>'form-control'),array('class'=>'form-control col-md-8'))}}

            </div>
            <div class="row col-md-8" style="font-weight: 600;">
                {{ Form::label('roll', 'Roll', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('roll', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Roll*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
                    @if($errors->has('roll'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('roll') }}</p>
                  </span>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="row col-md-8" style="font-weight: 600;">
        {{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
        {{ Form::text('section', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Section*'))}}

        <div class="col-md-4"></div>
        <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
            @if($errors->has('section'))
                <span class="help-block" style="display:block">
           <p>{{ $errors->first('section') }}</p>
                  </span>
            @endif
        </div>
    </div>
    <div class="row col-md-8" style="font-weight: 600;">
        {{ Form::label('in_time', 'In Time', array('class'=>'col-md-4 form-group'))}}
        {{ Form::text('in_time', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'In Time*'))}}

        <div class="col-md-4"></div>
        <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
            @if($errors->has('in_time'))
                <span class="help-block" style="display:block">
           <p>{{ $errors->first('in_time') }}</p>
                  </span>
            @endif
        </div>
    </div>
    <div class="row col-md-8" style="font-weight: 600;">
        {{ Form::label('out_time', 'Out Time', array('class'=>'col-md-4 form-group'))}}
        {{ Form::text('out_time', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Out Time*'))}}

        <div class="col-md-4"></div>
        <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
            @if($errors->has('out_time'))
                <span class="help-block" style="display:block">
           <p>{{ $errors->first('out_time') }}</p>
                  </span>
            @endif
        </div>
    </div>
    <div class="row col-md-8" style="font-weight: 600;">
        {{ Form::label('status', 'Class', array('class'=>'col-md-4 form-group'))}}
        {{ Form::select('status', ['Null'=>'Select Status*','Present'=>'Present', 'Absent'=>'Absent'] ,array('class'=>'form-control'),array('class'=>'form-control col-md-8'))}}

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