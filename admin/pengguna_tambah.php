<?php
$title = 'pengguna';
require'functions.php';
$outlet = ambildata($conn,'SELECT * FROM outlet');
if(isset($_POST['btn-simpan'])){
    $nama     = $_POST['nama_user'];
    $username = $_POST['username'];
    $pass     = md5($_POST['password']);
    $role     = $_POST['role'];
    if($role == 'kasir'){
        $outlet_id = $_POST['outlet_id'];
        $query = "INSERT INTO user (nama_user,username,password,role,outlet_id) values ('$nama','$username','$pass','$role','$outlet_id')";
    }else{
        $query = "INSERT INTO user (nama_user,username,password,role) values ('$nama','$username','$pass','$role')";
    
    }
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil menambahkan ' .$role. ' baru';
        $type = 'success';
        header('location: pengguna.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }else{
        echo "Gagal Tambah Data";
    }
}


require'layout_header.php';
?> 
<nav class="navbar navbar-default navbar-static-top m-b-0" >
            <div class="navbar-header" >
                
                <!-- /Logo -->
     <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                     <li>
                        <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">TAMBAH DATA PENGGUNA</b></a>
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
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                          <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-primary box-title"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box" style="height: 700px; margin-bottom: -700px;">
                <form method="post" action="">
                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" name="nama_user" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="owner">Owner</option>
                        <option value="kasir">Kasir</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jika Role Nya Kasir Maka Pilih Outlet Dimana Dia Akan Ditempatkan</label>
                    <select name="outlet_id" class="form-control">
                        <?php foreach ($outlet as $key): ?>
                            <option value="<?= $key['id_outlet'] ?>"><?= $key['nama_outlet'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="text-right">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
?> 