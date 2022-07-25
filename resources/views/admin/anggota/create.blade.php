@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text primary">Tambah Data Anggota</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <a href="{{ route('anggota.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
        <br>
        <div class="card-body">
            <form method="post" action="{{ route('anggota.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                            <label for="nama_anggota">Nama Lengkap</label>
                            <input type="text" name="nama_anggota" class="form-control" id="text" value="{{ old('nama_anggota') }}" placeholder="Enter Nama Lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="no_ktp">No.KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="text" placeholder="Nomor KTP" required>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="text" placeholder="Enter Tempat Lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="text" placeholder="Enter Tanggal Lahir" required>
                        </div>

                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" class="form-control" id="text" placeholder="Agama" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat_anggota">Alamat</label>
                            <input type="text" name="alamat_anggota" class="form-control" id="text" placeholder="Enter Alamat" required>
                        </div>

                        <div class="form-group">
                            <label for="tlp_anggota">Nomor Telepon</label>
                            <input type="text" name="tlp_anggota" class="form-control" id="text" placeholder="Enter Nomor Telepon" required>
                        </div>

                        <div class="form-group">
                            <label for="email_anggota">Email</label>
                            <input type="text" name="email_anggota" class="form-control" id="text" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" id="text" placeholder="Enter Pekerjaan" required>
                        </div>

                        <div class="form-group">
                            <label for="lanah">Lanah</label>
                            <input type="text" name="lanah" class="form-control" id="text" placeholder="Lanah" required>
                        </div>

                        <div class="form-group">
                            <label for="foto">Pas Foto</label>
                            <input type="file" name="foto" class="form-control" id="text" placeholder="Enter Pas Foto" required>
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