<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="heading">
            <h3 class="uppercase">Menu</h3>
        </li>
        <li class="nav-item start active">
            <a href="{{ url('dashboard-fe') }}" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ url('family-management') }}" class="nav-link nav-toggle">
                <i class="icon-user-follow"></i>
                <span class="title">Family Management </span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ url('family-tree') }}" class="nav-link nav-toggle">
                <i class="icon-users"></i>
                <span class="title">Family Tree </span>
            </a>
        </li>
        <li class="nav-item start active open">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Master Data</span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="{{ url('master/ethnic') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Etnis</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('master/degree') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Gelar</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('master/job') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Pekerjaan</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('master/province') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Provinsi</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('master/city') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Kota / Kabupaten</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('master/district') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Kecamatan</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('master/village') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Kelurahan</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="{{ url('user-management-fe') }}" class="nav-link nav-toggle">
                <i class="icon-user-follow"></i>
                <span class="title">User Management </span>
            </a>
        </li>
    </ul>
</div>