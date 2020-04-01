<div class="page-header-inner ">
    <div class="page-logo">
        <a href="index.html">
            <h4 class="logo-default">IWS</h4>
            <!-- <img src="" alt="" width="100" style="margin-left: 40%; margin-top: 10%;" class="logo-default" /> -->
        </a>
        <div class="menu-toggler sidebar-toggler">
           
        </div>
    </div>
    
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

    <div class="page-top">
        <form class="search-form" action="page_general_search_2.html" method="GET">
            <div class="input-group">
                <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="icon-magnifier"></i>
                    </a>
                </span>
            </div>
        </form>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="separator hide"> </li>
                <li class="separator hide"> </li>
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="username username-hide-on-mobile">{{ Auth::user()->name }} </span>

                        <img alt="" class="img-circle" src="../assets/layouts/layout4/img/avatar9.jpg" /> 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i> Log Out 
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-extended quick-sidebar-toggler">
                    <span class="sr-only">Toggle Quick Sidebar</span>
                    <i class="icon-logout"></i>
                </li>

            </ul>
        </div>

    </div>

</div>