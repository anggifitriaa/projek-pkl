@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Menu</div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nomber Menu</label>
                            <input type="text" name="id_menu" value="{{ $menu->id_menu }}" class="form-control @error('id_menu') is-invalid @enderror">
                            @error('id_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <label for="">Masukan Nama menu</label>
                        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="form-control @error('nama_menu') is-invalid @enderror">
                        @error('nama_menu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <label for="">Harga</label>
                <input type="text" name="harga" value="{{ $menu->harga }}" class="form-control @error('nama_menu') is-invalid @enderror">
                @error('harga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <label for="">Stock</label>
                <input type="text" name="stock" value="{{ $menu->stock }}" class="form-control @error('stock') is-invalid @enderror">
                @error('stock')
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

