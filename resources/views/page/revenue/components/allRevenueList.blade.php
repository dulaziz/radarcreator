

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>{{$namaDicari}}</h6>
        <hr>

            <div class="row mb-4">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
          
            <form action="/revenue" method="GET">
                        @csrf
                <div class="d-flex align-items-center mb-2 mb-md-0">
                <span>Show</span>
                
            
                </div>
                </form>

                <div>
                <form action="/export-excel" method="GET">
                        @csrf
                        <div class="input-group mb-2 mb-md-0">
                            <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                            <input type="text" class="form-control" id="revenuedate_bulan" name="revenuedate_harian"  required>  
                            <button class="btn btn-dark" type="submit" id="button-addon2"><i class="fas fa-search text-muted"></i></button>

                        </div>
                </div>
                <div>
                    
                    </form>
                  
                    <form action="/revenue" method="GET">
                        @csrf
                        <div class="input-group mb-2 mb-md-0">
                            <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="fas fa-user"></i></label>
                            <select class="form-select" name="names" onchange="this.form.submit()" aria-label=".form-select-sm example">
                                <option value="">Pilih Nama </option>
                                @foreach ($nama_user as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                                @endforeach

                            </select>
                        </div>
                </div>
                <div>
                    
                  
                   

                <form action="/revenue" method="GET">
                        @csrf
                        <div class="input-group mb-2 mb-md-0">
                        <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>

                    <input type="text" name="tanggal" class="form-control datetimepicker-input" data-target="#tanggalPicker" />
                    <button class="btn btn-dark" type="submit" id="button-addon2"><i class="fas fa-search text-muted"></i></button>

    

                </div>

            </div>
</form>
            </div>
            <div class="col-md-4">
            <form action="/revenue"  method="GET" >
                @csrf

                <div class="input-group">
                    <input class="form-control" type="text" name="searchs" placeholder="Search" aria-label="default input example">
                    <button class="btn btn-dark" type="submit" id="button-addon2"><i class="fas fa-search text-muted"></i></button>
                </div>
                </form>
            </div>
        </div>
       
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover mb-0">
                <thead class="text-center">
                    <tr class="text-white">
                        <th scope="col">No</th>
                        <th scope="col">Published</th>
                        <th scope="col">Nama Upload</th>
                        <th scope="col">Video Title</th>
                        <th scope="col">Viewer</th>
                        <th scope="col">impression</th>
                        <th scope="col">Revenue</th>
                       <!-- Menampilkan data hasil search -->
                        
                    </tr>
                </thead>
                @php $no = 1; @endphp

                @foreach($pmn as $s)
         
                <tbody class="text-start">


                    <tr>

                        <td>{{$no++}}</td>
                        <td class="text-center">{{$s->published}}</td>
                        <td class="text-center">{{$s->nama}}</td>
                        <td class="text-center">{{$s->judul_video}}</td>

                        <td class="text-white text-center fw-bold">{{number_format(floatval($s->viewer))}}</td>
                        <td class="text-white text-center fw-bold">{{number_format(floatval($s->impression))}}</td>
                        <td class="text-success text-center fw-bold">${{number_format(floatval($s->pendapatan), 2)}}</td>
      
      </tr>

                    </tr>

                </tbody>
                @endforeach

                <tfoot>
                    <tr class="text-white">
                        <th colspan="5">
                            <h6 class="mb-0"><span class="text-muted">Total Revenue: {{$namaDicari}}</span> </h6>
                        </th>
                        <th colspan="3" class="text-warning">${{number_format(floatval($totala), 2)}}</th>
                    </tr>
                </tfoot>
            </table>
            {{ $pmn->withQueryString()->links() }}
            {{ csrf_field() }}
        </div>

    </div>

</div>

<script>
    $(function() {
        $('#daterange').daterangepicker();
    });
</script>