<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0 text-start">User Edit</h6>
            <a href="/userDetail">Back</a> 
        </div>
        <hr>
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <div class="card-body pb-0">
                <img
                src="img/profile.png"
                alt="user-avatar"
                class="rounded-circle"
                {{-- height="100" --}}
                width="150"
                id="uploadedAvatar"
                />
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 my-3" tabindex="0">
                      <span class="d-none d-sm-block">Upload new photo</span>
                      <i class="bx bx-upload d-block d-sm-none"></i>
                      <input
                        type="file"
                        id="upload"
                        class="account-file-input"
                        hidden
                        accept="image/png, image/jpeg"
                      />
                    </label>
                    <p class="fw-light mb-0">Allowed JPG, GIF or PNG. Max size of 5MB</p>
                </div>
          </div>
        </div>
          <hr>
          <div class="row">
            <div class="mb-3 col-md-6">
                <div class="row">
                    <label for="email" class="col-sm-3 col-form-label text-start">Email Address</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="row">
                    <label class="col-sm-3 col-form-label text-start">Group</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Radar Bogor</option>
                            <option value="2">Radar Sukabumi</option>
                            <option value="3">Radar Depok</option>
                            <option value="3">Radar Bandung</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="row">
                    <label for="name" class="col-sm-3 col-form-label text-start">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="row">
                    <label class="col-sm-3 col-form-label text-start">Role</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin Sosmed</option>
                            <option value="3">Admin</option>
                            <option value="3">User</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="row">
                    <label for="username" class="col-sm-3 col-form-label text-start">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="row">
                    <label class="col-sm-3 col-form-label text-start">Jabatan</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">one</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="3">Four</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="fas fa-save me-2"></i>Save</button>
        </div>
    </div>
</div>