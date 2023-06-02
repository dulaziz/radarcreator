<?php
$totalPendapatan = 1000; // Jumlah pendapatan yang akan dibagi


    $names = explode(',', $user->name);
    $roles = explode(",",$user->produksi);

    $nameCounts = array_count_values($names);
    $insentif = intval($user->isentif);



    // Hitung jumlah orang yang memenuhi syarat
    $numEligible = count($names);


    
// Hitung insentif per orang untuk produser dan admin
$insentifPerPersonProduser = ($insentif * 0.1) / $numEligible;
$insentifPerPersonVoiceOver = ($insentif * 0.1) / $numEligible;
$insentifPerPersonWriter = ($insentif * 0.075) / $numEligible;
$insentifPerPersonVideoEditor = ($insentif * 0.1) / $numEligible;

$insentifPerPersonAdmin = ($insentif * 0.025) / $numEligible;

// Menginisialisasi total insentif
$totalInsentifProduser = 0;
$totalInsentifVoiceOver = 0;
$totalInsentifWriter = 0;
$totalInsentifVideoEditor = 0;

$totalInsentifAdmin = 0;

// Melakukan iterasi pada array names dan roles
for ($i = 0; $i < count($names); $i++) {
    $name = $names[$i];
    $role = $roles[$i];

    if ($role === 'Produser') {
        $insentifPePerson = $insentifPerPersonProduser;
        $totalInsentifProduser += $insentifPePerson;
    } elseif ($role === 'Writer') { 
        $insentifPePerson = $insentifPerPersonWriter;
        $totalInsentifWriter += $insentifPePerson;
    }
 elseif ($role === 'Voice Over') { 
    $insentifPePerson = $insentifPerPersonVoiceOver;
    $totalInsentifVoiceOver += $insentifPePerson;
}
elseif ($role === 'Video Editor') { 
    $insentifPePerson = $insentifPerPersonVideoEditor;
    $totalInsentifVideoEditor += $insentifPePerson;
}



}

    // Bagi insentif dengan jumlah orang yang memenuhi syarat
    $insentifPerPerson = ($insentif / $numEligible);
    $insentiff = $insentifPePerson;

    // Tampilkan pembagian insentif untuk user yang sedang login

    $name = $user->name;
    $p = $user->produksi;

// Pisahkan nama menjadi kata-kata dengan spasi sebagai pemisah
$words = explode(',', $name);
$pro = explode(',', $p);


// Hitung jumlah kemunculan masing-masing nama
$nameCounts = array_count_values($words);
$produksi = array_count_values($pro);

arsort($nameCounts);
arsort($produksi);

// Tampilkan jumlah kemunculan masing-masing nama
    // Tampilkan hasil perhitungan jumlah kata yang sama dan berbeda pada kolom nama untuk setiap data
    $totalInsentif = 0;
   
    ?>
<div class="container-fluid pt-4 px-4">
<div class="bg-secondary rounded p-4">
    <div class="d-flex align-items-center justify-content-between">
        <h6 class="mb-0 text-start">Video Detail</h6>
        <a href="/revenue">Back</a>
    </div>
    <hr>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="mb-3 detail-vid">
            <video controls src="{{ asset('/storage/public/posts/'.$user->video) }}"class="w-100"></video>
            </div>
            <a href="">
                <p class="fs-5 fw-bold text-white">{{$user->video_title}}.</p>
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
                 
@foreach ($produksi as $pro => $count) 

<p class="mb-0">  {{$pro}}</p>



@endforeach

                    </div>
                    

                    <div class="col-md-8">
                    @foreach ($produksi as $pro => $count) 
                    <?php
$personInsentiff = $insentiff * $count;
if($pro === 'Produser')
 $totalInsentif = $user->revenue_harian * 0.1; 
elseif($pro === 'Writer')
$totalInsentif = $user->revenue_harian * 0.075; 
elseif($pro === 'Voice Over')
$totalInsentif = $user->revenue_harian* 0.1 ; 
elseif($pro === 'Video Editor')
$totalInsentif = $user->revenue_harian * 0.1; 
elseif($pro === 'Admin')
$totalInsentif = $user->revenue_harian * 0.025; 



?>
<p class="mb-0"> ${{number_format(floatval($totalInsentif), 2)}}</p>


@endforeach

                    </div>

                    
                    
                    
                </div>
                
                
               
            <div class="mb-3">
                <h6 class="">Pendapatan</h6>
              
                <div class="row mb-1">
                    <div class="col-md-4">
                        <p class="mb-0">Isentif yang di dapat </p>
                    </div>
                    <div class="col-md-8">
                        <p class="mb-0">: ${{number_format(floatval($user->revenue_harian), 2)}}</p>
                    </div>
                </div>

                

                </div>
            </div>
        </div>
    </div> 

</div>
</div>
{{-- Admin Sosmed Only --}}

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        
        <div class="row g-4">
            <div class="col-md-6">
                <hr>
                <form action="/detailIsentif/update_isentif/{{$user->id}}" method="POST">
                @csrf
@method('PUT')

                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="{{$user->tanggal}}" >
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="revenuedate_bulan" name="revenuedate_bulan" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Total Pendapatan Bulan Sekarang</label>
                        @foreach($total as $s)
                        <input type="text" name="total" class="form-control" id="viewer" value="{{$s->total}}">
                        @endforeach
                    </div>
                    <div class="mb-3">

                    </div>
            </div>
            <div class="col-md-6">
                <hr>
                <form action="">
                    <div class="d-md-flex gap-2 align-items-center">
                        <fieldset disabled class="mb-3 w-100 w-md-50">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="text" class="form-control bg-dark" value="{{$user->tanggal}}" >
                        </fieldset>
                        <span class="d-none d-md-block pt-3">to:</span>
                        <div class="mb-3 w-100 w-md-50">
                            <label for="datefilter" class="form-label">Revenue Date</label>
                            <input type="text" class="form-control" id="revenuedate_bulan" name="revenuedate_harian" value="{{ old('daterange', $start_date . ' - ' . $end_date) }}" required>  

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="viewer" class="form-label">Reven</label>
                        <input type="text" class="form-control" id="viewer" name="revenue_harian" value="{{$user->revenue_harian}}">
                    </div>
            </div>
            <div class="mb-3">
    
@foreach ($names as $word) 
<?php
$personInsentif = $insentifPerPerson * $count;
$pembagian = $personInsentif * $user->revenue_harian;
$totalInsentif += $personInsentif;
?>
                        <input type="hidden" name="nama[]" class="form-control" id="viewer" value="{{$word}}">
                        <input type="hidden" name="video_title[]" class="form-control" id="viewer" value="{{$user->video_title}}">
                        <input type="hidden" name="viewer_harian[]" class="form-control" id="viewer" value="{{$user->viewer_harian}}">
                        <input type="hidden" name="impression_harian[]" class="form-control" id="viewer" value="{{$user->impression_harian}}">
                        <input type="hidden" name="published[]" class="form-control" id="viewer" value="{{$user->tanggal}}">
                        <input type="hidden" name="status[]" class="form-control" id="viewer" value="{{$user->status}}">

@endforeach

@foreach ($produksi as $pro => $count) 
                    <?php
$personInsentiff = $insentiff * $count;
if($pro === 'Produser')
 $totalInsentif = $user->revenue_harian * 0.1; 
elseif($pro === 'Writer')
$totalInsentif = $user->revenue_harian * 0.075; 
elseif($pro === 'Voice Over')
$totalInsentif = $user->revenue_harian* 0.1 ; 
elseif($pro === 'Video Editor')
$totalInsentif = $user->revenue_harian * 0.1; 
elseif($pro === 'Admin')
$totalInsentif = $user->revenue_harian * 0.025; 



?>
                        <input type="hidden" name="insentif[]" class="form-control" id="viewer" value="{{$totalInsentif}}">
                        <input type="hidden" name="pembagian[]" class="form-control" id="viewer" value="{{$pro}}">


@endforeach

            </div>
        </div>
        <hr>
        <div class="d-grid justify-content-md-end">
            <button type="submit" class="btn btn-primary px-5"><i class="bi bi-cloud-arrow-up-fill me-2"></i>Submit</button>
        </div>
        </form>

    </div>
</div>