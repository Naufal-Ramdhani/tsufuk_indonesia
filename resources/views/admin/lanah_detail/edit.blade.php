@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text primary">Edit Data Lanah</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <a href="{{ route('lanah.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
        <br>
        <div class="card-body">
            <form method="POST" action="{{ route('lanah.update', $lanah->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             
                <div class="form-                ">
                            <label for="nama">Nama Lanah</label>
                            <input type="text" name="nama" class="form-control" id="text" value="{{ $lanah->nama}}">
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