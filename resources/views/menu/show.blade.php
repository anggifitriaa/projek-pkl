@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Tampilan Menu</div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Id </label>
                            <input type="text" name="id" value="{{ $menu->id }}" disabled class="form-control @error('id') is-invalid @enderror">
                            @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" disabled class="form-control @error('nama_menu') is-invalid @enderror">
                            @error('nama_menu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" value="{{ $menu->harga }}" disabled class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" value="{{ $menu->stock }}" disabled class="form-control @error('stock') is-invalid @enderror">
                            @error('stock')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{url('admin/menu')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

