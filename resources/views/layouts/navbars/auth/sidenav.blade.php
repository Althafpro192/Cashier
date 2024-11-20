<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <a class="navbar-brand d-flex justify-content-center h-100 align-items-center p-1 m-0" href="{{ route('home') }}"
            target="_blank">
            <img src="./assets/logo/cashier.png" class="navbar-brand-img" style="width: 120px;" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active text-primary' : '' }}" href="{{ route('home') }}">
                    <div
                        class="text-center me-2 d-flex align-items-center justify-content-center">
                        @include('layouts.icons.dashboard')
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'penjualan' ? 'active text-primary' : '' }}" href="{{ route('penjualan') }}">
                    <div
                        class="text-center me-2 d-flex align-items-center justify-content-center">
                        @include('layouts.icons.transaction')
                    </div>
                    <span class="nav-link-text ms-1">Penjualan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'produk' ? 'active text-primary' : '' }}" href="{{ route('produk') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center">
                        @include('layouts.icons.product')
                    </div>
                    <span class="nav-link-text ms-1">Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'kategori' ? 'active text-primary' : '' }}" href="{{ route('kategori') }}">
                    <div
                        class="text-center me-2 d-flex align-items-center justify-content-center">
                        @include('layouts.icons.category')
                    </div>
                    <span class="nav-link-text ms-1">Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile-static' ? 'active text-primary' : '' }}" href="{{ route('profile-static') }}">
                    <div
                        class="text-center me-2 d-flex align-items-center justify-content-center">
                        @include('layouts.icons.profile')
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>