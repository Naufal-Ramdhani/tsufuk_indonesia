@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text primary">Edit Informasi</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <a href="{{ route('informasi.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
        <br>
        <div class="card-body">
            <form method="post" action="{{ route('informasi.update', $informasi->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div><img src="/image{{ $informasi->gambar}}" width="100px"></div>
                    <input type="file" name="gambar" class="form-control" id="text" placeholder="Gambar">
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="text" value="{{ $informasi->keterangan}}">
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