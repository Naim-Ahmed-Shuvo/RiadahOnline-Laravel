<div class="left-side-menu">

    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{url('/admin')}}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>


                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="fab fa-servicestack"></i>
                        <span> Service </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('category.index')}}">Category</a>
                            </li>
                            <li>
                                <a href="{{route('service.index')}}">Index</a>
                            </li>
                            <li>
                                <a href="{{route('service.create')}}">Create</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a  href="{{url('orders')}}">
                        <i class="fas fa-cart-plus"></i>
                        <span> Orders </span>
                    </a>
                </li>

                <li>
                    <a  href="{{url('profile-view')}}">
                        <i class="fe-users"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li>
                    <a href="#settings" data-bs-toggle="collapse">
                        <i class="fas fa-cog"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="settings">
                        <ul class="nav-second-level">
                            <li >
                                <a href="{{url('slider')}}">Slider</a>
                            </li>

                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
