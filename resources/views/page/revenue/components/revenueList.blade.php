<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h6 class="mb-0 text-start">Video & Revenue</h6>
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
                    <div class="input-group">
                        <label class="input-group-text  ms-md-4 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select class="form-select text-center" aria-label=".form-select-sm example">
                        <option selected>Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <input class="form-control" type="text" placeholder="Search" aria-label="default input example">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-center align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">No</th>
                        <th scope="col">Group</th>
                        <th scope="col">Tgl Upload</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tim</th>
                        <th scope="col">Tgl Tayang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Revenue</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Radar Bogor</td>
                        <td>01 Jan 2045</td>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                        <td>Jhon Doe, John Martins, Johncena</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success fw-bold">Published</span>
                        </td>
                        <td class="text-warning fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="bi bi-cash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Radar Bogor</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="fw-bold">Pending</span>
                        </td>
                        <td class="text-warning fw-bold">$0</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="bi bi-cash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Radar Depok</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-danger fw-bold">TD</span>
                        </td>
                        <td class="text-warning fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="bi bi-cash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Radar Bandung</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success fw-bold">Published</span>
                        </td>
                        <td class="text-warning fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="bi bi-cash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- <td><input class="form-check-input" type="checkbox"></td> --}}
                        <td>05</td>
                        <td>Radar Sukabumi</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success fw-bold">Published</span>
                        </td>
                        <td class="text-warning fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="bi bi-cash"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-white">
                        <th colspan="7">Total Revenue</th>
                        <th colspan="2">$12345</th>
                    </tr>
                </tfoot>
            </table>
            <nav aria-label="..." class="float-end mt-3">
                <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">&laquo;</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<!-- Recent Sales End -->