
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)!='dashboard')collapse @endif" href="{{url('panel/dashboard')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('panel/user/list')}}">
                        <i class="bi bi-circle"></i><span>Manage User</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('panel/user/add')}}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- logo sections  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#logos-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Logo Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="logos-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.logo.view')}}">
                        <i class="bi bi-circle"></i><span>View Logo</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.logo.add')}}">
                        <i class="bi bi-circle"></i><span>Add Logo</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- sliders section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#sliders-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Sliders Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="sliders-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.sliders.view')}}">
                        <i class="bi bi-circle"></i><span>View sliders</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.sliders.add')}}">
                        <i class="bi bi-circle"></i><span>Add Slider</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Services section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Services Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="services-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.services.view')}}">
                        <i class="bi bi-circle"></i><span>View Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.services.add')}}">
                        <i class="bi bi-circle"></i><span>Add Services</span>
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
    
    

</aside>
<!-- End Sidebar-->
