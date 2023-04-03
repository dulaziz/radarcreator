{{-- Admin Sosmed Only --}}

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        
        <div class="row g-4">
            <div class="col-md-6">
                <hr>
                <form action="/Total/tambah_total/" method="POST">
                @csrf

                    <div class="d-md-flex gap-2 align-items-center">
                    <div class="col-md-11">

                    <div class="mb-3">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="revenuedate_bulan" name="revenuedate_bulan" >
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-md-6">
                <hr>
                <div class="mb-3">
                        <label for="viewer" class="form-label">Total</label>
                        <input type="text" class="form-control" id="total" name="total" >
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