<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Catering</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Catering Kisaran </h2>
                        <h4>Jalan Sawo No. 33, Sentang, Kisaran, <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH CATERING</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                               <th>No.</th>
                               <th>Nama Customer</th>
                               <th>Alamat</th>
                               <th>No Hp</th>
                               <th>Pilihan Menu</th>
                               <th>Keterangan</th>
                              
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM customer";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nama_customer'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['pilihan_menu'] ?></td>
									<td><?= $data['keterangan'] ?></td>
									
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Owner<strong></u><br>
                                        Catering
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>