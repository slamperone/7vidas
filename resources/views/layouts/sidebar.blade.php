<!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('images/user.png')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Auth::user()->name}}</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Menú principal</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Valuaciones</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('pendientes') }}">Pendientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('historia') }}">Histórico</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('express') }}">Nueva</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Factores</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('verFactores') }}">Consuta</a>
                  </li>
                  <!--li class="nav-item">
                    <a class="nav-link" href="{{ route('historia') }}">Histórico</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('express') }}">Nueva</a>
                  </li-->
                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial -->