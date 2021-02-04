@extends('layout.app')
@section('content')
<div class="container">
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Daftar Transaksi Customer</h2>
                    </div>
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Tanggal Transaksi</th>
                                    <th class="text-center">Figure</th>
                                    <th class="text-center">Merk</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Total Dibayar</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($penjualan))
                                    @foreach($penjualan as $data)
                                        <tr>
                                            <td>
                                                {{$loop->iteration}}
                                            </td>
                                            <td>
                                                {{format_tgl($data->created_at)}}
                                            </td>
                                            <td>
                                                {{$data->figure}}
                                            </td>
                                            <td>
                                                {{$data->merk}}
                                            </td>
                                            <td>
                                                {{$data->jumlah}}
                                            </td>
                                            <td>
                                                {{format_rp($data->total)}}
                                            </td>
                                            <td>
                                                {{format_rp($data->bayar)}}
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