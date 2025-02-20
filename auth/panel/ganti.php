<?php
$pertama = "<?php \n";
$terakhir = "?>";
$put = fopen("zendsdev.php","w") or die("Cannot write to path");
		 fwrite($put,$pertama);
		 fwrite($put,'$idtele = "'.$_GET['idtele'].'";');
		 fwrite($put,"\n");
		 fwrite($put,'$token = "'.$_GET['token'].'";');
         fwrite($put,"\n");
         fwrite($put,'$waktu = "'.$_GET['waktu'].'";');
		 fwrite($put,"\n");
		 fwrite($put,$terakhir);
		 fclose($put);
echo '200';
?>