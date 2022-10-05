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
<style>
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
                          <a href="../index.php" class="btn btn-primary box-title" style="font-size: 20px; padding:10px 20px 10px 20px; background-color: #1e3f66;"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    </div>
                    <div class="col-md-6">
                        <p class="account-list" style="font-size: 20px; float: right; color: #ffff !important; padding : 10px 20px 10px 20px; border-radius: 5px;  background-color: #1e3f66; width: 200px;"><a href="pengguna.php" style="color: white; font-weight: 500;"><i class="fa-solid fa-user" style=" color: white !important;"></i> Account List</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box" style="height: 650px; margin-bottom: -700px;">

                <form method="post" action="">
                          <p style="text-align: center; font-size: 30px; font-weight: 500; ">Register Laundry PNB</p>

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