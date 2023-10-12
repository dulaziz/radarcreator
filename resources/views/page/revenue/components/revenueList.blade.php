

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<?php
{
    $total_orang = 6;
    $insentif = 400;
    $nilai_bagian = [];

    // Pembagian untuk 3 orang yang sama
    $bagian_sama = ['A', 'A', 'A'];
    $insentif_sama = round($insentif / 2); // 200
    $nilai_sama = $insentif_sama / count($bagian_sama); // 100
    $nilai_bagian['Jumlah A'] = $nilai_sama * count($bagian_sama); // 300

    // Pembagian untuk 3 orang yang berbeda
    $bagian_berbeda = ['B', 'C', 'D'];
    $insentif_berbeda = $insentif - $insentif_sama; // 200
    $nilai_per_orang = round($insentif_berbeda / count($bagian_berbeda)); // 67
    foreach ($bagian_berbeda as $bagian) {
        $nilai_bagian[$bagian] = $nilai_per_orang;
    }
    
    // Menggabungkan nilai bagian dengan bagian
    $hasil = array_merge($bagian_sama, $bagian_berbeda);
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>Radar Bogor</h6>
        <hr>
        <div class="row mb-4">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                
         

            

                <div>
                <?php
                    if(auth()->user()->role == 'Admin Sosmed'):?>

                    <form action="/revenue" method="GET">
                        @csrf
                <div class="input-group">
                    <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="fas fa-building"></i></label>
                    <select class="form-select" name="select" onchange="this.form.submit()" aria-label=".form-select-sm example">
                        <option selected value="">Filter Group</option>
                        @foreach ($users as $data)
                        <option value="{{$data->id_group}}">{{$data->group}}</option>
                        @endforeach
                    </select>

                </div>
                    </form>
                    <?php endif;?>
            </div>                
                {{-- End Admin Sosmed Only --}}
                <div>
                
                

                <form action="/revenue" method="GET">
                        @csrf
                        <div class="input-group">
                        <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>

<input type="text" name="roles" class="form-control datetimepicker-input" data-target="#tanggalPicker" />
<button class="btn btn-dark" type="submit" id="button-addon2"><i class="fas fa-search text-muted"></i></button>


                        </div>
                </div>


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
                        <th rowspan="2" style="width: 7%;">Published</th>
                        <th rowspan="2" style="width: 5%;">Platform</th>
                        <th rowspan="2" style="width: 5%;">Status</th>
                        <th colspan="4">Revenue/Bulan</th>
                        <th colspan="4">Revenue/14 Hari</th>
                        <?php
                        if(auth()->user()->role == 'Produser'):?>
                        <th rowspan="2" style="width: 2%">Action</th>
                        <?php endif;?>
                        <?php
                        if(auth()->user()->role == 'Admin Sosmed'):?>
                        <th rowspan="2" style="width: 2%">Action</th>
                        <?php endif;?>
                        <?php
                        if(auth()->user()->role == 'Admin Finance'):?>
                        <th rowspan="2" style="width: 2%">Action</th>
                        <?php endif;?>
                        <?php
                        if(auth()->user()->role == 'Super Admin'):?>
                        <th rowspan="2" style="width: 2%">Action</th>
                        <?php endif;?>


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
                @php $no = 1; @endphp

                    @foreach($user as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><a href="">{{$data->video_title}}.</a></td>
                        <td>{{$data->tanggal}}</td>
                        <td>{{$data->platform}}</td>
                        <td>
                              <?php
                    if($data->status == 'Pending'):?>
                    <span class="mb-0 me-4"><i class="fas fa-hourglass-half me-2"></i></span>

                    <?php elseif($data->status == 'Published'):?>
                        <span class="mb-0 text-success me-4"><i class="fas fa-play me-2"></i></span>
                    <?php elseif($data->status == 'Takedown'):?>
                        <span class="mb-0 text-danger me-4"><i class="fas fa-pause me-2"></i></span>
<?php endif;?>
                        </td>
                        <td class="text-white text-center fw-bold">{{number_format(floatval($data->viewer_bulan))}}</td>
                        <td class="text-white text-center fw-bold">{{number_format(floatval($data->impression_bulan))}}</td>
                        <td class="text-success text-center fw-bold">${{number_format(floatval($data->revenue_bulan), 2)}}</td>
                        <td class="text-center fw-bold">{{$data->revenuedate_bulan}}</td>

                        <td class="text-white text-center fw-bold">{{number_format(floatval($data->viewer_harian))}}</td>
                        <td class="text-white text-center fw-bold">{{number_format(floatval($data->impression_harian))}}</td>
                        <td class="text-success text-center fw-bold">${{number_format(floatval($data->revenue_harian), 2)}}</td>
                        <td class="text-center fw-bold">{{$data->revenuedate_harian}}</td>
                        
                        <?php
                        if(auth()->user()->role == 'Produser'):?>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue/{{$data->id}}"><i class="bi bi-cash"></i></a>
                                <a class="btn btn-sm btn-success" href="/editRevenue/{{$data->id}}"><i class="bi bi-plus"></i></a>

                            </div>
                        </td>
                        <?php endif;?>
                        <?php
                        if(auth()->user()->role == 'Admin Finance'):?>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                            <a class="btn btn-sm btn-primary" href="/detailRevenue/{{$data->id}}"><i class="bi bi-cash"></i></a>
                                <a class="btn btn-sm btn-success" href="/editRevenue/{{$data->id}}"><i class="bi bi-plus"></i></a>
                                <?php
                        if($data->isentif === 'Noted'):?>
                                <a class="btn btn-sm btn-warning" href="/detailIsentif/{{$data->id}}"><i class="bi bi-calculator"></i></a>
                                <?php endif;?>  
                                <?php
                        if($data->isentif === 'Selesai'):?>
                                <a class="btn btn-sm btn-warning" ><i class="bi bi-card-checklist" style="color: rgb(0, 0, 255);"></i></a>
                                <?php endif;?> 
                            </div>
                        </td>
                        <?php endif;?>
                        <?php
                        if(auth()->user()->role == 'Super Admin'):?>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue/{{$data->id}}"><i class="bi bi-cash"></i></a>
                                <a class="btn btn-sm btn-success" href="/editRevenue/{{$data->id}}"><i class="bi bi-plus"></i></a>
                                <?php
                        if($data->isentif === 'Noted'):?>
                                <a class="btn btn-sm btn-warning" href="/detailIsentif/{{$data->id}}"><i class="bi bi-calculator"></i></a>
                                <?php endif;?>  
                                <?php
                        if($data->isentif === 'Selesai'):?>
                                <a class="btn btn-sm btn-warning" ><i class="bi bi-card-checklist" style="color: rgb(0, 0, 255);"></i></a>
                                <?php endif;?> 


                            </div>
                        </td>
                        <?php endif;?>  <?php
                        if(auth()->user()->role == 'Admin Sosmed'):?>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <a class="btn btn-sm btn-primary" href="/detailRevenue/{{$data->id}}"><i class="bi bi-cash"></i></a>
                                <a class="btn btn-sm btn-success" href="/editRevenue/{{$data->id}}"><i class="bi bi-plus"></i></a>

                            </div>
                            
                        </td>
                        <?php endif;?>
                    </tr>
                </tbody>
                @endforeach
            
                <tfoot class="text-center">
                    <tr class="text-white">
                        <th colspan="5">
                            
                            <h6 class="mb-0"><span class="text-muted">Total Revenue:</span></h6>
                        </th>
                        @foreach($totals as $datas)

                        <th colspan="4" href="" class="text-warning update" data-name="total" data-type="text" data-pk="{{$datas->id}}" data-title="Masukan Total">{{'$' .number_format(floatval($datas->total))}}</th>
                        @endforeach
                        <th colspan="4" href="" class="text-warning">{{'$' .number_format($total)}}</th>
                         
                        <th colspan="4" href="" class="text-warning"><a class="btn btn-sm btn-success" href="/Total"><i class="bi bi-plus"></i></a></th>
                        <th colspan="1"></th>
                    </tr>
                </tfoot>
            </table>
            
        </div>
        {{ $user->withQueryString()->links() }}


    </div>
    
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
    <script>$.fn.poshytip={defaults:null}</script>
    
    <script type="text/javascript">
        $.fn.editable.defaults.mode = 'inline';
      
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        }); 
        
        $('.update').editable({
            url: "/revenue/updates",
            type: 'text',
        });
    
    </script>


