<?php 
 $sql = "SELECT * FROM menu_catering";
 $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Customer</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                    <div class="form-group">
                            <label for="id_customer" class="col-sm-3 control-label">ID Customer</label>
                            <div class="col-sm-9">
								<input type="text" name="id_customer"  class="form-control" id="inputEmail3" placeholder="Inputkan ID Customer" readonly="true">
                            </div>
                        </div>

					
						<div class="form-group">
                            <label for="nama_customer" class="col-sm-3 control-label">Nama Customer</label>
                            <div class="col-sm-3">
                                <input type="text" name="nama_customer" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Customer">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Customer">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No.Hp Customer</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Inputkan No.Hp Customer">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="nama_menu" class="col-sm-3 control-label">Pilih Menu</label>
                            <div class="col-sm-9">
                                <select type="text" name="nama_menu" class="form-control" id="inputEmail3" >
                                    <?php
                                     while ($data = mysqli_fetch_array($query)){ ?>
                                     <option value="<?= $data['nama_menu']?>"><?= $data['nama_menu']?></option>

                                     <?php }
                                    ?>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Customer</button>
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
    $id=$_POST['id_customer'];
	$nama=$_POST['nama_customer'];
	$alamat=$_POST['alamat'];
    $nohp=$_POST['no_hp'];
    $pilihan=$_POST['nama_menu'];
    $ket=$_POST['keterangan'];
    
    //buat sql
    $sql="INSERT INTO customer VALUES ('$id','$nama','$alamat','$nohp','$pilihan','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Menu Error");
    if ($query){
        echo "<script>window.location.assign('?page=customer&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
