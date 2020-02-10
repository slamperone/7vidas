<!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo e(asset('images/user.png')); ?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo e(Auth::user()->name); ?></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Menú principal</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('home')); ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#vals" aria-expanded="false" aria-controls="vals">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Valuaciones</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="vals">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('pendientes')); ?>">Pendientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('historia')); ?>">Histórico</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('express')); ?>">Nueva</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#facs" aria-expanded="false" aria-controls="facs">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Factores</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="facs">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('verFactores')); ?>">Consuta</a>
                  </li>
                  <!--li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('historia')); ?>">Histórico</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('express')); ?>">Nueva</a>
                  </li-->
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#cuest" aria-expanded="false" aria-controls="cuest">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Cuestionarios</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="cuest">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('addQuest')); ?>">Nuevo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('allQuest')); ?>">Consulta</a>
                  </li>

                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial --><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>