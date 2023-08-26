

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        @if (!Auth::user()->picture)
                        <img src="{{ asset('images/users/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                        @else
                        <img src="{{ asset('images/users/' . Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle avatar-md">
                        @endif

                        <h5 class="mb-0">
                            {{ Auth::user()->name ?? ''}}
                        </h5>
                        <p class="text-muted">
                            {{ implode('', Auth::user()->roles()->pluck('display_name')->toArray()) }}
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    @if (Auth::user()->hasRole('administrator'))
                        
                        <div id="sidebar-menu">
                            <ul id="side-menu">
                                <li class="@if(Request::segment(1) == 'dashboard') menuitem-active @endif">
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="menu-title mt-2">Content Management</li>

                                <li class="@if(Request::segment(1) == 'packages') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/packages') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Tour Packages</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'destinations') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/destinations') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Destinations</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'adventures') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/adventures') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Adventures</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'events') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/events') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Events</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'inbox') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/inbox') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Inbox</span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'sliders') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/sliders') }}">
                                        <i class="fa-solid fa-tags"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Slider</span>
                                    </a>
                                </li>
                                <!-- menu item end -->
                                
                                <li class="menu-title mt-2">Administrator</li>

                                <li class="@if(Request::segment(1) == 'users') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/users') }}">
                                        <i class="fa-solid fa-users"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Users </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                                <li class="@if(Request::segment(1) == 'settings') menuitem-active @endif">
                                    <a href="{{ url(Request::segment(1).'/settings') }}">
                                        <i class="fa-solid fa-gear"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ '0' }}
                                        </span>
                                        <span> Settings </span>
                                    </a>
                                </li>
                                <!-- menu item end -->

                            </ul>
                        </div>

                    @elseif (Auth::user()->hasRole('guest'))
                        
                        <div id="sidebar-menu">

                            <ul id="side-menu">

                                <li class="menu-title mt-2">Menu Utama</li>

                                <li>
                                    <a href="{{ url('dashboard') }}">
                                        <i data-feather="airplay"></i>
                                        <span> dashboard </span>
                                    </a>
                                </li>
                                <li class="@if(Request::segment(1) == 'siswa') menuitem-active @endif">
                                    <a href="{{ url('dashboard/siswa') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dashboard_jml_siswa ?? '0' }}
                                        </span>
                                        <span> Siswa</span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    @endif
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->