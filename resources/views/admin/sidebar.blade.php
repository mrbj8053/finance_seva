<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('logo.png') }}" alt="{{ env('APP_NAME') }}"
            class="brand-image img-circle elevation-3" style="opacity: 1">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin_panel') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#"
                    class="d-block">{{ Auth::user()->name }}<br><small>{{ Auth::user()->email }}</small></a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                @if (Auth::user()->role=='admin')
                <li class="nav-item">
                    <a href="{{ route('allUsers') }}" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            All Users
                        </p>
                    </a>
                </li>
                @endif
                @if (Auth::user()->role=='user')
                <li class="nav-item">
                    <a href="{{ route('packageRequest.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-inr"></i>
                        <p>
                            Apply Package
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kycRequest.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>
                            Apply KYC
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            Income Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" >
                        <li class="nav-item">
                            <a href="{{ route('incomeReoprt.index', 'Direct') }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Direct Income
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('incomeReoprt.index', 'Level') }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Level Income
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('incomeReoprt.index', 'Reward') }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Reward Income
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('incomeReoprt.index', 'Royalty') }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Royalty Income
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bell"></i>
                        <p>
                            Withdraw Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" >
                        <li class="nav-item">
                            <a href="{{ route('withdraw.index') }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Withdraw applied
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
                @if(Auth::user()->role=='admin')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Package Requests
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" >
                        <li class="nav-item">
                            <a href="{{ route('packageRequest.show', 0) }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Pending  Request
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('packageRequest.show', 1) }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Approoved  Request
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('packageRequest.show', 2) }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Declined  Request
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            KYC Requests
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" >

                        <li class="nav-item">
                            <a href="{{ route('kycRequest.show', 0) }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Pending  Request
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kycRequest.show', 1) }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Approoved  Request
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kycRequest.show', 2) }}" class="nav-link">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Declined  Request
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                <li class="nav-item">
                    <a href="javascript:void(0);"
                        onclick="confirm('Do you want to logout ?')?document.getElementById('logoutForm').submit():''"
                        class="nav-link">
                        <i class="nav-icon fas fa-sign-out"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                <form action="{{ route('logout') }}" method="post" id="logoutForm">@csrf</form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
