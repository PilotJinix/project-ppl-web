<div class="sidenav-menu">
    <div class="sidenav-head">
        <span class="title">LOGO</span>
        <button class="button button-close-sidenav"></button>
    </div>
    <div class="sidenav-body">
        <div class="sidenav-body-inner">
            <ul class="menu">
                <li>
                    <a href="{{route('home')}}">
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{url('shop')}}">
                        <span class="text">Toko</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blog')}}">
                        <span class="text">Blog</span>
                    </a>
                </li>
                @guest
                @else
                @if ($akun->status == 'mitra')
                <li>
                    <a href="{{route('ajuan-produk')}}">
                        <span class="text">Ajukan Produk Anda</span>
                    </a>
                </li>
                @endif
                @endguest
            </ul>
        </div>
    </div>
</div>
