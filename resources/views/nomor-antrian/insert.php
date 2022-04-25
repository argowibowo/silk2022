<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  
  require_once "../config/database.php";

  
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  $query = mysqli_query($mysqli, "SELECT max(no_antrian) as nomor FROM tbl_antrian WHERE tanggal='$tanggal'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  
  $rows = mysqli_num_rows($query);

  
  if ($rows <> 0) {
    
    $data = mysqli_fetch_assoc($query);
    $no_antrian = $data['nomor'] + 1;
  }

  else {
   
    $no_antrian = 1;
  }


  $insert = mysqli_query($mysqli, "INSERT INTO tbl_antrian(tanggal, no_antrian) 
                                   VALUES('$tanggal', '$no_antrian')")
                                   or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));

  if ($insert) {
    echo "Sukses";
  }
}
