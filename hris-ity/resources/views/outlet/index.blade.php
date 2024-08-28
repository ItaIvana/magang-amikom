@extends('layouts.app')

@section('title', 'Data Outlet')

@section('content')
    <div class="p-4 mb-3">
        <h2>Data Outlet </h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Outlet</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Penanggung Jawab</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $product['nama_outlet'] }}</td>
                            <td>{{ $product['lokasi_outlet'] }}</td>
                            <td>{{ $product['nama_pj'] }}</td>
                            <td><a href="{{ action('OutletController@edit', $product['id']) }}"
                                    class="btn btn-warning">Ubah</a>
                            </td>
                            <td>
                                <form action="{{ action('OutletController@destroy', $product['id']) }}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a name="" id="" class="btn btn-primary" href="outlet/create" role="button">Tambah Data
                Outlet</a>
        </div>

    </div>
@endsection





