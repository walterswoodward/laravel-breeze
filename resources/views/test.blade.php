<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.testlayout')

@section('title', 'Test View')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
{{-- 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('(child.blade.php) New Child View $header') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    (child.blade.php) New Child View $slot!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}