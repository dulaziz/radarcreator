<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0">Dashboard</h6>
        </div>
        <hr>

        <div class="row mb-5">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <form action="/" method="GET">
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
                </form>
                <form action="/" method="GET">
                    @csrf
                <div class="input-group">
                    <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i class="fas fa-building"></i></label>
                    <select class="form-select" name="statuss" aria-label=".form-select-sm example">
                        <option selected value="">Filter Status</option>
                        <option value="Published">Published</option>
                        <option value="Pending">Pending</option>
                        <option value="TakeDown">Takedown</option>
                    </select>
                    <button class="btn btn-dark" type="submit" id="find">  <span>Find</span></i></button>
                </div>
                </form>
                <form action="/" method="GET">
                        @csrf
                    <div class="input-group">
                        <label class="input-group-text  ms-md-2 bg-dark" for="inputGroupSelect02"><i class="far fa-calendar-alt"></i></label>
                        <select nam class="form-select" name="roles" type="search" wire:model="search" aria-label=".form-select-sm example">
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
                        <button class="btn btn-dark" type="submit" id="find">  <span>Find</span></i></button>
                    </div>
                </form>
            </div>
           
            <div class="col-md-4">
                {{-- <input class="form-control" type="text" placeholder="Search" aria-label="default input example"> --}}
                <form action="/" method="GET">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control"  name="search" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
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
                    <img alt="user-avatar" class="rounded-circle" height="30" width="30" src="{{ asset('/storage/public/posts/'.$users->gambar) }}" >
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

                    <?php
                    if(auth()->user()->role == 'Admin Keuangan'):?>
                        <div class="dropdown me-4">
                            <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cog me-2"></i>Action
                            </span>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="/publish/{{$users->id}}" class="dropdown-item"><i class="bi bi-share-fill me-2"></i>Publish</a></li>
                                <form   onsubmit="return confirm('Apakah Anda Yakin ?');"action="uploaded/delete/{{$users->id}}" method="post" enctype="multipart/form-data" >
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a></li>
                                @csrf
                                    @method('delete')
                                </form>
                            </ul>
                        </div>
                        <?php endif;?>

                        <?php
                        if(auth()->user()->role == 'Admin Sosmed'):?>
                        <div class="dropdown me-4">
                            <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cog me-2"></i>Action
                            </span>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="/publish/{{$users->id}}" class="dropdown-item"><i class="bi bi-share-fill me-2"></i>Publish</a></li>
                                <form   onsubmit="return confirm('Apakah Anda Yakin ?');"action="uploaded/delete/{{$users->id}}" method="post" enctype="multipart/form-data" >
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a></li>
                                @csrf
                                    @method('delete')   
                                </form>            
                            </ul>
                        </div>
                        <?php endif;?>

                    <?php
                    if(auth()->user()->role == 'Super Admin'):?>
                    <div class="dropdown me-4">
                        <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog me-2"></i>Action
                        </span>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="/publish/{{$users->id}}" class="dropdown-item"><i class="bi bi-share-fill me-2"></i>Publish</a></li>
                            <form   onsubmit="return confirm('Apakah Anda Yakin ?');"action="uploaded/delete/{{$users->id}}" method="post" enctype="multipart/form-data" >
                            <li><a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Delete</a></li>
                            @csrf
                                @method('delete')
                            </form>
                        </ul>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <hr>

     @endforeach
     {{$user->links()}}

</div>
</div>
@include('sweetalert::alert')
