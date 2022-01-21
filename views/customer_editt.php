<?php
$id=$_GET['id_customer'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Customer</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->

					<form class="form-horizontal" action="" method="post">
					<div class="form-group">
                            <label for="nama_customer" class="col-sm-3 control-label">Nama Customer</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama_customer" value="<?=$data['nama_customer']?> " class="form-control" id="inputEmail3" placeholder="Inputkan Nama Customer">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?> " class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Customer">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No.Hp Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?> " class="form-control" id="inputEmail3" placeholder="Inputkan No.Hp Customer">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pilihan_menu" class="col-sm-3 control-label">Pilihan Menu</label>
                            <div class="col-sm-9">
                                <input type="text" name="pilihan_menu" value="<?=$data['pilihan_menu']?> " class="form-control" id="inputEmail3" placeholder="Inputkan Pilihan Menu">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?> " class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>
                  

                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Update Data Customer</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=customer&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Customer
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$nama_customer=$_POST['nama_customer'];
	$alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $pilihan_menu=$_POST['pilihan_menu'];
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE customer SET nama_customer='$nama_customer', alamat='$alamat', no_hp='$no_hp', pilihan_menu='$pilihan_menu',
	keterangan='$keterangan' WHERE id_customer='$id'"; 
    $query= mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=customer&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



