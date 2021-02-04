<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #292929">
    <a class="navbar-brand" href="#">Toko Figureku</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item {{'' == request()->segment(1) ? 'active' : ''}}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        @if (Auth()->user())
            @if (Auth()->user()->role == "admin")
                <li class="nav-item {{'merk' == request()->segment(1) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('merk.index')}}">Merk</a>
                </li>
                <li class="nav-item {{'supplier' == request()->segment(1) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('supplier.index')}}">Supplier</a>
                </li>
                <li class="nav-item {{'figure' == request()->segment(1) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('figure.index')}}">Figure</a>
                </li>
                <li class="nav-item {{'pembelian' == request()->segment(1) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('pembelian.index')}}">Restock</a>
                </li>
            @else
                <li class="nav-item {{'penjualan' == request()->segment(1) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('penjualan.index')}}">Beli Figure</a>
                </li>
            @endif
        @else
            
        @endif
    </ul>
    <ul class="navbar-nav ml-auto" >
        @if(Auth()->user())
            <li class="nav-item dropdown" style="margin-right: 40px">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->nama}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @if (Auth()->user()->role == "admin")
                    <a class="dropdown-item" href="{{ route('pembelian.detil') }}">Rekap Restock</a>
                @else
                    <a class="dropdown-item" href="{{ route('penjualan.detil') }}">Rekap Pembelian</a>
                @endif
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
            </li>
        @else
            <a class="nav-link {{'login' == request()->segment(1) ? 'active' : ''}}" href="/login">Login <span class="sr-only">(current)</span></a>
            <a class="nav-link {{'register' == request()->segment(1) ? 'active' : ''}}" href="/register">Register <span class="sr-only">(current)</span></a>
        @endif
        
    </ul>
    </div>
</nav>