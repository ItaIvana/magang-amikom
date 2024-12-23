@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
    <div class="p-4 mb-3">
        <h2>Data Dosen </h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Setatus Dosen</th>
                        <th scope="col">Jabatan Fungsional</th>
                        <th scope="col">Homebase</th>
                        <th scope="col">Jabatan Struktural</th>
                        <th scope="col">Pegawai id</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $employee['id'] }}</td>
                            <td>{{ $employee['status_dosen'] }}</td>
                            <td>{{ $employee['jabatan_fungsional'] }}</td>
                            <td>{{ $employee['homebase'] }}</td>
                            <td>{{ $employee['jabatan_struktural'] }}</td>
                            <td>{{ $employee['pegawai_id'] }}</td>
                            <td>{{ $employee['created_at'] }}</td>
                            <td>{{ $employee['updated_at'] }}</td>
                            <td><a href="{{ action('PegawaiController@edit', $employee['id']) }}"
                                    class="btn btn-warning">Ubah</a>
                            </td>
                            <td>
                                <form action="{{ action('PegawaiController@destroy', $employee['id']) }}" method="post">
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
            <a name="" id="" class="btn btn-primary" href="pegawai/create" role="button">Tambah Data
                Pegawai</a>
        </div>

    </div>
@endsection





