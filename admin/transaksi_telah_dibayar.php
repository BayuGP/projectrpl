<?php
$title = 'transaksi';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga, detail_transaksi.total_bayar FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi WHERE transaksi.id_transaksi = ' . $_GET['id'];
$data = ambilsatubaris($conn,$query);
?> 
<nav class="navbar navbar-default navbar-static-top m-b-0" >
            <div class="navbar-header" >
                
                <!-- /Logo -->
     <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                     <li>
                        <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">TRANSAKSI TELAH DIBAYAR</b></a>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="../assets/image/1662730841898.png" style="margin-left: -350px;" alt="user-img" width="36" class="img-circle"><b class="hidden-xs" style="font-size:16px;">ADMIN</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
         <div class="white-box" style="height: 700px; margin-bottom: -700px;">
                <div class="row" style="margin-top: 70px !important; ">
                    <div class="col-md-4" style="margin-bottom: 20px; "></div>
                    <div class="col-md-4 text-center" style="padding-left: 50px;padding-right: 50px;">
                        <div class="bg-success" style="font-size: 125px;border-radius: 20px">
                            <i class="fa fa-check fa-10x text-white"></i>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Pesanan Atas Nama <?= $data['nama_member'] ?> Berhasil Di Bayar</h3>
                        <strong>Kode Invoice <?= $data['kode_invoice'] ?></strong><br><br>
                        <strong>Total Pembayaran Rp.<?= $data['total_harga'] ?></strong><br>
                        <strong>Total Uang Bayar Rp.<?= $data['total_bayar'] ?></strong><br>
                        <strong>Kembalian Rp.<?= $data['total_bayar'] - $data['total_harga'] ?></strong><br><br>
                        <a href="transaksi.php" class="btn btn-primary">Kembali Ke Menu Utama</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        
    </div>
</div>
<?php
require'layout_footer.php';
