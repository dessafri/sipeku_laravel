<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIPEKU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'home' ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'pertanyaan' ? 'active' : '' }}">
        <a class="nav-link" href="/pertanyaan">
            <i class="fas fa-sharp fa-solid fa-question"></i>
            <span>Kelola Pertanyaan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'indikator' ? 'active' : '' }}">
        <a class="nav-link" href="/indikator">
            <i class="fas fa-solid fa-ruler"></i>
            <span>Kelola Indikator</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'hasil' ? 'active' : '' }}">
        <a class="nav-link active" href="/hasil">
            <i class="fas fa-solid fa-list"></i>
            <span>Kelola Hasil</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'peran' ? 'active' : '' }}">
        <a class="nav-link" href="/peran">
            <i class="fas fa-solid fa-users"></i>
            <span>Kelola Peran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active == 'sekolah' ? 'active' : '' }}">
        <a class="nav-link" href="/sekolah">
            <i class="fas fa-solid fa-school"></i>
            <span>Kelola Sekolah</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>