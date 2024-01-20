@extends('layouts.app')

@section('content')
    Welcome Back, {{ Auth::user()->name }}!
@endsection