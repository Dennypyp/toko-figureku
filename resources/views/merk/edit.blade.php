@extends('layout.app')

@section('content')
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="float-left">Edit Merk</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form enctype="multipart/form-data" action="{{route('merk.update',['id' => Request::segment(3)])}}" method="POST" class="col-md-12">
                                @csrf
                                <div class="form-group">
                                    <label for="merk">Nama Merk <span class="text-danger">*</span></label>
                                    <input type="text" name="merk" required class="form-control" value="{{$merk->merk}}">
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