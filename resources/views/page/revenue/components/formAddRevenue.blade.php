{{-- Admin Only --}}
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="">Admin Only</h6>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Status</label>
            <div class="col-sm-5 d-flex align-items-center"> 
                <div class="d-flex gap-4 align-items-center flex-wrap">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="facebook">
                        <label class="form-check-label" for="facebook">
                        Show
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="instagram">
                        <label class="form-check-label" for="instagram">
                        Pending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="tiktok">
                        <label class="form-check-label" for="tiktok">
                        Take Down
                        </label>
                    </div>
                </div>
            </div>
            {{-- <label for="inputPassword" class="col-sm-2 col-form-label mt-4 mt-md-0">Tanggal Tayang</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" name="date" id="date">
            </div> --}}
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Date Show</label>
            <div class="col-sm-10">
                <input type="date" class="form-control bg-dark text-light" name="dateShow" id="dateShow">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Revenue</label>
            <div class="col-sm-10">
                <input type="number" class="form-control bg-dark" name="revenue" id="revenue">
            </div>
        </div>

        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
        </div>

    </div>
</div>