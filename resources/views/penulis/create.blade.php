@extends('partials.master')

@section('content')
<br>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tambah Data Penulis</h4>
                        <form action=" {{ route('penulis.store') }}" method="post">
                            @csrf
                            <a type="button" href=" {{ route('penulis.index') }} " class="btn btn-primary">KEMBALI</a>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Nama</b></label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Alamat</b></label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tanggal Lahir</b></label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">SIMPAN </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection