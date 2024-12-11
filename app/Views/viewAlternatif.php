<head>
    <title>Data Alternatif</title>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Alternatif</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Alternatif</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Update Antrian -->
    <?php foreach ($alternatif as $item): ?>
        <div class="modal fade" id="editAlternatifModal<?= $item['id_alternatif']; ?>" tabindex="-1" role="dialog"
            aria-labelledby="editAlternatifModalLabel<?= $item['id_alternatif']; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('alternatifController/updateAlternatif/' . $item['id_alternatif']); ?>"
                        method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editAlternatifModalLabel<?= $item['id_alternatif']; ?>">Edit Antrian
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="id_alternatif">ID Alternatif</label>
                                <input type="text" class="form-control" id="id_alternatif" name="id_alternatif"
                                    value="<?= $item['id_alternatif']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_alternatif">Nama Alternatif</label>
                                <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif"
                                    value="<?= $item['nama_alternatif']; ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Create Alternatif Modal -->
    <div class="modal fade" id="createAlternatifModal" tabindex="-1" role="dialog"
        aria-labelledby="createAlternatifModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= base_url('alternatifController/createAlternatif'); ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createAlternatifModalLabel">Tambah Alternatif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_alternatif">ID Alternatif</label>
                            <input type="text" class="form-control" id="id_alternatif" name="id_alternatif" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_alternatif">Nama Alternatif</label>
                            <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- Card with table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Alternatif </h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#createAlternatifModal">
                            Tambah Data
                        </button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($alternatif)): ?>
                                <?php $no = 1;
                                foreach ($alternatif as $alt): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $alt['id_alternatif']; ?></td>
                                        <td><?php echo $alt['nama_alternatif']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editAlternatifModal<?= $alt['id_alternatif']; ?>">Edit</a>
                                            <a href="<?php echo site_url('alternatifController/deleteAlternatif/' . $alt['id_alternatif']); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>