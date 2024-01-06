
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('panel/dashboard')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
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
                <i class="bi bi-image-alt"></i><span>Logo Management</span><i class="bi bi-chevron-down ms-auto"></i>
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
                <i class="bi bi-sliders"></i><span>Sliders Management</span><i class="bi bi-chevron-down ms-auto"></i>
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
        <!-- mission section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#missions-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-ui-radios-grid"></i><span>Mission Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="missions-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.missions.view')}}">
                        <i class="bi bi-circle"></i><span>View Mission</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.missions.add')}}">
                        <i class="bi bi-circle"></i><span>Add Slider</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- vision section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#visions-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-ui-radios-grid"></i><span>Vision Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="visions-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.visions.view')}}">
                        <i class="bi bi-circle"></i><span>View Vision</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.visions.add')}}">
                        <i class="bi bi-circle"></i><span>Add Slider</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- News and Events section......  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#news_event-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-calendar4-event"></i><span>News and Events</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="news_event-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.news_events.view')}}">
                        <i class="bi bi-circle"></i><span>View News and Events</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.news_events.add')}}">
                        <i class="bi bi-circle"></i><span>Add News and Events</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Contact section .................-->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-square"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contact-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.contacts.view')}}">
                        <i class="bi bi-circle"></i><span>View Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.contacts.add')}}">
                        <i class="bi bi-circle"></i><span>Add Contact</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- About Us section ................. -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-card-checklist"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="about-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.abouts.view')}}">
                        <i class="bi bi-circle"></i><span>View About</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.abouts.add')}}">
                        <i class="bi bi-circle"></i><span>Add About</span>
             
                    </a>
                </li>
            </ul>
        </li>
        <!-- Partner section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#partner-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-plus-fill"></i><span>Partner</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="partner-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.partners.view')}}">
                        <i class="bi bi-circle"></i><span>View Partner</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.partners.add')}}">
                        <i class="bi bi-circle"></i><span>Add Partner</span>
             
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
