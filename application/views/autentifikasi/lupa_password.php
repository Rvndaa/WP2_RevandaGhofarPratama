<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password</title>
</head>
<body>
    <div class="container">
        <h2><?= $judul; ?></h2>
        <?= $this->session->flashdata('pesan'); ?>
        <form action="<?= base_url('autentifikasi/lupaPassword'); ?>" method="post">
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="password1">Password Baru</label>
                <input type="password" class="form-control" id="password1" name="password1">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="password2">Ulangi Password Baru</label>
                <input type="password" class="form-control" id="password2" name="password2">
                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
    </div>
</body>
</html>
