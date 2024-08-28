@extends('layouts.app')

@section('title', 'Edit Data Sales')

@section('content')
    <div class="p-5 mb-3">
        <div class="container">
            <form action="{{ action('SalesController@update', $id) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                <div class="mb-3 row">
                    <label for="name" class="col-2 col-form-label">Nama</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $product->name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="email" id="email"
                            value="{{ $product->email }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password" class="col-2 col-form-label">Password</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="password" id="password"
                            value="{{ $product->password }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="role" class="col-2 col-form-label">Role</label>
                    <div class="col-10">
                        <select class="form-select" name="role" id="role">
                            <option selected value="sales">Sales</option>
                            <option value="admin">Admin</option>
                        </select>
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





