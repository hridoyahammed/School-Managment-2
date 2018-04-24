@extends('layout.master')
@section('title', 'Candidate List')

@section('content')

    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Candidate List:-</h3>
        </div>

        <table class="table table-striped table-responsive table-bordered">
            <tr>
                <th>Sl</th>
                <th>Photo</th>
                <th>Name(English)</th>
                <th>Name(Bangla)</th>
                <th>Class</th>
                <th>Year</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Father's Occupation</th>
                <th>Mother's Occupation</th>
                <th>Annual Income</th>
                <th>Guardian Nid</th>
                <th>Gender</th>
                <th>Dmy</th>
                <th>Blood</th>
                <th>Religion</th>
                <th>Phone</th>
                <th>Guardian Name</th>
                <th>Present School</th>
                <th>Current Address</th>
                <th>Permanent</th>
                <th>Quotas</th>
                <th colspan="2">Action</th>
            </tr>
            <?php $i=1 ; ?>
            @foreach($data as $subject)

                <tr>
                    <td>{{$sl=$i++}}</td>
                    <td><img style="height: 50px; width: 70px;" src="{{asset('public/candidate/'.$subject->image)}}"></td>
                    <td>{{$subject->sname}}</td>
                    <td>{{$subject->sbname}}</td>
                    <td>{{$subject->class}}</td>
                    <td>{{$subject->year}}</td>
                    <td>{{$subject->fname}}</td>
                    <td>{{$subject->mname}}</td>
                    <td>{{$subject->foccupation}}</td>
                    <td>{{$subject->moccupation}}</td>
                    <td>{{$subject->income}}</td>
                    <td>{{$subject->gnid}}</td>
                    <td>{{$subject->gender}}</td>
                    <td style="width: 300px;">{{$subject->dob}}</td>
                    <td>{{$subject->blood}}</td>
                    <td>{{$subject->religion}}</td>
                    <td>{{$subject->phone}}</td>
                    <td>{{$subject->gname}}</td>
                    <td>{{$subject->preschool}}</td>
                    <td>{{$subject->preaddress}}</td>
                    <td>{{$subject->peraddress}}</td>
                    <td>{{$subject->quotas}}</td>

                    <td>
                        {!! Form::open(array('route' => ["admission.destroy",$subject->id],'method'=>'DELETE')) !!}
                        <button style="margin-left: -10px;" type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                        {!! Form::close() !!}
                    </td>

                    </tr>


            @endforeach
        </table>

@endsection