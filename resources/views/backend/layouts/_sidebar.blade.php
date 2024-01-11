@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('panel.dashboard')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item has-treeview {{ ($prefix=='/user')?'menu-open': '' }}">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.user.list')}}" class="nav-link {{ ($route=='panel.user.list')?'active':'' }}">
                        <i class="bi bi-circle"></i><span>Manage User</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.user.add')}}" class="nav-link {{ ($route=='panel.user.add')?'active':'' }}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- logo sections  -->
        <li class="nav-item has-treeview {{ ($prefix=='/logo')?'menu-open': '' }}">
            <a class="nav-link collapsed" data-bs-target="#logos-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-image-alt"></i><span>Logo Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="logos-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.logo.view')}}" class="nav-link {{ ($route=='panel.logo.view')?'active':'' }}">
                        <i class="bi bi-circle"></i><span>View Logo</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.logo.add')}}" class="nav-link {{ ($route=='panel.logo.add')?'active':'' }}">
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
                    <a href="{{route('panel.contact_from.view')}}">
                        <i class="bi bi-circle"></i><span>Contact Message</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.locations.view')}}">
                        <i class="bi bi-circle"></i><span>Location</span>
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
                        <i class="bi bi-circle"></i><span>About section</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.about_lists.view')}}">
                        <i class="bi bi-circle"></i><span>About List</span>
             
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
                    <a href="{{route('panel.partner_ones.view')}}">
                        <i class="bi bi-circle"></i><span>Real estate partner</span>
             
                    </a>
                </li>
            </ul>
        </li>
        <!-- Partner section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#quality-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-plus-fill"></i><span>Quality</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="quality-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.qualitys.view')}}">
                        <i class="bi bi-circle"></i><span>View Partner</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.qualitys.add')}}">
                        <i class="bi bi-circle"></i><span>Add Partner</span>
             
                    </a>
                </li>
            </ul>
        </li>
        <!-- Services section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Services Solution</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="services-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.services.view')}}">
                        <i class="bi bi-circle"></i><span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.service_lists.view')}}">
                        <i class="bi bi-circle"></i><span>Service list</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Service offer section  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#services-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Service Offer</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="services-nav1" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.service_offers.view')}}">
                        <i class="bi bi-circle"></i><span>Services offer</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.service_offer_lists.view')}}">
                        <i class="bi bi-circle"></i><span>Service list</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Team section here m  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i><span>Team</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.merchandisings.view')}}">
                        <i class="bi bi-circle"></i><span>Merchandising</span>
                    </a>
                </li>
            </ul>
            <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.merchandisinglist.view')}}">
                        <i class="bi bi-circle"></i><span>Merchandising list</span>
                    </a>
                </li>
            </ul>
            <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.supplier_identifiers.view')}}">
                        <i class="bi bi-circle"></i><span>Supplier Identifier</span>
                    </a>
                </li>
            </ul>
            <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.compititive_pricings.view')}}">
                        <i class="bi bi-circle"></i><span>Compititive Pricing</span>
                    </a>
                </li>
            </ul>
            <!-- Factory Evaluation-->
            <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.factory_evaluations.view')}}">
                        <i class="bi bi-circle"></i><span>Factory Evaluation</span>
                    </a>
                </li>
            </ul>
            <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.factory_evaluations_list.view')}}">
                        <i class="bi bi-circle"></i><span>Factory Evaluation list</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Business time section ............ -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#business-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-calendar-plus"></i><span>Business Time</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="business-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.business_times.view')}}">
                        <i class="bi bi-circle"></i><span>View Time</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.business_times.add')}}">
                        <i class="bi bi-circle"></i><span>Add Time</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Started AOP  -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#aop-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i><span>AOP</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="aop-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('panel.aop_ones.view')}}">
                        <i class="bi bi-circle"></i><span>Inkjet Machine</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.aop_one_lists.view')}}">
                        <i class="bi bi-circle"></i><span>Inkjet Machine List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('panel.aop_twos.view')}}">
                        <i class="bi bi-circle"></i><span>Inkjet Machine</span>
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
    
    

</aside>
<!-- End Sidebar-->
