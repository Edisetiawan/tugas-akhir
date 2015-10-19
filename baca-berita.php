 <?php
require_once('menu.php');
$id=$_GET['id'];
?>
<br />
 <section id="katalog" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!--<div style="background-size: 100% auto;" id="demoHeader" class="header1">-->
                    <div class="row">
                        
                            
                    </div>
                    <?php
                    $sql_berita="SELECT * FROM berita WHERE berita_id='".$id."'";
                $result_berita=mysql_query($sql_berita);
                $data_berita=mysql_fetch_array($result_berita);    
                    ?>
                    <!--  Katalog Content Row 1-->
                    <div class="row">
                        <div class="well">
                            <div class="row">
                                <div class="col-lg-3">
                                <h3><?php echo $data_berita['berita_judul']; ?></h3>
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="images/<?php echo $data_berita['berita_images']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                                <p><?php echo $data_berita['berita_isi']; ?> </p>  </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                           
                                        </div>
                                        <!-- /.panel-heading -->
                     
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     <?php  
     require_once('navigasi.php'); 
     ?>
            </div>
        </div>
    </section>