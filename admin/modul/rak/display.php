<?php
require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=rak.frm-insert">Tambah Data Rak</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Rak</th>
                                            <th>Klasifikasi</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="SELECT *
FROM
    klasifikasi
    INNER JOIN rak 
        ON (klasifikasi.klasifikasi_id = rak.klasifikasi_id)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['rak_lokasi']; ?></td>
                                            <td><?php echo $data['klasifikasi_nama']; ?></td>
                                            <td class="center">
                                            <a href="?page=rak.frm-update&id=<?php echo $data['rak_lokasi']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=rak.delete&id=<?php echo $data['rak_lokasi']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['rak_lokasi'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>