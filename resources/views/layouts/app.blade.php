@extends('layouts.base')

@section('body')
    <div class="hidden md:block bg-gray-50">
        <div class="flex max-w-screen-xl mx-auto">
            <span class="p-2 mx-3 text-gray-900 border-blue-500 border-b">
                <a href="#" class="text-xs font-bold">Personal</a>
            </span>
            <span class="mx-3 p-2">
                <a href="#" class="text-xs">Business</a>
            </span>
            <span class="mx-3 p-2">
                <a href="#" class="text-xs">Investing</a>
            </span>
        </div>
    </div>
    @yield('content')
@endsection
