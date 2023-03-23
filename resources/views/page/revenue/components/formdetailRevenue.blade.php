<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0 text-start">Detail</h6>
            <a href="/revenue">Back</a>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 detail-vid">
                <video controls src="{{ asset('/storage/public/posts/'.$user->video) }}"class="w-100"></video>
                </div>
                <a href="">
                    <p class="fs-5 fw-bold text-white">{{$user->video_title}}.</p>
                </a>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <h6 class="">Detail</h6>
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <p class="mb-0">Group</p>
                        </div>
                        <div class="col-md-8">
                            <p class="mb-0">: {{$user->group}}</p>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <p class="mb-0">Uploaded Date</p>
                        </div>
                        <div class="col-md-8">
                            <p class="mb-0">: {{$user->tanggal}}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <h6 class="">Production Team</h6>
                          <div class="row mb-1">
                        <div class="col-md-4">
                        @foreach(explode(",", $user->produksi) as $option)

                            <p class="mb-0"> {{$option}}</p>
                            @endforeach

                        </div>

                        <div class="col-md-8">
                        @foreach(explode(",", $user->name) as $option)

                            <p class="mb-0">: {{$option}}</p>
                            @endforeach

                        </div>
                    </div>
                   
                <div class="mb-3">
                    <h6 class="">Status</h6>
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <p class="mb-0">Status</p>
                        </div>
                        <div class="col-md-8">
                        <?php
                    if($user->status == 'Pending'):?>
                    <p class="mb-0 text-warning me-4">: <i class="fas fa-hourglass-half me-2"></i>Pending</p>

                    <?php elseif($user->status == 'Published'):?>
                        <p class="mb-0 text-success me-4"><i class="fas fa-play me-2"></i>Published</p>
                    <?php elseif($user->status == 'Takedown'):?>
                        <p class="mb-0 text-danger me-4"><i class="fas fa-pause me-2"></i>TakeDown</p>
<?php endif;?>                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <p class="mb-0">Published Date</p>
                        </div>
                        <div class="col-md-8">
                            <p class="mb-0">: {{$user->tanggal}}</p>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-4">
                            <p class="mb-0">Platform</p>
                        </div>
                        <div class="col-md-8">
                        @foreach(explode(",", $user->platform) as $option)
                            <p class="mb-0">: {{$option}}</p>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div> 

    </div>
</div>

@include('page.revenue.components.formAddRevenue')

