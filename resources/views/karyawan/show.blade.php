@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Tampil Data Karyawan</div>
                <div class="card-body">
                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Id karyawan</label>
                            <input type="text" name="id_karyawan" value="{{ $karyawan->id }}" disabled class="form-control @error('id_karyawan') is-invalid @enderror">
                            @error('id_karyawan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Karyawan</label>
                            <input type="text" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}" disabled class="form-control @error('nama_karyawan') is-invalid @enderror">
                            @error('nama_karyawan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{url('admin/karyawan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
