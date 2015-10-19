<?php
session_start();
require_once('inc-db.php');
error_reporting(0);
if(empty($_SESSION['username'])){
  header('location: login.php');  
}else{
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrator Perpustakaan SMK MA'ARIF PONJONG GUNUNG KIDUL</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <!-- PLUGIN VALIDATOR -->
    <link rel="stylesheet" href="plugin_validator/vendor/bootstrap/css/bootstrap.css"/>
    
    <link rel="stylesheet" href="plugin_validator/css/bootstrapValidator.css"/> 
    
    <!--
    <script type="text/javascript" src="plugin_validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="plugin_validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    -->
    <link href="datatime/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"/>

    <script type="text/javascript" src="plugin_validator/js/bootstrapValidator.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#frm_klasifikasi').change(function(){
			// get province's value
			var klasifikasi_id = $(this).val();
			// request to server with ajax
			$.get(
				'php-resource.php',
				{klasifikasi_id : klasifikasi_id},
				function(data){
					console.log(data);
					$('#rak').html("<option value=''>-- pilih rak --</option>");
					$.each(data,function(idx, val){
						var opt = "<option value='"+ val.name + "'>"+ val.name + "</option>";
						$('#rak').append(opt);
					});
				},
				'json'
			);
		});
	});
	</script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_area.php">Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
          
            
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                   <!-- <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                         /input-group 
                    </li>-->
                    
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-folder-close"></i> Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=buku.display"><i class="glyphicon glyphicon-book"></i> Buku</a>
                            </li>       
                            <li>
                                <a href="?page=penerbit.display"><i class="glyphicon glyphicon-list"></i> Penerbit</a>
                            </li>
                            <li>
                                <a href="?page=rak.display"><i class="glyphicon glyphicon-list-alt"></i> Rak</a>
                            </li>
                             <li>
                                <a href="?page=bukutamu.display"><i class="glyphicon glyphicon-list-alt"></i> Buku Tamu</a>
                            </li>
                            <li>
                                <a href="?page=petugas.display"><i class="glyphicon glyphicon-user"></i> Petugas</a>
                            </li>
                            <li>
                                <a href="?page=jurusan.display"><i class="glyphicon glyphicon-list-alt"></i> Jurusan</a>
                            </li>
                            <li>
                                <a href="?page=berita.display"><i class="glyphicon glyphicon-list-alt"></i> Berita</a>
                            </li>
                            <li>
                                <a href="?page=kelas.display"><i class="glyphicon glyphicon-list-alt"></i> Kelas</a>
                            </li>
                            <li>
                                <a href="?page=hilangrusak.frm-insert"><i class="glyphicon glyphicon-list-alt"></i> Hilang Rusak</a>
                            </li>
                            <li>
                                <a href="?page=anggota.display"><i class="fa fa-user fa-fw"></i> Anggota</a>
                            </li>
                            
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                     <li>
                        <a href="?page=pinjam.frm-idanggota"><i class="glyphicon glyphicon-th"></i> Transaksi</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-file"></i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=laporan.laporan-anggota"><i class="fa fa-user fa-fw"></i> Anggota</a>
                            </li>
                            <li>
                                <a href="?page=laporan.laporan-buku"><i class="glyphicon glyphicon-book"></i>  Katalog Buku</a>
                            </li>
                            <li>
                                <a href="?page=laporan.laporan-peminjaman"><i class="glyphicon glyphicon-th"></i>  Peminjaman</a>
                            </li>
                            <li>
                                <a href="?page=laporan.laporan-pengembalian"><i class="glyphicon glyphicon-list-alt"></i>  Pengembalian</a>
                            </li>
                            
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                  <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            
            <div class="row">
            <div class="col-lg-12">
    <?php
    if(isset($_GET['page']) && strlen($_GET['page']) > 0){
    $page=str_replace(".","/",$_GET['page']).".php";
    }else {
	$page="welcome.php";	
    }
    if(file_exists("modul/".$page)){
	include("modul/".$page);	
    }else{
    include("modul/welcome.php");	
    }  
        ?>
                            <!-- /.table-responsive -->
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
                
           
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
   
    
</body>
</html>
<?php
}
?>