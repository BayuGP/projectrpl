<?php
$title = 'transaksi';
require 'functions.php';
require 'layout_header.php';
$query = "SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi WHERE transaksi.status_bayar='belum'";
$data = ambildata($conn,$query);
?> 
    <nav class="navbar navbar-default navbar-static-top m-b-0" >
                <div class="navbar-header" >
                    
                    <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">KONFIRMASI DATA TRANSAKSI</b></a>
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
             <div class="white-box" style="height: 630px; margin-bottom: -700px;">
                <div class="row" style="margin-top: 30px !important; ">
                    <div class="col-md-6" style="margin-bottom: 20px; ">
                        <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-primary box-title"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Invoice</th>
                                <th>Member</th>
                                <th>Status</th>
                                <th>Total Harga</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $transaksi): ?>
                                <tr>
                                    <td></td>
                                    <td><?= $transaksi['kode_invoice'] ?></td>
                                    <td><?= $transaksi['nama_member'] ?></td>
                                    <td><?= $transaksi['status'] ?></td>
                                    <td><?= $transaksi['total_harga'] ?></td>
                                    <td align="center">
                                          <a href="transaksi_bayar.php?id=<?= $transaksi['id_transaksi']; ?>" data-toggle="tooltip" data-placement="bottom" title="Pilih" class="btn btn-primary btn-block">Pilih</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
