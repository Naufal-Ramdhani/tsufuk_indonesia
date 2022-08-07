@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Lanah Detail</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            <a href="{{ route('lanah.create') }}" class="btn"><i class="la la-plus"></i> create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Lanah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                <tbody>
                    @forelse ($lanah as $row)
                <tr>
                    <td>{{ $row->nama }}</td> 
                    <td>
                        <a href="{{ route('lanah.edit', $row->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit">Edit</i></a>
                        <form action="{{ route('lanah.destroy', $row->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash">Hapus</i>
                        </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="6">Data post tidak tersedia</td>
                </tr>
                @endforelse
            </tbody> 
                </table>
            </div>
        </div>
    </div>
</div>
@endsection('content')