@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Penjualan</h1>
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
                <div class="card-header">Penjualan</div>
                <div class="card-body">
                    <form action="{{route('penjualan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">No Meja</label>
                            <input type="text" name="no_meja" class="form-control @error('no_meja') is-invalid @enderror">
                            @error('no_meja')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pemesanan</label>
                            <input type="date" name="tgl_penjualan" class="form-control @error('tgl_penjualan') is-invalid @enderror">
                            @error('tgl_penjualan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Menu</label>
                            <input type="number" name="jumlah_menu" class="form-control @error('jumlah_menu') is-invalid @enderror">
                            @error('jumlah_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Total</label>
                            <input type="number" name="total" class="form-control @error('total') is-invalid @enderror">
                            @error('total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Id Pembeli</label>
                            <input type="text" name="id_pembeli" class="form-control @error('id_pembeli') is-invalid @enderror">
                            @error('id_pembeli')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Id karyawan</label>
                            <input type="text" name="id_karyawan" class="form-control @error('id_karyawan') is-invalid @enderror">
                            @error('id_karyawan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Id Menu</label>
                            <input type="text" name="id_menu" class="form-control @error('id_menu') is-invalid @enderror">
                            @error('id_menu')
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

