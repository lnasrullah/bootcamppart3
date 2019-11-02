<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Berita Acara</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="asset/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="asset/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="asset/grafik/code/highcharts.js"></script>
    <script src="asset/grafik/code/modules/pareto.js"></script>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
     
      <header class="main-header">
        <a href="asset/index2.html" class="logo">NAGASAKTI</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Selamat Datang </span>
                </a>
              </li>  
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">LOGOUT</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="Auth" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          
        </section>
        <!-- /.sidebar -->
      </aside>
 
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        	<link src="asset/plugins/datatables/dataTables.bootstrap.js" >
          <div class="row">
            <div class="col-xs-12">
 
 
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Berita</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <a href="tambah.php" class="btn btn-primary">Tambah Berita</a>
                  <a href="tambahuser.php" class="btn btn-success">Tambah User</a>
                  <br><br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id Produk</th>
                        <th>Nama Produk</th>
                        <th>Image</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Buat</th>
                        <th>Nama User</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                include ("conn.php");
                    $query="select * from news join user where user.id = news.user_id";
                    $tampil=mysqli_query($koneksi, $query) or die(mysqli_error());

                    $no=1;
                     while($data=mysqli_fetch_array($tampil))
                    { 
                ?>
                        <tr>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $data['tittle'];?></td>
                        <td><?php echo  $data['image'];?></td>
                        <td><?php echo  $data['deskripsi'];?></td>
                        <td><?php echo  $data['create_time'];?></td>
                        <td><?php echo  $data['name'];?></td>
                        <td>
                        <a href="index.php/edit/<?php echo $data['id'];?>" class="btn btn-primary"> Edit</a> 
                        <a href="index.php/hapus/<?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      <?php
                    $no++;
                    }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
 
    <!-- jQuery 2.1.3 -->
    <script src="asset/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="asset/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="asset/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='asset/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="asset/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="asset/dist/js/demo.js" type="text/javascript"></script> -->
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    <script type="text/javascript">
      $('body').on('click', '.show-modal', function(event) {
        // event.preventDefault();
        $('#confirm-modal').modal('show');
        // alert('ok');
      });
    </script> 
  <script type="text/javascript">
    $("#produk").change(function(){
      var variable = this.value;
      var split_variable =  variable.split("**");
      var id_produk = split_variable[0];
      var no_mesin = split_variable[1];
      $("#id_produk").val(id_produk);
      $("#no_mesin").val(no_mesin);
    });
  </script>
  </body>
</html>