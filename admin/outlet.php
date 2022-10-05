<?php
$title = 'outlet';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT outlet.*, user.nama_user FROM outlet LEFT JOIN user ON user.outlet_id = outlet.id_outlet';
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
                        <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">DATA OUTLET</b></a>
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
    <div class="row" >
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box" style="height: 700px; margin-bottom: -700px;">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6" style="margin-bottom: 20px;">
                        <a href="outlet_tambah.php" class="btn btn-primary box-title"><i class="fa fa-plus fa-fw"></i> Tambah</a>
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
                                <th>Nama</th>
                                <th>Owner</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $outlet): ?>
                                <tr>
                                    <td></td>
                                    <td><?= htmlspecialchars($outlet['nama_outlet']); ?></td>
                                    <td>
                                        <?php if($outlet['nama_user'] == null){
                                            echo 'Belum Ada Owner';
                                        }else{
                                            echo htmlspecialchars($outlet['nama_user']);
                                        } ?>
                                    </td>
                                    <td><?= htmlspecialchars($outlet['telp_outlet']); ?></td>
                                    <td><?= htmlspecialchars($outlet['alamat_outlet']); ?></td>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="outlet_edit.php?id=<?= $outlet['id_outlet']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                          <a href="outlet_hapus.php?id=<?= $outlet['id_outlet']; ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
$title = 'outlet';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT outlet.*, user.nama_user FROM outlet LEFT JOIN user ON user.outlet_id = outlet.id_outlet';
$data = ambildata($conn,$query);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Master Outlet</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Outlet</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                        <a href="outlet_tambah.php" class="btn btn-primary box-title"><i class="fa fa-plus fa-fw"></i> Tambah</a>
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
                                <th>Nama</th>
                                <th>Owner</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $outlet): ?>
                                <tr>
                                    <td></td>
                                    <td><?= htmlspecialchars($outlet['nama_outlet']); ?></td>
                                    <td>
                                        <?php if($outlet['nama_user'] == null){
                                            echo 'Belum Ada Owner';
                                        }else{
                                            echo htmlspecialchars($outlet['nama_user']);
                                        } ?>
                                    </td>
                                    <td><?= htmlspecialchars($outlet['telp_outlet']); ?></td>
                                    <td><?= htmlspecialchars($outlet['alamat_outlet']); ?></td>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="outlet_edit.php?id=<?= htmlspecialchars($outlet['id_outlet']); ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Detail" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                          <a href="outlet_hapus.php?id=<?= htmlspecialchars($outlet['id_outlet']); ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
?>
