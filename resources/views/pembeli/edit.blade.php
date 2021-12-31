@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">No</label>
                            <input type="text" name="no" value="{{ $pembeli->no }}" class="form-control @error('no') is-invalid @enderror">
                            @error('no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="">Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" class="form-control @error('nama_pembeli') is-invalid @enderror">
                        @error('nama_pembeli')
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

