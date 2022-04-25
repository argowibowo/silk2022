<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  
  require_once "../config/database.php";

  
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  
  $query = mysqli_query($mysqli, "SELECT count(id) as jumlah FROM tbl_antrian 
                                  WHERE tanggal='$tanggal' AND status='0'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  
  $data = mysqli_fetch_assoc($query);
  
  $sisa_antrian = $data['jumlah'];

  
  echo number_format($sisa_antrian, 0, '', '.');
}
