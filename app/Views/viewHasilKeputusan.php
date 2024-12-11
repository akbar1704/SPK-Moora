<head>
    <title>Hasil Keputusan</title>
</head>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil Keputusan</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Keputusan</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Hasil Keputusan -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Keputusan Akhir</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <p>Setelah melalui serangkaian proses perhitungan dengan metode <i>Multi-Objective Optimization on
                            Ratio Analysis</i> (MOORA), keputusan akhir telah ditetapkan. Berdasarkan penilaian objektif
                        terhadap lima kriteria utama (Disiplin, Kerja Sama Tim, Keterampilan, Kualitas Kerja, dan
                        Ketidakhadiran), berikut adalah hasilnya:</p>

                    <h4>Alternatif Terbaik yang Dipilih</h4>
                    <ul>
                        <li><strong>Nama Mahasiswa:</strong> <?php echo $TopRanking['nama_alternatif']; ?></li>
                        <li><strong>Kode Alternatif:</strong> <?php echo $TopRanking['id_alternatif']; ?></li>
                        <li><strong>Nilai Optimasi Tertinggi:</strong> <?php echo $TopRanking['nilai_optimasi']; ?></li>
                    </ul>

                    <h4>Kesimpulan Akhir</h4>
                    <p>Dengan peringkat teratas ini, <?php echo $TopRanking['nama_alternatif']; ?> dinobatkan sebagai
                        mahasiswa PKL terbaik. Hal ini
                        menunjukkan bahwa dia telah menunjukkan kemampuan yang luar biasa dan memenuhi semua standar
                        kinerja yang telah ditetapkan.</p>

                    <blockquote>
                        <strong>"Selamat kepada <?php echo $TopRanking['nama_alternatif']; ?> atas pencapaiannya, dan
                            terima kasih kepada semua peserta atas
                            usaha dan dedikasi yang telah ditunjukkan selama PKL ini!"</strong>
                    </blockquote>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>