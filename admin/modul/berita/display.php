<?php
require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=berita.frm-insert">Tambah Data Berita</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from berita";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><img src="../images/<?php echo $data['berita_images']; ?>" width="200" height="200"/></td>
                                            <td><?php echo $data['berita_judul']; ?></a></td>
                                            <td><?php echo $data['berita_isi']; ?></td>
                                            <td><?php echo $data['berita_tanggal']; ?></td>
                                            <td class="center">
                                            <a href="?page=berita.frm-update&id=<?php echo $data['berita_id']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=berita.delete&id=<?php echo $data['berita_id']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['berita_judul'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>
                           <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>