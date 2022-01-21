<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Menu</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM menu_catering WHERE kode_menu ='" . $_GET ['kode_menu'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        
                        <tr>
                            <td>Nama Menu</td> <td><?= $data['nama_menu'] ?></td>
                        </tr>
                        <tr>
                            <td>Lauk</td> <td><?= $data['lauk'] ?></td>
                        </tr>
						<tr>
                            <td>Sayuran</td> <td><?= $data['sayuran'] ?></td>
                        </tr>
                        <tr>
                            <td>Buah</td> <td><?= $data['buah'] ?></td>
                        </tr>
                        <tr>
                            <td>Snack</td> <td><?= $data['snack'] ?></td>
                        </tr>
						<tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>

                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=menu&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Menu </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

