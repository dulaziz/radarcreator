<!-- Recent Sales Start -->
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="mb-0 text-start">User List</h6>
            <a href="/userAdd">Add User</a>
        </div>
        <hr>


        <div class="table-responsive">
            <table style="width:100%" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr class="text-white">
                        <th >No</th>
                        <th scope="text-center">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Group</th>
                        <th scope="col">Role</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Action</th>
                    </tr>
                   
                </thead>
                <tbody>
                @php $no = 1; @endphp
                                    @foreach ($user as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->group }}</td>
                        <td>{{ $data->role }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>
                            
                        <form   onsubmit="return confirm('Apakah Anda Yakin ?');"action="user/delete/{{$data->id}}" method="post" enctype="multipart/form-data" >

                            <div class="d-flex justify-content-center gap-1">
                                <a class="btn btn-sm btn-primary" href="/userEdit/{{$data->id}}"><i class="fas fa-eye"></i></a>
                           
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger" ><i class="fas fa-trash"></i></button>
                            
                            </form>
                            </div>
                        </td>
                    </tr>
                          
                        </td>
                        
                    </tr>
       @endforeach
                </tbody>
            </table>
           
        </div>

    </div>
</div>

@include('sweetalert::alert')

<!-- Recent Sales End -->