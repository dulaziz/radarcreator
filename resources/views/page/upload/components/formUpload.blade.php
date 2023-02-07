<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Upload</h6>
            <a href="/uploaded">Uploaded</a>
        </div>
        <hr>

        <form action="">
            <div class="mb-3 row">
                <label for="group" class="col-sm-2 col-form-label">Group</label>
                <div class="col-sm-5 mb-3 mb-md-0">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select group</option>
                        <option value="1">Radar Bogor</option>
                        <option value="2">Radar Depok</option>
                        <option value="3">Radar Cianjur</option>
                        <option value="3">Radar Sukabumi</option>
                        <option value="3">Radar Bandung</option>
                    </select>
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="uploadDate" id="uploadDate">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="videoTitle" class="col-sm-2 col-form-label">Video Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="videoTitle" id="videoTitle">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="videoFile" class="col-sm-2 col-form-label text-start">Upload Video</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control bg-dark" name="videoFile" id="videoFile">
                    <div class="mt-3 preview-vid">
                        <video controls src="/img/video.mp4" class="w-100"></video>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prodTeam" class="col-sm-2 col-form-label text-start">Production Team</label>
                <div class="col-sm-10">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="produser">
                                <label class="form-check-label" for="produser">
                                Producer
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="writer">
                                <label class="form-check-label" for="writer">
                                Writer
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="talent">
                                <label class="form-check-label" for="talent">
                                Talent/Host
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="camera">
                                <label class="form-check-label" for="camera">
                                Camera Person
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="voice">
                                <label class="form-check-label" for="voice">
                                Voice Over
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="video">
                                <label class="form-check-label" for="video">
                                Video Editor
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col text-start">
                            <button type="button" class="btn btn-outline-primary px-5" >
                                <i class="fas fa-plus"></i> Add
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="platformPublish" class="col-sm-2 col-form-label text-start">Platform Publish</label>
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
            <hr>
            <div class="d-grid justify-content-md-end">
                <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
            </div>
        </form>


    </div>
</div>  
