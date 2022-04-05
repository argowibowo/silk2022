<?php
    if(isset($_POST['submit'])){
        $id_obat=  $_POST['id_obat'];
        $nama =  $_POST['nama'];
        $kode_obat =  $_POST['kode_obat'];
        $jenis_obat =  $_POST['jenis_obat'];
        $kode_stok =  $_POST['kode stok'];
        $stok =  $_POST['stok'];
        $tgl_masuk =  $_POST['tgl masuk'];
        $exp_date =  $_POST['exp date'];

        

            $covername = $cover['name'];
            $sql = "INSERT INTO silk2022_obat (Id_obat, Nama Obat, kode obat,Jenis Obat) Values ('$id_obat','$nama','$kode_obat','$jenis_obat')";
            $query = mysqli_query($conn,$sql);

            if(!$query){
                echo "gagal masukin ke database";
                exit;
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Farmasi | Tambah Obat</title>

    <!-- bootstrap@5.0.0-beta3 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

    <!-- fontawesome@5.10.0 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- <a class="navbar-brand mb-0 h1" href="./index.php"><span class="fas fa-book"></span> Toko Buku</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-1 ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./index.php"><span class="fas fa-home"></span> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./tambah.php"><span class="far fa-plus-square"></span> Tambah Obat</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <main class="mt-5">
        <div class="container">
            <h3><span class="far fa-plus-square"></span> Tambah Obat</h3>
            <hr>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="id_obat" class="col-xs-12 col-md-3 form-label">Id Obat</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="id_obat" id="id_obat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-xs-12 col-md-3 form-label">Nama Obat</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="nama" id="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kode_obat" class="col-xs-12 col-md-3 form-label">kode obat</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="kode_obat" id="kode_obat">
                    </div>
                </div>
            
                <div class="mb-3 row">
                    <label for="jenis_obat" class="col-xs-12 col-md-3 form-label">Jenis Obat</label>
                    <div class="col-xs-12 col-md-9">
                        <select class="form-select" name="jenis_obat" required id="jenis_obat">
                            <option selected value="Obat Cair">Obat Cair</option>
                            <option value="Obat Tablet">Obat Tablet</option>
                        </select>
                    </div>
                </div>
                </div>
                <div class="mb-3 row">
                    <label for="kode_stok" class="col-xs-12 col-md-3 form-label">kode stok</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="kode_stok" id="kode_stok">
                    </div>
                </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-xs-12 col-md-3 form-label">stok</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="stok" id="stok">
                    </div>
                </div>
                </div>
                <div class="mb-3 row">
                    <label for="tgl_masuk" class="col-xs-12 col-md-3 form-label">tgl masuk</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="tgl_masuk" id="tgl_masuk">
                    </div>
                </div>
                </div>
                <div class="mb-3 row">
                    <label for="exp_date" class="col-xs-12 col-md-3 form-label">exp date</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="exp_date" id="exp_date">
                    </div>
                </div>
                </div>
			 <div class="row">
                    <div class="col-xs-12 col-md-3 offset-md-9 btn-group" role="group">
                        <button onclick="return confirm('Apakah anda yakin?')" type="submit" name="submit" class="btn btn-primary"><span class="far fa-plus-square"></span> Tambah</button>
                        <button type="reset" class="btn btn-warning"><span class="fas fa-history"></span> Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </main>
    <!-- <footer class="bg-light mt-5 p-3">
        <div class="container">
            <p class="text-center">&copy; 2021 Progweb.</p>
        </div>
    </footer> -->

    <!-- bootstrap@5.0.0-beta3 -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
</body>
</html>
