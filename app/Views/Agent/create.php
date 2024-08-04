<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>CREATE DATA</h1>
        <form action="<?= base_url('Agent/create'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_nasabah">Nama Nasabah</label>
                <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="periode_start">Periode Pertanggungan</label>
                <input type="date" class="form-control" id="periode_start" name="periode_pertanggungan">
            </div>
            <div class="form-group">
                <label for="kendaraan">Pertanggungan / Kendaraan</label>
                <input type="text" class="form-control" id="kendaraan" name="pertanggungan_kendaraan" placeholder="Masukkan Kendaraan">
            </div>
            <div class="form-group">
                <label for="harga_pertanggungan">Harga Pertanggungan</label>
                <input type="number" class="form-control" id="harga_pertanggungan" name="harga_pertanggungan" placeholder="Masukkan Harga Pertanggungan">
            </div>
            <div class="form-group">
                <label for="jenis_pertanggungan">Jenis Pertanggungan</label>
                <select class="form-control" id="jenis_pertanggungan" name="jenis_pertanggungan">
                    <option value="1">Comprehensive</option>
                    <option value="2">Total Loss Only</option>
                </select>
            </div>
            <div class="form-group">
                <label>Risiko Pertanggungan</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="risiko_banjir" name="risiko_banjir" value="1">
                    <label class="form-check-label" for="risiko_banjir">Banjir</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="risiko_gempa" name="risiko_gempa" value="1">
                    <label class="form-check-label" for="risiko_gempa">Gempa</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>