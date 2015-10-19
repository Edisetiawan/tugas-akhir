 <?php
//require_once('inc-db.php');
$id=$_GET['id'];
$sql_show="select * from buku where buku_id='".$id."'";
$result1=mysql_query($sql_show);
$data_buku=mysql_fetch_array($result1);
 ?>
 <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=buku.proces-update" enctype="multipart/form-data">
                                    <input type="hidden" name="frm_hidden" value="<?php echo $data_buku['buku_id']; ?>"/>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" name="frm_judul" class="form-control" value="<?php echo $data_buku['buku_judul']; ?>"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select name="frm_klasifikasi" id="frm_klasifikasi" class="form-control">
                                            <?php 
                                            $sql_klasifikasi="select * from klasifikasi";
                                            $result_klasifikasi=mysql_query($sql_klasifikasi);
                                            while ($data_klasifikasi= mysql_fetch_array($result_klasifikasi)){
                                            if($data_buku['klasifikasi_id']==$data_klasifikasi['klasifikasi_id']){  
                                            ?>
                                            <option value="<?php echo $data_klasifikasi['klasifikasi_id']; ?>"><?php echo $data_klasifikasi['klasifikasi_nama']; ?></option>
                                            <?php }else{?>
                                            <option value="<?php echo $data_klasifikasi['klasifikasi_id']; ?>"><?php echo $data_klasifikasi['klasifikasi_nama']; ?></option>
                                            <?php
                                            }
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="fupload" />
                                            <span class="help-block" id="Pfupload">
                                            <img src="../images/<?php echo $data_buku['buku_foto']; ?>" width="200" height="200"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Data Koleksi :</label>
                                            
                                      <!--  https://github.com/farinspace/jquery.tableScroll     -->
           
                                            <div class="panel-body">

                            <div class="table-responsive">
                                <a href="?page=buku.frm-insert-detail&id=<?php echo $data_buku['buku_id']; ?>"><input type="submit" class="btn btn-primary" value="Tambah Ekseplar Baru"/></a>
                                <table class="table table-striped table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Kode Exemplar</th>
                                            <th>Lokasi Rak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_detail="select * from buku_detail where buku_id='".$id."'";
                                    $result_detail=mysql_query($sql_detail);
                                    while($data_detail=mysql_fetch_array($result_detail)){
                                    ?>
                                        <tr>
                                            <td> 
                                            <a href="?page=buku.frm-update-detail&id=<?php echo $data_detail['bukdet_kode']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=buku.delete-detail-buku&id=<?php echo $data_detail['bukdet_kode']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data_detail['rak_lokasi'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                            <td><?php echo $data_detail['bukdet_kode']; ?></td>
                                            <td><?php echo $data_detail['rak_lokasi']; ?></td>
                                        </tr>
                                       <?php
                                       }
                                       ?>
                                    </tbody>

                                </table>

                            </div>

                            <!-- /.table-responsive -->

                        </div>

                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" name="frm_pengarang" class="form-control" value="<?php echo $data_buku['buku_pengarang']; ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select name="frm_penerbit" class="form-control">
                                            <?php 
                                            $sql_penerbit="select penerbit_kode,penerbit_nama from penerbit";
                                            $result_penerbit=mysql_query($sql_penerbit);
                                            while($data_penerbit=mysql_fetch_array($result_penerbit)){
                                            if($data_buku['penerbit_kode']==$data_penerbit['penerbit_kode']){
                                            ?>
                                            <option value="<?php echo $data_penerbit['penerbit_kode']; ?>"><?php echo $data_penerbit['penerbit_nama']; ?></option>
                                            <?php
                                            }else{
                                                ?>
                                                
                                                <?php
                                            }
                                            }
                                            ?>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun terbit</label>
                                            <input type="text" name="frm_tahun" class="form-control" value="<?php echo $data_buku['buku_tahun_terbit']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" name="frm_isbn" class="form-control" value="<?php echo $data_buku['buku_isbn']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Sinopsis</label>
                                            <textarea class="form-control" name="frm_sinopsis"><?php echo $data_buku['buku_sinopsis']; ?></textarea>
                                        </div>
                                      <br />
                                        <button type="submit" class="btn btn-default">UPDATE</button>
                                    </form>
                                
                                <!-- /.col-lg-6 (nested) -->
                        
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <script type="text/javascript"> 
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            frm_judul: {
                
                validators: {
                    notEmpty: {
                        message: 'judul tidak boleh kosong'
                    }
                }
            },
            frm_klasifikasi: {
               
                validators: {
                    notEmpty: {
                        message: 'klasifikasi tidak boleh kosong'
                    }
                }
            },
            frm_pengarang: {
                
                validators: {
                    notEmpty: {
                        message: 'pengarang tidak boleh kosong'
                    }
                }
            },
            frm_penerbit: {
              
                validators: {
                    notEmpty: {
                        message: 'penerbit tidak boleh kosong'
                    }
                }
            },
            frm_tahun: {
                
                validators: {
                    notEmpty: {
                        message: 'tahun terbit tidak boleh kosong'
                    },
                    digits:{
                        message: 'tahun tidak boleh mengandung huruf'

                    }

                }
            },
            frm_isbn: {
                
                validators: {
                    notEmpty: {
                        message: 'ISBN tidak boleh kosong'
                    }
                }
            },
            frm_sinopsis: {
                
                validators: {
                    notEmpty: {
                        message: 'rak tidak boleh kosong'
                    }
                }
            },
            frm_jumlah: {
                
                validators: {
                    notEmpty: {
                        message: 'jumlah buku tidak boleh kosong'
                    },
                    digits:{
                        message: 'jumlah tidak boleh mengandung huruf'

                    }
                }
            }
        }
    });
});
</script> 