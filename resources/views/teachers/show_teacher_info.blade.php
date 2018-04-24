@extends('layout.master')
@section('title', 'Teachers List')

@section('content')
    <div class="container">
        <div style="text-align:center;margin-top:10px; margin-bottom:40px;">
            <h3>Teachers List:-</h3>
        </div>

        <table class="table table-bordered table-striped">
            <tr>
                <td>Sl</td>
                <td>Picture</td>
                <td>Teacher's Name</td>
                <td>Teacher Id</td>
                <td>Email</td>
                <td>Mobile No</td>
                <td colspan="2">Action</td>
            </tr>
            <?php $i=1 ; ?>
            @foreach($info as $teacher)
                <tr>
                    <td>{{$sl=$i++}}</td>
                    <td><img style="height: 50px; width: 70px;" src="public/teachers/{{$teacher->photo}}"></td>
                    <td>
                        <a href="{{route('teachers.show',$teacher->id)}}">{{$teacher->tName}}</a>
                    </td>
                    <td>{{$teacher->tNid}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->phone}}</td>

                    <td>
                        <a style="height:38px; width:74px;" href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-success" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline"> Edit </a>
                    </td>
                    <td>
                        {!! Form::open(array('route' => ["teachers.destroy",$teacher->id],'method'=>'DELETE')) !!}
                        <button style="height:38px; width:74px;" type="submit"  class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                        {!! Form::close() !!}
                    </td>


            @endforeach
                </tr>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $info->links() }}
            </ul>
        </nav>


@endsection