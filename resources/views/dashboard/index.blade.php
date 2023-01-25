@extends('dashboard.layouts.main')

@section('content')

    @include('dashboard.components.revenue')
    @include('dashboard.components.uploadList')
    @include('dashboard.components.chart')
    {{-- @include('dashboard.components.calender') --}}

@endsection