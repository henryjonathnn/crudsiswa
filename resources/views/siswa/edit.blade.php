@extends('partials.master')

@section('content')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Edit Data Siswa</h4>
                                <form action=" {{ route('siswa.update', $data->id) }}" class="form-sample" method="post">
                                    @csrf
                                    {{-- PUT digunakan untuk mengupdate data --}}
                                    @method('PUT')
                                    <a type="button" href=" {{ route('siswa') }} " class="btn btn-primary">Kembali</a>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for=""><b>ID Siswa</b></label>
                                        <input type="text" name="id_siswa" value="{{ $data->id_siswa }}"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Nama</b></label>
                                        <input type="text" name="nama" value="{{ $data->nama }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Tanggal Lahir</b></label>
                                        <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}"
                                        class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Umur</b></label>
                                        <input type="text" name="umur" value="{{ $data->umur }}"
                                            class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Edit</button>
                                    <a type="button" href="{{ route('siswa') }}" class="btn btn-light" href >Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- partial !-->
    @endsection
