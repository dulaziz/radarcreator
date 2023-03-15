<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Recent Uploaded</h6>
            <a href="/upload">Add Video</a>
        </div>
        <hr>

        <div class="row mb-5">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <div class="d-flex align-items-center mb-2 mb-md-0">
               
                </div>
                <div>
                <form action="/uploaded" method="GET">
                        @csrf

                        <div class="d-flex align-items-center mb-2 mb-md-0">                    

                <span>Show</span>
                
                
                                    <select class="form-select ms-2" aria-label=".form-select-sm example" name="perPage" id="perPage" onchange="this.form.submit()">
        <option value="10" {{ $user->perPage() == 10 ? 'selected' : '' }}>10</option>
        <option value="25" {{ $user->perPage() == 25 ? 'selected' : '' }}>25</option>
        <option value="50" {{ $user->perPage() == 50 ? 'selected' : '' }}>50</option>
        <option value="100" {{ $user->perPage() == 100 ? 'selected' : '' }}>100</option>
    </select>

                </div>

            </div>
                <div>
</form>



<form action="/uploaded" method="GET">
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
                <div>
                <form action="/uploaded" method="GET">
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
            <form action="/uploaded" method="GET">
@csrf

                <div class="input-group">

                    <input type="text" name="search" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-dark" type="submit" id="button-addon2"><i class="fas fa-search text-muted"></i></button>
                </div>
            </form>
            </div>
                    

        </div>
        
        @foreach ($user as $users)
        <div class="d-md-flex align-items-center gap-4">
            <div class="mb-2 mb-md-0 preview-vid">
                <video controls src="{{ asset('/storage/public/posts/'.$users->video) }}"class="w-100"></video>
            </div>
            <div class="">
                <h5 class="mb-3">{{$users->video_title}}</h5>
                <div class="d-flex align-items-center gap-2 mb-2 mb-md-4">
                    <img 
                alt="user-avatar"
                class="rounded-circle"
                height="30" 
                width="30"
                src="{{ asset('/storage/public/posts/'.$users->gambar) }}" >
                   
                   
                    <p class="mb-0">{{$users->name_upload}}</p>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <?php
                    if($users->status == 'Pending'):?>
                    <p class="mb-0 me-4"><i class="fas fa-hourglass-half me-2"></i>Pending</p>

                    <?php elseif($users->status == 'Published'):?>
                        <p class="mb-0 text-success me-4"><i class="fas fa-play me-2"></i>Published</p>
                    <?php elseif($users->status == 'Takedown'):?>
                        <p class="mb-0 text-danger me-4"><i class="fas fa-pause me-2"></i>TakeDown</p>
<?php endif;?>
                        <p class="mb-0 me-4"><i class="bi bi-calendar me-2"></i>{{ $users->tanggal; }}</p>
                    <p class="mb-0 me-4"><i class="bi bi-calendar me-2"></i>{{ $users->bulan; }}</p>

                    <div class="dropdown me-4">
                        
                        
                        <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog me-2"></i>Action
                        </span>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href=""><i class="fas fa-eye me-2"></i>Detail</a></li>
                            <li><a class="dropdown-item" href="/editUpload/{{$users->id}}"><i class="fas fa-pen me-2"></i>Edit</a></li>

                            <form   onsubmit="return confirm('Apakah Anda Yakin ?');"action="uploaded/delete_upload/{{$users->id}}" method="post" enctype="multipart/form-data" >
                            
<li><button class="dropdown-item" type="submit"><i class="fas fa-trash me-2"></i>Delete</button></li>
@csrf
    @method('delete')

</form>                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>

     @endforeach

       {{$user->links()}}
</div>



<!-- Recent Sales Start -->
{{-- <div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <h6 class="mb-0 text-start">Recent Uploaded</h6>
        <hr>
<form action="" method="">
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
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success">Published</span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                <a class="btn btn-sm btn-primary" href="/detail"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning text-white" href="/edit"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
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
                            <span>Pending</span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                <a class="btn btn-sm btn-primary" href="/detail"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning text-white" href="/edit"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
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
                            <span class="text-danger">TD</span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                <a class="btn btn-sm btn-primary" href="/detail"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning text-white" href="/edit"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
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
                            <span class="text-success">Published</span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                <a class="btn btn-sm btn-primary" href="/detail"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning text-white" href="/edit"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Radar Sukabumi</td>
                        <td>01 Jan 2045</td>
                        <td>Judul Video</td>
                        <td>Jhon Doe</td>
                        <td>01 Jan 2045</td>
                        <td>
                            <span class="text-success">Published</span>
                        </td>
                        <td>
                            <div class="d-flex gap-1">
                                <a class="btn btn-sm btn-primary" href="/detail"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning text-white" href="/edit"><i class="fas fa-pen"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
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
</form>
    </div>
</div> --}}
<!-- Recent Sales End -->
@include('sweetalert::alert')
