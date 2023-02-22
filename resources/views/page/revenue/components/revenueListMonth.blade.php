<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>Video Title</h6>
        <hr>

        <div class="row mb-5">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <span>Show</span>
                    <select class="form-select ms-2" aria-label=".form-select-sm example">
                        <option selected>5</option>
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">20</option>
                    </select>
                </div>
                <div>
            </div>
                <div>
                    <div class="input-group">
                        <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select class="form-select" aria-label=".form-select-sm example">
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
                {{-- <input class="form-control" type="text" placeholder="Search" aria-label="default input example"> --}}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="button" id="button-addon2"><i class="fas fa-search text-muted"></i></button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover mb-0">
                <thead class="text-center align-middle">
                    <tr class="text-white">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Month</th>
                        <th colspan="3">Revenue/Month</th>
                        <th colspan="3">Revenue/14Day</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr class="text-white">
                        <th scope="col">Viewer</th>
                        <th scope="col">impression</th>
                        <th scope="col">Revenue</th>
                        <th scope="col">Viewer</th>
                        <th scope="col">impression</th>
                        <th scope="col">Revenue</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                    <tr>
                        <td class="text-center">01</td>
                        <td class="text-center">January 2023</td>
                        <td class="text-white text-center fw-bold">00</td>
                        <td class="text-white text-center fw-bold">00</td>
                        <td class="text-center fw-bold">$0000</td>
                        <td class="text-white text-center fw-bold">00</td>
                        <td class="text-white text-center fw-bold">00</td>
                        <td class="text-center fw-bold">$0000</td>
                        {{-- Admin Sosmed Only --}}
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="fas fa-pen"></i></a>
                            </div>
                        </td>
                        {{--End Admin Sosmed Only --}}
                    </tr>
                    <tr>
                        <td class="text-center">02</td>
                        <td class="text-center">February 2023</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="fas fa-pen"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">03</td>
                        <td class=" text-center">March 2023</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="fas fa-pen"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">04</td>
                        <td class=" text-center">April 2023</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="fas fa-pen"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">05</td>
                        <td class="text-center">May 2023</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-white text-center fw-bold">2100</td>
                        <td class="text-success text-center fw-bold">$2100</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue"><i class="fas fa-pen"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-white">
                        <th colspan="2">
                            <h6 class="mb-0"><span class="text-muted">Total Revenue:</span> Video Title</h6>
                        </th>
                        <th colspan="3" class="text-warning text-center">$12345</th>
                        <th colspan="3" class="text-warning text-center">$12345</th>
                        <th ></th>
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

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Video & Revenue</h6>
                <canvas id="worldwide-sales"></canvas>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Note</h6>
                <ul class="list-unstyled mb-0">
                    <li>Pendapatan Anda adalah:</li>
                    <li>Total revenue dari satu video, di bagi jumlah production team dalam pembuatan video tersebut.</li>
                    <br>
                    <li>Revenue Sharing:
                        <dt>1. 2000 > </dt>
                            <ul> 
                            <li>80 : 20</li></dd>
                            <li>20 : Production Team</li></dd>
                            </ul>
                        <dt>2. 2001 - 4000 </dt>
                            <ul>
                            <li>70 : 30</li></dd>
                            <li>30 : Production Team</li></dd>
                            </ul>
                        <dt>3. 4001 > </dt>
                            <ul>
                            <li>60 : 40</li></dd>
                            <li>40 : Production Team</li></dd>
                            </ul>
                    </li>
                    <br>
                    <li>Finance Radar Bogor Group.</li>
                </ul>
            </div>
        </div>
    </div>
</div>