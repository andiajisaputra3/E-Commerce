@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="py-4">
        <div class="bg-white overflow-hidden shadow sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
@endsection
