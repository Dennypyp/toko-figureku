@extends('layout.app')
@section('content')
<div class="container">
    <div class="container mt-4 mb-4">
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Daftar Supplier</h2>
                        <div class="float-right">
                                <a href="{{route('supplier.tambah')}}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Supplier</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Kontak</th>
                                    <th class="text-center" style="width:30%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($supplier))
                                    @foreach($supplier as $data)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$data->supplier}}
                                            </td>
                                            <td>
                                                {{$data->alamat}}
                                            </td>
                                            <td>
                                                {{$data->kontak}}
                                            </td>
                                            <td class="text-center">
                                                <form action="{{route('supplier.hapus',['id' => $data->id])}}" method="POST">
                                                    @csrf
                                                    <a href="{{route('supplier.edit',['id' => $data->id])}}" class="btn btn-sm btn-info">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">Data tidak ditemukan</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection