<div class="page-sidebar dark-theme">
    <div class="logo-box">
        <a href="#" class="logo-text"><img src="{{ url('public') }}/admin/assets/images/afri.png" width="30%" >  SIGAFRI</a>
        <a href="#" id="sidebar-close">
            <i class="material-icons">close</i>
        </a> 
        <a href="#" id="sidebar-state">
            <i class="material-icons">adjust</i>
            <i class="material-icons compact-sidebar-icon">panorama_fish_eye</i>
        </a>
    </div>
    <div class="page-sidebar-inner slimscroll">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                MENU
            </li>
            <li class="{{ (request()->is('SuperAdmin/dashboard*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/dashboard') }}" >
                    <i class="material-icons-outlined">home</i>Dashboard
                </a>
            </li>
            <li class="{{ (request()->is('SuperAdmin/spesies*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/spesies') }}" >
                    <i class="material-icons">list</i>Spesies
                </a>
            </li>
            <li class="{{ (request()->is('SuperAdmin/ebook*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/ebook') }}" >
                    <i class="material-icons">description</i>E-book
                </a>
            </li>
            <li class="{{ (request()->is('SuperAdmin/kegiatan*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/kegiatan') }}" >
                    <i class="material-icons">article</i>Kegiatan
                </a>
            </li>
            <li class="{{ (request()->is('SuperAdmin/rescue*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/rescue') }}" >
                    <i class="material-icons">support</i>Rescue
                </a>
            </li>
            <li class="{{ (request()->is('SuperAdmin/user*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/user') }}" >
                    <i class="material-icons">group_add</i>User
                </a>
            </li>

            <li class="{{ (request()->is('SuperAdmin/anggota*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/anggota') }}" >
                    <i class="material-icons">group_add</i>Anggota
                </a>
            </li>
            <li class="{{ (request()->is('SuperAdmin/hakAkses*')) ? 'active-page' : '' }}">
                <a href="{{ url('SuperAdmin/HakAkses') }}" >
                    <i class="material-icons">handshake</i>Hak Akses
                </a>
            </li>
            
        </ul>
    </div>
</div>