
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>{{Auth::user()->name}}</h6>
        <hr>

        <div class="row mb-4">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
            <form action="/revenue" method="GET">
                        @csrf
                <div class="d-flex align-items-center mb-2 mb-md-0">
                <span>Show</span>
                
                
                <select class="form-select ms-2" aria-label=".form-select-sm example" name="page" id="Page" onchange="this.form.submit()">
<option value="10" {{ $user->perPage() == 10 ? 'selected' : '' }}>10</option>
<option value="25" {{ $user->perPage() == 25 ? 'selected' : '' }}>25</option>
<option value="50" {{ $user->perPage() == 50 ? 'selected' : '' }}>50</option>
<option value="100" {{ $user->perPage() == 100 ? 'selected' : '' }}>100</option>
</select>
                </div>
                </form>
                <div>
                    <div class="input-group mb-2 mb-md-0">
                        <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="fas fa-building"></i></label>
                        <select class="form-select" name="groups" aria-label=".form-select-sm example">
                            <option selected>Filter Group</option>
                            @foreach ($users as $data)
                            <option value="{{$data->id_group}}">{{$data->group}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                        
                </div>
                <div>
                    
                <form action="/revenue" method="GET">
                        @csrf
                    <div class="input-group">
                        <label class="input-group-text  ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select nam class="form-select" name="roless" onchange="this.form.submit()" type="search" wire:model="search" aria-label=".form-select-sm example">
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
               

            </div>
</form>
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
                        <th scope="col">Date</th>
                        <th scope="col">Video Title</th>
                        <th scope="col">Production Team</th>
                        <th scope="col">Viewer</th>
                        <th scope="col">impression</th>
                        <th scope="col">Revenue</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp

                @foreach($usersss as $s)
                <tbody class="text-start">


                    <tr>

                        <td>{{$no++}}</td>
                        <td class="text-center">{{$s->published_date}}</td>
                        <td class="text-center">{{$s->tanggal}}</td>
                        <td class="text-center">{{$s->video_title}}</td>


                        <td class="text-center">{{$s->name}}</td>
                        <td class="text-white text-center fw-bold">${{number_format(floatval($s->viewer_harian))}}</td>
                        <td class="text-white text-center fw-bold">${{number_format(floatval($s->impression_harian))}}</td>
                        <td class="text-success text-center fw-bold">${{number_format(floatval($s->isentif))}}</td>
                    </tr>

                </tbody>
                @endforeach
                <tfoot>
                    <tr class="text-white">
                        <th colspan="5">
                            <h6 class="mb-0"><span class="text-muted">Total Revenue: {{Auth::user()->name}}</span> </h6>
                        </th>
                        <th colspan="3" class="text-warning">${{number_format(floatval($totalss))}}</th>
                    </tr>
                </tfoot>
            </table>
            {{$user->links()}}
        </div>

    </div>