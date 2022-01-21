<?php
//membuat query untuk hapus data
$sql="DELETE FROM customer WHERE id_customer ='".$_GET['id_customer']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=customer&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=customer&actions=tampil');</scripr>";
}

