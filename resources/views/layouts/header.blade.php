<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="/dashmin/img/users.png" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">User's Name</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0" data-bs-toggle="modal" data-bs-target="#myProfile">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="{{ route('logout') }}" class="dropdown-item text-logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>            
            </div>
        </div>
    </div>
</nav>