<?php
require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=kelas.frm-insert">Tambah Data Kelas</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from bukutamu";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['bukmu_nama']?></td>
                                            <td><?php echo $data['bukmu_email']; ?></a></td>
                                            <td><?php echo $data['bukmu_pesan']; ?></td>
                                            <td><?php echo $data['bukmu_tanggal']; ?></td>
                                            <td class="center">
                                            <a href="?page=bukutamu.delete&id=<?php echo $data['bukmu_id']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus pesan dari <?php echo $data['bukmu_nama'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>