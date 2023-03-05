<nav class="sidebar sidebar-offcanvas" >
  <ul class="nav">
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
      <a class="nav-link {{ (request()->is('admin/resep')) ? 'active' : '' }}" href="{{url('admin/resep')}}">
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
  </ul>
</nav>