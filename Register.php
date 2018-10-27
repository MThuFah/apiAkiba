<?php
include 'koneksi.php' ;
 
 $lembaga   = $_POST['lembaga'];
 $pengurus  = $_POST['pengurus'];
 $alamat  = $_POST['alamat'];
 $email  = $_POST['email'];
 $sandi= $_POST['sandi'];
 $hp  = $_POST['hp'];
 
  class emp{}
      $sql = "INSERT admin SET lembaga='$lembaga', pengurus='$pengurus', alamat='$alamat', email='$email', sandi='$sandi',hp='$hp'";

      $query = mysqli_query($con,$sql);
      
      if ($query) {
      $response = new emp();
      $response->success = 1;
      $response->message = "berhasil";
      die(json_encode($response));
      } else{ 
      $response = new emp();
      $response->success = 0;
      $response->message = "Error simpan Data";
      die(json_encode($response)); 
      }

?>