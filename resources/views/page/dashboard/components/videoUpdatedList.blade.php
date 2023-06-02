<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h6 class="mb-0">Video Updated</h6>
        <hr>
        <div class="row mb-5">
            <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                </div>
                <div>
                    <form action="/videoUpdated" method="GET">
                        @csrf

                        <div class="d-flex align-items-center mb-2 mb-md-0">
                            <span>Show</span>
                            <select class="form-select ms-2" aria-label=".form-select-sm example" name="perPage"
                                id="perPage" onchange="this.form.submit()">
                                <option value="10" {{ $user->perPage() == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ $user->perPage() == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ $user->perPage() == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ $user->perPage() == 100 ? 'selected' : '' }}>100</option>
                            </select>

                        </div>
                </div>
                <div>
                    </form>

                    <form action="/videoUpdated" method="GET">
                        @csrf
                        <div class="input-group">
                            <label class="input-group-text ms-md-2 bg-dark" for="inputGroupSelect02"><i
                                    class="fas fa-building"></i></label>
                            <select class="form-select" name="select" aria-label=".form-select-sm example">
                                <option selected value="">Filter Group</option>
                                @foreach ($users as $data)

                                <option value="{{$data->id_group}}">{{$data->group}}</option>
                                @endforeach

                            </select>
                            <button class="btn btn-dark" type="submit" id="find"> <span>Find</span></i></button>

                        </div>
                    </form>
                </div>
                <div>
                    <form action="/videoUpdated" method="GET">
                        @csrf
                        <div class="input-group">
                            <label class="input-group-text  ms-md-2 bg-dark" for="inputGroupSelect02"><i
                                    class="far fa-calendar-alt"></i></label>
                            <select nam class="form-select" name="roles" type="search" wire:model="search"
                                aria-label=".form-select-sm example">
                                <option value="">Default</option>
                                <option value="Januari">January</option>
                                <option value="Febuari">February</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">May</option>
                                <option value="Juni">June</option>
                                <option value="Juli">July</option>
                                <option value="Agustus">August</option>
                                <option value="September">September</option>
                                <option value="Oktober">October</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                </div>
                <button class="btn btn-dark" type="submit" id="find"> <span>Find</span></i></button>

            </div>
            </form>

            <div class="col-md-4">
                {{-- <input class="form-control" type="text" placeholder="Search" aria-label="default input example"> --}}
                <form action="/videoUpdated" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-dark" type="submit" id="button-addon2"><i
                                class="fas fa-search text-muted"></i></button>
                    </div>
                </form>

            </div>

        </div>

        @foreach ($user as $users)
        <div class="d-md-flex align-items-center gap-4">
            <div class="mb-2 mb-md-0 preview-vid">
            <video controls src="{{ asset('https://erbege.sgp1.cdn.digitaloceanspaces.com/public/posts/' .$users->video) }}" height="200px" width="500px"></video>
            </div>
            <div class="">
                <h5 class="mb-3">{{$users->video_title}}</h5>
                <div class="d-flex align-items-center gap-2 mb-2 mb-md-4">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 30px; height: 30px;">
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
                        <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-cog me-2"></i>Action
                        </span>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="/publish/{{$users->id}}" class="dropdown-item"><i
                                        class="bi bi-share-fill me-2"></i>Publish</a></li>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="videoUpdated/end/{{$users->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <li><button class="dropdown-item" type="submit"><i
                                            class="fas fa-trash me-2"></i>Delete</button></li>
                            </form>

                        </ul>
                    </div>
                    <?php endif;?>

                    <?php
                  if(auth()->user()->role == 'Admin Sosmed'):?>
                    <div class="dropdown me-4">
                        <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-cog me-2"></i>Action
                        </span>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="/publish/{{$users->id}}" class="dropdown-item"><i
                                        class="bi bi-share-fill me-2"></i>Publish</a></li>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="videoUpdated/end/{{$users->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <li><button class="dropdown-item" type="submit"><i
                                            class="fas fa-trash me-2"></i>Delete</button></li>
                            </form>

                        </ul>
                    </div>
                    <?php endif;?>

                    <?php
                  if(auth()->user()->role == 'Super Admin'):?>
                    <div class="dropdown me-4">
                        <span class="dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-cog me-2"></i>Action
                        </span>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="/publish/{{$users->id}}" class="dropdown-item"><i
                                        class="bi bi-share-fill me-2"></i>Publish</a></li>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="videoUpdated/end/{{$users->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <li><button class="dropdown-item" type="submit"><i
                                            class="fas fa-trash me-2"></i>Delete</button></li>
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
    <?php
if(auth()->user()->role == 'Admin Keuangan'):
?>
</div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <h6 class="mb-0 text-start"><span class="text-muted">Log Activity </span></h6>
            <hr>

            <div class="row mb-4">
                <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                    <form action="/videoUpdated" method="GET">
                        @csrf
                        <div class="d-flex align-items-center mb-2 mb-md-0">
                            <span>Show</span>


                            <select class="form-select ms-2" aria-label=".form-select-sm example" name="page" id="Page"
                                onchange="this.form.submit()">
                                <option value="10" {{ $userss->perPage() == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ $userss->perPage() == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ $userss->perPage() == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ $userss->perPage() == 100 ? 'selected' : '' }}>100</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="/videoUpdated" method="GET">
                        @csrf

                        <div class="input-group">
                            <input class="form-control" type="text" name="searchh" placeholder="Search"
                                aria-label="default input example">
                            <button class="btn btn-dark" type="submit" id="button-addon2"><i
                                    class="fas fa-search text-muted"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle table-bordered table-hover mb-0">
                    <thead class="text-center">
                        <tr class="text-white">
                            <th scope="col">No</th>
                            <th scope="col">Log Name</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Type Subject</th>
                            <th scope="col">Dibuat Tanggal</th>

                        </tr>
                    </thead>
                    @php $no = 1; @endphp

                    @foreach($userss as $s)
                    <tbody class="text-start">


                        <tr>

                            <td class="text-center">{{$no++}}</td>
                            <td class="text-center">{{$s->log_name}}</td>
                            <td class="text-center">{{$s->description}}</td>
                            <td class="text-center">{{$s->subject_type}}</td>
                            <td class="text-center">{{$s->created_at}}</td>

                        </tr>

                    </tbody>
                    @endforeach
                    <tfoot>
                    </tfoot>
                </table>
                {{$userss->links()}}
            </div>

        </div>
        <?php endif;?>

        <?php
if(auth()->user()->role == 'Admin Sosmed'):
?>
</div>

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <h6 class="mb-0 text-start"><span class="text-muted">Log Activity </span></h6>
                <hr>

                <div class="row mb-4">
                    <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                        <form action="/videoUpdated" method="GET">
                            @csrf
                            <div class="d-flex align-items-center mb-2 mb-md-0">
                                <span>Show</span>


                                <select class="form-select ms-2" aria-label=".form-select-sm example" name="page"
                                    id="Page" onchange="this.form.submit()">
                                    <option value="10" {{ $userss->perPage() == 10 ? 'selected' : '' }}>10</option>
                                    <option value="25" {{ $userss->perPage() == 25 ? 'selected' : '' }}>25</option>
                                    <option value="50" {{ $userss->perPage() == 50 ? 'selected' : '' }}>50</option>
                                    <option value="100" {{ $userss->perPage() == 100 ? 'selected' : '' }}>100</option>
                                </select>
                            </div>
                        </form>

                        <div>

                        </div>
                        <div>


                        </div>


                    </div>
                    <div class="col-md-4">
                        <form action="/videoUpdated" method="GET">
                            @csrf

                            <div class="input-group">
                                <input class="form-control" type="text" name="searchh" placeholder="Search"
                                    aria-label="default input example">
                                <button class="btn btn-dark" type="submit" id="button-addon2"><i
                                        class="fas fa-search text-muted"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-bordered table-hover mb-0">
                        <thead class="text-center">
                            <tr class="text-white">
                                <th scope="col">No</th>
                                <th scope="col">Log Name</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Type Subject</th>
                                <th scope="col">Dibuat Tanggal</th>

                            </tr>
                        </thead>
                        @php $no = 1; @endphp

                        @foreach($userss as $s)
                        <tbody class="text-start">


                            <tr>

                                <td class="text-center">{{$no++}}</td>
                                <td class="text-center">{{$s->log_name}}</td>
                                <td class="text-center">{{$s->description}}</td>
                                <td class="text-center">{{$s->subject_type}}</td>
                                <td class="text-center">{{$s->created_at}}</td>

                            </tr>

                        </tbody>
                        @endforeach
                        <tfoot>
                        </tfoot>
                    </table>
                    {{$userss->links()}}
                </div>

            </div>
            <?php endif;?>

            <?php
if(auth()->user()->role == 'Super Admin'):
?>
        </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <h6 class="mb-0 text-start"><span class="text-muted">Log Activity </span></h6>
                    <hr>

                    <div class="row mb-4">
                        <div class="col-md-8 d-md-flex mb-2 mb-md-0">
                            <form action="/videoUpdated" method="GET">
                                @csrf
                                <div class="d-flex align-items-center mb-2 mb-md-0">
                                    <span>Show</span>


                                    <select class="form-select ms-2" aria-label=".form-select-sm example" name="page"
                                        id="Page" onchange="this.form.submit()">
                                        <option value="10" {{ $userss->perPage() == 10 ? 'selected' : '' }}>10</option>
                                        <option value="25" {{ $userss->perPage() == 25 ? 'selected' : '' }}>25</option>
                                        <option value="50" {{ $userss->perPage() == 50 ? 'selected' : '' }}>50</option>
                                        <option value="100" {{ $userss->perPage() == 100 ? 'selected' : '' }}>100
                                        </option>
                                    </select>
                                </div>
                            </form>

                            <div>

                            </div>
                            <div>


                            </div>


                        </div>
                        <div class="col-md-4">
                            <form action="/videoUpdated" method="GET">
                                @csrf

                                <div class="input-group">
                                    <input class="form-control" type="text" name="searchh" placeholder="Search"
                                        aria-label="default input example">
                                    <button class="btn btn-dark" type="submit" id="button-addon2"><i
                                            class="fas fa-search text-muted"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover mb-0">
                            <thead class="text-center">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Log Name</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Type Subject</th>
                                    <th scope="col">Dibuat Tanggal</th>

                                </tr>
                            </thead>
                            @php $no = 1; @endphp

                            @foreach($userss as $s)
                            <tbody class="text-start">


                                <tr>

                                    <td class="text-center">{{$no++}}</td>
                                    <td class="text-center">{{$s->log_name}}</td>
                                    <td class="text-center">{{$s->description}}</td>
                                    <td class="text-center">{{$s->subject_type}}</td>
                                    <td class="text-center">{{$s->created_at}}</td>

                                </tr>

                            </tbody>
                            @endforeach
                            <tfoot>
                            </tfoot>
                        </table>
                        {{$userss->links()}}
                    </div>

                </div>
                <?php endif;?>

                @include('sweetalert::alert')
            </div>
