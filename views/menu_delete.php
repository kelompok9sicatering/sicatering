<?php
//membuat query untuk hapus data
$sql="DELETE FROM menu_catering WHERE kode_menu ='".$_GET['kode_menu']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=menu&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=menu&actions=tampil');</scripr>";
}

