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
                    <h3 class="mb-0"> edit data  </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{url('/') }}" >home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('mahasiswa')}}">mahasiswa/</a></li>
                        <li class="breadcrumb-item active" aria current="page">edit</li>
                        
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
                        <form action="{{url('mahasiswa/'.$mahasiswa->nim)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid 
                                    @enderror " value="{{$mahasiswa->nim}}"disabled> 
                                    
                                    @error('nim')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid 
                                    @enderror">
                                    @error('password')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>

                               
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid 
                                    @enderror " value="{{$mahasiswa->nama}}">
                                     @error('nama')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" id="tanggallahir" class="form-control @error('tanggallahir') is-invalid 
                                    @enderror "value="{{$mahasiswa->tanggalLahir}}" >
                                    @error('tanggalLahir')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="telp">Telepon</label>
                                    <input type="text" name="telp" id="telp" class="form-control @error('telp') is-invalid 
                                    @enderror "value="{{$mahasiswa->telp}}" >
                                     @error('telp')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>

                                  <div class="form-group">
                                    <label for="prodi" class="form-label">Prodi</label>
                                    <select class="form-select" name="id_prodi" id="id_prodi">

                                    
                                    @foreach($prodi as $p)
                                    <option value="{{$p->id}}">{{$p->nama}}</option>
                                    @endforeach
                                    </select>
                                    </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid 
                                    @enderror " value="{{$mahasiswa->email}}">
                                     @error('email')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="foto" class="col-sm-2 col-form-label">apload foto</label>
                                    <div class="col-sm-10"></div>
                                    <input type="file" class= "form-control" id="foto" name="foto" @error ('foto') is-invalid 
                                    @enderror ">
                                     @error('foto')
                                    <div class="invalid-feedback" >
                                        {{ $message }}
                                    </div>
                                        
                                    @enderror
                                </div>
                                <div class="card-footer mt-2">
                                    <a href="{{route('mahasiswa.index')}}" class="btn btn-danger float-start"> kembali</a>
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

    <!--end::App Content-->
</main>

@endsection