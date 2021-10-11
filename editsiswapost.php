<?php
include "./conn.php";
$id = $_GET['id'];

$Nama = $_POST['Nama'];

$Alamat = $_POST['Alamat'];
$sql = "
update siswa

set Nama='". $Nama."', Alamat = '".$Alamat."'

where id='".$id. "';
";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: index.php');
} else {

    printf('Failed create siswa:'.mysqli_error($conn)); 
    exit();}                                     