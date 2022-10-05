<?php
$title = 'pengguna';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM user order by role desc';
$data = ambildata($conn,$query);
?>
<style>
    .box-title:hover {
        background-color: #73a5c6 !important;
    }
    .account-list:hover {
        background-color: #73a5c6 !important;
    }
</style> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                          <a href="../register/pengguna_tambah.php" class="btn btn-primary box-title" style="font-size: 20px; padding:10px 20px 10px 20px; background-color: #1e3f66;"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    </div>
                    <div class="col-md-6">
                        <p class="account-list" style="font-size: 20px; float: right; color: #ffff !important; padding : 10px 20px 10px 20px; border-radius: 5px;  background-color: #1e3f66; width: 130px;"><a href="../index.php" style="color: white; font-weight: 500;"> Login <i class="fa-solid fa-right-to-bracket" style="color: white;"></i></a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box" style="height: 530px; margin-bottom: -700px;">

                <div class="row">
                    <p style="text-align: center; font-size: 30px; font-weight: 500; margin-bottom: 30px; ">Account List Laundry PNB</p>

                </div>
                <div class="table-responsive">
                    <table class="table table-bordered thead-dark" id="table">
                        <thead class="thead-dark">
                            <tr>
                                <th width="1%"></th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $user): ?>
                                <tr>
                                    <td></td>
                                    <td><?= $user['nama_user'] ?></td>
                                    <td><?= $user['username'] ?></td>
                                    <td><?= $user['role'] ?></td>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="pengguna_edit.php?id=<?= $user['id_user']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                          <a href="pengguna_hapus.php?id=<?= $user['id_user']; ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
