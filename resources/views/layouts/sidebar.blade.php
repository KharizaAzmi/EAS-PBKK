      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu" style="background: #2230A1;">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
					<!-- Log on to codeastro.com for more projects! -->
                    <div id="sidebar-menu">
                        
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li class="">
                                <a href="{{route('admin')}}" class="waves-effect {{ request()->is("admin") || request()->is("admin/*") ? "mm active" : "" }}" >
                                    <i class="ti-home" style="color: white;"></i> <span style="color: white;"> Dashboard </span>
                                </a>
                            </li>
                            

                            <li>
                            <a href="/employees" class="waves-effect {{ request()->is("employees") || request()->is("/employees/*") ? "mm active" : "" }}"><i class="ti-user" style="color: white;"></i><span style="color: white;"> Pegawai </span></a>
                                <!-- <ul class="submenu">
                                    <li>
                                        <i class="dripicons-view-apps"></i><span>Employees List</span></a>
                                    </li>
                                   
                                </ul> -->
                            </li>
							<!-- Log on to codeastro.com for more projects! -->
                            <li class="menu-title">Menu</li>

                            <li class="">
                                <a href="/schedule" class="waves-effect {{ request()->is("schedule") || request()->is("schedule/*") ? "mm active" : "" }}">
                                    <i class="ti-time" style="color: white;"></i> <span style="color: white;"> Jadwal </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/check" class="waves-effect {{ request()->is("check") || request()->is("check/*") ? "mm active" : "" }}">
                                    <i class="dripicons-to-do" style="color: white;"></i> <span style="color: white;"> Ceklis Kehadiran </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/sheet-report" class="waves-effect {{ request()->is("sheet-report") || request()->is("sheet-report/*") ? "mm active" : "" }}">
                                    <i class="dripicons-to-do" style="color: white;"></i> <span style="color: white;"> Log Kehadiran </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="/attendance" class="waves-effect {{ request()->is("attendance") || request()->is("attendance/*") ? "mm active" : "" }}">
                                    <i class="ti-calendar" style="color: white;"></i> <span style="color: white;"> Laporan Kehadiran </span>
                                </a>
                            </li>
                            <!-- <li class="">
                                <a href="/latetime" class="waves-effect {{ request()->is("latetime") || request()->is("latetime/*") ? "mm active" : "" }}">
                                    <i class="dripicons-warning"></i><span> Late Time </span>
                                </a>
                            </li> -->
                            <!-- <li class="">
                                <a href="/leave" class="waves-effect {{ request()->is("leave") || request()->is("leave/*") ? "mm active" : "" }}">
                                    <i class="dripicons-backspace"></i> <span> Leave </span>
                                </a>
                            </li> -->
                            <!-- <li class="">
                                <a href="/overtime" class="waves-effect {{ request()->is("overtime") || request()->is("overtime/*") ? "mm active" : "" }}">
                                    <i class="dripicons-alarm"></i> <span> Over Time </span>
                                </a>
                            </li> -->

                        </ul>
						<!-- Log on to codeastro.com for more projects! -->
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
