@extends('layouts.app_admin')
@section('content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Jadwal Latihan</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                            <a href="{{route('jadwal.create')}}" class="btn"><i class="la la-plus"></i> create</a>
{{-- <button class="btn"><i class="la la-pen"></i> ubah</button>
<button class="btn"><i class="la la-trash"></i> hapus</button> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Pelatih</th>
                                            <th>Lanah</th>
                                            <th>Tsufuk/Puteri Gading</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                   <tbody>
                                   @forelse ($jadwal as $row)
                                <tr>
                                    <td>{{ $row->hari_latihan }}</td>
                                    <td>{{ $row->jam_latihan }}</td>
                                    <td>{{ $row->pelatih }}</td>
                                    <td>{{ $row->lanah }}</td>
                                    <td>{{ $row->tsufuk }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('jadwal.edit', $row->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit">Edit</i></a>

                                        <form action="{{ route('jadwal.destroy', $row->id)}}" method="post" class="d-inline">
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
                                    </tfoot> 
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
@endsection('content')