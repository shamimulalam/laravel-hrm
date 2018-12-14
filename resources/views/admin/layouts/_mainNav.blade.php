
<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="active">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="submenu">
                <a href="#"><span> Settings </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled" style="display: none;">
                    <li><a href="{{ route('department.index') }}"> Departments </a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>