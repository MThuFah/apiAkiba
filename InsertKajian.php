<?php
include 'koneksi.php' ;
 
 $penyedia 	= $_POST['penyedia'];
 $judul 	= $_POST['judul'];
 $tema 	= $_POST['tema'];
 $kategori  = $_POST['kategori'];
 $penceramah= $_POST['penceramah'];
 $tempat 	= $_POST['tempat'];
 $alamat    = $_POST['alamat'];
 $latitude  = $_POST['latitude'];
 $longitude = $_POST['longitude'];
 $tanggal   = $_POST['tanggal'];
 $waktu 	= $_POST['waktu'];
 $catatan	= $_POST['catatan'];
 $video 	= $_POST['video'];
 $peserta	= $_POST['peserta'];
 $support 	= $_POST['support'];

  class emp{}


         $waktus = explode(':',$waktu);
  
		  if (strlen($waktus[0])==1){
		  		$waktus[0]="0".$waktus[0];
		  }

		  if (strlen($waktus[1])==1){
		  		$waktus[1]="0".$waktus[1];
		  }

		  if ($waktus[0]==00){
		  	$waktus[0]=24;
		  }

		  $waktu = $waktus[0].":".$waktus[1];
		  $waktus[0] =  $waktus[0] - 2;
		  $waktureminder = $waktus[0].":".$waktus[1];


       $sql = "INSERT kajian SET penyedia='$penyedia', judul='$judul', tema='$tema', kategori='$kategori', penceramah='$penceramah',
                  tempat='$tempat', alamat='$alamat', latitude='$latitude', longitude='$longitude', tanggal='$tanggal', waktu='$waktu',catatan='$catatan', video='$video', peserta='$peserta', support='$support'";

      $query = mysqli_query($con,$sql);

      $content = array(
            "en" => "Reminder Kajian Islam hari ini"
        );

      $content2 = array(
            "en" => "Kajian baru telah di tambahkan, lihat waktunya"
        );

        $appid = '293ce55d-3f73-4f8b-9c59-340520caa82c';
        $authorization = 'MjQ3ZjRjOGMtZThmNS00NDRkLThlMDYtNGQzZDQxNDkwYTRh';

		        $tanggals = $support." ".$waktureminder;
		        
      	
		 //Notifikasi Reminder

      	    $fields = array( 
                'app_id' => $appid,
                'included_segments' => "Active Users",
                'data' => array("foo" => "bar"),
                "icon" => "https://pinjamaja.com/assets/images/favicon.png",
                "headings" => ["en" => "Assalamu Alaikum"],
                "small_icon" => "https://pinjamaja.com/assets/images/favicon.png",
                'contents' => $content,
                "url" => "url", // bgmn caranya kalau di klik notifikasinya, aplikasinya yang terbuka kak?
                "send_after" => $tanggals.":00 GMT+8",
                "filters" => array(["field" => "tag","key" => "reminder", "relation" => "=", "value"=>"on"])
            );


      	 //Notifikasi Setiap Upload Kajian Islam baru

             $fields2 = array( 
                'app_id' => $appid,
                'included_segments' => "Active Users",
                'data' => array("foo" => "bar"),
                "icon" => "https://pinjamaja.com/assets/images/favicon.png",
                "headings" => ["en" => "Assalamu Alaikum"],
                "small_icon" => "https://pinjamaja.com/assets/images/favicon.png",
                'contents' => $content2,
                "url" => "url"
            );


        $fields = json_encode($fields);
//        dd($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic '.$authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;

        $fields2 = json_encode($fields2);
//        dd($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic '.$authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;

      
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