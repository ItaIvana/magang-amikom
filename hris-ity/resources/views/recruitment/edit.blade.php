@extends('layouts.app')

@section('title', 'Edit Data Recruitment')

@section('content')
    <div class="p-5 mb-3">
        <div class="container">
            <form action="{{ action('RecruitmentController@update', $id) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                <div class="mb-3 row">
                    <label for="nama_outlet" class="col-2 col-form-label">Nama Recruitment</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="nama_recruitment" id="nama_recruitment"
                            value="{{ $product->nama_recruitment }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lokasi_\recruitment" class="col-2 col-form-label">Lokasi</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="lokasi_recruitment" id="lokasi_recruitment"
                            value="{{ $product->lokasi_recruitment }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_pj" class="col-2 col-form-label">Nama Penanggung Jawab</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="nama_pj" id="nama_pj"
                            value="{{ $product->nama_pj }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection





