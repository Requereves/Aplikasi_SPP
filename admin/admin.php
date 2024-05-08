<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Admin / Petugas - APLIKASI PEMBAYARAN SPP</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Pembayaran SPP. 
        </div>
        <a href="admin.php" class="btn btn-primary"> Administrator</a>
        <a href="admin.php?url=spp" class="btn btn-primary"> SPP</a>
        <a href="admin.php?url=kelas" class="btn btn-primary"> Kelas</a>
        <a href="admin.php?url=siswa" class="btn btn-primary"> Siswa</a>
        <a href="admin.php?url=petugas" class="btn btn-primary"> Petugas</a>
        <a href="admin.php?url=pembayaran" class="btn btn-primary"> Pembayaran</a>
        <a href="admin.php?url=laporan" class="btn btn-primary"> laporan</a>
        <a href="admin.php?url=logout" class="btn btn-primary"> logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if(empty($file)){
                    echo "<h4>Selamat Datang Di Halaman Administrator</h4>";
                    echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah ";
                }else {
                    include $file.'.php';
                }
                ?>
            </div>
        </div>

    </div>
    
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>