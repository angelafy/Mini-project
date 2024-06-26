@extends('layouts.app')

@section('content')
    {{-- @include('default') --}}
    <div class="container mt-4">
        <h4>{{ $page_title }}</h4>
        <hr>

        <div class="row">
            {{-- barang --}}
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-archive-fill"></i> <b> BARANG </b>
                        </h5>
                        <p class="card-text">Tambah, edit, dan hapus barang disini.</p>
                        <a href="{{ route('barang.index') }}" class="btn btn-primary">Click Here!</a>
                    </div>
                </div>
            </div>

            {{-- satuan --}}
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-cloud-haze-fill"></i> <b>SATUAN</b></h5>
                        <p class="card-text">Tambah, edit, dan hapus satuan disini.</p>
                        <a href="{{ route('satuan.index') }}" class="btn btn-primary">Click Here!</a>
                    </div>
                </div>
            </div>

            {{-- harga barang --}}
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-credit-card-fill"></i> <b> HARGA </b></h5>
                        <p class="card-text">Harga barang ditampilkan disini.</p>
                        <a href="{{ route('barang.index') }}" class="btn btn-primary">Click Here!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
