
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Farmasi | Tambah Obat</title>
    <!-- fontawesome@5.10.0 -->
    </head>
<body>
   
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
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                    <button type="batal" class="btn btn-primary float-right" >Batal</button>
                    
                    </div>
                </div>

            </form>
        </div>
    </main>
    
</body>
</html>
