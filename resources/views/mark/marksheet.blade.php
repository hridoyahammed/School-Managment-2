@extends('layout.master')
@section('title', 'Student List')

@section('content')
    <div class="container">
        <table class="table table-striped">
            @foreach($student as $st)

            <tr>
                <td>Name</td>
                <td>{{$st->ename}}</td> 
            </tr>
            <tr>
                <td>Class</td>
                <td>{{$st->class}}</td> 
            </tr>
            @endforeach
        </table>
        <table class="table table-bordered">
           
            <tr>
                <td>Subject Code</td>
                <td>Mark</td>
            </tr>
             @foreach($marks as $mark)
             <tr>
                <td>{{$mark->subject_code}}</td>
                <td>{{$mark->mark}}</td>
             </tr>
             @endforeach
        </table>
    </div>


@endsection