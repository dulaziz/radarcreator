<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Recent Uploaded</h6>
            <a href="/upload">Add Video</a>
        </div>
        <hr>

        <div class="row mb-5">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <span>Show</span>
                    <select class="form-select ms-2" aria-label=".form-select-sm example">
                        <option selected>5</option>
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">50</option>
                        <option value="3">100</option>
                    </select>
                </div>
                <div class="ms-md-2 mb-2 mb-md-0">
                    <select class="form-select" aria-label=".form-select-sm example">
                        <option selected>Filter Status</option>
                        <option value="1">Proces</option>
                        <option value="2">Published</option>
                        <option value="3">Take Down</option>
                    </select>
                </div>
                <div class="ms-md-2 mb-2 mb-md-0">
                    <select class="form-select" aria-label=".form-select-sm example">
                        <option selected>Filter Group</option>
                        <option value="1">Radar Bogor</option>
                        <option value="2">Radar Depok</option>
                        <option value="3">Radar Bandung</option>
                        <option value="4">Radar Sukabumi</option>
                        <option value="5">Radar Cianjur</option>
                    </select>
                </div>
                <div>
                    <div class="input-group">
                        <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select class="form-select" aria-label=".form-select-sm example">
                            <option selected>Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{-- <input class="form-control" type="text" placeholder="Search" aria-label="default input example"> --}}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="button" id="button-addon2"><i class="fas fa-search text-muted"></i></button>
                </div>
            </div>
        </div>
        
        <div class="d-md-flex align-items-center gap-4">
            <div class="mb-2 mb-md-0 preview-vid">
                <video controls src="/img/video.mp4" class="w-100"></video>
            </div>
            <div class="">
                <h5 class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                <div class="d-flex align-items-center gap-2 mb-2 mb-md-3">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 30px; height: 30px;">
                    <p class="mb-0">Radar Depok</p>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <p class="mb-0 me-4"><i class="fas fa-hourglass-half me-2"></i>Pending</p>
                    <p class="mb-0 me-4"><i class="bi bi-calendar me-2"></i>07/07/2023</p>
                    <a href="/publish" class="me-4"><i class="bi bi-share-fill me-2"></i>Publish</a>
                </div>
            </div>
        </div>
        <hr>

        <div class="d-md-flex align-items-center gap-4">
            <div class="mb-2 mb-md-0 preview-vid">
                <video controls src="/img/video.mp4" class="w-100"></video>
            </div>
            <div class="">
                <h5 class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                <div class="d-flex align-items-center gap-2 mb-2 mb-md-4">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 30px; height: 30px;">
                    <p class="mb-0">Radar Depok</p>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <p class="mb-0 text-success me-4"><i class="fas fa-play me-2"></i>Published</p>
                    <p class="mb-0 me-4"><i class="bi bi-calendar me-2"></i>07/07/2023</p>
                    <a href="/publish" class="me-4"><i class="bi bi-share-fill me-2"></i>Publish</a>
                </div>
            </div>
        </div>
        <hr>

        <div class="d-md-flex align-items-center gap-4">
            <div class="mb-2 mb-md-0 preview-vid">
                <video controls src="/img/video.mp4" class="w-100"></video>
            </div>
            <div class="">
                <h5 class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                <div class="d-flex align-items-center gap-2 mb-2 mb-md-4">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 30px; height: 30px;">
                    <p class="mb-0">Radar Depok</p>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <p class="mb-0 text-danger me-4"><i class="fas fa-pause me-2"></i>Take Down</p>
                    <p class="mb-0 me-4"><i class="bi bi-calendar me-2"></i>07/07/2023</p>
                    <a href="/publish" class="me-4"><i class="bi bi-share-fill me-2"></i>Publish</a>
                </div>
            </div>
        </div>
        <hr>

        <div class="d-flex justify-content-end">
        <nav aria-label="..." class="">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">&laquo;</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
          </nav>
        </div>

    </div>
</div>