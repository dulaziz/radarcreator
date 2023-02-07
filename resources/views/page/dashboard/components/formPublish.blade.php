{{-- Admin Only --}}
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Publish</h6>
            {{-- <a href="/">Back</a> --}}
        </div>
        <hr>

        <form action="">
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label text-start">Status</label>
                <div class="col-sm-5 d-flex align-items-center"> 
                    <div class="d-flex gap-4 align-items-center flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="published">
                            <label class="form-check-label" for="published">
                            Published
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="pending">
                            <label class="form-check-label" for="pending">
                            Pending
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="takeDown">
                            <label class="form-check-label" for="takeDown">
                            Take Down
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="platform" class="col-sm-2 col-form-label text-start">Platform</label>
                <div class="col-sm-10 d-flex align-items-center"> 
                    <div class="d-flex gap-4 align-items-center flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="facebook">
                            <label class="form-check-label" for="facebook">
                            Facebook
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="instagram">
                            <label class="form-check-label" for="instagram">
                            Instagram
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="tiktok">
                            <label class="form-check-label" for="tiktok">
                            Tiktok
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="youtube">
                            <label class="form-check-label" for="youtube">
                            Youtube
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="twitter">
                            <label class="form-check-label" for="twitter">
                            Twitter
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="publishedDate" class="col-sm-2 col-form-label">Published Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control bg-dark" name="publishedDate" id="publishedDate">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="publishedLink" class="col-sm-2 col-form-label">Published Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Paste published link here" name="publishedLink" id="publishedLink">
                </div>
            </div>
            <hr>
            <div class="d-grid justify-content-md-end">
                <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
            </div>
        </form>

    </div>
</div>