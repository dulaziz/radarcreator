@extends('layouts.main')

@section('content')

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <a href="/">
                <div class="bg-secondary c-hover rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-video fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Video</p>
                        <h6 class="mb-0">{!!$sum!!}</h6>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="/?_token=9LyQLjMdLgPcXiDalwLz7OXIF5gsy9XXN5dxBlT8&statuss=Published">
                <div class="bg-secondary c-hover rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-play fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Published</p>
                        <h6 class="mb-0">{!!$sam!!}</h6>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="/?_token=9LyQLjMdLgPcXiDalwLz7OXIF5gsy9XXN5dxBlT8&statuss=Pending">
                <div class="bg-secondary c-hover rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-hourglass-half fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Pending</p>
                        <h6 class="mb-0">{!!$sem!!}</h6>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="/?_token=9LyQLjMdLgPcXiDalwLz7OXIF5gsy9XXN5dxBlT8&statuss=TakeDown">
                <div class="bg-secondary c-hover rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fas fa-pause fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Take Down</p>
                        <h6 class="mb-0">{!!$som!!}</h6>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    @include('page.dashboard.components.videoList')
    {{-- @include('dashboard.components.calender') --}}

@endsection