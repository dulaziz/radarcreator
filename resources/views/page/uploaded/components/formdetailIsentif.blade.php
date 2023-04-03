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
        <h6 class="mb-0 text-start">Video Detail</h6>
        <a href="/uploaded">Back</a>
    </div>
    <hr>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="mb-3 detail-vid">
            <video controls src="{{ asset('/storage/public/posts/'.$user->video) }}"class="w-100"></video>
            </div>
            <a href="">
                <p class="fs-5 fw-bold text-white">{{!! json_encode($nilai_bagian) !!}}.</p>
            </a>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <h6 class="">Detail</h6>
                <div class="row mb-1">
                    <div class="col-md-4">
                        <p class="mb-0">Group</p>
                    </div>
                    <div class="col-md-8">
                        <p class="mb-0">: {{$user->group}}</p>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-4">
                        <p class="mb-0">Uploaded Date</p>
                    </div>
                    <div class="col-md-8">
                        <p class="mb-0">: {{$user->tanggal}}</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h6 class="">Production Team</h6>
                      <div class="row mb-1">
                    <div class="col-md-4">
                    @foreach(explode(",", $user->produksi) as $option)

                        <p class="mb-0">: {{$option}}</p>
                        @endforeach

                    </div>

                    <div class="col-md-8">
                    @foreach(explode(",", $user->name) as $option)

                        <p class="mb-0">: {{$option}}</p>
                        @endforeach

                    </div>
                </div>
               
            <div class="mb-3">
                <h6 class="">Pendapatan</h6>
              
                <div class="row mb-1">
                    <div class="col-md-4">
                        <p class="mb-0">Published Date</p>
                    </div>
                    <div class="col-md-8">
                        <p class="mb-0">: {{$user->tanggal}}</p>
                    </div>
                </div>
                
                  
                </div>
            </div>
        </div>
    </div> 

</div>
</div>
