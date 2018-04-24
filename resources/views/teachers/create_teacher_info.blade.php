@extends('layout.master')
@section('title', 'Add teachers information')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Add teachers information:-</h3>
        </div>

        {!! Form::open(array('route'=>'teachers.store','class'=>'form-horizontal', 'files'=>true)) !!}

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('tName', 'Teachers Name', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('tName', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Teachers Name*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('tName'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('tName') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-6">
                {{ Form::label('tNid', 'Teachers Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('tNid', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Teachers Id*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('tNid'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('tNid') }}</p>
                  </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;" >
            <div class="row col-md-6">
                {{ Form::label('dmy', 'Date of Birth', array('class'=>'col-md-4 form-group'))}}
                {{ Form::date('dmy', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Date of Birth'))}}

            </div>
            <div class="row col-md-6">
                {{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('gender', ['Null'=>'Select Gender*','Male'=>'Male','Feamle'=>'Female'] ,array('class'=>'form-control col-md-8'))}}

            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;" >
            <div class="row col-md-6 a">
                {{ Form::label('blood', 'Blood Group', array('class'=>'col-md-4 form-group'))}}
                {{ Form::select('blood', ['Null'=>'Select Blood Group*','A+'=>'A+', 'A-'=>'A-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-','B+'=>'B+','B-'=>'B-'] ,array('class'=>'form-control col-md-12'))}}

            </div>
            <div class="row col-md-6">
                {{ Form::label('religion', 'Religion', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('religion', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Religion*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('religion'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('religion') }}</p>
                  </span>
                    @endif
                </div>
            </div>

        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('phone', 'Phone Number', array('class'=>'col-md-4 form-group'))}}
                {{ Form::number('phone', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Phone Number*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('phone'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('phone') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-6">
                {{ Form::label('email', 'Email Id', array('class'=>'col-md-4 form-group'))}}
                {{ Form::email('email', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Email Id*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('email'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('email') }}</p>
                  </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row col-md-12" style="font-weight: 600;">
            <div class="row col-md-6">
                {{ Form::label('address', 'Address', array('class'=>'col-md-4 form-group'))}}
                {{ Form::text('address', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Address*'))}}
                <div class="col-md-4"></div>
                <div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('address'))
                        <span class="help-block" style="display:block">
           <p>{{ $errors->first('address') }}</p>
                  </span>
                    @endif
                </div>
            </div>
            <div class="row col-md-6">
                {{ Form::label('photo', 'Student Photo', array('class'=>'col-md-4 form-group'))}}
                {{ Form::file('photo', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Photo*'))}}
            </div>
            <div class="row col-md-6">
            </div>
        </div>
        </div>
        <div class="row col-md-12" style="font-weight: 600;">
        <div class="row">
            <div class="h-60"></div>
            <div class="col-md-3"></div>
            <div class="col-md-8">
                <button type="submit" class="btn button btn-style blue a"><b>Save</b></button>
            </div>
            <div class="col-md-3"></div>
        </div>

        {!! Form::close() !!}

    </div>
@endsection