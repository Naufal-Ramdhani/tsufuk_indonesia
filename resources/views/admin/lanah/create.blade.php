@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card header py-3">
        <h6 class="ml-5 font-weight-bold text primary">Tambah Data Lanah</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <a href="{{ route('lanah.index') }}" class="btn btn-warning btn-sm ml-4">Kembali</a>
        <br>
        <div class="card-body">
            <form method="post" action="{{ route('lanah.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="lanah">Nama Lanah</label>
                    <input type="text" name="nama" class="form-control" id="text" placeholder="Lanah" required>
                </div>
                <div class="form-group">
                    <label for="lanah">Alamat</label>
                    <input type="text" name="alamat" class="form-control"  placeholder="Alamat" required>
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