@extends('layouts.MainLayout')

@section('title', 'Welcome')
@section('content')
    <h1 class="text-3xl font-bold underline">
        Hello {{ Auth::user()->name }}
    </h1>
@endsection