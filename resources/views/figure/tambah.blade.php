@extends('layout.app')

@section('content')
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Tambah Figure</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form enctype="multipart/form-data" action="{{route('figure.simpan')}}" method="POST" class="col-md-12">
                                @csrf
                                <div class="form-group">
                                    <label for="figure">Nama Figure <span class="text-danger">*</span></label>
                                    <input type="text" name="figure" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="merk">Merk <span class="text-danger">*</span></label>
                                    <select name="merk" class="form-control">
                                        <option value="">-- Pilih Merk --</option>
                                        @foreach($merk as $k)
                                            <option value="{{$k->id}}">{{$k->merk}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input type="text" name="harga" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="hargabeli">Harga Beli <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input type="text" name="hargabeli" required class="form-control">
                                        
                                    </div>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection