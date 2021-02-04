@extends('layout.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -25px">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/img/car1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/img/car2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/img/car3.jpg')}}" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- About --}}
    
    <div class="jumbotron jumbotron-fluid" style="height: 400px">
        <div class="container text-center" style="margin-top: 50px">
            <h1 class="display-4">Selamat Datang di Toko Figureku</h1>
            <p class="lead">Di sini tersedia berbagai macam Action Figure, Statue, Gunpla, dan aneka macam mainan yang anda inginkan
        </p>
        <hr class="my-4">
        <b>Memberi Kepuasan yang INFINITY</b>
        </div>
    </div>
    
    {{-- End About --}}

    {{-- Card --}}
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg text-center">
                <h1>Catalog Figureku</h1>
            </div>
            
        </div>
        <br>
        <div class="card-deck">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/img/mini1.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="card-text">Hot Toys Batman (Justice League)</p>
                        <b>Rp5.600.000</b>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/img/mini2.jpeg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="card-text">Figurama Attack On Titan</p>
                        <b>Rp8.000.000</b>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/img/mini3.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="card-text">SHF SS Kamen Rider Black</p>
                        <b>Rp960.000</b>
                    </div>
                </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="card-deck">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets/img/mini4.jpg')}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="card-text">Tsume Art Killer Bee</p>
                            <b>Rp13.750.000</b>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets/img/mini5.jpg')}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="card-text">Tsume Art Roronoa Zoro</p>
                            <b>Rp7.700.000</b>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('assets/img/mini6.jpg')}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="card-text">SHF Dart Vader</p>
                            <b>Rp217.000</b>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    <div class="container mt-5 mb-5">
        <div class="card-deck">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/img/mini7.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="card-text">Hot Toys Flash (Series)</p>
                        <b>Rp3.500.000</b>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/img/mini8.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="card-text">Hot Toys Captain America (Noir)</p>
                        <b>Rp9.000.000</b>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/img/mini9.jpg')}}" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="card-text">Hot Toys Stormtrooper</p>
                        <b>Rp2.900.000</b>
                    </div>
                </div>
            </div>
    </div>
    {{-- End Card --}}
@endsection