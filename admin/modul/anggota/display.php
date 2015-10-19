<?php
require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=anggota.frm-insert">Tambah Data Anggota</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="SELECT * FROM jurusan INNER JOIN anggota 
                                    ON (jurusan.jurusan_kode = anggota.jurusan_kode)
                                    INNER JOIN kelas 
                                    ON (kelas.kelas_id = anggota.kelas_id)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><img src="../images/<?php echo $data['anggota_images']; ?>" width="200" height="200"/></td>
                                            <td><a href="?page=anggota.detail&id=<?php echo $data['anggota_nis']; ?>" rel="tooltip" title="Detail Anggota"><?php echo $data['anggota_nis']; ?></a></td>
                                            <td><?php echo $data['anggota_nama']; ?></td>
                                            <td><?php echo $data['kelas_nama']; ?></td>
                                            <td><?php echo $data['jurusan_keterangan']; ?></td>
                                            <td class="center">
                                            <a href="?page=anggota.frm-update&id=<?php echo $data['anggota_nis']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=anggota.delete&id=<?php echo $data['anggota_nis']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['anggota_nama'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>
                                </div>