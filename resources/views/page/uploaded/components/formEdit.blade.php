    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
 
@php
$hobbies = explode(",",$user->produksi);

$hobbiess = explode(",",$user->name);




$hobbiesss = explode(",",$user->platform);

@endphp
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0 text-start">Edit</h6>
            <a href="/uploaded">Back</a>
      
        </div>
        <hr>
        <form action="../uploaded/update_upload/{{$user->id}}" method="post" enctype="multipart/form-data" >
            @csrf
@method('PUT')


<div class="mb-3 row">
                <label for="group" class="col-sm-2 col-form-label">Group</label>
                <div class="col-sm-5 mb-3 mb-md-0">
                    <select class="form-select"  name="id_group" aria-label="Default select example">
                            <option selected>Pilih</option>
                        @foreach ($users as $data)
                        <option value="{{ $data->id_group }}" {{$data->id_group  == $user->id_group ? 'selected' : '' }}>{{ $data->group }}</option>                                      
                                @endforeach
                    </select>
                </div>
                <div class="col-sm-5">
                    <input type="date" class="form-control" value="{{$user->tanggal}}" name="tanggal" id="uploadDate" >
                </div>
            </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Judul Video</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="video_title" value="{{$user->video_title}}">
            </div>
        </div>
        <div class="mb-3 row">
                <label for="videoFile" class="col-sm-2 col-form-label text-start">Upload Video</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control bg-dark" id="upload" name="video"  onchange="PreviewImage();"  id="videoFile">
                    <div class="mt-3 preview-vid">
                        <video controls src="{{ asset('/storage/public/posts/'.$user->video) }}" id="uploadPreview" class="w-100"></video>
                    </div>
                </div>
            </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Tim Produksi</label>
            <div class="col-sm-10">
                

            
                <div class="row d-flex align-items-center mb-3">
                    <div class="col-md-3 text-start">
                    <select class="selectpicker"   multiple data-live-search="true" name="produksi[]">                            
                        @foreach ($userss as $datas)
                        <option  value="{{ $datas->jabatan }}"  {{ in_array($datas->jabatan, $hobbies) ? 'selected' : '' }}>{{$datas->jabatan}}</option>
                         @endforeach
                    </select>
                    </div>
                  
                </div>
               
              
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Nama Produksi</label>
            <div class="col-sm-10">
                

            
                <div class="row d-flex align-items-center mb-3">
                    <div class="col-md-3 text-start">
                    <select  class="selectpicker"   multiple data-live-search="true" name="name[]">                            
                        @foreach ($use as $data)
                        
                        <option  value="{{ $data->name }}"  {{ in_array($data->name, $hobbiess) ? 'selected' : '' }}>{{$data->name}}</option>
                         @endforeach
                    </select>
                    </div>
                  
                </div>
               
              
            </div>
        </div>


        
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-start">Platform Tayang</label>
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
        <hr>
        
        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
        </div>

    </div>
    </form>

</div>
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