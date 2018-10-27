<?php
   include "koneksi.php";

   $penyedia = $_POST['penyedia'];
   
   $sql = "SELECT * FROM kajian WHERE penyedia ='$penyedia'";
   $check = mysqli_query($con,$sql);
   $response = array();

   while($row = mysqli_fetch_assoc($check)) {
      $response[] = $row;
  }
  
    if($response==[])
    {
        $response["value"] = 0;
        $response["message"] = "fail";
        echo json_encode($response);   
    }
    else 
    {
        echo "{\"result\" : ".json_encode($response)."}";
        // echo json_encode($response);
    }
  
  mysqli_close($con);
?>