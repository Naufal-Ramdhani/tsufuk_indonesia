@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card header py-3">
        <h6 class="ml-5 font-weight-bold text primary">Tambah Data Pelatih</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <a href="{{ route('pelatih.index') }}" class="btn btn-warning btn-sm ml-4">Kembali</a>
        <br>
        <div class="card-body">
            <form method="post" action="{{ route('pelatih.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="pelatih">Nama</label>
                    <input type="text" name="nama" class="form-control" id="text" placeholder="pelatih" required>
                </div>
                <div class="form-group">
                    <label for="pelatih">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="text" placeholder="Jenis Kelamin" required>
                <div class="form-group">
                    <label for="pelatih">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="text" placeholder="Tempat Lahir" required>
                </div>
                <div class="form-group">
                    <label for="pelatih">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="text" placeholder="Tanggal Lahir" required>
                </div>
                <div class="form-group">
                    <label for="pelatih">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="text" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <label for="pelatih">Telepon</label>
                    <input type="text" name="no_telp" class="form-control" id="text" placeholder="Telepon" required>
                </div>
                <div class="form-group">
                    <label for="pelatih">Jumlah Anggota</label>
                    <input type="text" name="jumlah_anggota" class="form-control" id="text" placeholder="Jumlah Anggota" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                    <button class="btn btn-primary btn-sm" type="reset">Reset</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection('content')