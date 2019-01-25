<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data PEGAWAI</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">Nip</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="Nip (Nomor Induk Pgw)" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-3 ">
                                <select name="jk" class="form-control">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat_s" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat (Alamat Pgw)" required>
                            </div>
                        </div>
                       


                    
			

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-danger">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=Pegawai&actions=tampil" class="btn btn-info btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_l=$_POST['nama'];
    $nip_s=$_POST['nip'];
     $jk_s=$_POST['jk'];
      $alamat_s=$_POST['alamat'];

 
    
    //buat sql
    $sql="INSERT INTO data_pegawai VALUES ('','$nama_l','$nip_s','$jk_s','$alamat_s')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=Pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>