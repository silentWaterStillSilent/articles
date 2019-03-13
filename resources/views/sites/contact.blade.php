@extends('app')
@section('content')
    <h2> Contacts: </h2>
    @foreach($citys as $city)
    <li>{!! $city->city !!}</li>
    @endforeach
@endsection


{{--// @section('footer')--}}
   {{--// <script >alert('contact page');</script>--}}
{{--// @endsection--}}
