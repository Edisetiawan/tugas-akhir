    <br />
    <?php
    $id=$_GET['id'];
   // echo $id; exit;
    $sql_buku="SELECT *
FROM
    penerbit
    INNER JOIN buku 
        ON (penerbit.penerbit_kode = buku.penerbit_kode)
    INNER JOIN klasifikasi 
        ON (klasifikasi.klasifikasi_id = buku.klasifikasi_id) WHERE buku.buku_id='".$id."'";
      //  echo $sql_buku; exit;
    $result_buku=mysql_query($sql_buku);
    $data_buku=mysql_fetch_array($result_buku);
    ?>
    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Detail Buku</h3>
                                <div class="col-lg-3">
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="../images/<?php echo $data_buku['buku_foto']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <table>
                                            <tr>
                                                <td class="text-left"> Kode Klasifikasi </td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_kode']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"> Judul Buku </td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_judul']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Penulis</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['buku_pengarang']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Penerbit</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['penerbit_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">ISBN</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['buku_isbn']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Tahun Terbit</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_tahun_terbit']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kota Terbit</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['penerbit_kota']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Lokasi</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['klasifikasi_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Tanggal Entry</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['buku_tgl_update']; ?> </td>
                                            </tr>
                                             <tr>
                                                <td class="text-left">Sinopsis</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['buku_sinopsis']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                          
                            <form method="post" action="lib/cetak-barcode/cetak.php" target="_blank">
                           <input type="hidden" name="id" value="<?php echo $data_buku['buku_id']; 
                           
                          //echo "Buku Id : ".$data_buku['buku_id']; exit;
                           ?>"/>
                           <button type="submit" class="btn btn-default">
                            <i class="fa fa-print fa-fw">
                            </i>Cetak Barcode</button>
                            </form>
                            <?php 
                            $sql_detail="SELECT jatuh_tempo,bukdet_status,rak_lokasi,buku_id,bukdet_kode FROM buku_detail where buku_id='".$id."'";
                            $result_detail=mysql_query($sql_detail);
                            ?>
   
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                Kode Exemplar
                                            </th>
                                            <th>
                                                Lokasi Rak
                                            </th>
                                            <th>
                                               Status Buku
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    while($data_detail=mysql_fetch_array($result_detail)){
                                    ?>
                                        <tr>
                                            <td><?php echo $data_detail['bukdet_kode']; ?></td>
                                            <td><?php echo $data_detail['rak_lokasi']; ?></td>
                                            <td>
                                            <?php 
                                            //echo $data_detail['bukdet_status']; 
                                            if($data_detail['bukdet_status']==1){
                                                echo "<b style='color: blue;'>Tersedia</b>";
                                            }elseif($data_detail['bukdet_status']==2) {
                                                echo "<b style='color: red;'>Sedang dipinjam</b>";
                                                echo "<p style='color: orange'>( Jatuh tempo ";
                                                echo $data_detail['jatuh_tempo']." )";
                                            }elseif($data_detail['bukdet_status']==3){
                                                echo "<b style='color: blue;'>Hilang</b>";
                                            }elseif($data_detail['bukdet_status']==4){
                                                echo "<b style='color: blue;'>Rusak</b>";
                                            }elseif($data_detail['bukdet_status']==4){
                                                echo "<b style='color: blue;'>Diarsipkan</b>";
                                            }
                                            ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="?page=buku.display"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali</button></a>
                        </div>
                    </div>
                </div>