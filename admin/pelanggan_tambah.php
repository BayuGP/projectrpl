<?php
$title = 'pengguna';
require'functions.php';

if(isset($_POST['btn-simpan'])){
    $nama     = $_POST['nama_member'];
    $alamat_member = $_POST['alamat_member'];
    $no_ktp     = $_POST['no_ktp']; 
    $telp_member     = $_POST['telp_member']; 
    $jenis_kelamin     = $_POST['jenis_kelamin']; 
    $query = "INSERT INTO member (nama_member,alamat_member,no_ktp,telp_member,jenis_kelamin) values ('$nama','$alamat_member','$no_ktp','$telp_member','$jenis_kelamin')";
    
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil menambahkan ' .$role. ' baru';
        $type = 'success';
        header('location: pelanggan.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
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
                        <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">TAMBAH DATA PELANGGAN</b></a>
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
                    <label>No KTP Member</label>
                    <input type="text" name="no_ktp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Member</label>
                    <input type="text" name="nama_member" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Member</label>
                    <input type="text" name="alamat_member" class="form-control">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="telp_member" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
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