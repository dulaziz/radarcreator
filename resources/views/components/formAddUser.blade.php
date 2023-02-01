<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h6 class="mb-0 text-start">Add User</h6>
        <hr>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label text-start">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label text-start">Email Address</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label text-start">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-start">Group</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Radar Bogor</option>
                    <option value="2">Radar Sukabumi</option>
                    <option value="3">Radar Depok</option>
                    <option value="3">Radar Bandung</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-start">Role</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Super Admin</option>
                    <option value="2">Admin Sosmed</option>
                    <option value="3">Admin</option>
                    <option value="3">User</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-start">Jabatan</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">one</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="3">Four</option>
                </select>
            </div>
        </div>
        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="fas fa-plus me-2"></i>Add</button>
        </div>
    </div>
</div>

