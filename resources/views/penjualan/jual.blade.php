@extends('layout.app')

@section('content')
{{-- Layout --}}

<div class="container">
    <div class="row">
        {{-- Menu Pembelian --}}
        <div class="col-md-6">
            <div class="container mb-5 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="float-left">Beli Figure</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form enctype="multipart/form-data" action="{{route('penjualan.simpan')}}" method="POST" class="col-md-12">
                                        @csrf
                                        <div class="form-group">
                                            <label for="figure">Nama Figure <span class="text-danger">*</span></label>
                                            <input type="text" name="figure" required class="form-control"value="{{$figure->figure}}" readonly>
                                            <input type="hidden" name="figure_id" required class="form-control"value="{{$figure->id}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="merk">Merk <span class="text-danger">*</span></label>
                                            <input type="text" name="merk" required class="form-control" value="{{$figure->merk->merk}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="hargabeli">Harga <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                                </div>
                                                <input type="text" id="harga" name="harga" required class="form-control" value="{{$figure->harga}}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah <span class="text-danger">*</span></label>
                                            <input type="number" id="jumlah" name="jumlah" required class="form-control" min="1" max="{{$figure->stock}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="total">Total <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                                </div>
                                                <input type="text" id="total" name="total" required class="form-control" readonly>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            
        </div>
        {{-- End Menu Pembelian --}}

        {{-- Check Out --}}
        <div class="col-lg-6">
            <div class="container mb-5 mt-5">
                        <div class="card">
                            @if(Auth()->user())
                            <div class="card-body">
                                <h4 class="card-title">Check Out Transaksi</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Customer <span class="text-danger">*</span></label>
                                                <input type="text" name="nama" required class="form-control" value="{{Auth()->user()->nama}}" readonly>
                                                <input type="hidden" name="user_id" required class="form-control"value="{{Auth()->user()->id}}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                                    <input type="text" name="alamat" required class="form-control" value="{{Auth()->user()->alamat}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="bayar">Total Dibayar <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                                        </div>
                                                        <input type="text" name="bayar" required class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-success btn-lg btn-block">Beli</button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
        {{-- End Check Out --}}
    </div>
</div>

{{-- End Layout --}}
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#jumlah').on('input', function(){
                if($(this).val()!=undefined){
                    var harga = $('#harga').val();
                    var hasil = $(this).val() * harga;
                    $('#total').val(hasil);
                }
            })
        })
    </script>
@endsection