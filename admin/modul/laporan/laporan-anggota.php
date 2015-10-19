<?php
//require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan Data Anggota
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                            <form method="post" action="lib/anggota.php" target="_blank">
                            <input type="hidden" value="12-07-2015" name="tgl"/>
                           <!-- <a href="lib/anggota-pdf.php" target="_blank"> -->
                            <button type="submit" class="btn btn-default">
                            <i class="fa    fa-print   fa-fw">
                            </i>Cetak Pdf</button>
                                </form>
                                
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Angkatan</th>
                                            <th>Jenis kelamin</th>
                                            <th>Email</th>
                                            <th>Nomor hp</th>
                                            <th>Alamat</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $no=0;
                            $sql="SELECT *
FROM
    kelas
    INNER JOIN anggota 
        ON (kelas.kelas_id = anggota.kelas_id)
    INNER JOIN jurusan 
        ON (jurusan.jurusan_kode = anggota.jurusan_kode)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){ 
                            $no++;
                            
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['anggota_nis']; ?></td>
                                            <td><?php echo $data['kelas_nama']; ?></td>
                                            <td><?php echo $data['jurusan_keterangan']; ?></td>
                                            <td><?php echo $data['anggota_angkatan']; ?></td>
                                            <td><?php echo $data['anggota_jns_kelamin']; ?></td>
                                            <td><?php echo $data['anggota_email']; ?></td>
                                            <td><?php echo $data['anggota_hp']; ?></td>
                                            <td><?php echo $data['anggota_alamat']; ?></td>
                                            
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>