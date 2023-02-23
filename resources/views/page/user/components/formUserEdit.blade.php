<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0 text-start">User Edit</h6>
            <a href="/user">Back</a> 
        </div>
        <hr>
        <form action="userEdit/update" method="post" enctype="multipart/form-data" >
@csrf
        <div class="d-flex align-items-center gap-4 text-center">
            <div class="card-body pb-0">
                <img
                src="/images/{{ $user->gambar }}"
                alt="user-avatar"
                class="rounded-circle"
                {{-- height="100" --}}
                width="150"
                id="uploadPreview"
                />
                <div>
                    <label for="upload" class="btn btn-primary my-3" tabindex="0">
                      <span>Upload new photo</span>
                      <input type="file" id="upload" name="gambar"  onchange="PreviewImage();"hidden accept="image/png, image/jpeg"/>
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
                        <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" value="{{$user->username}}" class="form-control" name="username" id="username">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="group" class="form-label">Group</label>
                        <div>
                            <select class="form-select" name="id_group" aria-label="Default select example">
                            @foreach ($datas as $data)
                            <option value="2" @selected($data->group == 'Radar Bogor')>Radar Bogor</option>            
                                <option value="3" @selected($data->group == 'Radar Depok')>Radar Depok</option>            
                                <option value="4" @selected($data->group == 'Radar Sukabumi')>Radar Sukabumi</option>            
                                <option value="5" @selected($data->group == 'Radar Bandung')>Radar Bandung</option>            
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                            <select class="form-select" name="id_jabatan" aria-label="Default select example">
                            @foreach ($datas as $data)
                            <option value="1" @selected($data->jabatan == 'Produser')>Produser</option>            
                                <option value="2" @selected($data->jabatan == 'Writer')>Writer</option>            
                                <option value="3" @selected($data->jabatan == 'Talent/Host')>Talent/Host</option>            
                                <option value="4" @selected($data->jabatan == 'Camera Person')>Camera Person</option>            
                                <option value="5" @selected($data->jabatan == 'Voice Over')>Voice Over</option>            
                                <option value="6" @selected($data->jabatan == 'Video Editor')>Video Editor</option>            

                                @endforeach

                            </select>
                        </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{$user->password}}"  id="password">
                    </div>
                </div>
            </div>
            <div class="d-md-flex justify-content-between">
                <div class="d-md-flex align-items-center mb-3 mb-md-0">
                    <label for="role" class="form-label me-3 mb-1">Role:</label>
                    <div class="form-check me-3">
                        <input class="form-check-input" name="role" type="checkbox" value="User" {{ in_array('User', $role) ? 'checked' : '' }} id="user">
                        <label class="form-check-label" for="user">
                        User
                        </label>
                      </div>
                      <div class="form-check me-3">
                        <input class="form-check-input" name="role"  type="checkbox" value="Admin" {{ in_array('Admin', $role) ? 'checked' : '' }} id="admin">
                        <label class="form-check-label" for="admin">
                        Admin
                        </label>
                      </div>
                      <div class="form-check me-3">
                        <input class="form-check-input" name="role"  type="checkbox" value="Admin Sosmed" {{ in_array('Admin Sosmed', $role) ? 'checked' : '' }} id="adminSosmed">
                        <label class="form-check-label" for="adminSosmed">
                        Admin Sosmed
                        </label>
                      </div>
                      <div class="form-check me-3">
                        <input class="form-check-input"  name="role"  type="checkbox" value="Super Admin" {{ in_array('Super Admin', $role) ? 'checked' : '' }} id="superAdmin">
                        <label class="form-check-label" for="superAdmin">
                        Super Admin
                        </label>
                      </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary px-5"><i class="fas fa-save me-2"></i>Update</button>
                </div>
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