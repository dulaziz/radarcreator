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
                height="100"
                width="100"
                id="uploadedAvatar"
                />
                <div>
                    <label for="upload" class="btn btn-primary my-3" tabindex="0">
                      <span>Upload  photo</span>
                      <input type="file" id="upload" name="gambar" hidden accept="image/png, image/jpeg"/>
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
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="group" class="form-label">Group</label>
                        <div>
                            <select class="form-select" name="group" aria-label="Default select example">
                                <option selected></option>
                                <option value="Radar Bogor">Radar Bogor</option>
                                <option value="Radar Sukabumi">Radar Sukabumi</option>
                                <option value="Radar Depok">Radar Depok</option>
                                <option value="Radar Bandung">Radar Bandung</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position/Role</label>
                            <select class="form-select" name="jabatan" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">Super Admin (Super Admin)</option>
                                <option value="1">Admin Finance (Admin Finance)</option>
                                <option value="1">Admin Sosmed (Admin Sosmed)</option>
                                <option value="1">Producer (Admin Upload)</option>
                                <option value="2">Writer (User)</option>
                                <option value="3">Talet/Host (User)</option>
                                <option value="4">Camera Person (User)</option>
                                <option value="5">Voice Over (User)</option>
                                <option value="5">Video Editor (User)</option>
                            </select>
                        </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
            </div>
            {{-- <div class="d-md-flex justify-content-between">
                <div class="d-md-flex align-items-center mb-3 mb-md-0">
                    <label for="role" class="form-label me-3 mb-1">Role:</label>
                    <div class="form-check me-3">
                        <input class="form-check-input" name="role" type="checkbox" value="user" id="user">
                        <label class="form-check-label" for="user">
                        User
                        </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="checkbox"  name="role" value="produser" id="prodeser">
                            <label class="form-check-label" for="prodeser">
                            Produser
                            </label>
                            </div>
                        <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" name="role" value="admin" id="admin">
                        <label class="form-check-label" for="admin">
                        Admin
                        </label>
                        </div>
                        <div class="form-check me-3">
                        <input class="form-check-input" name="role" type="checkbox" value="admiSosmed" id="adminSosmed">
                        <label class="form-check-label" for="adminSosmed">
                        Admin Sosmed
                        </label>
                        </div>
                        <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" name="role" value="superAdmin" id="superAdmin">
                        <label class="form-check-label" for="superAdmin">
                        Super Admin
                        </label>
                        </div>
                </div>
            </div> --}}
            <hr>
            <div class="d-grid d-md-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-5"><i class="fas fa-plus me-2"></i>Add</button>
            </div>
        </form>
    </div>
</div>