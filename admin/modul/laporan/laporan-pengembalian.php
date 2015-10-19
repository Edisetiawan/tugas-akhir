<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan Data Pengembalian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="post" action="lib/pengembalian.php" target="_blank">
                            <input type="hidden" value="12-07-2015" name="tgl"/>
                           <!-- <a href="lib/anggota-pdf.php" target="_blank"> -->
                            <button type="submit" class="btn btn-default">
                            <i class="fa    fa-print   fa-fw">
                            </i>Cetak Pdf</button>
                                </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Denda</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from pinjam inner join denda on pinjam.pinjam_id=denda.pinjam_id where pinjam.pinjam_status='2'";
                            $result=mysql_query($sql);
                            $no=0;
                            while($data=mysql_fetch_array($result)){
                            $no++;
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['tgl_pinjam']; ?></td>
                                            <td><?php echo $data['tgl_kembali']; ?></td>
                                            <td class="center"><?php echo "Rp. ".number_format($data["bayar"],0,',','.'); ?></td>
                                        </tr>
                            <?php
                           }
                            ?>
                                    </tbody>
                                </table>