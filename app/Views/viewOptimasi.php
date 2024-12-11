<head>
    <title>Data Optimasi</title>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Optimasi</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Optimasi</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Card with table -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Optimasi</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Alternatif</th>
                                <th>Nilai Max (C1+C2+C3+C4)</th>
                                <th>Nilai Min (C5)</th>
                                <th>Nilai Optimasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($Optimasi) && is_array($Optimasi)): ?>
                                <?php foreach ($Optimasi as $opt): ?>
                                    <tr>
                                        <td><?php echo $opt['id_alternatif']; ?></td>
                                        <td><?php echo $opt['nilai_max']; ?></td>
                                        <td><?php echo $opt['nilai_min']; ?></td>
                                        <td><?php echo $opt['nilai_optimasi']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>