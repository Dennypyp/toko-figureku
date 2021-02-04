@extends('layout.app')
@section('content')
<div class="container mt-5 mb-5">
    <div class="container">
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
                        <h2 class="float-left">Daftar Figure</h2>
                        <div class="float-right">
                                <a href="{{route('figure.tambah')}}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Figure</th>
                                    <th class="text-center">Merk</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Harga Beli</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center" style="width:30%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($figure))
                                    @foreach($figure as $data)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{$data->figure}}
                                            </td>
                                            <td>
                                                {{$data->merk->merk}}
                                            </td>
                                            <td>
                                                {{format_rp($data->harga)}}
                                            </td>
                                            <td>
                                                {{format_rp($data->hargabeli)}}
                                            </td>
                                            <td>
                                                {{$data->stock}}
                                            </td>
                                            <td class="text-center">
                                                <form action="{{route('figure.hapus',['id' => $data->id])}}" method="POST">
                                                    @csrf
                                                    <a href="{{route('figure.edit',['id' => $data->id])}}" class="btn btn-sm btn-info">Edit</a>
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