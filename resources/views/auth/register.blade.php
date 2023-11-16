@extends('layouts.MainLayout')

@section('title', 'Welcome')
@section('content')
<section class="bg-blue-300 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-top px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border  md:mt-8 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Registrarse
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('register_action') }}" method="POST">
                    @csrf
                    @component('components.forms.CampoForm')
                        @slot('for', 'name')
                        @slot('campo', 'Name')
                        @slot('type', 'text')
                        @slot('nameId', 'name')
                        @slot('placeholder', 'Name')
                    @endcomponent
                    @component('components.forms.CampoForm')
                        @slot('for', 'email')
                        @slot('campo', 'Email')
                        @slot('type', 'email')
                        @slot('nameId', 'email')
                        @slot('placeholder', 'name@company.com')
                    @endcomponent
                    @component('components.forms.CampoForm')
                        @slot('for', 'password')
                        @slot('campo', 'Password')
                        @slot('type', 'password')
                        @slot('nameId', 'password')
                        @slot('placeholder', '••••••••')
                    @endcomponent
                    @component('components.forms.CampoForm')
                        @slot('for', 'password_confirmation')
                        @slot('campo', 'Password Confirmation')
                        @slot('type', 'password')
                        @slot('nameId', 'password_confirmation')
                        @slot('placeholder', '••••••••')
                    @endcomponent
                    
                    <div class="flex items-center justify-between">
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Do you already have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection