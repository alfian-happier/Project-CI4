<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">MENAMPILKAN DATA</h2>

        <div class="form-create mb-3">
            <a href="<?php echo site_url('Agent/create'); ?>"><button type="button" class="btn btn-primary">Tambah Data</button></a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Periode Pertanggungan</th>
                    <th>Pertanggungan</th>
                    <th>Harga Pertanggungan</th>
                    <th>Jenis Pertanggungan</th>
                    <th>Risiko Pertanggungan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($data_nasabah && is_array($data_nasabah)) : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($data_nasabah as $nasabah) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $nasabah['nama_nasabah']; ?></td>
                            <td><?= $nasabah['periode_pertanggungan']; ?></td>
                            <td><?= $nasabah['pertanggungan_kendaraan']; ?></td>
                            <td><?= $nasabah['harga_pertanggungan']; ?></td>
                            <td><?= $nasabah['jenis_pertanggungan']; ?></td>
                            <td><?= $nasabah['risiko_pertanggungan']; ?></td>
                            <td>
                                <!-- Tombol aksi -->
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8">Data tidak tersedia</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS, Popper.js, dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>