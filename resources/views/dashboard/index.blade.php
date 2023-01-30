@extends('dashboard.layouts.main')

@section('content')

    @include('components.uploadedList')
    @include('components.total')
    @include('components.chart')
    {{-- @include('dashboard.components.calender') --}}

@endsection