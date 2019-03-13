@extends('app')
@section('content')
    <h1>撰写一篇新文章</h1>
    {{--<form action=""></form>--}}

    {!! Form::open(['url'=>'/articles']) !!}
    @include('articles.form')
    {!! Form::close() !!}

    @include('errors.list')

@endsection
