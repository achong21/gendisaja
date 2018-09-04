<?php
include "../config/koneksi.php";

if ($_SESSION['leveluser']=='admin'){
  $sql=mysql_query("select * from modul where aktif='Y' order by urutan");
}

if ($m=mysql_fetch_array($sql)){  

echo "<li><a href='?module=header'><b>Ganti Header</b></a></li>";
echo "<li><a href='?module=testimoni'><b>Lihat Testimoni</b></a></li>";
echo "<li><a href='?module=alamat'><b>Edit Kontak Kami</b></a></li>";
echo "<li><a href='?module=bank'><b>Edit Rekening Bank</b></a></li>";
echo "<li><a href='?module=poling'><b>Edit Polling</b></a></li>";
}
?>
