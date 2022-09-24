<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class="pt-2">
            <a href="{{ route('teachers.create') }}"
               class="btn p-2 bg-teal-400 text-white">
                Add Teacher
            </a>

            <a href="{{ route('students.create') }}"
               class="btn ml-5 p-2 bg-indigo-500 text-white">
                Add Student
            </a>

            <a href="{{ route('students.index') }}"
               class="btn ml-5 p-2 bg-yellow-500 text-white">
                All Students
            </a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome, {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
