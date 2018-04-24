@extends('layout.master')
@section('title', 'Add Student')

@section('content')
	<div class="container">
		<div style="text-align:center;margin-top:10px; margin-bottom:40px;">
			<h3>Add new Student:-</h3>
		</div>

		{!! Form::open(array('route'=>'student.store','class'=>'form-horizontal', 'files'=>true)) !!}

		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('ename', 'Student Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('ename', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'English Name*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('ename'))
					 <span class="help-block" style="display:block">
           <p>{{ $errors->first('ename') }}</p>
                  </span>
				@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('bname', 'Student Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('bname', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Bangla Name*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('bname'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('bname') }}</p>
                  </span>
					@endif
				</div>
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6">
				{{ Form::label('roll', 'Roll Number', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('roll', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Roll Number*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('roll'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('roll') }}</p>
                  </span>
					@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('reg', 'Registration', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number ('reg', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Registration*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('reg'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('reg') }}</p>
                  </span>
					@endif
				</div>
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6">
				{{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('class', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Class*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('class'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('class') }}</p>
                  </span>
					@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('shift', 'Shift', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('shift', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Shift*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">@if($errors->has('shift'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('shift') }}</p>
                  </span>
					@endif
				</div>
			</div>
		</div>


		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6">
				{{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('section', ['Null'=>'Select section*','A'=>'Section A', 'B'=>'Section B'] ,array('class'=>'form-control col-md-8'))}}

			</div>
			<div class="row col-md-6">
				{{ Form::label('session', 'Session', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('session', ['Null'=>'Select session*','2017-18'=>'2017-18', '2016-17'=>'2016-17','2015-16'=>'2015-16','2014-15'=>'2014-15'] ,array('class'=>'form-control col-md-8'))}}

			</div>
		</div>


		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('sid', 'Student Id', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('sid', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'ID'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('sid'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('sid') }}</p>
                  </span>
					@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('dmy', 'Date of Birth', array('class'=>'col-md-4 form-group'))}}
				{{ Form::date('dmy', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Date of Birth'))}}

			</div>
		</div>



		<div class="row col-md-12" style="font-weight: 600;" >
			<div class="row col-md-6 a">
				{{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('gender', ['Null'=>'Select Gender*','Male'=>'Male', 'Female'=>'Female'] ,array('class'=>'form-control col-md-12'))}}

			</div>
			<div class="row col-md-6 a">
				{{ Form::label('blood_group', 'Blood Group', array('class'=>'col-md-4 form-group'))}}
				{{ Form::select('blood_group', ['Null'=>'Select Blood Group*','A+'=>'A+', 'A-'=>'A-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-','B+'=>'B+','B-'=>'B-'] ,array('class'=>'form-control col-md-12'))}}

			</div>
		</div>


		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('phone', 'Phone', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('phone', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Phone*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('phone'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('phone') }}</p>
                  </span>
					@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('address', 'Address', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('address', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Address*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('address'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('address') }}</p>
                  </span>
					@endif
				</div>
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('fname', 'Father name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('fname', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Father Name*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('fname'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('fname') }}</p>
                  </span>
					@endif
				</div>
			</div>
			<div class="row col-md-6">
				{{ Form::label('mname', 'Mother Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('mname', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Mother Name*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('mname'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('mname') }}</p>
                  </span>
					@endif
				</div>
			</div>
		</div>

		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('guardian_name', 'Guardian Name', array('class'=>'col-md-4 form-group'))}}
				{{ Form::text('guardian_name', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Guardian Name*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('guardian_name'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('guardian_name') }}</p>
                  </span>
					@endif
				</div>

			</div>
			<div class="row col-md-6">
				{{ Form::label('guardian_id', 'Guardian Id', array('class'=>'col-md-4 form-group'))}}
				{{ Form::number('guardian_id', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Guardian Nid*'))}}
				<div class="col-md-4"></div>
				<div class="col-md-8" style="color: #c7254e; padding: -5px 5px;">
					@if($errors->has('guardian_id'))
						<span class="help-block" style="display:block">
           <p>{{ $errors->first('guardian_id') }}</p>
                  </span>
					@endif
				</div>
			</div>
		</div>
		<div class="row col-md-12" style="font-weight: 600;">
			<div class="row col-md-6">
				{{ Form::label('photo', 'Student Photo', array('class'=>'col-md-4 form-group'))}}
				{{ Form::file('photo', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Photo*'))}}
			</div>
			<div class="row col-md-6">
			</div>
		</div>

		<div class="row">
			<div class="h-60"></div>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<button type="submit" class="btn button btn-style blue a"><b>Register</b></button>
			</div>
			<div class="col-md-3"></div>
		</div>

	{!! Form::close() !!}

	</div>
@endsection