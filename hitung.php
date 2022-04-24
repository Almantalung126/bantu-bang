<?php
$nama = $_POST['nama'];

$jabatan = $_POST['jabatan'];

$gaji_pokok = $_POST['gaji_pokok'];

$potongan = $_POST['potongan'];



$gajitotal=($tujangan)+($gaji_pokok)-($potongan);
 
("<b>Nama:</b> ");
echo ($nama);
echo ("<br/>");
echo ("<b>Jabatan:</b> ");
echo ($jabatan );
echo ("<br/>");
echo ("<b>Total Gaji: </b>");
echo ($total_gaji );
echo ("<br/>");

if ($direktur);
{
  $tunjangan=(40/100)*$gaji_pokok;
}

elseif ($manager);
{
    $tunjangan=(20000)*$gaji_pokok;
}


elseif ($staf);
{
    $tunjangan=(10000)*$gaji_pokok;
}



?>