@extends('partials.master')

@section('content')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Edit Data Penulis</h4>
                                <form action=" {{ route('penulis.update', $data->id) }}" class="form-sample" method="post">
                                    @csrf
                                    {{-- PUT digunakan untuk mengupdate data --}}
                                    @method('PUT')
                                    <a type="button" href=" {{ route('penulis.index') }} " class="btn btn-primary">Kembali</a>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for=""><b>Nama</b></label>
                                        <input type="text" name="nama" value="{{ $data->nama }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Tanggal Lahir</b></label>
                                        <input type="date" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}"
                                        class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Alamat</b></label>
                                        <input type="text" name="alamat" value="{{ $data->alamat }}"
                                            class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Edit</button>
                                    <a type="button" href="{{ route('penulis.index') }}" class="btn btn-light" href >Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- partial !-->
    @endsection
