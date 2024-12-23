@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
    <div class="p-4 mb-3">
        <h2>Data Pegawai </h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NPWP</th>
                        <th scope="col">No Pegawai</th>
                        <th scope="col">No KK</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">TMT</th>
                        <th scope="col">Purna Tugas</th>
                        <th scope="col">Status</th>
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
                            <td>{{ $employee['nik'] }}</td>
                            <td>{{ $employee['npwp'] }}</td>
                            <td>{{ $employee['no_pegawai'] }}</td>
                            <td>{{ $employee['no_kk'] }}</td>
                            <td>{{ $employee['pendidikan'] }}</td>
                            <td>{{ $employee['jabatan'] }}</td>
                            <td>{{ $employee['divisi'] }}</td>
                            <td>{{ $employee['tmt'] }}</td>
                            <td>{{ $employee['purna_tugas'] }}</td>
                            <td>{{ $employee['status'] }}</td>
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





