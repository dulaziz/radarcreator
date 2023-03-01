<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Add Position</h6>
            <a href="/position">Back</a>
        </div>
        <hr>
        <form>
            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="positionName" class="form-label">Position Name</label>
                  <input type="text" class="form-control" id="positionName" name="positionName">
                </div>
                <div class="col-md-6 mb-2 mb-md-0">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option selected></option>
                        <option value="1">User</option>
                        <option value="2">Admin Finance</option>
                        <option value="3">Admin Upload</option>
                        <option value="4">Admin Sosmed</option>
                        <option value="5">Super Admin</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="d-grid d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button"><i class="fas fa-save me-2"></i>Save</button>
              </div>
          </form>
    </div>
</div>