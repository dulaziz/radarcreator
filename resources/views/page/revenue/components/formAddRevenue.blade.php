{{-- Admin Sosmed Only --}}

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        
        <div class="row g-4">
            <div class="col-md-6">
                <h6 class="">Revenue / 1 Month</h6>
                <hr>
                <form action="/addRevenue/add_revenue/{{$user->id}}" method="POST">
                @csrf
@method('PUT')

                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="{{$user->tanggal}}" >
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" value="{{$user->revenuedate_bulan}}" id="revenuedate_bulan" name="revenuedate_bulan" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Viewer</label>
                        <input type="text" class="form-control" id="viewer" value="{{$user->viewer_bulan}}"name="viewer_bulan">
                    </div>
                    <div class="mb-3">
                        <label for="impression" class="form-label">Impression</label>
                        <input type="text" class="form-control" id="impression" value="{{$user->impression_bulan}}" name="impression_bulan">
                    </div>
                    <div class="mb-3">
                        <label for="revenue" class="form-label">Revenue</label>
                        <input type="text" class="form-control" id="revenue" value="{{$user->revenue_bulan}}" name="revenue_bulan">
                       
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
                        <input type="text" class="form-control" id="viewer" name="viewer_harian" value="{{$user->viewer_harian}}">
                    </div>
                    <div class="mb-3">
                        <label for="impression" class="form-label">Impression</label>
                        <input type="text" class="form-control" id="impression" name="impression_harian" value="{{$user->impression_harian}}">
                   @foreach($total as $data)
                        <input type="hidden" class="form-control" id="total" name="total" value="{{$data->total}}">
@endforeach
                        <input type="hidden" class="form-control" name="jumlah" value="{{$count}}">

                    </div>
                    <div class="mb-3">
                        <label for="revenue" class="form-label">Revenue</label>
                        <input type="text" id="revenue" name="revenue_harian" value="{{$user->revenue_harian}}" class="form-control @error('revenue_harian') is-invalid @enderror">
                        @error('revenue_harian')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

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