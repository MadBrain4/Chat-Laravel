@extends('layouts.MainLayout')

@section('title', 'Verify Email')

@section('content')
    <h1 class="text-3xl font-bold underline">
        Verify Email
    </h1>
    <p>Do you lost your email? <a href="{{ route('verification.send') }}" class="font-medium text-blue-500 hover:underline dark:text-blue-500" >ReSend</a></p>
@endsection