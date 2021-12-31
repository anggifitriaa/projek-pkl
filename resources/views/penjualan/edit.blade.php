@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit</div>
                <div class="card-body">
                    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">No Meja</label>
                            <input type="text" name="no_meja" value="{{ $penjualan->no_meja }}" class="form-control @error('no_meja') is-invalid @enderror">
                            @error('no_meja')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="">Tanggal Pemesanan</label>
                        <input type="date" name="tanggal_pemesanan" value="{{ $penjualan->tanggal_pemesanan }}" class="form-control @error('tanggal_pemesanan') is-invalid @enderror">
                        @error('tanggal_pemesanan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <label for="">Jumlah Menu</label>
                <input type="number" name="jumlah_menu" value="{{ $penjualan->jumlah_menu }}" class="form-control @error('jumlah_menu') is-invalid @enderror">
                @error('jumlah_menu')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <label for="">Total</label>
                <input type="number" name="total" value="{{ $penjualan->total }}" class="form-control @error('total') is-invalid @enderror">
                @error('total')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <label for="">Id Pembeli</label>
                <input type="text" name="id_pembeli" value="{{ $penjualan->id_pembeli }}" class="form-control @error('id_pembeli') is-invalid @enderror">
                @error('id_pembeli')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <label for="">Id Karyawan</label>
                <input type="text" name="id_karyawan" value="{{ $penjualan->id_karyawan }}" class="form-control @error('id_karyawan') is-invalid @enderror">
                @error('id_karyawan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <label for="">Id Menu</label>
                <input type="text" name="id_menu" value="{{ $penjualan->id_menu }}" class="form-control @error('id_menu') is-invalid @enderror">
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

