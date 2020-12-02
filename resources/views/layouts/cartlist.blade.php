@guest
@else
<div class="sidenav-menu">
    <div class="sidenav-head">
        <span class="title">Riwayat Pembelian</span>
        <button class="button button-close-sidenav"></button>
    </div>
    <div class="sidenav-body">
        <div class="sidenav-body-inner">
            <ul class="items">
                @foreach ($riwayat_pembelian as $item)
                <li>
                    <div class="row row-sm">
                        <div class="col-4">
                            <div class="image">
                                <a href="{{route('info-payment',$item->id)}}"><img
                                        src="{{asset('assets/images/products/'.$item->gambar)}}" alt="--Alt--" /></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="details">
                                <a href="{{route('info-payment',$item->id)}}">
                                    <p>{{__($item->nama)}}</p>
                                </a>
                                <a
                                    href="{{route('info-payment',$item->id)}}"><span>{{__('Rp'.$item->total_harga)}}</span><br></a>
                                @if ($item->status_checkout == 'Menunggu Pembayaran')
                                <a href="{{route('info-payment',$item->id)}}"><small
                                        class="text-danger">{{_($item->status_checkout)}}</small></a>
                                @endif
                                @if ($item->status_checkout == 'Proses Pengiriman')
                                <a href="{{route('info-payment',$item->id)}}"><small
                                        class="text-warning">{{_($item->status_checkout)}}</small></a>
                                @endif
                                @if ($item->status_checkout == 'Diterima')
                                <a href="{{route('info-payment',$item->id)}}"><small
                                        class="text-success">{{_($item->status_checkout)}}</small></a>
                                @endif
                                @if ($item->status_checkout == 'Dibatalkan')
                                <a href="{{route('info-payment',$item->id)}}"><small
                                        class="text-danger">{{_($item->status_checkout)}}</small></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<span class="sidenav-close"></span>
@endguest
