<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "darling there is a letter from me 🤗";
    
konten = [
  {
    gambar: "g1.gif",
    ucapan: "hello my dear🥰😋",
  },
  {
    gambar: "g2.gif",
    ucapan: "I'm lucky to have met you 😋🥰",
  },
  {
    gambar: "g3.gif",
    ucapan: "I love you so much with all my heart😘😘",
  },
  {
    gambar: "g4.gif",
    ucapan: "I want you to always be with me forever 🥰🥰🥰",
  },
  {
    ucapan: "leave a message for me darling 🥰🥰😘"
  }
];

musik = "musik.mp3";
nomorWhatsapp = "https://www.instagram.com/wan_kucil/profilecard/?igsh=MzQ5c2E5cnprcWtt";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
