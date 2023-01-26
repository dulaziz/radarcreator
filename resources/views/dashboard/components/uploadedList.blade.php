<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h6 class="mb-0 text-start">Recent Uploaded</h6>
        <hr>

        <div class="row mb-4">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <span>Show</span>
                    <select class="form-select ms-4" aria-label=".form-select-sm example">
                        <option selected>5</option>
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">50</option>
                        <option value="3">100</option>
                    </select>
                </div>
                <div>
                    <select class="form-select text-center ms-md-4" aria-label=".form-select-sm example">
                        <option selected>Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="3">April</option>
                        <option value="3">May</option>
                        <option value="3">June</option>
                        <option value="3">July</option>
                        <option value="3">August</option>
                        <option value="3">September</option>
                        <option value="3">October</option>
                        <option value="3">November</option>
                        <option value="3">Desember</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Search" aria-label="default input example">
            </div>
        </div>

        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-1 align-self-center">
                    <a href="/allUploadList">Show</a>
                </div>
                <div class="col-3">
                    <select class="form-select ms-4" aria-label=".form-select-sm example">
                        <option selected>5</option>
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">50</option>
                        <option value="3">100</option>
                    </select>
                </div>
               
                <div class="col-7">
                    <select class="form-select text-center ms-4" aria-label=".form-select-sm example">
                        <option selected>Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="3">April</option>
                        <option value="3">May</option>
                        <option value="3">June</option>
                        <option value="3">July</option>
                        <option value="3">August</option>
                        <option value="3">September</option>
                        <option value="3">October</option>
                        <option value="3">November</option>
                        <option value="3">Desember</option>
                    </select>
                </div>
            </div>
            <input class="form-control" style="width: 20rem;" type="text" placeholder="Search" aria-label="default input example">
        </div> --}}

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">No</th>
                        <th scope="col">Group</th>
                        <th scope="col">Tgl Upload</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Video</th>
                        <th scope="col">Tim</th>
                        <th scope="col">Tgl Tayang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Radar Bogor</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success">Tayang</span>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href=""><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning text-white" href=""><i class="fas fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Radar Bogor</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span>Pending</span>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href=""><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning text-white" href=""><i class="fas fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Radar Depok</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-danger">TD</span>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href=""><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning text-white" href=""><i class="fas fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Radar Bandung</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success">Tayang</span>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href=""><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning text-white" href=""><i class="fas fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        {{-- <td><input class="form-check-input" type="checkbox"></td> --}}
                        <td>05</td>
                        <td>Radar Sukabumi</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success">Tayang</span>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href=""><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning text-white" href=""><i class="fas fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-3 d-flex justify-content-end">
            <nav aria-label="..." class="bg-secondary">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
        </div>

    </div>
</div>
<!-- Recent Sales End -->