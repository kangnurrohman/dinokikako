<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><span class="logo">Dino</span><span
                class="logo2">kikako</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                @if (Auth::guest())
                <li class="nav-item {{ Request::is('tentang') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('tentang')}}">Tentang</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminsignin')}}">Login Admin</a>
                </li>
                @elseif(auth()->user()->role == 'admin')
                <li class="nav-item {{ Request::is('riwayat') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('riwayat')}}">Riwayat</span></a>
                </li>
                <li class="nav-item {{ Request::is('datapembudidaya') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('datapembudidaya')}}">Data Pembudidaya</span></a>
                </li>
                <li class="nav-item {{ Request::is('diagnosa') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('diagnosa')}}">Diagnosa</span></a>
                </li>
                <li class="nav-item {{ Request::is('penyakit') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('penyakit.index')}}">Penyakit</span></a>
                </li>
                <li class="nav-item {{ Request::is('gejala') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('gejala.index')}}">Gejala</span></a>
                </li>
                <li class="nav-item {{ Request::is('tentang') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('tentang')}}">Tentang</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->nama}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('adminlogout')}}">Logout</a>
                    </div>
                </li>
                @elseif(auth()->user()->role == 'pembudidaya')
                <li class="nav-item {{ Request::is('diagnosa') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('diagnosa')}}">Diagnosa</span></a>
                </li>
                <li class="nav-item {{ Request::is('penyakit') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('penyakit.index')}}">Penyakit</span></a>
                </li>
                <li class="nav-item {{ Request::is('tentang') ? "active" : "" }}">
                    <a class="nav-link" href="{{route('tentang')}}">Tentang</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{auth()->user()->nama}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('pembudidayalogout')}}">Logout</a>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
