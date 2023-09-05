<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
    <div class="sidebar-content">
        <div id="sidebar">
            <div class="logo">
                <a href="/"><h2 class="mb-0"><img src="{{asset('asset/img/logo.png')}}"> Paripurna</h2></a>
            </div>
            <ul class="side-menu">
                <li>
                    <a href="{{url('admin')}}" class="{{ Request::is('admin') ? 'active' : '' }}" >
                        <i class='bx bxs-dashboard icon'></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('produk.index')}}" class="{{ Request::is('admin/produk') ? 'active' : '' }}" >
                        <i class='bx bx-columns icon'></i> Produk Jasa
                    </a>
                </li>
                <li>
                    <a href="{{route('order.index')}}" class="{{ Request::is('admin/order') ? 'active' : '' }}" >
                        <i class='bx bx-money icon'></i> Pemesanan
                    </a>
                </li>
                <!-- <li>
                    <a href="">
                        <i class='bx bxs-city icon'></i>
                        Profil Perusahaan
                    </a>
                </li> -->
                <li>
                    <a href="{{route('artikel.index')}}" class="{{ Request::is('admin/artikel*') ? 'active' : '' }}" >
                        <i class='bx bxs-comment icon'></i>
                        Artikel
                    </a>
                </li>
                <li>
                    <a href="{{route('sertifikat')}}" class="{{ Request::is('admin/sertifikat*') ? 'active' : '' }}" >
                        <i class='bx bxs-certification icon'></i>
                        Kirim Sertifikat
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="sidebar-overlay"></div>
