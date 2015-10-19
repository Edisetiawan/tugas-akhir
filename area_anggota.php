 <?php
// echo $_SESSION['nis']; exit;
require_once('menu.php');
require_once('fungsi.php');
//echo "Jancook";
//exit;
?>
<br />
 <section id="katalog" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!--<div style="background-size: 100% auto;" id="demoHeader" class="header1">-->

                    <?php
                    $sql_anggota="SELECT *
FROM
    jurusan
    INNER JOIN anggota 
        ON (jurusan.jurusan_kode = anggota.jurusan_kode)
    INNER JOIN kelas 
        ON (kelas.kelas_id = anggota.kelas_id) WHERE anggota.anggota_nis='".$_SESSION['nis']."'";
       // echo $sql_anggota; exit;
                $result_anggota=mysql_query($sql_anggota);
                $data_anggota=mysql_fetch_array($result_anggota);    
                    ?>
                    <!--  Katalog Content Row 1-->
                    <div class="row">
                        <div class="well">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="images/<?php echo $data_anggota['anggota_images']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <table>
                                            <tr>
                                                <td class="text-left"> Nis</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_nis']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Nama</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_nama']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kelas</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['kelas_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Jurusan</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['jurusan_keterangan']; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-left">Jenis Kelamin</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_jns_kelamin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Angkatan</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Email</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Nomor HP</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_hp']; ?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="text-left">Alamat</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_alamat']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Pinjman Terkini
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Kode Buku</th>
                                                            <th class="text-center">Judul</th>
                                                            <th class="text-center">Tanggal Pinjam</th>
                                                            <th class="text-center">Tanggal Harus Kembali</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sql_pinjam="SELECT *
FROM
    buku
    INNER JOIN pinjam 
        ON (buku.buku_id = pinjam.buku_id)
    INNER JOIN anggota 
        ON (anggota.anggota_nis = pinjam.anggota_nis) WHERE anggota.anggota_nis='".$_SESSION['nis']."' and pinjam.pinjam_status='1'";
                                                    $result_pinjam=mysql_query($sql_pinjam);
                                                    while($data_pinjam=mysql_fetch_array($result_pinjam)){ 
													$tgl_dateline=$data_pinjam['tgl_kembali'];     //diambil dari database
													$tgl_kembali=date('d-m-Y');
													$lambat=terlambat($tgl_dateline, $tgl_kembali);
													//echo $lambat; exit();
													$denda1=200;
													$denda=$lambat*$denda1;
                                                    ?>
                                                        <tr>
                                                            <td><?php  echo $data_pinjam['bukdet_kode']; ?></td>
                                                            <td><?php  echo $data_pinjam['buku_judul']; ?>
															<?php
													if($lambat > 0 ){
													?> 
													<br />
													<b style="color: red;font: bold;">TERLAMBAT selama <?php echo $lambat; ?> hari dengan jumlah denda <?php echo "Rp. ".number_format($denda,0,',','.'); ?>,00</b>
													<?php } ?>
															</td>
                                                            <td><?php  echo $data_pinjam['tgl_pinjam']; ?></td>
                                                            <td><?php  echo $data_pinjam['tgl_kembali']; ?></td>
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