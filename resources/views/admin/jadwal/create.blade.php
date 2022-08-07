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
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" class="form-control" id="text"placeholder="Hari" required>
                        </div>

                        <div class="form-group">
                            <label for="waktu">Jam</label>
                            <input type="time" name="waktu" class="form-control" id="text" placeholder="waktu" required>
                        </div>

                        <div class="form-outline">
                            <label class="form-label" for="phoneNumber">Lanah</label>
                            <select class="form-select" name="lanah_detail_id" id="lanah_detail_id" aria-label="Default select example">
                              <option selected disabled>Pilih Lanah</option>
                              @foreach ($lanah_detail as $lanah_detail)
                                <option value="{{ $lanah_detail->lanah->id }}">{{ $lanah_detail->lanah->nama}} ({{ $lanah_detail->pelatih->user->name}})</option>
                              @endforeach
                            </select>
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