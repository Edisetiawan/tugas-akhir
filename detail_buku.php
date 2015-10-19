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
                        <div class="well header1 text-right" id="demohider" >
                            <!-- Carousel
                            ================================================== -->            
                            <div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <!-- start -->
                                    
                                    
                                      <div class='item active'>
                <div class='row'>
                <?php
function tampilBuku(){
    $query=mysql_query("select * from buku limit 12");//  limit {$start},{$end}");
    while($row=mysql_fetch_array($query))
    $data[]=$row;
    return $data;
}

$arr=tampilBuku();    
    foreach($arr as $key=>$value)
    {
        //if we can divide $key by six without remainder
        if ($key % 4 == 0) 
        {     ?>
            </div>
            </div>
            <div class='item'>
            <div class='row'>
       <?php  } ?>
          <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail"><img class="img-responsive" src="images/<?php echo $value['buku_foto'] ?>" alt="Thumb21"></a>
          </div>
  <?php  } ?>
</div>
</div>
                                     <!-- end -->   
                                        
                                        
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
                                
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                    <li class="active" data-target="#myCarousel" data-slide-to="1"></li>
                                    <li class="" data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>               
                            </div><!-- End Carousel -->
                            <a href="#">lihat buku lain</a>
                        </div><!-- End Well -->
                            
                    </div>
                    <?php
                    $sql_buku="SELECT *
FROM
    penerbit
    INNER JOIN buku 
        ON (penerbit.penerbit_kode = buku.penerbit_kode)
    INNER JOIN klasifikasi 
        ON (klasifikasi.klasifikasi_id = buku.klasifikasi_id) WHERE buku.buku_id='".$id."'";
                $result_buku=mysql_query($sql_buku);
                $data_buku=mysql_fetch_array($result_buku);    
                    ?>
                    <!--  Katalog Content Row 1-->
                    <div class="row">
                        <div class="well">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="images/<?php echo $data_buku['buku_foto']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <table>
                                            <tr>
                                                <td class="text-left"> Kode Buku </td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_kode']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"> Judul Buku </td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_judul']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Pengarang</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_buku['buku_pengarang']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Penerbit</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_buku['penerbit_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">ISBN</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_buku['buku_isbn']; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-left">Tahun Terbit</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_tahun_terbit']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kota Terbit</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_buku['penerbit_kota']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Lokasi</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_buku['klasifikasi_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Jumlah Buku</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_buku['buku_jumlah']; ?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="text-left">Tanggal Entry</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_tgl_update']; ?></td>
                                            </tr>
                                             <tr>
                                                <td class="text-left">Sinopsis</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_sinopsis']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Ketersediaan
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Kode Buku</th>
                                                            <th class="text-center">Rak</th>
                                                            <th class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sql_detail="select * from buku_detail where buku_id='".$id."'";
                                                    $result_detail=mysql_query($sql_detail);
                                                    while($data_detail=mysql_fetch_array($result_detail)){
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $data_detail['bukdet_kode']; ?></td>
                                                            <td><?php echo $data_detail['rak_lokasi']; ?></td>
                                                            <td><?php 
                                                            // echo $data_detail['bukdet_status']; 
                                                            if($data_detail['bukdet_status']==1){
                                                            echo "<b style='color: blue;'>Tersedia</b>";
                                                            }else {
                                                            echo "<b style='color: red;'>Sedang dipinjam</b>";
                                                            echo "<p style='color: orange'>( Jatuh tempo ";
                                                            echo $data_detail['jatuh_tempo']." )";
                                                            }
                                                            ?></td>
                                                        </tr>
                                                     <?php   
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
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