<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!--    Users -->
    <li class="nav-item @if(request()->is('users') || request()->is('users/*')) active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users"
           aria-expanded="true" aria-controls="users">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('sidebar.users') }}</span>
        </a>
        <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('users.create') }}">{{ __('Добавить нового') }}</a>
                <a class="collapse-item" href="{{ route('users.index') }}">{{ __('Список пользователей') }}</a>
            </div>
        </div>
    </li>
    <!-- Projects -->
    <li class="nav-item @if(request()->is('projects') || request()->is('projects/*')) active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#projects"
           aria-expanded="true" aria-controls="projects">
            <i class="fas fa-fw fa-wrench"></i>
            <span>{{ __('sidebar.projects') }}</span>
        </a>
        <div id="projects" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('projects.create') }}">{{ __('sidebar.add_new_project') }}</a>
                <a class="collapse-item" href="{{ route('projects.index') }}">{{ __('sidebar.projects_list') }}</a>
            </div>
        </div>
    </li>

    <!-- Goals -->

    <li class="nav-item @if(request()->is('goals') || request()->is('goals/*')) active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#goals"
           aria-expanded="true" aria-controls="goals">
            <i class="fas fa-fw fa-wrench"></i>
            <span>{{ __('sidebar.goals') }}</span>
        </a>
        <div id="goals" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('goals.create') }}">{{ __('sidebar.add_new_goal') }}</a>
                <a class="collapse-item" href="{{ route('goals.index') }}">{{ __('sidebar.goals_list') }}</a>
            </div>
        </div>
    </li>

    <!-- Steps -->

    <li class="nav-item @if(request()->is('steps') || request()->is('steps/*')) active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#steps"
           aria-expanded="true" aria-controls="steps">
            <i class="fas fa-fw fa-wrench"></i>
            <span>{{ __('sidebar.steps') }}</span>
        </a>
        <div id="steps" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('steps.create') }}">{{ __('sidebar.add_new_step') }}</a>
                <a class="collapse-item" href="{{ route('steps.index') }}">{{ __('sidebar.steps_list') }}</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"--}}
{{--           aria-expanded="true" aria-controls="collapseUtilities">--}}
{{--            <i class="fas fa-fw fa-wrench"></i>--}}
{{--            <span>Utilities</span>--}}
{{--        </a>--}}
{{--        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"--}}
{{--             data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Custom Utilities:</h6>--}}
{{--                <a class="collapse-item" href="utilities-color.html">Colors</a>--}}
{{--                <a class="collapse-item" href="utilities-border.html">Borders</a>--}}
{{--                <a class="collapse-item" href="utilities-animation.html">Animations</a>--}}
{{--                <a class="collapse-item" href="utilities-other.html">Other</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
{{--    <div class="sidebar-heading">--}}
{{--        Addons--}}
{{--    </div>--}}

    <!-- Nav Item - Pages Collapse Menu -->
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"--}}
{{--           aria-expanded="true" aria-controls="collapsePages">--}}
{{--            <i class="fas fa-fw fa-folder"></i>--}}
{{--            <span>Pages</span>--}}
{{--        </a>--}}
{{--        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Login Screens:</h6>--}}
{{--                <a class="collapse-item" href="login.html">Login</a>--}}
{{--                <a class="collapse-item" href="register.html">Register</a>--}}
{{--                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
{{--                <div class="collapse-divider"></div>--}}
{{--                <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                <a class="collapse-item" href="404.html">404 Page</a>--}}
{{--                <a class="collapse-item" href="blank.html">Blank Page</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <!-- Nav Item - Charts -->
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="charts.html">--}}
{{--            <i class="fas fa-fw fa-chart-area"></i>--}}
{{--            <span>Charts</span></a>--}}
{{--    </li>--}}

    <!-- Nav Item - Tables -->
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="tables.html">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Tables</span></a>--}}
{{--    </li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
{{--    <div class="text-center d-none d-md-inline">--}}
{{--        <button class="rounded-circle border-0" id="sidebarToggle"></button>--}}
{{--    </div>--}}

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset('/assets/img/undraw_rocket.svg') }}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>
