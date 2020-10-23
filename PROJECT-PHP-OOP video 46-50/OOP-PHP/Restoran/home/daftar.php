<h3>Registrasi Pelanggan</h3>

<div class="form-group">
    <form action="" method="POST">
        <div class="form-group w-50">
            <label for="">Pelanggan</label>
            <input type="text" name="pelanggan" require placeholder="isi pelanggan" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Alamat</label>
            <input type="text" name="alamat" require placeholder="alamat" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Telp</label>
            <input type="text" name="telp" require placeholder="telp" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Email</label>
            <input type="email" name="email" require placeholder="email" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" require placeholder="password" class="form-control">
        </div>

        <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" require placeholder="password" class="form-control">
        </div>

        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php

if (isset($_POST['simpan'])) {
    $pelanggan = $_POST['pelanggan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if ($password === $konfirmasi) {
        $sql = "INSERT INTO tblpelanggan VALUES ('', '$pelanggan', '$alamat', '$telp', '$email', '$password', 1)";
        // echo $sql;

        $db->runSQL($sql);
        header("location:?f=home&m=info");
    } else {
        echo "<h2>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h2>";
    }
}

?>