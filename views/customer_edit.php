<?php 
 $sql = "SELECT * FROM menu_catering";
 $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
?>

<?php
$id=$_GET['id_customer'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer ='$id'") or die ("SQL Edit error");
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
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?> " class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_menu" class="col-sm-3 control-label">Pilihan Menu</label>
                            <div class="col-sm-9">
                            <select name="nama_menu" value="<?=$data['nama_menu']?> " class="form-control" id="inputEmail3">
                            
                            <?php
                            while ($data = mysqli_fetch_array($query)) { ?>
                            <option value="<?= $data['nama_menu']?>"><?= $data['nama_menu']?></option>
                            <?php }

                            ?>

                            </select>
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
                    <a href="?page=customer&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data customer
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
    $pilihan_menu=$_POST['nama_menu'];
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE customer SET nama_customer='$nama_customer', alamat='$alamat', no_hp='$no_hp', nama_menu='$pilihan_menu',
	keterangan='$keterangan' WHERE id_customer='$id'"; 
    $query= mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=customer&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



