@extends('layout.master')
@section('title', 'Subject List')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Subject List:-</h3>
        </div>

        <table class="table table-striped table-bordered">
            <tr>
                <td>Sl</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Full Mark</td>
                <td>Class</td>
                <td>Teacher Id</td>
                <td style="text-align: center;" colspan="2">Action</td>

            </tr>
            <?php $i=1 ; ?>
            @foreach($data as $subject)
                <tr>
                    <td>{{$sl=$i++}}</td>
                    <td>{{$subject->subject_code}}</td>
                    <td>{{$subject->subName}}</td>
                    <td>{{$subject->fMark}}</td>
                    <td>{{$subject->class}}</td>
                    <td>{{$subject->tId}}</td>


                    <td><a style="height:38px; width:74px; margin-right:-20px"  href="{{route('subject.edit',$subject->id)}}" class="btn btn-success" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline"> Edit </a>
                    </td>

                    
                    <td>
                        {!! Form::open(array('route' => ["subject.destroy",$subject->id],'method'=>'DELETE')) !!}
                        <button style="margin-left: 10px;" type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                        {!! Form::close() !!}
                    </td>


            @endforeach

        </table>

@endsection