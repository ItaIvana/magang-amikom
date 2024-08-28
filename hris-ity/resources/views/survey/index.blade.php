@extends('layouts.app')

@section('title', 'Data Survey Stock')

@section('content')
    <div class="p-4 mb-3">
        <h2>Data Sales</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Sales</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama Outlet</th>
                        <th scope="col">Jumlah Stok</th>
                        <th scope="col">Jumlah Display</th>
                        <th scope="col">Tanggal Survey</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $product['nama_sales'] }}</td>
                            <td>{{ $product['nama_barang'] }}</td>
                            <td>{{ $product['nama_outlet'] }}</td>
                            <td>{{ $product['jumlah_stok'] }}</td>
                            <td>{{ $product['jumlah_display'] }}</td>
                            <td>{{ $product['visit_datetime'] }}</td>

                            <td>
                                <form action="{{ action('SurveyStockController@destroy', $product['id']) }}" method="post">
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
            <a name="" id="" class="btn btn-primary" href="survey/create" role="button">Tambah Data
                Survey</a>
        </div>

    </div>
@endsection





