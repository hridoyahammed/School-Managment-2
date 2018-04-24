@extends('layout.master')
@section('title', 'Student List')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Student List:-</h3>
        </div>

    <div class="form-group">
        <form action="{{ action ('StudentController@search') }}" method="POST">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">Class: <input type="text" class="form-control" name="class"></div>
            <div class="col-md-4">Section:<input type="text" class="form-control" name="section"></div>
            <div class="col-md-4" style="margin-top: 28px;"><input type="submit" name="search" value="Search"></div>
        </div>
        </form>
    </div>

        <table class="table table-striped table-bordered">
        <tr>
            <td>Sl</td>
            <td>Picture</td>
            <td>Name(English)</td>
            <td>Roll</td>
            <td>Student Id</td>
            <td>Class</td>
            <td>Section</td>
            <td style="text-align: center;" colspan="3">Action</td>
        </tr>
        <?php $i=1 ; ?>
        @foreach($data as $students)
            <tr>
                <td>{{$sl=$i++}}</td>
                <td><img style="height: 50px; width: 70px;" src="public/files/{{$students->photo}}"></td>
                <td>
    <a href="{{route('student.show',$students->id)}}">{{$students->ename}}</a>
                </td>
                <td>{{$students->sid}}</td>
                <td>{{$students->roll}}</td>
               <td>{{$students->class}}</td>
                <td>{{$students->section}}</td>

                <td>
                    <a style="height:38px; width:74px;" href="{{route('student.edit',$students->id)}}" class="btn btn-primary"><i class="ion ion-ios-trash-outline"> Edit </a>
                </td>
                <td>
                    <a style="height:38px; width:74px;" href="{{url('mark/new',$students->id)}}" class="btn btn-success"><i class="ion ion-ios-trash-outline"> Mark </a>
                </td>
                <td>
                {!! Form::open(array('route' => ["student.destroy",$students->id],'method'=>'DELETE')) !!}
                <button  type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                {!! Form::close() !!}
                </td>


        @endforeach
    </table>


@endsection