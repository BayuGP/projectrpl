<?php
$title = 'dashboard';
require 'functions.php';
require 'layout_header.php';
$jTransaksi = ambilsatubaris($conn,'SELECT COUNT(id_transaksi) as jumlahtransaksi FROM transaksi');
$jPelanggan = ambilsatubaris($conn,'SELECT COUNT(id_member) as jumlahmember FROM member');
$joutlet = ambilsatubaris($conn,'SELECT COUNT(id_outlet) as jumlahoutlet FROM outlet');
$query = "SELECT transaksi.*,member.nama_member , detail_transaksi.total_harga FROM transaksi INNER JOIN member ON member.id_member = transaksi.member_id INNER JOIN detail_transaksi ON detail_transaksi.transaksi_id = transaksi.id_transaksi   ORDER BY transaksi.id_transaksi DESC LIMIT 10";
$data = ambildata($conn,$query);
?> 

</head>

<body class="fix-header" >
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <?php if($title=='dashboard'){?>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <?php }?>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0" >
            <div class="navbar-header" >
                
                <!-- /Logo -->
     <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                     <li>
                        <a class="profile-pic" href="#" style="margin-left: -1300px; font-size: 20px;" alt="user-img" width="36"><b class="hidden-xs">HOME</b></a>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="../assets/image/1662730841898.png" style="margin-left: -350px;" alt="user-img" width="36" class="img-circle"><b class="hidden-xs" style="font-size:16px;">ADMIN</b></a>
                    </li>
                </ul>
            </div>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

    <Style>
@import url("https://fonts.googleapis.com/css2?family=Alatsi&family=Fredoka+One&family=Viga&display=swap");

        .image-dashboard {
  height: 480px;
  float: left;
  margin-top: 50px;
  padding: 30px 20px 0 20px;
}
.dashboard-tag {
  height: 700px;
  width: 1220px;
  margin-left: 230px;
  background-color: #ffff;
  margin-top: -570px;
  margin-bottom: -500px;
}
.welcome {
  line-height: 120px;
  font-size: 95px;
  margin-top: 155px !important;
  text-transform: uppercase;
  font-family: "Viga", sans-serif;
}
        </style>
    <!-- /.row -->
    <!-- ============================================================== -->
    <!-- Different data widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    
     <div class=" dashboard-tag">
      <img class="image-dashboard" src="../assets/image/character-app.png" alt="">
      <br>
      <p class="welcome">Welcome To <span style="  color: #ed364e;"> Laundry PNB</span></p>
      <p class="text-laundry"></p>
    </div>   
<?php
require 'layout_footer.php';
?> 

<?php
require 'layout_footer.php';
?> 