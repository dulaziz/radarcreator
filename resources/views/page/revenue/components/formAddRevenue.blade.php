{{-- Admin Sosmed Only --}}

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        
        <div class="row g-4">
            <div class="col-md-6">
                <h6 class="">Revenue / 1 Month</h6>
                <hr>
                <form action="">
                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="01/01/2023" id="publishedDate" name="publishedDate">
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="datefilter" name="datefilter" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Viewer</label>
                        <input type="text" class="form-control" id="viewer" name="viewer">
                    </div>
                    <div class="mb-3">
                        <label for="impression" class="form-label">Impression</label>
                        <input type="text" class="form-control" id="impression" name="impression">
                    </div>
                    <div class="mb-3">
                        <label for="revenue" class="form-label">Revenue</label>
                        <input type="text" class="form-control" id="revenue" name="revenue">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h6 class="">Revenue / 14 Day</h6>
                <hr>
                <form action="">
                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="01/01/2023" id="publishedDate" name="publishedDate">
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="datefilter" name="datefilter" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Viewer</label>
                        <input type="text" class="form-control" id="viewer" name="viewer">
                    </div>
                    <div class="mb-3">
                        <label for="impression" class="form-label">Impression</label>
                        <input type="text" class="form-control" id="impression" name="impression">
                    </div>
                    <div class="mb-3">
                        <label for="revenue" class="form-label">Revenue</label>
                        <input type="text" class="form-control" id="revenue" name="revenue">
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
        </div>

    </div>
</div>