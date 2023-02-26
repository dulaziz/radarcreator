<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Upload</h6>
            <a href="/uploaded">Uploaded</a>
        </div>
        <hr>

        <form action="/upload/tambah_upload" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3 row">
                <label for="group" class="col-sm-2 col-form-label">Group</label>
                <div class="col-sm-5 mb-3 mb-md-0">
                    <select class="form-select" name="id_group" aria-label="Default select example">
                        <option selected>Pilih</option>
                        @foreach ($post as $data)
                        <option value="{{ $data->id_group }}">{{ $data->group }}</option>
                                @endforeach
                    </select>
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal" id="uploadDate" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="videoTitle" class="col-sm-2 col-form-label">Video Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="video_title" id="videoTitle">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="videoFile" class="col-sm-2 col-form-label text-start">Upload Video</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control bg-dark" id="upload" name="video"  onchange="PreviewImage();"  id="videoFile">
                    <div class="mt-3 preview-vid">
                        <video controls src="/img/video.mp4" id="uploadPreview" class="w-100"></video>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prodTeam" class="col-sm-2 col-form-label text-start">Production Team</label>
                <div class="col-sm-10">
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input type="checkbox" name="produksi[]" class="form-check-input" id="d-checkbox" >
                                <label class="form-check-label" for="produser">
                                Producer
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" id="color" name="name[]" aria-label="Default select example" disabled="disabled">
                            <option value="">Pilih Nama</option>

                            @foreach ($datas as $data)
                            <option value="{{ $data->username }}">{{ $data->username }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input type="checkbox"  class="form-check-input" name="produksi[]"  id="a-checkbox">
                                <label class="form-check-label" for="writer">
                                Writer
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" id="colors" name="name[]"  aria-label="Default select example" disabled="disabled">
                            <option selected>Pilih Nama</option>

                            @foreach ($data2 as $data)

                            <option value="{{ $data->username }}">{{ $data->username }}</option>

                                @endforeach
                            </select>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" name="produksi[]" type="checkbox" value="" id="b-checkbox">
                                <label class="form-check-label" for="talent">
                                Talent/Host
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" id="colorb" name="name[]" aria-label="Default select example" disabled>
                            @foreach ($data3 as $data)
                            <option selected>Pilih Nama</option>

                            <option value="{{ $data->username }}">{{ $data->username }}</option>

                                @endforeach
                            </select>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" name="produksi[]" type="checkbox" value="" id="c-checkbox">
                                <label class="form-check-label" for="camera">
                                Camera Person
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" name="name[]" id="colorc" aria-label="Default select example" disabled>
                            @foreach ($datas4 as $data)
                            <option selected>Pilih Nama</option>

                            <option value="{{ $data->username }}">{{ $data->username }}</option>

                                @endforeach
                            </select>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input" name="produksi[]" type="checkbox" value="" id="s-checkbox">
                                <label class="form-check-label" for="voice">
                                Voice Over
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" id="colord" name="name[]" aria-label="Default select example" disabled>
                            @foreach ($datas5 as $data)
                            <option selected>Pilih Nama</option>

                            <option value="{{ $data->username }}">{{ $data->username }}</option>

                                @endforeach
                            </select>
                            </select>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-3">
                        <div class="col-md-3 text-start">
                            <div class="form-check">
                                <input class="form-check-input"  name="produksi[]" type="checkbox" value="" id="e-checkbox">
                                <label class="form-check-label" for="video">
                                Video Editor
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" name="name[]" id="colore" aria-label="Default select example" disabled>
                            @foreach ($datas6 as $data)
                            <option selected>Pilih Nama</option>

                            <option value="{{ $data->username }}">{{ $data->username }}</option>

                                @endforeach
                            </select>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="platformPublish" class="col-sm-2 col-form-label text-start">Platform Publish</label>
                <div class="col-sm-10 d-flex align-items-center"> 
                    <div class="d-flex gap-4 align-items-center flex-wrap">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="facebook" id="facebook">
                            <label class="form-check-label" for="facebook">
                            Facebook
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="instagram" id="instagram">
                            <label class="form-check-label" for="instagram">
                            Instagram
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="tiktok"id="tiktok">
                            <label class="form-check-label" for="tiktok">
                            Tiktok
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="youtube" id="youtube">
                            <label class="form-check-label" for="youtube">
                            Youtube
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="platform[]" value="twiter" id="twitter">
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
@include('sweetalert::alert')

<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("upload").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>