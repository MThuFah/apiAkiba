<?php 
if($_SERVER['REQUEST_METHOD']=='POST') {
  
  include "koneksi.php";
  
    $email           = $_POST['email'];
    $sandi          = $_POST['sandi'];

    class emp{}

    $sql      = "SELECT * FROM admin WHERE email ='$email'";
    $hasil    = mysqli_query($con,$sql);
    $check    = mysqli_fetch_array(mysqli_query($con,$sql));
    $pass     = $check['sandi'];
    $response = array();

    while($row = mysqli_fetch_assoc($hasil)) {
        $response[] = $row;
    }

    if($response==[]){
        echo "{\"result\" : ".json_encode($response)."}";
    }else {
        if ($sandi==$pass) {
            echo "{\"result\" : ".json_encode($response)."}";
        }else{
            $response = new emp();
            $response->result = "Password Salah";
            die(json_encode($response)); 
        }
    }
  mysqli_close($con);
} else {

  include "koneksi.php";

  $sqla = "SELECT * FROM tb_admin ORDER BY LPAD(lower('email'), 10,0) ASC";
  $resulta = mysqli_query($con,$sqla) or die ("Query error: " . mysqli_error());

  $jsona = array();
  while($row = mysqli_fetch_assoc($resulta)) {
      $jsona[] = $row;
  }

  echo "{\"result\" : ".json_encode($jsona)."}";
} 
?>