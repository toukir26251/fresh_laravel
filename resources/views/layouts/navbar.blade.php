<nav class="navbar navbar-expand-lg nav-color">
    <div class="sidebar-header">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <div id="content">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn">
                <i class="fas fa-align-left"></i>
            </button>
        </div>
    </nav>
    </div>
  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
        </a>
      </li>
    </ul>
  </div> -->
  <div class="dropdown collapse navbar-collapse">
    <i class="navbar-nav ml-auto nav-flex-icons" data-toggle="dropdown">
      <img src="/uploads/user.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
    </i>
    <div class="dropdown-menu" style="left: unset; right: 0!important;">
      <a class="dropdown-item" href="{{ url('/password/reset') }}"><i class="fas fa-user" style="color: #000;"></i> Profile </a>
      <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt" style="color: #000;"></i> Logout </a>
    </div>
  </div>
</nav>