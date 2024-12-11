<head>
    <title>Data Normalisasi Terbobot</title>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Normalisasi Terbobot</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Normalisasi Terbobot</li>
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
                    <h3 class="card-title">Data Normalisasi Terbobot</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Alternatif</th>
                                <th>Bobot C1</th>
                                <th>Bobot C2</th>
                                <th>Bobot C3</th>
                                <th>Bobot C4</th>
                                <th>Bobot C5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($normalisasiTerbobot) && is_array($normalisasiTerbobot)): ?>
                                <?php foreach ($normalisasiTerbobot as $row): ?>
                                    <tr>
                                        <td><?php echo $row['id_alternatif']; ?></td>
                                        <td><?php echo $row['bobot_C1']; ?></td>
                                        <td><?php echo $row['bobot_C2']; ?></td>
                                        <td><?php echo $row['bobot_C3']; ?></td>
                                        <td><?php echo $row['bobot_C4']; ?></td>
                                        <td><?php echo $row['bobot_C5']; ?></td>
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