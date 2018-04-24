@extends('layout.master')
@section('title', 'Teacher Profile')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/teacher_profile.css')}}" />
</head>
<body>




<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8 heading wrapper">
            <h2>Faridpur Zilla School,Faridpur Bangladesh</h2>
            <h2>ফরিদপুর জিলা স্কুল, ফরিদপুর</h2>
            <h5>Established:1866</h5>
            <h4>Teacher Information</h4>
            <div class="col-md-12 line"></div>
            <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                         <img class="img img-responsive" src="../public/teachers/{{$info->photo}}"/>
                        </div>
                        <div class="col-md-4"></div>
            </div>
            <div class="row content">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-12">
                                    <label><span class="span">Teacher Name:</span>{{$info->tName}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Teacher Id:</span>{{$info->tNid}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Blood:</span>{{$info->blood}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Gender:</span>{{$info->gender}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Religion:</span>{{$info->religion}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Phone:</span>{{$info->phone}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Email:</span>{{$info->email}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Address:</span>{{$info->address}}</label><br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <footer><p>Developed By https://lion-soft.net</p></footer>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


</body>
</html>
@endsection