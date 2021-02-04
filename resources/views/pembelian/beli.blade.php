@extends('layout.app')

@section('content')
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Restock Figure</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form enctype="multipart/form-data" action="{{route('pembelian.simpan')}}" method="POST" class="col-md-12">
                                @csrf
                                <div class="form-group">
                                    <label for="figure">Nama Figure <span class="text-danger">*</span></label>
                                    <input type="text" name="figure" required class="form-control" value="{{$figure->figure}}" readonly>
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
                                        <input type="text" id="hargabeli" name="hargabeli" required class="form-control" value="{{$figure->hargabeli}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="supplier">Supplier <span class="text-danger">*</span></label>
                                    <select name="supplier" class="form-control">
                                        <option value="">-- Pilih supplier --</option>
                                        @foreach($supplier as $s)
                                            <option value="{{$s->id}}">{{$s->supplier}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah <span class="text-danger">*</span></label>
                                    <input type="text" id="jumlah" name="jumlah" required class="form-control">
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
                                <div class="form-group">
                                    <label for="bayar">Total Dibayar <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input type="text" name="bayar" required class="form-control">
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success">Beli</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#jumlah').on('keyup', function(){
                if($(this).val()!=undefined){
                    var harga = $('#hargabeli').val();
                    var hasil = $(this).val() * harga;
                    $('#total').val(hasil);
                }
            })
        })
    </script>
@endsection