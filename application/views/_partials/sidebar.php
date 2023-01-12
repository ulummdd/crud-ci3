<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>" aria-current="page" href="<?php echo site_url('ikhya_ulummuddin/120/home'); ?>">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $this->uri->segment(2) == 'ikhya_ulummuddin/120/lihat_data' ? 'active': '' ?>" href="<?php echo site_url('ikhya_ulummuddin/120/lihat_data'); ?>">
              <span data-feather="file" class="align-text-bottom"></span>
              Lihat Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $this->uri->segment(2) == 'ikhya_ulummuddin/120/tambah_data' ? 'active': '' ?>" href="<?php echo site_url('ikhya_ulummuddin/120/tambah_data'); ?>">
              <span data-feather="plus" class="align-text-bottom"></span>
              Tambah Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $this->uri->segment(2) == 'ikhya_ulummuddin/120/logout' ? 'active': '' ?>" href="<?php echo base_url('logout'); ?>">
              <span style="color:red;">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>