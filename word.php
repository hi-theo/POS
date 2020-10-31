<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo "<b>Isi Dokumen anda. masukan catatan disini dan jangan lupa klik simpan sebagai word untuk penyimpanan file word anda.</b>";
echo "</body>";
echo "</html>";
?>