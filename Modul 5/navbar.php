<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-between" href="index.html" style="padding: 1rem;">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text" style="font-size: 0.95em;">Perpustakaan <sup>TI</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= isset($active) && $active == 'dashboard' ? 'active' : ''  ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Buku
    </div>

    <li class="nav-item <?= isset($active) && $active == 'daftar-buku' ? 'active' : ''  ?>">
        <a class="nav-link" href="daftar-buku.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Daftar Buku</span></a>
    </li>

    <li class="nav-item <?= isset($active) && $active == 'tambah-buku' ? 'active' : ''  ?>">
        <a class="nav-link" href="tambah-buku.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Tambah Buku</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Member
    </div>

    <li class="nav-item <?= isset($active) && $active == 'data-member' ? 'active' : ''  ?>">
        <a class="nav-link" href="data-member.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Member</span></a>
    </li>

    <li class="nav-item <?= isset($active) && $active == 'tambah-member' ? 'active' : ''  ?>">
        <a class="nav-link" href="tambah-member.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Tambah Member</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Peminjaman
    </div>

    <li class="nav-item <?= isset($active) && $active == 'data-peminjaman' ? 'active' : ''  ?>">
        <a class="nav-link" href="data-peminjaman.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Peminjaman</span></a>
    </li>

    <li class="nav-item <?= isset($active) && $active == 'tambah-peminjaman' ? 'active' : ''  ?>">
        <a class="nav-link" href="tambah-peminjaman.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Tambah Peminjaman</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->