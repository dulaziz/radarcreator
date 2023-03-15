<!-- Revenue List Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>Radar Depok</h6>
        <hr>
        <div class="row mb-4">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <span>Show</span>
                    <select class="form-select ms-2" aria-label=".form-select-sm example">
                        <option selected>5</option>
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">50</option>
                        <option value="3">100</option>
                    </select>
                </div>
                {{-- Admin Sosmed Only --}}

                <div>
                    <form action="/revenue" method="GET">
                        @csrf
                <div class="input-group">
                    <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="fas fa-building"></i></label>
                    <select class="form-select" name="select" aria-label=".form-select-sm example">
                        <option selected value="">Filter Group</option>
                        @foreach ($users as $data)
                        <option value="{{$data->id_group}}">{{$data->group}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-dark" type="submit" id="find">  <span>Find</span></i></button>

                </div>
                    </form>
            </div>                
                {{-- End Admin Sosmed Only --}}
                <div>
                <form action="/revenue" method="GET">
                        @csrf
                    <div class="input-group">
                        <label class="input-group-text  ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select nam class="form-select" name="roles" type="search" wire:model="search" aria-label=".form-select-sm example">
                        <option value="">Default</option>
                        <option value="Januari"  >January</option>
                        <option value="Febuari"   >February</option>
                        <option value="Maret"   >Maret</option>
                        <option value="April"   >April</option>
                        <option value="Mei" >May</option>
                        <option value="Juni"  >June</option>
                        <option value="Juli" >July</option>
                        <option value="Agustus"  >August</option>
                        <option value="September"  >September</option>
                        <option value="Oktober"  >October</option>
                        <option value="November"  >November</option>
                        <option value="Desember"  >Desember</option>
                    </select>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit" id="find">  <span>Find</span></i></button>

            </div>
</form>

            <div class="col-md-4">
            <form action="/revenue"  method="GET" >
                @csrf

                <div class="input-group">

                    <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="button" id="button-addon2"><i class="fas fa-search text-muted"></i></button>
                </div>
            </form>
            </div>

        </div>        
        <div style="overflow-x: scroll;">
            <table class="table align-middle table-bordered table-hover mb-0" style="width: 1800px;">
                <thead class="text-center">
                    <tr class="text-white align-middle">
                        <th rowspan="2" style="width: 2%;">No</th>
                        <th rowspan="2" style="width: 20%;">Video Title</th>
                        <th rowspan="2" style="width: 15%;">Production Team</th>
                        <th rowspan="2" style="width: 7%;">Published</th>
                        <th rowspan="2" style="width: 5%;">Platform</th>
                        <th rowspan="2" style="width: 5%;">Status</th>
                        <th colspan="4">Revenue/Bulan</th>
                        <th colspan="4">Revenue/14 Hari</th>
                        <th rowspan="2" style="width: 2%">Action</th>
                    </tr>
                    <tr class="text-white">
                        <th scope="col" style="width: 5%;">Viewer</th>
                        <th scope="col" style="width: 5%;">impression</th>
                        <th scope="col" style="width: 5%;">Revenue</th>
                        <th scope="col" style="width: 7%;">Rv Date</th>
                        <th scope="col" style="width: 5%;">Viewer</th>
                        <th scope="col" style="width: 5%;">impression</th>
                        <th scope="col" style="width: 5%;">Revenue</th>
                        <th scope="col" style="width: 7%;">Rv Date</th>
                        
                    </tr>
                </thead>
                <tbody class="text-start">
                    @foreach($user as $data)
                    <tr>
                        <td>05</td>
                        <td><a href="">{{$data->video_title}}.</a></td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->tanggal}}</td>
                        <td>{{$data->platform}}</td>
                        <td>
                            <span class="text-success fw-bold">{{$data->status}}</span>
                        </td>
                        <td class="text-white text-center fw-bold">${{$data->viewer_bulan}}</td>
                        <td class="text-white text-center fw-bold">${{$data->impression_bulan}}</td>
                        <td class="text-success text-center fw-bold">${{$data->revenue_bulan}}</td>
                        <td class="text-center fw-bold">{{$data->revenuedate_bulan}}</td>

                        <td class="text-white text-center fw-bold">${{$data->viewer_harian}}</td>
                        <td class="text-white text-center fw-bold">${{$data->impression_harian}}</td>
                        <td class="text-success text-center fw-bold">${{$data->revenue_bulan}}</td>
                        <td class="text-center fw-bold">{{$data->revenuedate_harian}}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue/{{$data->id}}"><i class="bi bi-cash"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                <tfoot class="text-center">
                    <tr class="text-white">
                        <th colspan="6">
                            <h6 class="mb-0"><span class="text-muted">Total Revenue:</span></h6>
                        </th>
                        <th colspan="4" class="text-warning">$12345</th>
                        <th colspan="4" class="text-warning">$12345</th>
                        <th colspan="1" class="text-warning"></th>
                    </tr>
                </tfoot>
            </table>
        </div>


    </div>
</div>
