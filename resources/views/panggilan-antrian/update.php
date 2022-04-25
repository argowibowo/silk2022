<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
 
  require_once "../config/database.php";

  
  if (isset($_POST['id'])) {
    
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
   
    $status = "1";
    $updated_date = gmdate("Y-m-d H:i:s", time() + 60 * 60 * 7);
    $update = mysqli_query($mysqli, "UPDATE tbl_antrian
                                     SET status='$status', updated_date='$updated_date'
                                     WHERE id='$id'")
                                     or die('Ada kesalahan pada query update : ' . mysqli_error($mysqli));
  }
}
