@extends('partials.master')

@section('content')
<br>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tambah Data Buku</h4>
                        <form action=" {{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <a type="button" href=" {{ route('buku.index') }} " class="btn btn-primary">KEMBALI</a>
                            <br>
                            <br>
                            
                            <div class="form-group">
                                <label for=""><b>Judul Buku</b></label>
                                <input type="text" name="judul_buku" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tahun Terbit</b></label>
                                <input type="date" name="tahun_terbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>ISBN</b></label>
                                <input type="text" name="isbn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Penulis</b></label>
                                <select name="id_penulis" id="id_penulis" class="form-control">
                                    @foreach ($penulis as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Genre</b></label>
                                <input type="text" name="genre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tempat Terbit</b></label>
                                <input type="text" name="tempat_terbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Penerbit</b></label>
                                <input type="text" name="penerbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Sampul</b></label>
                                <input type="file" name="sampul" class="form-control">
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