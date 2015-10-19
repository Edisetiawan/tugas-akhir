<?php
require_once('menu.php');
function word_limiter($karakter, $batas = 100, $akhir = '&#8230;')
	{
		if (trim($karakter) === '')
		{
			return $karakter;
		}
		preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $batas.'}/', $karakter, $pembanding);
		if (strlen($karakter) === strlen($pembanding[0]))
		{
			$akhir = '';
		}
		return rtrim($pembanding[0]).$akhir;
	}
//	echo word_limiter('Fungsi ini mungkin suatu ketika diperlukan unt',5);

?>
<br />
 <section id="katalog" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!--<div style="background-size: 100% auto;" id="demoHeader" class="header1">-->

                        <!--  Katalog Content Row 1 start -->
                        
                        
                        <?php
                        $query=mysql_query("select * from berita LIMIT 12");
                        $no=0;
                        while($data=mysql_fetch_array($query)){
                        $no++;
                        if($no % 4 == 1){
                        ?>
                        <div class="row">
                            </div>
                            <?php
                           }
                           
                           ?>
                             <div class="col-xs-6 col-md-3 img-portfolio">
                                
                            <a href="?page=baca-berita&id=<?php echo $data['berita_id']; ?>"><img class="img-responsive img-hover thumbnail" src="images/<?php echo $data['berita_images'] ?>" alt=""></a>
                                <h4>
                                    <a href="?page=baca-berita&id=<?php echo $data['berita_id']; ?>"><?php echo $data['berita_judul']; ?></a>
                                </h4>
                                <p><small><?php echo word_limiter($data['berita_isi'],5); ?></small></p>
                            </div>
                           <?php
                           }
                            ?>
                        <!--  Katalog Content Row 1 end -->

                                              <!-- Pagination -->
          
                            <!-- Pagination -->       
            </div>
            
            
            <?php
            require_once('navigasi.php');
            ?>
                <!-- /.col-sm-8 -->
            </div>
        </div>
    </section>