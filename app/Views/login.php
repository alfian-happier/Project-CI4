<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Login</title>
</head>

<body>
    <div class="container mt-5">
        <!-- Menampilkan pesan sukses -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success text-center" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- Menampilkan pesan error -->
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>
                        <form action="<?= base_url('login') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?= old('email') ?>">
                                <!-- Menampilkan error untuk email -->
                                <?php if (session()->getFlashdata('errors')['email'] ?? false) : ?>
                                    <div class="text-danger"><?= session()->getFlashdata('errors')['email'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                                <!-- Menampilkan error untuk password -->
                                <?php if (session()->getFlashdata('errors')['password'] ?? false) : ?>
                                    <div class="text-danger"><?= session()->getFlashdata('errors')['password'] ?></div>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>