<?php
if(isset($_POST['ogrNo']) && isset($_POST['sifre'])) { 
   $ogrNo = $_POST['ogrNo'];
   $sifre = $_POST['sifre'];
 
   if(empty($ogrNo) || empty($sifre)) { 
      echo 'Lütfen boş bırakmayın';
      header("Refresh: 5; url=index.php");
   } else {
      if($ogrNo == '12345' && $sifre == '1416') { 
         session_start();
         $_SESSION['kullanici'] = '12345';
         $_SESSION['sifre'] = '1416';
         echo 'Giriş yaptınız. Notunuzu hesaplayabilirsiniz';
          header("Refresh: 2; url=nothesaplama.php");     

      } else {
         echo 'Yanlış kullanıcı adı ya da şifre, tekrar deneyiniz. Giriş sayfasınına yönlendiriliyorsunuz...';
         header("Refresh: 5; url=index.php");
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}

?>

