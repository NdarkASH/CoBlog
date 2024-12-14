<div class="d-none d-lg-block d-print-block">
    <ul class="nav nav-pills nav-fill gap-2 p-1 small" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
        <a href="/blog">
        <li class="nav-item text-outline-none" role="presentation">
          <button class="nav-link {{ ($active === "blog") ? 'active' : ''}} rounded-2" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab">Beranda</button>
        </li>
        </a>
        <a href="/">
            <li class="nav-item text-outline-none" role="presentation">
              <button class="nav-link {{ ($active === "home") ? 'active' : ''}} rounded-end" id="home-tab2" data-bs-toggle="tab" type="button" role="tab">Home</button>
            </li>
        </a>
        <li class="nav-item text-outline-none" role="presentation">
          <a href="/categories"><button class="nav-link {{ ($active ==="categories") ? 'active' : ''}} rounded-start" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" >Category</button></a>
        </li>
        @guest
        <li class="nav-item text-outline-none" role="presentation">
            <a href="/login"><button class="nav-link rounded-start" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" >Login</button></a>
          </li>
        </ul>
          @else()
          <div class="d-block">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <form action="/blog" class="mt-1">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="search..." name="search"><button class="btn btn-danger" type="submit">Search</button>
                            </div>
                        </form>
                <div class="col-1">
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "blog") ? 'active' : '' }}" href="/blog">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "categories") ? 'active' : ''}}" href="/categories">Category</a>
                    </li>
                    <li class="nav-item dropdown">
                </div>

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboad</a></li>
                            <li><a class="dropdown-item" href="/dashboard/posts">My Blog</a></li>
                            <li>
                            <hr class="dropdown-divider">
                            </li>
                            <ul class="dropdown-item">
                                <form action="/logout" method="post">
                                    <li class="nav-item">
                                        <a class="nav-link {{ ($active === "logout") ? 'active' : ''}}" href="/logout">Logout</a>
                                    </li>
                                </form>
                            </ul>
                        </ul>

                    </div>
                </div>
          @endguest


</div>
