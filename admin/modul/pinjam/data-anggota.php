          <?php
          $session_id=session_id();
          require_once('inc-db.php');
          require_once('fungsi.php');
          $var_anggota_id=$_SESSION['anggota_nis'];
          $pinjam			= date("d-m-Y");
          $tiga_hari		= mktime(0,0,0,date("n"),date("j")+3,date("Y"));
          $kembali		= date("d-m-Y", $tiga_hari);

          //echo $var_anggota_id; exit;
          $query="SELECT *
FROM
    jurusan
    INNER JOIN anggota 
        ON (jurusan.jurusan_kode = anggota.jurusan_kode)
    INNER JOIN kelas 
        ON (kelas.kelas_id = anggota.kelas_id)
                WHERE anggota.anggota_nis='".$_SESSION['anggota_nis']."'";
          
          $result=mysql_query($query);
          $data=mysql_fetch_array($result);
          ?>
          <br /><br />
          <form method="post" action="?page=pinjam.save-pinjam"  onclick="return confirm('Tutup/Selesaikan Transaksi')">
          <input type="submit" name="selesai" value="Selesai Transaksi" class="btn btn-primary"/>
          </form>
                    <div class="panel panel-default">
                    
                    <div class="well">
                                <h4>Data Siswa</h4>
                                          <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                        <tr>
                                            <td><b>Nama Anggota</b></td>
                                            <td><?php echo $data['anggota_nama']; ?></td>
                                            <td><b>Email</b></td>
                                            <td><?php echo $data['anggota_email']; ?></td>
                                          <td rowspan="3"><img src="../images/<?php echo $data['anggota_images']; ?>" width="200" height="200"/></td>
                                        </tr>
                                        <tr>
                                            <td><b>Kelas</b></td>
                                            <td><?php echo $data['kelas_nama']; ?></td>
                                            <td><b>Nomor hand phone</b></td>
                                            <td><?php echo $data['anggota_hp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Jurusan</b></td>
                                            <td><?php echo $data['jurusan_keterangan']; ?></td>
                                            <td><b>Angkatan</b></td>
                                            <td><?php echo $data['anggota_angkatan']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                
                                
                            </div>
                       <!--   <div class="panel-heading">
                            Basic Tabs
                        </div>
                       /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#pinjaman" data-toggle="tab"><h4>Pinjaman</h4></a>
                                </li>
                                <li><a href="#pinjamansaatini" data-toggle="tab"><h4>Pinjaman saat ini</h4></a>
                                </li>
                                <li><a href="#sejarah" data-toggle="tab"><h4>Sejarah Peminjaman</h4></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="pinjaman">
                                <form method="post" action="?page=pinjam.save-pinjam-tmp"><br />
                                   <b> masukan kode buku </b>  <input type="text" name="frm_kode_buku" /> <input type="submit" name="pinjam" value="pinjam" class="btn btn-primary"/>
                                    </form>
                                    <p>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th>Hapus</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Tangal pinjam</th>
                                    <th>Tanggal Harus Kembali</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
    $sql_tmp="SELECT *
FROM
    anggota
    INNER JOIN tmp_pinjam 
        ON (anggota.anggota_nis = tmp_pinjam.anggota_nis)
    INNER JOIN buku 
        ON (buku.buku_id = tmp_pinjam.buku_id)
    INNER JOIN buku_detail 
        ON (buku_detail.bukdet_kode = tmp_pinjam.bukdet_kode) where tmp_pinjam.tmp_session='".$session_id."' and anggota.anggota_nis='".$_SESSION['anggota_nis']."'";
                                    $result_tmp=mysql_query($sql_tmp);
                                    while($data_tmp=mysql_fetch_array($result_tmp)){
                                    ?>
                                    
                                    <tr>
                                    <td><a href="?page=pinjam.delete-pinjam-tmp&id=<?php echo $data_tmp['bukdet_kode']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_tmp['bukdet_kode'];  ?>')"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i></button></a></td>
                                    <td><?php echo $data_tmp['bukdet_kode']; ?></td>
                                    <td><?php echo $data_tmp['buku_judul']; ?></td>
                                    <td><?php echo $pinjam; ?></td>
                                    <td><?php echo $kembali; ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="pinjamansaatini">
                                   <!-- <h4>Profile Tab</h4> -->
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th>Kembali</th>
                                    <th>Perpanjang</th>
                                    <th>kode buku</th>
                                    <th>judul</th>
                                    <th>tanggal pinjam</th>
                                    <th>tanggal harus kembali</th>
                                    </tr>
                                    </thead>
                                     <tbody>
                                    <?php 
                                  $sql="SELECT *
FROM
    buku
    INNER JOIN pinjam 
        ON (buku.buku_id = pinjam.buku_id)
    INNER JOIN buku_detail 
        ON (buku_detail.bukdet_kode = pinjam.bukdet_kode)
    INNER JOIN anggota 
        ON (anggota.anggota_nis = pinjam.anggota_nis) where anggota.anggota_nis='".$_SESSION['anggota_nis']."' and pinjam.pinjam_status='1'";
        //echo $sql; exit;
                                $result=mysql_query($sql);
                                while($data_pinjam=mysql_fetch_array($result)){
                                $tgl_dateline=$data_pinjam['tgl_kembali'];     //diambil dari database
                                $tgl_kembali=date('d-m-Y');
	                           	$lambat=terlambat($tgl_dateline, $tgl_kembali);
        
                                //echo $lambat; exit();
                                $denda1=200;
                                $denda=$lambat*$denda1;
        
                                    ?>
                                    <tr>
                                    <td>
                                    <form method="post" action="?page=pinjam.proces-kembali">
                                    <input type="hidden" name="bukdet_kode" value="<?php echo $data_pinjam['bukdet_kode']; ?>"/>
                                    <input type="hidden" name="pinjam_id" value="<?php echo $data_pinjam['pinjam_id']; ?>"/>
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-share-alt"></i></button>
                                    </form>
                                    <td>
                                    
                                    <?php
                                    if($lambat > 0){
                                    ?>
                                    <button type="button" class="btn btn-warning" disabled=""><i class="glyphicon glyphicon-plus-sign"></i></button></a>
                                    <?php
                                    }else {
                                    ?>
                                    <a href="?page=pinjam.proces-perpanjang&id=<?php echo $data_pinjam['pinjam_id']; ?>" onclick="return confirm('Anda yakin, ingin memperpanjang peminjaman kode buku <?php echo $data_pinjam['pinjam_id'];  ?>')">
                                    <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i></button></a>
                                    
                                    <?php
                                    }
                                    ?>
                                    </td>
                                    <td><?php echo $data_pinjam['bukdet_kode']; ?></td>
                                    <td>
                                   
                                    <?php echo $data_pinjam['buku_judul']; ?>
                                     <?php
                                     if($lambat > 0 ){
                                     ?> 
                                     <br />
                                    <b style="color: red;font: bold;">TERLAMBAT selama <?php echo $lambat; ?> hari dengan jumlah denda <?php echo "Rp. ".number_format($denda,0,',','.'); ?>,00</b>
                                    <?php } ?>
                                    </td>
                                    <td><?php echo $data_pinjam['tgl_pinjam']; ?></td>
                                    <td><?php echo $data_pinjam['tgl_kembali']; ?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                    </div>                                   
                                </div>
                                <div class="tab-pane fade" id="sejarah">
                                    <!--<h4>Messages Tab</h4> -->
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th>Kode</th><th>Judul</th><th>Tanggal Pinjam</th><th>Tanggal dikembalikan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_sejarah="SELECT *
FROM
    buku
    INNER JOIN pinjam 
        ON (buku.buku_id = pinjam.buku_id)
    INNER JOIN buku_detail 
        ON (buku_detail.bukdet_kode = pinjam.bukdet_kode)
    INNER JOIN anggota 
        ON (anggota.anggota_nis = pinjam.anggota_nis) WHERE anggota.anggota_nis='".$_SESSION['anggota_nis']."' and pinjam_status='2'";
       // echo $sql_sejarah; exit;
        $result11=mysql_query($sql_sejarah);
        while($data_sejarah=mysql_fetch_array($result11)){
                                    ?>
                                    <tr>
                                    <td><?php echo $data_sejarah['bukdet_kode'];?></td>
                                    <td><?php echo $data_sejarah['buku_judul'];?></td>
                                    <td><?php echo $data_sejarah['tgl_pinjam']; ?></td>
                                    <td><?php echo $data_sejarah['tgl_kembali'];?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
               