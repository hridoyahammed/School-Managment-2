@extends('layout.master')
@section('title', 'Student Registration Form..!!')

@section('content')

    {!! Form::open(array('route'=>'admission.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
    <u><h1 style="text-align: center; margin-bottom: 20px;">Student Registration Form..!!</h1></u>
    <table class="table table-stripped">
        <tr class="{{ $errors->has('sname') ? 'has-error' : '' }}">
            <td>{{ Form::label('sname', 'Student Full Name', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('sname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type student name'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('sbname') ? 'has-error' : '' }}">
            <td>{{ Form::label('sbname', 'Student Full Name(Bangla)', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('sbname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your bangla name'))}}

            </td>
        </tr>

        <tr class="{{ $errors->has('class') ? 'has-error' : '' }}">
            <td>{{ Form::label('class', 'Class', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::select('class', ['null'=>'Select class*','six'=>6,'seven'=>7,'eight'=>8,'nine'=>9], array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your class name'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('year') ? 'has-error' : '' }}">
            <td>{{ Form::label('year', 'Year', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('year', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your session'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('fname') ? 'has-error' : '' }}">
            <td>{{ Form::label('fname', "Father's Name", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('fname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type your father's name"))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('mname') ? 'has-error' : '' }}">
            <td>{{ Form::label('mname', "Mother's Name", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('mname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type your mother's name"))}}

            </td>
        </tr>

        <tr class="{{ $errors->has('foccupation') ? 'has-error' : '' }}">
            <td>{{ Form::label('foccupation', "Father's Occupation", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('foccupation', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type your father's occupation"))}}

            </td>
        </tr>

        <tr class="{{ $errors->has('moccupation') ? 'has-error' : '' }}">
            <td>{{ Form::label('moccupation', "Mother's Occupation", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('moccupation', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type your mother's occupation"))}}

            </td>
        </tr>

        <tr class="{{ $errors->has('income') ? 'has-error' : '' }}">
            <td>{{ Form::label('income', "Annual Income", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('income', '', array('class'=>'col-md-6 form-control', 'placeholder'=>"Type annual income"))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('gnid') ? 'has-error' : '' }}">
            <td>{{ Form::label('gnid', "Guardian's NID", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('gnid', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Your father/mother NID number'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('gender') ? 'has-error' : '' }}">
            <td>{{ Form::label('gender', 'Gender', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::radio('gender', 'male', false, ['id' => 'male']) }}Male
                {{ Form::radio('gender', 'female', false, ['id' => 'female']) }}Female

            </td>
        </tr>
        <tr class="{{ $errors->has('dob') ? 'has-error' : '' }}">
            <td>{{ Form::label('dob', 'Date Of Birth', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::date('dob', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your date of birth'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('blood') ? 'has-error' : '' }}">
            <td>{{ Form::label('blood', 'Blood Group', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::select('blood', ['null'=>'Select blood group*','A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-' ], array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your blood group'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('religion') ? 'has-error' : '' }}">
            <td>{{ Form::label('religion', 'Religion', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('religion', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your religion'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('phone') ? 'has-error' : '' }}">
            <td>{{ Form::label('phone', 'Phone', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::number('phone', null, array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your phone number', 'id'=>'phone'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('gname') ? 'has-error' : '' }}">
            <td>{{ Form::label('gname', "Guardian's Name", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('gname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your guardian name'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('preschool') ? 'has-error' : '' }}">
            <td>{{ Form::label('preschool', "Previous School Name", array('class'=>'control-label'))}}	</td>
            <td>{{ Form::text('preschool', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Type your previous school name'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('preaddress') ? 'has-error' : '' }}">
            <td>{{ Form::label('preaddress', 'Present Address*', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::textarea('preaddress', '',['size' => '42x4'], array('class'=>'col-md-6 form-control', 'placeholder'=>' Type your present address'))}}

            </td>
        </tr>
        <tr class="{{ $errors->has('peraddress') ? 'has-error' : '' }}">
            <td>{{ Form::label('peraddress', 'Permanent Address*', array('class'=>'control-label'))}}	</td>
            <td>{{ Form::textarea('peraddress', '',['size' => '42x4'], array('class'=>'col-md-6 form-control', 'placeholder'=>' Type your permanent address'))}}

            </td>
        </tr>

        <tr class="{{ $errors->has('image') ? 'has-error' : '' }}">
            <td>{{ Form::label('image', 'Student Photo', array('class'=>'col-md-4 form-group'))}}</td>
            <td>{{ Form::file('image', '', array('class'=>'col-md-8 form-control form-group', 'placeholder'=>'Photo*'))}}</td>


        </tr>
        <tr>
            <td>{{Form::submit('Save', array('class'=>'btn btn-success'))}} </td>

            <td></td>
        </tr>



    </table>
    {!! Form::close() !!}
@endsection