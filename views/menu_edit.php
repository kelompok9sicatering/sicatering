<?php
$kode_menu=$_GET['kode_menu'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM menu_catering WHERE kode_menu ='$kode_menu'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Menu</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="nama_menu" class="col-sm-3 control-label">Nama Menu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_menu" value="<?=$data['nama_menu']?>"class="form-control" kode_menu="inputEmail3" 
                                placeholder="Nama Menu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lauk" class="col-sm-3 control-label">Lauk</label>
                            <div class="col-sm-9">
                                <input type="text" name="lauk" value="<?=$data['lauk']?>"class="form-control" kode_menu="inputEmail3" 
                                placeholder="Lauk">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="sayuran" class="col-sm-3 control-label">Sayuran</label>
                            <div class="col-sm-9">
                                <input type="text" name="sayuran" value="<?=$data['sayuran']?>"class="form-control" kode_menu="inputEmail3" 
                                placeholder="Sayuran">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="buah" class="col-sm-3 control-label">Buah</label>
                            <div class="col-sm-9">
                                <input type="text" name="buah" value="<?=$data['buah']?>"class="form-control" kode_menu="inputEmail3" 
                                placeholder="Buah">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="snack" class="col-sm-3 control-label">Snack</label>
                            <div class="col-sm-9">
                                <input type="text" name="snack" value="<?=$data['snack']?>"class="form-control" kode_menu="inputEmail3" 
                                placeholder="Snack">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" kode_menu="inputEmail3" 
                                placeholder="Harga" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Menu</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=menu&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Menu
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama_menu=$_POST['nama_menu'];
	$lauk=$_POST['lauk'];
    $sayuran=$_POST['sayuran'];
	$buah=$_POST['buah'];
    $snack=$_POST['snack'];
    $harga=$_POST['harga'];
    
    //buat sql
    $sql="UPDATE menu_catering SET nama_menu='$nama_menu',lauk='$lauk',sayuran='$sayuran',buah='$buah',snack='$snack',
	harga='$harga' WHERE kode_menu ='$kode_menu'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=menu&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



