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
            <a href="{{ url('family-management-fe') }}" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">Family Management </span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ url('family-tree-fe') }}" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">Family Tree </span>
            </a>
        </li>
        <li class="nav-item start active open">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Master Data</span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="{{ url('ethnic-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Etnis</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('degree-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Gelar</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('job-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Pekerjaan</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('village-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Kelurahan</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('district-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Kecamatan</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('city-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Kabupaten</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ url('province-fe') }}" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Provinsi</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="{{ url('user-management-fe') }}" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">User Management </span>
            </a>
        </li>
    </ul>
</div>