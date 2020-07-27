@extends('layouts.base')

@section('body')
    <div class="min-h-screen font-sans bg-gray-50">
        <div class="container mx-auto max-w-lg p-6">
            <h2 class="my-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                DorkShare
            </h2>

            @yield('content')
        </div>
    </div>
@endsection
