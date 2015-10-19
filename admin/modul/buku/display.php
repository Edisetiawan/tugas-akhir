<?php
//require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=buku.frm-insert">Tambah Data Buku</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>ISBN</th>
                                            <th class="center">Jumlah Eksemplar</th>
                                            <th>Perubahan Terakhir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from buku order by buku_id desc";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><img src="../images/<?php echo $data['buku_foto']; ?>" width="200" height="200"/></td>
                                            <td>
                                            <a href="?page=buku.detail-buku&id=<?php echo $data['buku_id']; ?>" rel="tooltip" title="Detail Buku">
                                            <?php echo $data['buku_judul']; ?>
                                            </a>
                                            </a></td>
                                            <td><?php echo $data['buku_isbn']; ?></td>
                                            <td ><?php echo $data['buku_jumlah']; ?></td>
                                            <td><?php echo $data['buku_tgl_update']; ?></td>
                                            <td class="center">
                                            <a href="?page=buku.frm-update&id=<?php echo $data['buku_id']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=buku.delete&id=<?php echo $data['buku_id']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['buku_judul'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>