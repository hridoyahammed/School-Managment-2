@extends('layout.master')
@section('title', 'Subject List')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Attendence List:-</h3>
        </div>

        <table class="table table-striped table-bordered">
            <tr>
                <td>Sl</td>
                <td>Date</td>
                <td>Student Id</td>
                <td>Class</td>
                <td>Roll</td>
                <td>Session</td>
                <td>In Time</td>
                <td>Out Time</td>
                <td>Status</td>
                <td style="text-align: center;" colspan="2">Action</td>

            </tr>
            <?php $i=1 ; ?>
            @foreach($data as $attendence)
                <tr>
                    <td>{{$sl=$i++}}</td>
                    <td>{{$attendence->dmy}}</td>
                    <td>{{$attendence->student_id}}</td>
                    <td>{{$attendence->class}}</td>
                    <td>{{$attendence->roll}}</td>
                    <td>{{$attendence->section}}</td>
                    <td>{{$attendence->in_time}}</td>
                    <td>{{$attendence->out_time}}</td>
                    <td>{{$attendence->status}}</td>


                    <td><a style="height:38px; width:74px; margin-right:-20px"  href="{{route('attendence.edit',$attendence->id)}}" class="btn btn-success" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline"> Edit </a>
                    </td>
                    <td>
                        {!! Form::open(array('route' => ["attendence.destroy",$attendence->id],'method'=>'DELETE')) !!}
                        <button style="margin-left: 10px;" type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                        {!! Form::close() !!}
                    </td>


            @endforeach

        </table>

@endsection