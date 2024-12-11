<head>
    <title>Perhitungan</title>
</head>
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Perhitungan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Perhitungan -->
    <?php foreach ($perhitungan as $item): ?>
        <div class="modal fade" id="editPerhitunganModal<?= $item['id_perhitungan']; ?>" tabindex="-1" role="dialog"
            aria-labelledby="editPerhitunganModalLabel<?= $item['id_perhitungan']; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('perhitunganController/updatePerhitungan/' . $item['id_perhitungan']); ?>"
                        method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPerhitunganModalLabel<?= $item['id_perhitungan']; ?>">Edit
                                Perhitungan
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="id_alternatif">ID Alternatif</label>
                                <select class="form-control" id="id_alternatif" name="id_alternatif" required>
                                    <?php foreach ($alternatif as $alt): ?>
                                        <option value="<?= $alt['id_alternatif']; ?>"
                                            <?= $alt['id_alternatif'] == $item['id_alternatif'] ? 'selected' : ''; ?>>
                                            <?= $alt['id_alternatif']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_kriteria">ID Kriteria</label>
                                <select class="form-control" id="id_kriteria" name="id_kriteria" required>
                                    <?php foreach ($kriteria as $krit): ?>
                                        <option value="<?= $krit['id_kriteria']; ?>"
                                            <?= $krit['id_kriteria'] == $item['id_kriteria'] ? 'selected' : ''; ?>>
                                            <?= $krit['id_kriteria']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="number" class="form-control" id="value" name="value"
                                    value="<?= $item['value']; ?>" required>
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

    <!-- Create Perhitungan Modal -->
    <div class="modal fade" id="createPerhitunganModal" tabindex="-1" role="dialog"
        aria-labelledby="createPerhitunganModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= base_url('perhitunganController/createPerhitungan'); ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createPerhitunganModalLabel">Tambah Perhitungan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_alternatif">ID Alternatif</label>
                            <select class="form-control" id="id_alternatif" name="id_alternatif" required>
                                <?php foreach ($alternatif as $alt): ?>
                                    <option value="<?= $alt['id_alternatif']; ?>"><?= $alt['id_alternatif']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_kriteria">ID Kriteria</label>
                            <select class="form-control" id="id_kriteria" name="id_kriteria" required>
                                <?php foreach ($kriteria as $krit): ?>
                                    <option value="<?= $krit['id_kriteria']; ?>"><?= $krit['id_kriteria']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="number" class="form-control" id="value" name="value" required>
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
                    <h3 class="card-title">Perhitungan</h3>
                </div>
                <div class="card-body">
                    <!-- Tambah Data Button -->
                    <div class="mb-3">
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#createPerhitunganModal">
                            Tambah Data
                        </button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Alternatif</th>
                                <th>ID Kriteria</th>
                                <th>Value</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($perhitungan)): ?>
                                <?php $no = 1;
                                foreach ($perhitungan as $hit): ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $hit['id_alternatif']; ?></td>
                                        <td><?php echo $hit['id_kriteria']; ?></td>
                                        <td><?php echo $hit['value']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editPerhitunganModal<?= $hit['id_perhitungan']; ?>">Edit</a>
                                            <a href="<?php echo site_url('perhitunganController/deletePerhitungan/' . $hit['id_perhitungan']); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</div>