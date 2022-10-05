<?php
$title = 'paket';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT outlet.nama_outlet ,paket.* FROM paket INNER JOIN outlet ON paket.outlet_id = outlet.id_outlet';
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
                        <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">DATA PAKET</b></a>
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
    <div class="row ">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box" style="height: 700px; margin-bottom: -700px;">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6">
                        <a href="paket_tambah.php" class="btn btn-primary box-title" style="margin-bottom:30px;"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                    </div>
                        <div class="col-md-6 text-right">
                            <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                        </div>
                </div>
                <div class="table-responsive" style="margin-left: 20px;">
                    <table class="table table-bordered thead-dark" id="table" >
                        <thead class="thead-dark">
                            <tr>
                                <th width="1#"></th>
                                <th>Nama Paket</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th>Outlet</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $paket): ?>
                                <tr>
                                    <td></td>
                                    <td><?= htmlspecialchars($paket['nama_paket']); ?></td>
                                    <td><?= htmlspecialchars($paket['jenis_paket']); ?></td>
                                    <td><?= htmlspecialchars($paket['harga']); ?></td>
                                    <td><?= htmlspecialchars($paket['nama_outlet']); ?></td>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="paket_edit.php?id=<?= htmlspecialchars($paket['id_paket']); ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                          <a href="paket_hapus.php?id=<?= htmlspecialchars($paket['id_paket']); ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
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
