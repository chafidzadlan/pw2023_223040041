  <header>

    <div class="container">

      <a href="index.php" class="logo">
        <ion-icon name="accessibility-outline"></ion-icon>
      </a>

      <div class="navbar-wrapper">

        <button class="navbar-menu-btn" data-navbar-toggle-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <ul class="navbar-list">

            <li class="nav-item">
              <a href="kelas.php" class="nav-link">Kelas</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Alur Belajar</a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">Bootcamp</a>
            </li>

          </ul>
          
          <?php if ($login) { ?>
            <div class="dropdown">
              <button class="btn btn-outline-light dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon name="person-circle" class="ion-icon"></ion-icon> 
              </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="dashboard.php">Profile</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
          <?php } else { ?>
            <a href="register.php" class="btn btn-primary">Daftar</a>
            <a href="log-in.php" class="btn btn-primary">Masuk</a>
          <?php } ?>
        </nav>

      </div>

    </div>

  </header>