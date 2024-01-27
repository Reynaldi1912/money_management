<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="/dashmin/img/users.png" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">{{ ucwords(Auth()->user()->name) }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0" >
                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myProfile">My Profile</a>
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

<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    /* @media (min-width: 768px) {
        .mobileInfo {
            display: none;
        }
    } */
    /* @media (min-width: 768px) { */
        .desktopInfo {
            display: none;
        }
    /* } */
    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #ff05ea;
    }
    @media (max-width: 767px) {
    .btn-full-width {
        width: 100%;
    }
}

  </style>

<div class="container">
    @if ($message = Session::get('success'))
	        <!-- Floating Pesan untuk Sukses -->
        <div class="alert alert-success fixed-bottom mb-3" role="alert" id="floatingMessage">
        <span id="messageText">{{ $message }}</span>
        <button type="button" class="btn-close float-end" aria-label="Close" onclick="closeFloatingMessage()"></button>
        </div>
    @endif

	@if ($message = Session::get('error'))
	        <!-- Floating Pesan untuk Sukses -->
        <div class="alert alert-danger fixed-bottom mb-3" role="alert" id="floatingMessage">
        <span id="messageText">{{ $message }}</span>
        <button type="button" class="btn-close float-end" aria-label="Close" onclick="closeFloatingMessage()"></button>
        </div>
    @endif
</div>
    <script>
        setTimeout(function() {
            floatingMessage.style.display = 'none';
        }, 3000);

        function closeFloatingMessage() {
            var floatingMessage = document.getElementById('floatingMessage');
            floatingMessage.style.display = 'none';
        }
    </script>
    