{{-- Admin Only --}}
@php
$hobbiesss = explode(",",$user->platform);

@endphp
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Publish</h6>
            {{-- <a href="/">Back</a> --}}
        </div>
        <hr>

        <form action="/publish/updated_status/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label text-start">Status</label>
                <div class="col-sm-5 d-flex align-items-center"> 
                    <div class="d-flex gap-4 align-items-center flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" name="status" type="checkbox" value="Published" id="published" {{ ($user->status == 'Published') ? 'checked' : '' }} >
                            <label class="form-check-label" for="published">
                            Published
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="status" type="checkbox" value="Pending" id="pending" {{ ($user->status == 'Pending') ? 'checked' : '' }}>
                            <label class="form-check-label" for="pending">
                            Pending
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="status" type="checkbox" value="Takedown" id="takeDown" {{ ($user->status == 'Takedown') ? 'checked' : '' }}>
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
                        <input class="form-check-input" name="platform[]" type="checkbox" value="facebook"  {{ in_array('facebook', $hobbiesss) ? 'checked' : '' }} id="facebook">
                        <label class="form-check-label" for="facebook">
                        Facebook
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="platform[]" type="checkbox" value="instagram" {{ in_array('instagram', $hobbiesss) ? 'checked' : '' }}  id="instagram">
                        <label class="form-check-label" for="instagram">
                        Instagram
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="platform[]" type="checkbox" value="tiktok" id="tiktok" {{ in_array('tiktok', $hobbiesss) ? 'checked' : '' }} >
                        <label class="form-check-label" for="tiktok">
                        Tiktok
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="platform[]" type="checkbox" value="youtube" id="youtube" {{ in_array('youtube', $hobbiesss) ? 'checked' : '' }} >
                        <label class="form-check-label" for="youtube">
                        Youtube
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="platform[]" type="checkbox" value="twitter" id="twitter" {{ in_array('twitter', $hobbiesss) ? 'checked' : '' }} >
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
                    <input type="date" class="form-control bg-dark" value="{{$user->tanggal}}" name="published_date" id="publishedDate">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="publishedLink" class="col-sm-2 col-form-label">Published Link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$user->publish_link}}" placeholder="Paste published link here" name="publish_link" id="publishedLink">
                </div>
            </div>
            <hr>
            <div class="d-grid justify-content-md-end">
                <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
            </div>
        </form>

    </div>
</div>