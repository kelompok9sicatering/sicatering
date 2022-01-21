<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Catering</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="kode_menu" class="col-sm-3 control-label">Kode Menu</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_menu" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Menu" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_menu" class="col-sm-3 control-label">Nama Menu </label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_menu" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Menu" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="lauk" class="col-sm-3 control-label">Lauk</label>
                            <div class="col-sm-9">
                                <input type="text" name="lauk" class="form-control" id="inputEmail3" placeholder="Inputkan Lauk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="sayuran" class="col-sm-3 control-label">Sayuran</label>
                            <div class="col-sm-9">
                                <input type="text" name="sayuran" class="form-control" id="inputEmail3" placeholder="Inputkan Sayuran" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="buah" class="col-sm-3 control-label">Buah</label>
                            <div class="col-sm-9">
                                <input type="text" name="buah"class="form-control" id="inputEmail3" placeholder="Inputkan Buah" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="snack" class="col-sm-3 control-label">Snack</label>
                            <div class="col-sm-3">
                                <input type="text" name="snack" class="form-control" id="inputEmail3" placeholder="Inputkan Snack" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputPassword3" placeholder="Inputkan Harga" required>
                            </div>
                        </div>


                      

					
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Menu Catering</button>
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
  $kodemenu=$_POST['kode_menu'];
	$namamenu=$_POST['nama_menu'];
	$lauk=$_POST['lauk'];
	$sayuran=$_POST['sayuran'];
  $buah=$_POST['buah'];
	$snack=$_POST['snack'];
  $harga=$_POST['harga'];
 
    //buat sql
    $sql="INSERT INTO menu_catering VALUES ('$kodemenu','$namamenu','$lauk','$sayuran','$buah','$snack','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Menu Error");
    if ($query){
        echo "<script>window.location.assign('?page=menu&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
