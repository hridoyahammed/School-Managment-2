@extends('layout.master')
@section('title', 'Mark Add')

@section('content')
<div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Add Mark:-</h3>
 
 {!! Form::open(array('route'=>'mark.store','class'=>'form-horizontal', 'files'=>true)) !!}       
			@foreach($student as $st)
				<input type="text" name="student_id" value="{{$st->sid}}">
			<p>Name: {{$st->ename}}</p>
			<p>Roll: {{$st->roll}}</p>
			<p>Class: {{$st->class}}</p>
			<p>Section: {{$st->section}}</p>
				@endforeach
				</div>
				<div class="col-md-8">
				<table class="table table-bordered">
					<tr>
						<th>Subject Code</th>
						<th>Subject Name</th>
						<th>Full Mark</th>
						<th>Obtain Mark</th>
					</tr>
					@foreach($subjects as $subject)
					<tr>
						<td><input type="text" value="{{$subject->subject_code}}" name="subject[]"></td>
						<td>{{$subject->subName}}</td>
						<td>{{$subject->fMark}}</td>
						<td><input type="text" name="mark[]" ></td>
					</tr>
						@endforeach
				</table>
			</div>
				{!! Form::submit('Submit') !!}

    {!! Form::close() !!}

			@endsection