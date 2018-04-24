@extends('layout.master')
@section('title', 'Mark Show')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Mark List:-</h3>
        </div>

        <table class="table table-striped table-bordered">
            <tr>
                <td>Sl</td>
                <td>Student Id</td>
                <td>Exam Id</td>
                <td>Subject Code</td>
                <td>Exam Year</td>
                <td>Mark</td>
                <td style="text-align: center;" colspan="2">Action</td>

            </tr>
            <?php $i=1 ; ?>
            @foreach($data as $mark)
                <tr>
                    <td>{{$sl=$i++}}</td>
                    <td>{{$mark->student_id}}</td>
                    <td>{{$mark->exam_id}}</td>
                    <td>{{$mark->subject_code}}</td>
                    <td>{{$mark->year}}</td>
                    <td>{{$mark->mark}}</td>

                    <td>
                        <a style="height:38px; width:74px; margin-right: -20px;" href="{{route('mark.edit',$mark->id)}}" class="btn btn-success" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline"> Edit </a>
                    </td>
                    <td>
                        {!! Form::open(array('route' => ["mark.destroy",$mark->id],'method'=>'DELETE')) !!}
                        <button style="height:38px; width:74px;" type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                        {!! Form::close() !!}
                    </td>


            @endforeach

        </table>

@endsection