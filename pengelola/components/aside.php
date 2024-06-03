 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black !important; color:white !important">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
      
        <span class="brand-text font-weight-bold ml-3">SKPB-Facility</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://cdn-icons-png.flaticon.com/512/219/219983.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $admin['nama']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="semua-pengajuan.php" class="nav-link">
              <i class="fas fa-file"></i>
                <p>
                  Semua Pengajuan
                  <span class="badge badge-primary">All</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="menunggu-persetujuan.php" class="nav-link">
              <i class="fas fa-file"></i>
                <p>
                  Menunggu Persetujuan 
                  <i class="badge badge-danger">Setujui Pengajuan</i>
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="disetujui-upload-surat.php" class="nav-link">
               <i class="fas fa-file"></i>
                <p>
                 Pengajuan Disetujui
                  <span class="badge badge-success">Upload Surat</span>
                </p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="menunggu-verifikasi.php" class="nav-link">
              <i class="fas fa-file"></i>
                <p>
                  Menunggu Verifikasi 
                  <i class="badge badge-warning">Verifikasi Surat</i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="terverifikasi.php" class="nav-link">
               <i class="fas fa-check"></i>
                <p>
                 Pengajuan Terverifikasi
                  <i class="badge badge-success">Final dan Terverifikasi</i>
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pengajuan-ditolak.php" class="nav-link">
               <i class="fas fa-ban"></i>
                <p>
                 Pengajuan Ditolak
                 <i class="badge badge-dark">Ditolak</i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="kelas-skpb.php" class="nav-link">
               <i class="fas fa-book"></i>
                <p>
                 Kelas SKPB
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="ruangan.php" class="nav-link">
               <i class="fas fa-home"></i>
                <p>
                 Ruangan
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="unit-departemen.php" class="nav-link">
               <i class="fas fa-building"></i>
                <p>
                 Unit/Departemen
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="javascript:void(0)" onclick="confirmLogout()" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function confirmLogout() {
        Swal.fire({
          title: 'Konfirmasi Logout',
          text: "Apakah anda yakin ingin logout?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, log out',
          cancelButtonText: 'Tidak, tetap log in'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "authentication/logout.php";
          }
        });
      }
    </script>

