<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  
  require_once "../config/database.php";

  
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  
  $query = mysqli_query($mysqli, "SELECT id, no_antrian, status FROM tbl_antrian 
                                  WHERE tanggal='$tanggal'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  
  $rows = mysqli_num_rows($query);

  
  if ($rows <> 0) {
    $response         = array();
    $response["data"] = array();

    while ($row = mysqli_fetch_assoc($query)) {
      $data['id']         = $row["id"];
      $data['no_antrian'] = $row["no_antrian"];
      $data['status']     = $row["status"];

      array_push($response["data"], $data);
    }

    
    echo json_encode($response);
  }

  else {
    $response         = array();
    $response["data"] = array();

   
    $data['id']         = "";
    $data['no_antrian'] = "-";
    $data['status']     = "";

    array_push($response["data"], $data);

    
    echo json_encode($response);
  }
}
