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
    <div class="d-flex align-items-center justify-content-between">
        <h6 class="mb-0 text-start"><span class="text-muted">Revenue: </span>{{Auth::user()->name}}</h6>
        <a href="/uploaded">Back</a>
    </div>
    <hr>

    <div class="row mb-4">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
            <form action="/revenue" method="GET">
                        @csrf
                <div class="d-flex align-items-center mb-2 mb-md-0">
                <span>Show</span>
                
                
                <select class="form-select ms-2" aria-label=".form-select-sm example" name="page" id="Page" onchange="this.form.submit()">
<option value="10"></option>10</option>
<option value="25" >25</option>
<option value="50" >50</option>
<option value="100">100</option>
</select>
                </div>
                </form>
                <div>
                        
                </div>
                <div>
                    
                <form action="/revenue" method="GET">
                        @csrf
                    <div class="input-group">
                        <label class="input-group-text  ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select nam class="form-select" name="roless" onchange="this.form.submit()" type="search" wire:model="search" aria-label=".form-select-sm example">
                            <option value="">Default</option>
                            <option value="1"  >January</option>
                            <option value="2"   >February</option>
                            <option value="3"   >Maret</option>
                            <option value="4"   >April</option>
                            <option value="5" >May</option>
                            <option value="6"  >June</option>
                            <option value="7" >July</option>
                            <option value="8"  >August</option>
                            <option value="9"  >September</option>
                            <option value="10"  >October</option>
                            <option value="11"  >November</option>
                            <option value="12"  >Desember</option>
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

    <div class="row mt-4">
    <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover mb-0">
                <thead class="text-center">
                    <tr class="text-white">
                        <th scope="col">No</th>
                        <th scope="col">Published</th>
                        <th scope="col">Video Title</th>
                        <th scope="col">Production Team</th>
                        <th scope="col">Viewer</th>
                        <th scope="col">impression</th>
                        <th scope="col">Revenue</th>

                    </tr>
                </thead>
                <tbody class="text-start">


                    <tr>

                        <td>--</td>
                        <td class="text-center">--</td>
                        <td class="text-center">--</td>


                        <td class="text-center">--</td>
                        <td class="text-white text-center fw-bold">--</td>
                        <td class="text-white text-center fw-bold">--</td>
                        <td class="text-success text-center fw-bold">--</td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr class="text-white">
                        <th colspan="6" class="text-center">
                            <h6 class="mb-0"><span class="text-muted">Total Revenue: --</span> </h6>
                        </th>
                        <th colspan="1" class="text-warning text-center">--</th>
                    </tr>
                </tfoot>
            </table>
        </div>        
    </div> 

</div>
</div>
