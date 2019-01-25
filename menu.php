<style>
.navbar {
  
  background-color: brown;
}
</style>
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand">SI-DATA PEGAWAI DPRD TANJUNGBALAI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="#"><a href="?page=utama">HOME</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DATABASE<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=Pegawai&actions=tampil">Data Pegawai</a></li>
                        <li><a href="?page=beranda&actions=tampil">COMINGSOON</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAPORAN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=peminjaman&actions=report">Laporan </a></li>
						            <li><a href="?page=beranda&actions=report">COMINGSOON</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">USER</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil">ABOUT</a></li>
                <li><a href="?page=kontak&actions=tampil">CONTACT</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">LOGOUT</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
