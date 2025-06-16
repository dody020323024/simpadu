@extends('templates.main')

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
                                <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">tambah</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>No Telp</th>
                                            <th>Tanggal Lahir</th>
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
                                                <td>{{ $m->telp }}</td>
                                                <td>{{ $m->tanggallahir }}</td>
                                                <td>{{ $m->email }}</td>
                                                <td>{{ $m->prodi->nama }}</td>
                                                <td>
                                                    <a href="editmahasiswa.php?nim=<?= $m['nim']; ?>" class="btn btn-warning">edit </a>
                                                    <a href="hapusmahasiswa.php?nim=<?= $m['nim']; ?>" class="btn btn-danger"
                                                        onclick="return confirm('bujur jue kah ikam neh hendak mehepos?')">hapus</a>
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