<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0 text-start">Add User</h6>
            <a href="/user">Back</a>
        </div>
        <hr>
        <form action="userAdd/register_action" method="post" enctype="multipart/form-data" >
@csrf
        <div class="d-flex align-items-center text-center gap-4">
            <div class="card-body pb-0">
                <img
                src="img/avatar.jpeg"
                alt="user-avatar"
                class="rounded-circle"
                height="150" 
                width="150"
                id="uploadPreview"
                />
                <div>
                    <label for="upload" class="btn btn-primary my-3" tabindex="0">
                      <span>Upload  photo</span>
                      <input type="file" id="upload" name="gambar"  onchange="PreviewImage();" required hidden accept="image/png, image/jpeg"/>
                    </label>
                    <p class="fw-light mb-0">Allowed JPG, GIF or PNG. Max size of 5MB</p>
                </div>
          </div>
        </div>
        <hr>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="group" class="form-label">Group</label>
                        <div>
                            <select class="form-select" name="group" aria-label="Default select example" required>
                            <option selected></option>
     
                            @foreach ($user as $data)
                                <option value="{{ $data->group }}">{{ $data->group }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position/Role</label>
                            <select class="form-select" name="jabatan" aria-label="Default select example" required>
                            <option selected></option>
    
                            @foreach ($datas as $data)
                                    
                                <option value="{{ $data->jabatan }}">{{ $data->jabatan }}   ({{ $data->role}})</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                </div>
            </div>
            <div class="d-md-flex justify-content-between">
                <div class="d-md-flex align-items-center mb-3 mb-md-0">

                  
                      
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary px-5"><i class="fas fa-plus me-2"></i>Add</button>
                </div>
            </div>
        </form>
    </div>
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