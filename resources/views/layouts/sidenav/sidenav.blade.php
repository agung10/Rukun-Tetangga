<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Rute-001</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Rt</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Halaman Depan</li>
            <li class="dropdown" id="dashboardLink">
                <a href="{{route('home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Halaman Depan</span></a>
            </li>
            <li class="menu-header">Data-data</li>
            <li class="dropdown" id="penggunaLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Pengguna</span></a>
                <ul class="dropdown-menu">
                    <!-- <li id="usersLink"><a class="nav-link" href="">Users</a></li> -->
                    <li id="administratorsLink"><a class="nav-link" href="{{ route('administrators.index') }}">Administrators</a></li>
                </ul>
            </li>
            
            <li class="dropdown" id="statusLink">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-align-justify"></i> <span>Status</span></a>
                <ul class="dropdown-menu">
                    <li id="keluargaLink"><a class="nav-link" href="{{ route('status_keluargas.index') }}">Hubungan Dalam Keluarga</a></li>
                    <li id="kkLink"><a class="nav-link" href="{{ route('status_kartu_keluargas.index') }}">Hubungan Dalam KK</a></li>
                    <li id="pernikahanLink"><a class="nav-link" href="{{ route('status_pernikahans.index') }}">Pernikahan</a></li>
                </ul>
            </li>

            <li class="dropdown" id="dataDiriLink">
                <a href="{{ route('data_diris.index') }}" class="nav-link">
                    <i class="fas fa-address-card"></i> <span>Data Diri</span>
                </a>
            </li>

            <li class="menu-header">Laporan Data Diri</li>
            <li class="dropdown" id="printDataDiriKKLink">
                <a href="{{ route('nomorKK') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Berdasarkan No KK</span>
                </a>
            </li>
            <li class="dropdown" id="printDataDiriLink">
                <a href="{{ route('printDataDiri') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i> <span> Seluruh Data Diri</span>
                </a>
            </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <div id="Info" class="btn btn-primary btn-lg btn-block btn-icon-split" data-toggle="modal" data-target="#modalInfo">
                    <i class="fas fa-info"></i> <strong>Info Aplikasi</strong>
                </div>
            </div>
    </aside>
</div>
