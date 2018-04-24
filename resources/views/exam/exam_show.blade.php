@extends('layout.master')
@section('title', 'Subject List')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Exam List:-</h3>
        </div>

        <table class="table table-bordered table-striped">
            <tr>
                <td>Sl</td>
                <td>Exam Nmae</td>
                <td>Held On</td>
                <td>Year</td>
                <td style="text-align: center;" colspan="2">Action</td>
            </tr>
            <?php $i=1 ; ?>
            @foreach($data as $exam)
                <tr>
                    <td>{{$sl=$i++}}</td>
                    <td>{{$exam->exam_name}}</td>
                    <td>{{$exam->held_on}}</td>
                    <td>{{$exam->year}}</td>


                    <td><a style="height:38px; width:74px; margin-right:-40px;"  href="{{route('exam.edit',$exam->id)}}" class="btn btn-success" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline"> Edit </a>
                    </td>
                    <td>
                        {!! Form::open(array('route' => ["exam.destroy",$exam->id],'method'=>'DELETE')) !!}
                        <button type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                        {!! Form::close() !!}
                    </td>


            @endforeach

        </table>

@endsection