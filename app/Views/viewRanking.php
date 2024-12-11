<head>
    <title>Data Ranking</title>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Ranking</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Ranking</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Card with table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Ranking</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Ranking</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Nilai Optimasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($Ranking) && is_array($Ranking)): ?>
                                <?php foreach ($Ranking as $rank): ?>
                                    <tr>
                                        <td><?php echo $rank['ranking']; ?></td>
                                        <td><?php echo $rank['id_alternatif']; ?></td>
                                        <td><?php echo $rank['nama_alternatif']; ?></td>
                                        <td><?php echo $rank['nilai_optimasi']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>