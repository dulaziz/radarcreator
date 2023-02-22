@extends('layouts.main')

@section('content')

    @include('components.total')
    @include('sweetalert::alert')
    @include('page.dashboard.components.videoList')
    {{-- @include('dashboard.components.calender') --}}

@endsection