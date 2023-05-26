{{-- Admin Sosmed Only --}}

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        
        <div class="row g-4">
            <div class="col-md-6">
                <h6 class="">Revenue / 1 Month</h6>
                <hr>
                <form action="/editRevenue/{{$user->id}}/tambah_revenue" method="POST">
                @csrf

                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="{{$user->tanggal}}" >
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="revenuedate_bulan" name="revenuedate_bulan" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Viewer</label>
                        <input type="text" class="form-control" id="viewer" name="viewer_bulan">
                    </div>
                    <div class="mb-3">
                        <label for="impression" class="form-label">Impression</label>
                        <input type="text" class="form-control" id="impression" name="impression_bulan">
                    </div>
                    <div class="mb-3">
                        <label for="revenue" class="form-label">Revenue</label>
                        <input type="text" class="form-control" id="revenue" name="revenue_bulan">
                    </div>
            </div>
            <div class="col-md-6">
                <h6 class="">Revenue / 14 Day</h6>
                <hr>
                <form action="">
                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="{{$user->tanggal}}" >
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="revenuedate_bulan" name="revenuedate_harian" value="{{ old('daterange', $start_date . ' - ' . $end_date) }}" required>  
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Viewer</label>
                        <input type="text" class="form-control" id="viewer" name="viewer_harian" >
                    </div>
                    <div class="mb-3">
                        <label for="impression" class="form-label">Impression</label>
                        <input type="text" class="form-control" id="impression" name="impression_harian" >

                    </div>
                    <div class="mb-3">
                        <label for="revenue" class="form-label">Revenue</label>
                        <input type="text" class="form-control" id="revenue" name="revenue_harian" >
                        <input type="hidden" class="form-control" name="jumlah" value="{{$count}}">
                        <input type="hidden" class="form-control" name="tanggal" value="{{$user->tanggal}}">
                        <input type="hidden" class="form-control" name="id_group" value="{{$user->id_group}}">
                        <input type="hidden" class="form-control" name="video_title" value="{{$user->video_title}}">
                        <input type="hidden" class="form-control" name="video" value="{{$user->video}}">
                        <input type="hidden" class="form-control" name="produksi" value="{{$user->produksi}}">
                        <input type="hidden" class="form-control" name="name" value="{{$user->name}}">
                        <input type="hidden" class="form-control" name="platform" value="{{$user->platform}}">
                        <input type="hidden" class="form-control" name="status" value="{{$user->status}}">
                        <input type="hidden" class="form-control" name="bulan" value="{{$user->bulan}}">
                        <input type="hidden" class="form-control" name="name_upload" value="{{$user->name_upload}}">
                        <input type="hidden" class="form-control" name="gambar" value="{{$user->gambar}}">
                        <input type="hidden" class="form-control" name="total" value="{{$user->total}}">
                        <input type="hidden" class="form-control" name="isentif" value="{{$user->isentif}}">

                        <input type="hidden" class="form-control" name="insentif" value="{{$user->insentif}}">

                        <input type="hidden" class="form-control" name="published_date" value="{{$user->published_date}}">
                        <input type="hidden" class="form-control" name="publish_link" value="{{$user->publish_link}}">





                    </div>
            </div>
        </div>
        <hr>
        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
        </div>
        </form>

    </div>
</div>