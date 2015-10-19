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
                                            <th>Kelas</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from kelas";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['kelas_nama']; ?></td>
                                            <td class="center">
                                            <a href="?page=kelas.frm-update&id=<?php echo $data['kelas_id']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=kelas.delete&id=<?php echo $data['kelas_id']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['kelas_nama'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>