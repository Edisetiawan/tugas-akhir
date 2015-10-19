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
                                <div class="col-lg-8 col-sm-8">

                                
                                <h2>Visi Misi Perpustakaan <br/>SMK MAARIF PONJONG</h2>
                                    
                                    <h4>Visi</h4>
                                    <p>Perpustakaan adalah pintu gerbang pengetahuan melayani dan menyediakan pembelajaran sepanjang hayat</p>
                                    <h4>Misi</h4>
                                    <ul class="pull-left">
                                    <li>
                                    Menciptakan kebiasaan membaca
                                    </li>
                                    <li>
                                    Memberikan layanan yang ramah, tertib dan lancer yang berbasis IT
                                    </li>
                                    <li>
                                    Membantu guru dan siswa dalam memperoleh informasi
                                    </li>
                                    <li>
                                    Meningkatan mutu dan kualitas pendidikan SMK Ma'rif Ponjong
                                    </li>
                                    </ul>


                                    
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