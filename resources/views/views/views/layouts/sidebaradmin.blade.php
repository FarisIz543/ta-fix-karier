<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item active ">
            <a href="{{ route('kelola-user.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Kelola user</span>
            </a>
        </li>

        <li class="sidebar-item  ">
            <a href="{{ route('logout') }}" class='sidebar-link' onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                <i class="bi bi-cash"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
        </li>

    </ul>
</div>