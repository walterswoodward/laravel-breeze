{{-- This is expected to inherit from a template `resources/views/layouts/app.blade.php` --}}
{{-- Correct the above comment: https://medium.com/@shrijan00003/blade-component-in-laravel-7-e80849d01af --}}
<x-app-layout>
    {{-- Contains the content passed into the $header variable --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- for more on __(...) --}}
            {{-- see https://laravel.com/docs/8.x/localization --}}
            {{ __('Dashboard') }}
            {{-- You can just type text here, but the above utilizes "localization" --}}
        </h2>
    </x-slot>
    <x-slot name="purpleh6">
        <h6 class="font-semibold text-lg text-purple-800">
            {{ __('This Is PurpleH6') }}
        </h6>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Since this content is not wrapped in an <x-slot> tag, it is passed to the component inside of the $slot variable --}}
                    (dashboard.blade.php) You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
