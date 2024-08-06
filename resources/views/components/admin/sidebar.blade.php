<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Personal</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.index')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Dashboard </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <i class="mdi mdi-dns"></i>
                        <span class="hide-menu">Data Master </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.penuntut.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Master Penuntut </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.perkara.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Master Perkara </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.pengacara.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Master Pengacara </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.hakim.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Master Hakim </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.jaksa.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Master Jaksa </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.sidang.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Master Sidang </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.catatanperkara.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Catatan Perkara </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.pihakterlibat.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Pihak Terlibat </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('dashboard.kategoripidana.index')}}" class="sidebar-link">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu"> Data Kategori Tindak Pidana </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Upload Arsip / Pengarsipan</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.arsip.index')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Arsip Data</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.arsip.create')}}" aria-expanded="false">
                        <i class="mdi mdi-cloud-upload"></i>
                        <span class="hide-menu">Upload Arsip</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.penuntut.create')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Buat Data Tuntutan Perkara</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.perkara.create')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Buat Data Perkara</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.sidang.create')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Buat Data Sidang</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.pihakterlibat.create')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Buat Data Pihak Terlibat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard.catatanperkara.create')}}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Buat Data Catatan Perkara</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Menu Laporan</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('dashboard.laporan-index') }}" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Laporan Data Perkara Lengkap</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Extra</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('index')}}"
                        aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Documentation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit"
                            class="bg-transparent btn sidebar-link waves-effect waves-dark sidebar-link" href="#"
                            aria-expanded="false">
                            <i class="mdi mdi-directions"></i>
                            <span class="hide-menu">Log Out</span>
                        </button>
                    </form>

                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>