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
                    <h3 class="mb-0"> Menambah Data  </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{url('/') }}" >home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('prodi')}}">Prodi</a></li>
                        <li class="breadcrumb-item active" aria current="page">tambah</li>
                    </ol>
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
                            <h3 class="card-title">data prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{url('prodi')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">

                                <div class="form-group">
                                    <label for="nama">Nama Prodi</label>
                                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid 
                                    @enderror" />
                                    
                                    @error('nama')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label for="kaprodi">Kaprodi</label>
                                    <input type="text" name="kaprodi" id="kaprodi" class="form-control @error('kaprodi') is-invalid 
                                    @enderror" />
                                    
                                    @error('kaprodi')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid 
                                    @enderror" />
                                    
                                    @error('jurusan')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="card-footer mt-2">
                                <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger float-start"> kembali</a>
                                <button type="submit" class="btn btn-primary float-end"> simpan </button>
                                </div>
                                </div>
                            </div>
                        </form>
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
</main>
    <!--end::App Content-->
@endsection

