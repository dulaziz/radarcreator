<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Add Position</h6>
            <a href="/position">Back</a>
        </div>
        <hr>
        <form action="../position/tambah_posisi" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="positionName" class="form-label">Position Name</label>
                  <input type="text" class="form-control"name="jabatan" required>
                </div>
                <div class="col-md-6 mb-2 mb-md-0">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option selected></option>
                        @foreach($user as $data)
                        <option value="{{$data->jabatan}}" >{{$data->jabatan}}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <hr>
            <div class="d-grid d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="submit"><i class="fas fa-save me-2"></i>Save</button>
              </div>
          </form>
    </div>
</div>