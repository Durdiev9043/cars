<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.car.index') ? 'active' : '' }}">
                    <a href="{{route('admin.car.index')}}">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <p>Avtomabillar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.client.index') ? 'active' : '' }}">
                    <a href="{{route('admin.client.index')}}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>Haridorlar</p>
                    </a>
                </li>
            </ul>


        </div>

    </div>

</div>


