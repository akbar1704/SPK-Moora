<head>
    <title>Data Kriteria</title>
</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kriteria</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Home/index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Kriteria</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Update Kriteria -->
    <?php foreach ($kriteria as $item): ?>
        <div class="modal fade" id="editKriteriaModal<?= $item['id_kriteria']; ?>" tabindex="-1" role="dialog"
            aria-labelledby="editKriteriaModalLabel<?= $item['id_kriteria']; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('kriteriaController/updateKriteria/' . $item['id_kriteria']); ?>"
                        method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editKriteriaModalLabel<?= $item['id_kriteria']; ?>">Edit Kriteria
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="id_kriteria">ID Kriteria</label>
                                <input type="text" class="form-control" id="id_kriteria" name="id_kriteria"
                                    value="<?= $item['id_kriteria']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_kriteria">Nama Kriteria</label>
                                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria"
                                    value="<?= $item['nama_kriteria']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="bobot">Bobot</label>
                                <input type="text" class="form-control" id="bobot" name="bobot"
                                    value="<?= $item['bobot']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kriteria">Jenis Kriteria</label>
                                <input type="text" class="form-control" id="jenis_kriteria" name="jenis_kriteria"
                                    value="<?= $item['jenis_kriteria']; ?>" required>
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

    <!-- Create Kriteria Modal -->
    <div class="modal fade" id="createKriteriaModal" tabindex="-1" role="dialog"
        aria-labelledby="createKriteriaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= base_url('kriteriaController/createKriteria'); ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createKriteriaModalLabel">Tambah Kriteria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_kriteria">ID Kriteria</label>
                            <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria</label>
                            <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot</label>
                            <input type="number" class="form-control" id="bobot" name="bobot" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kriteria">Jenis Kriteria</label>
                            <select class="form-control" id="jenis_kriteria" name="jenis_kriteria" required>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
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
                    <h3 class="card-title">Data Kriteria</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#createKriteriaModal">
                            Tambah Data
                        </button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                                <th>Jenis Kriteria</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($kriteria)): ?>
                                <?php $no = 1;
                                foreach ($kriteria as $krit): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $krit['id_kriteria']; ?></td>
                                        <td><?php echo $krit['nama_kriteria']; ?></td>
                                        <td><?php echo $krit['bobot']; ?></td>
                                        <td><?php echo $krit['jenis_kriteria']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editKriteriaModal<?= $krit['id_kriteria']; ?>">Edit</a>
                                            <a href="<?php echo site_url('kriteriaController/deleteKriteria/' . $krit['id_kriteria']); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                        </td>
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
    </section>
</div>