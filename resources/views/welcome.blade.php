@extends('layouts/master')

@section('title' , 'Page Title')

@section('sidebar')
    @parent

    <p>This is append to the master sidebar</p>
@endsection

@section('content', 'This is content')