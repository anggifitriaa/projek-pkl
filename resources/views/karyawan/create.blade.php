@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Menu</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <form action="{{route('karyawan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan id karyawan</label>
                            <input type="text" name="id_karyawan" class="form-control @error('id_karyawan') is-invalid @enderror">
                            @error('id_karyawan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Karyawan</label>
                            <input type="text" name="nama_karyawan" class="form-control @error('nama_karyawan') is-invalid @enderror">
                            @error('nama_karyawan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
