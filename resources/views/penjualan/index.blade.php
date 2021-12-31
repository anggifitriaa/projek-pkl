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
                <div class="card-header">
                    Penjualan
                    <a href="{{ route('penjualan.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No Meja</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Jumlah Menu</th>
                                 <th>Total</th>
                                  <th>Id_Pembeli</th>
                                   <th>Id_karyawan</th>
                                    <th>Id_Menu</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($penjualan as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->no_meja }}</td>
                                <td>{{ $data->tgl_penjualan }}</td>
                                <td>{{ $data->jumlah_nemu }}</td>
                                <td>{{ $data->total }}</td>
                                <td>{{ $data->id_pembeli }}</td>
                                <td>{{ $data->id_karyawan }}</td>
                                <td>{{ $data->id_menu }}</td>
                                <td>
                                    <form action="{{ route('penjualan.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('penjualan.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{ route('penjualan.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

