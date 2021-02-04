@extends('layout.app')

@section('content')
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Edit Supplier</h2>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form enctype="multipart/form-data" action="{{route('supplier.update',['id' => Request::segment(3)])}}" method="POST" class="col-md-12">
                                @csrf
                                <div class="form-group">
                                    <label for="supplier">Nama Supplier <span class="text-danger">*</span></label>
                                    <input type="text" name="supplier" required class="form-control" value="{{$supplier->supplier}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                    <input type="text" name="alamat" required class="form-control" value="{{$supplier->alamat}}">
                                </div>
                                <div class="form-group">
                                    <label for="kontak">Kontak <span class="text-danger">*</span></label>
                                    <input type="text" name="kontak" required class="form-control" value="{{$supplier->kontak}}">
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection