@extends('template.main')

@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Mahasiswa</h3>
                </div>
                
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Data mahasiswa</h3>
                            <div class=" card-tools">
                                <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">tambah Mahasiswa</a>
                            </div>
                        </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Foto</th>
                                            <th>Email</th>
                                            <th>prodi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($mahasiswa as $m) 
                                            <tr class="align-middle">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $m->nim}}</td>
                                                <td>{{ $m->nama }}</td>
                                                <td><img src="{{asset('storage/images/'.$m->foto)}}" alt="" width="100px"></td>
                                                <td>{{ $m->email }}</td>
                                                <td>{{ $m->prodi->nama ?? 'Prodi tidak ada' }}</td>
                                                
                                                <td>
                                                    
                                                    <form action="{{url("mahasiswa/". $m->nim)}}" method="POST"
                                                        class="d-inline">
                                                        @csrf 
                                                        @method('DELETE') 
                                                        <button class="btn btn-danger mb-2 mt-2"
                                                        onclick="return confirm('bujur jue kah ikam neh hendak mehepos?')">hapus</button>
                                                    </form>
                                                        <a href="{{url("mahasiswa/$m->nim/edit")}}"
                                                        class="btn btn-warning">edit </a>
                                                </td>
                                            </tr>
                                        
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!--begin::Row-->
                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
</main>
@endsection