<?php
$arrWarna = array ("Blue","Black","Red","Yellow","Green");

echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i < count($arrWarna); $i++) {
  echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]. "</font> ?<br>";
}

echo "<br>Menampilkan ini array dengan foreach : <br>";
foreach ($arrWarna as $Warna) {
  echo "Do you like <font color=$Warna>". $Warna ."</font> ?<br>";
}
?>
