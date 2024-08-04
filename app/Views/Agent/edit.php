<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1>EDIT DATA</h1>
        <form>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" value="John Doe" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="periodeStart">Periode Start</label>
                <input type="date" class="form-control" id="periodeStart" value="2023-01-01">
            </div>
            <div class="form-group">
                <label for="periodeEnd">Periode End</label>
                <input type="date" class="form-control" id="periodeEnd" value="2023-12-31">
            </div>
            <div class="form-group">
                <label for="kendaraan">Kendaraan</label>
                <input type="text" class="form-control" id="kendaraan" value="Toyota Avanza" placeholder="Masukkan Kendaraan">
            </div>
            <div class="form-group">
                <label for="hargaPertanggungan">Harga Pertanggungan</label>
                <input type="number" class="form-control" id="hargaPertanggungan" value="150000000" placeholder="Masukkan Harga Pertanggungan">
            </div>
            <div class="form-group">
                <label for="jenisPertanggungan">Jenis Pertanggungan</label>
                <select class="form-control" id="jenisPertanggungan">
                    <option value="All Risk" selected>All Risk</option>
                    <option value="TLO">TLO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="risikoBanjir">Risiko Banjir</label>
                <select class="form-control" id="risikoBanjir">
                    <option value="Yes" selected>Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="risikoGempa">Risiko Gempa</label>
                <select class="form-control" id="risikoGempa">
                    <option value="Yes">Yes</option>
                    <option value="No" selected>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="totalPremi">Total Premi</label>
                <input type="number" class="form-control" id="totalPremi" value="2500000" placeholder="Masukkan Total Premi">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>