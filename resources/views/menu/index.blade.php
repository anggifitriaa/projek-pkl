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
                <div class="card-header">
                    Menu
                    <a href="{{ route('menu.create') }}" class="btn btn-sm btn-outline-primary float-right">menu</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Id menu</th>
                                <th>Nama menu</th>
                                <th>Harga</th>
                                <th>Stock</th>

                            </tr>
                            @php $no=1; @endphp
                            @foreach ($menu as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_menu }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->stock }}</td>


                                <td>

                                        <a href="{{ route('menu.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{ route('menu.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                         <form action="{{ route('menu.destroy', $data->id) }}" method="post">
                                         @method('DELETE')
                                         @csrf
                                         <input type="hidden" name="id" value="{{$data->id}}">
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

