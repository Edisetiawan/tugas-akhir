<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                        Laporan Data Buku
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="table-responsive"><a href="lib/buku.php" target="_blank"><button type="button" class="btn btn-default"><i class="fa    fa-print   fa-fw"></i>Cetak Pdf</button></a>
                            <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>ISBN</th>
                                            <th>Penerbit</th>
                                            <th>Klasifikasi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="SELECT *
FROM
    buku
    INNER JOIN buku_detail 
        ON (buku.buku_id = buku_detail.buku_id)
    INNER JOIN penerbit 
        ON (buku.penerbit_kode = penerbit.penerbit_kode)
    INNER JOIN klasifikasi 
        ON (buku.klasifikasi_id = klasifikasi.klasifikasi_id)
    INNER JOIN rak 
        ON (rak.rak_lokasi = buku_detail.rak_lokasi)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['bukdet_kode'];  ?></td>
                                            <td><?php echo $data['buku_judul'];  ?></td>
                                            <td><?php echo $data['buku_isbn'];  ?></td>
                                            <td><?php echo $data['penerbit_nama'];  ?></td>
                                            <td><?php echo $data['klasifikasi_nama'];  ?></td>
                                            <td>
                                            <?php if($data['bukdet_status']==1){
                                                ?>
                                                <b style="color: blue;">Tersedia</b>
                                                <?php
                                            }else{  ?>
                                                <b style="color: red;">Sedang dipinjam</b>
                                            <?php
                                            }
                                            ?>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>