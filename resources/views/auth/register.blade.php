@extends('app')
@section('content')

    <div class="col-md-4 col-md-offset-4">
        {!! Form::open(['url'=>'/auth/register']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <hr>
        <div class="form-group">
            {!! Form::label('password','输入密码') !!}
            {!! Form::password('password',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation','确认密码') !!}
            {!! Form::password('password_confirmation',null,['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('注册',['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
    </div>

@endsection
