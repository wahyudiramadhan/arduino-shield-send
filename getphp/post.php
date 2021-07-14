<?php
include "koneksi.php";
  // Kirim respon bila ada
  if(isset($_GET["id_finger"]))
  {
    $id_finger = $_GET["id_finger"];
    echo  $id_finger;
    $sql = "SELECT * FROM tb_data_finger WHERE id_finger='".$id_finger."'";
 
    if($result = $conn->query($sql))
    {
      $row = $result->fetch_assoc();
      echo $row["id_finger"];
    }
  }
   
  $conn->close();

  
