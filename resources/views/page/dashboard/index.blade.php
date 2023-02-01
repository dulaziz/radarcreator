@extends('layouts.main')

@section('content')

    @include('components.total')
    @include('components.uploadedList')
    @include('components.chart')
    {{-- @include('dashboard.components.calender') --}}

@endsection