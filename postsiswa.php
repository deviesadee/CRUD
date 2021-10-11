<?php
include './conn.php';
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];

$sql = "

insert into siswa (Nama, Alamat) values ('" . $Nama ."', '".$Alamat. "' );";
$result = mysqli_query($conn, $sql);

if ($result) {

echo 'Success create siswa';

} else {

printf('Failed create siswa:'.mysqli_error($conn)); 
exit();}