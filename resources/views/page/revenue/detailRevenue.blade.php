@extends('layouts.main')

@section('content')

@include('page.revenue.components.formDetailRevenue')
@include('page.revenue.components.formPersonalRevenue')
@include('page.revenue.components.revenueListMonth')

@endsection
