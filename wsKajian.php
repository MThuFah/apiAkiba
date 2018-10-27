<?php 

	include "koneksi.php";

	$sqla = "SELECT * FROM `kajian` order BY timestamp DESC";
	$resulta = mysqli_query($con,$sqla) or die ("Query error: " . mysqli_error());

  $jsona = array();
  while($row = mysqli_fetch_assoc($resulta)) {
      $jsona[] = $row;
  }

  echo "{\"result\" : ".json_encode($jsona)."}";

?>