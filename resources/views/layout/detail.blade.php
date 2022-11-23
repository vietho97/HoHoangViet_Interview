@extends('master')
@section('content')
    <detail-component :user='@json($user)'></detail-component>
@endsection