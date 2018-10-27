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
		  //maksud ku toh itu yg mines 2 mau kw save di db mu ataukah data real ? data realmo kak.. 
		  // sebelum di tambah 0 kayaknya kak? nd kah?
		  //cocok mi itu
		  //coba mi d andoid
		  // ku coba 23:22, berarti harusnya masuk 21:22
		  // tp nd munculki notif setiap sdh uploadku haha
		  // noting work upload di github mu
		  // nd mampu kuotaku kak.. besok mami wkwknda bnyak huada
		  //ini saya tambah
		  //pake ini supaya nda minta password terus : git config credential.helper store 

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


    //      $waktus = explode(':',$waktu);
  
		  // if (strlen($waktus[0])==1){
		  // 		$waktus[0]="0".$waktus[0]
		  // }
		  
		  // $waktu = $waktus[0].":".$waktus[1]; coba mi, yg reminder biasa nd muncul jg kak liat ki errornya

		  //       //echo $support." ".$waktu; banyak dudu di input bela haha
     //kalau nda bg2 nda nu tau errornya apa. karna di android itu nda ada pesan error dri server
		        $tanggals = $support." ".$waktureminder;
		        
            $fields = array( 
                'app_id' => $appid,
                'included_segments' => "Active Users",
                'data' => array("foo" => "bar"),
                "icon" => "https://pinjamaja.com/assets/images/favicon.png",
                "headings" => ["en" => "Assalamu Alaikum"],
                "small_icon" => "https://pinjamaja.com/assets/images/favicon.png",
                'contents' => $content,
                "url" => "url",
                "send_after" => $tanggals.":00 GMT+8",
                "filters" => array(["field" => "tag","key" => "reminder", "relation" => "=", "value"=>"on"])
            );
//kenapa sama fariabelnya itu ? yg terakhir itu na ambil
// baruka nyadar wkwk mau kw apa buat 2 kah ?
            // wait kak nda masuk lagi datanya, ada kesalahan tanggal bd

             $fields2 = array( 
                'app_id' => $appid,
                'included_segments' => "Active Users",
                'data' => array("foo" => "bar"),
                "icon" => "https://pinjamaja.com/assets/images/favicon.png",
                "headings" => ["en" => "Assalamu Alaikum"],
                "small_icon" => "https://pinjamaja.com/assets/images/favicon.png",
                'contents' => $content2,
                "url" => "url"
                //"send_after" => $tanggals.":00 GMT+8"
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