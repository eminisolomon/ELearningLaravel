@extends('layouts.backend.app')

@section('title','Edit category')

@push('css')

@endpush

@section('content')
    <div class="card my-8 w-1/2 mx-auto shadow-lg rounded-md py-16 px-8">
        <div class="header">
            <h2 class="text-2xl font-black leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Edit language
            </h2>
        </div>

        <div class="mt-8">
            @include('admin.language._form')
        </div>

    </div
@endsection

@push('js')

@endpush
