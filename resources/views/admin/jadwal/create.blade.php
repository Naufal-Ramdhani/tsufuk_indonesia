@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text primary">Tambah Jadwal Latihan</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <a href="{{ route('jadwal.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
        <br>
        <div class="card-body">
            <form method="post" action="{{ route('jadwal.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                            <label for="hari_latihan">Hari</label>
                            <input type="text" name="hari_latihan" class="form-control" id="text"placeholder="Hari" required>
                        </div>

                        <div class="form-group">
                            <label for="jam_latihan">Jam</label>
                            <input type="text" name="jam_latihan" class="form-control" id="text" placeholder="Jam" required>
                        </div>

                        <div class="form-group">
                            <label for="pelatih">Pelatih</label>
                            <input type="text" name="pelatih" class="form-control" id="text" placeholder="Pelatih" required>
                        </div>

                        <div class="form-group">
                            <label for="lanah">Lanah</label>
                            <input type="text" name="lanah" class="form-control" id="text" placeholder="lanah" required>
                        </div>

                        <div class="form-group">
                            <label for="tsufuk">Tsufuk/Puteri Gading</label>
                            <input type="text" name="tsufuk" class="form-control" id="text" placeholder="Tsufuk/Puteri Gading" required>
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