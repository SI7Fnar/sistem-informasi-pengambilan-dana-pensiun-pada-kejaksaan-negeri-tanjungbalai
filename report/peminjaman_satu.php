<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pegawai</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM data_pegawai WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SEKRETARIAT DPRD KOTA TAJUNGBALAI </h2>
                        <h4>Jl. Gereja, Karya, Tanjungbalai Sel., Kota Tanjung Balai, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>DATA PEGAWAI</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>ID Pegawai</td> <td><?= $data['nip'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pegawai</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Umum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
