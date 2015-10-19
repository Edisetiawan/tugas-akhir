<?php
require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=penerbit.frm-insert">Tambah Data Penerbit</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Penerbit</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from penerbit";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['penerbit_kode'];?></td>
                                            <td><?php echo $data['penerbit_nama']; ?></td>
                                            <td><?php echo $data['penerbit_alamat']; ?></td>
                                            <td><?php echo $data['penerbit_kota']; ?></td>
                                            <td><?php echo $data['penerbit_tlp']; ?></td>
                                            <td><?php echo $data['penerbit_email']; ?></td>
                                            <td class="center">
                                            <a href="?page=penerbit.frm-update&id=<?php echo $data['penerbit_kode']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=penerbit.delete&id=<?php echo $data['penerbit_kode']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['penerbit_nama'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>