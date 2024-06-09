@php
    $role = request()->attributes->get('role');
@endphp
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./dashboard">
        <div class="sidebar-brand-text mx-3">Temen Care <sup>{{ $role }}</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="./dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    @if ($role == 'admin')
        <div class="sidebar-heading">
            Admin
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePsycholog"
                aria-expanded="true" aria-controls="collapsePsycholog">
                <i class="fas fa-fw fa-user"></i>
                <span>Psikolog</span>
            </a>
            <div id="collapsePsycholog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Atur Psikolog:</h6>
                    <a class="collapse-item" href="{{ route('admin.show-list-psycholog') }}">Daftar Psikolog</a>
                    <a class="collapse-item" href="{{ route('admin.show-register-psycholog') }}">Buat Psikolog</a>
                    {{-- <a class="collapse-item" href="#" load="load/add-psycholog-profile">Tambah Profile</a>
                    <a class="collapse-item" href="#" load="load/change-psycholog-profile">Profile</a> --}}
                </div>
            </div>
        </li>
    @endif

    @if ($role == 'psycholog')
        <div class="sidebar-heading">
            Psikolog
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCommunity"
                aria-expanded="true" aria-controls="collapseCommunity">
                <i class="fas fa-fw fa-comment"></i>
                <span>Komunitas</span>
            </a>
            <div id="collapseCommunity" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Atur Komunitas:</h6>
                    <a class="collapse-item" href="{{ route('admin.show-list-community') }}">Daftar Komunitas Anda</a>
                    <a class="collapse-item" href="{{ route('admin.show-create-community') }}">Buat Komunitas</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArticles"
                aria-expanded="true" aria-controls="collapseArticles">
                <i class="fas fa-fw fa-plus"></i>
                <span>Artikel</span>
            </a>
            <div id="collapseArticles" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Atur Artikel:</h6>
                    <a class="collapse-item" href="{{ route('admin.show-list-article') }}">Daftar Artikel Anda</a>
                    <a class="collapse-item" href="{{ route('admin.show-create-article') }}">Buat Artikel</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile"
                aria-expanded="true" aria-controls="collapseProfile">
                <i class="fas fa-fw fa-compass"></i>
                <span>Profile</span>
            </a>
            <div id="collapseProfile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Atur Profile:</h6>
                    <a class="collapse-item" href="{{ route('admin.show-create-profile') }}">Tambah Profile</a>
                    <a class="collapse-item" href="{{ route('admin.show-list-profile') }}">Daftar Profile</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExpertise"
                aria-expanded="true" aria-controls="collapseExpertise">
                <i class="fas fa-fw fa-building"></i>
                <span>Expertise</span>
            </a>
            <div id="collapseExpertise" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Atur Expertise:</h6>
                    <a class="collapse-item" href="{{ route('admin.show-create-expertise') }}">Tambah Expertise</a>
                    <a class="collapse-item" href="{{ route('admin.list-expertise') }}">Daftar Expertise</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-cog"></i>
                <span>Jadwal</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Atur Jadwal:</h6>
                    <a class="collapse-item" href="{{ route('admin.show-schedule') }}">Lihat Jadwal</a>
                    <a class="collapse-item" href="{{ route('admin.create-schedule') }}">Buat Jadwal</a>
                </div>
            </div>
        </li>
    @endif

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
