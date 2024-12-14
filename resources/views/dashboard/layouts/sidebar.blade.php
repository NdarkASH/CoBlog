
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="list-group">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a class="nav-link" aria-current="page" href="/dashboard">
            <span data-feather="home" class="{{ Request::is('dashboard') ? 'size-18' : '' }}"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item my-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
          <a class="nav-link" href="/dashboard/posts">
            <span data-feather="file"class="{{ Request::is('dashboard/posts') ? 'size-18' : '' }}"></span>
            My Posts
          </a>
        </li>
        <li class="nav-item {{ Request::is('/blog') ? 'active' : '' }}">
            <a class="nav-link" href="/blog">
              <span data-feather="table" class="{{ Request::is('/blog') ? 'size-18' : '' }}"></span>
              Beranda
            </a>
          </li>
      </ul>
@can('admin')
      <h6 class="my-2 justify-content-between d-flex sidebar-heading align-item-center px-4 text-muted">Administrator</h6>
      <ul class="list-group">
        <li class="nav-item {{ Request::is('/dashboard/categories*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard/categories">
              <span data-feather="table" class="{{ Request::is('/blog') ? 'size-18' : '' }}"></span>
              Category Edit
            </a>
          </li>
      </ul>
@endcan
    </div>
</nav>


<style>
      .size-18{
        width: 25px;
        height: 25px;
        stroke: green;
          stroke-width: 2;
          stroke-linecap: round;
          stroke-linejoin: round;
          fill: none;
        }
</style>
