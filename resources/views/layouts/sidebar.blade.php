{{-- Buatan Refal WKWK --}}
<nav class="sidebar sidebar-offcanvas" >
  <ul class="nav">
    @if (Auth::user()->role == 'admin')
        <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{url('admin/dashboard')}}">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Admin</span>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/kota')) ? 'active' : '' }}" href="{{url('admin/kota')}}">
            <i class="icon-box menu-icon"></i>
            <span class="menu-title">Kota</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/kategori')) ? 'active' : '' }}" href="{{url('admin/kategori')}}">
            <i class="icon-book menu-icon"></i>
            <span class="menu-title">Kategori</span>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/resepadmin')) ? 'active' : '' }}" href="{{url('admin/resepadmin')}}">
            <i class="icon-menu menu-icon"></i>
            <span class="menu-title">Resep</span>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/allresep')) ? 'active' : '' }}" href="{{url('admin/allresep')}}">
            <i class="icon-book menu-icon"></i>
            <span class="menu-title">All Resep</span>
        </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/profile') ? 'active' : '' }}" href="{{ url('/profile') }}">
                <i class="bi bi-person-fill mr-2"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/share') ? 'active' : '' }}" href="{{ url('/share') }}">
                <i class="icon-menu menu-icon mr-2"></i>
                <span class="menu-title">Tambah Resep</span>
            </a>
        </li>
    @endif
  </ul>
</nav>
