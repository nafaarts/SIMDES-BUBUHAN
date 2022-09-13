<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3">Administrator</sup></div>
    </a>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboarda">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}


    <li class="nav-item">
        <a class="nav-link" href="/masyarakat">
            <i class="bi bi-person"></i>
            <span>Data masyarakat</span>
        </a>
    </li>
    {{-- <hr class="sidebar-divider"> --}}

    <li class="nav-item">
        <a class="nav-link" href="/surat">
            <i class="bi bi-file-earmark-text-fill"></i>
            <span>Surat
            <div class="badge bg-danger" id="data_surat_masuk" style="margin-left: 100px">0</div>
            </span>
        </a>
    </li>
    {{-- <hr class="sidebar-divider"> --}}
    {{-- @can('isAdmin') --}}
        
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Tata Kelola</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/proyek">Proyek</a>
                <a class="collapse-item" href="/kegiatan">Kegiatan</a>
                <a class="collapse-item" href="/agenda">Agenda</a>
                <a class="collapse-item" href="/perangkat">Perangkat</a>
            </div>
        </div>
    </li>
    {{-- @endcan --}}


    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->