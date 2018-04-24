@extends('layout.master')
@section('title', 'Mark Add')

@section('content')
<div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Add Mark:-</h3>
        

@foreach($student as $st)
<p>Name: {{$st->ename}}</p>
<p>Roll: {{$st->roll}}</p>
<p>Class: {{$st->class}}</p>
<p>Section: {{$st->section}}</p>
	@endforeach
	</div>
	<table class="table table-hover">
		<tr>
			<th>Subject Name</th>
			<th>Full Mark</th>
			<th>Obtain Mark</th>
		</tr>
		@foreach($subjects as $subject)
		<tr>
			<td>{{$subject->subName}}</td>
			<td>{{$subject->fMark}}</td>
			<td><input type="text" placeholder="  Type Mark"></td>
		</tr>
			@endforeach
	</table>
@endsection