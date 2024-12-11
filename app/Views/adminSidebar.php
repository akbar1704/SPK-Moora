<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('Home/index'); ?>" class="brand-link">
        <img src="dist/img/logo uin.png" alt="Logo Uin" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SPK Moora</span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?php echo site_url('Home/index'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Master Data
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo site_url('alternatifController/viewAlternatif'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Alternatif</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('kriteriaController/viewKriteria'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Kriteria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('perhitunganController/viewPerhitungan'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Perhitungan</p>
                        </a>
                    </li>
                    <!-- Tambahkan menu lain jika diperlukan -->
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('vNormalisasiController/viewNormalisasi'); ?>" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Hitung Normalisasi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('vNormalisasiTerbobotController/viewNormalisasiTerbobot'); ?>"
                    class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Hitung Normalisasi Terbobot</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('vOptimasiController/viewOptimasi'); ?>" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Hitung Nilai Optimasi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('vRankingController/viewRanking'); ?>" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Hasil Perankingan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('vRankingController/viewHasilKeputusan'); ?>" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Hasil Keputusan</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</aside>