<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  
  require_once "../config/database.php";

  
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  
  $query = mysqli_query($mysqli, "SELECT no_antrian FROM tbl_antrian 
                                  WHERE tanggal='$tanggal' AND status='0' 
                                  ORDER BY no_antrian ASC LIMIT 1")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  
  $rows = mysqli_num_rows($query);

  
  if ($rows <> 0) {
    
    $data = mysqli_fetch_assoc($query);
    $no_antrian = $data['no_antrian'];
    echo number_format($no_antrian, 0, '', '.');
  } 
  
  else {
    echo "-";
  }
}
