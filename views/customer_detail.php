<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Customer</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM customer WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>ID Customer</td> <td><?= $data['id_customer'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Customer</td> <td><?= $data['nama_customer'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat Customer</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>No. Handphone</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
                        <tr>
                            <td>Pilihan Menu</td> <td><?= $data['pilihan_menu'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=customer&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Customer </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

