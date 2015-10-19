  <?php
  require_once('inc-db.php');
  $id=$_GET['id'];
  $sql="select * from berita where berita_id='".$id."'";
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Berita
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=berita.proces-update" enctype="multipart/form-data">
                                        <input type="hidden" name="frm_id" value="<?php echo $data['berita_id']; ?>"/>
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" name="frm_judul" class="form-control" value="<?php echo $data['berita_judul']; ?>"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="fupload" />
                                            <span class="help-block" id="Pfupload">
                                            <img src="../images/<?php echo $data['berita_images']; ?>" width="200" height="200"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Isi</label>
                                            <textarea name="frm_isi" class="form-control" rows="3"><?php echo $data['berita_isi']; ?></textarea>
                                              <span class="help-block" id="deskripsi">
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
            fupload: {
            frm_judul: {
                //container: '#deskripsi',
                validators: {
                    notEmpty: {
                        message: 'Judul tidak boleh kosong'
                    }
                }
            },
            frm_isi: {
                //container: '#deskripsi',
                validators: {
                    notEmpty: {
                        message: 'Isi tidak boleh kosong'
                    }
                }
            }
        }
    });
});
</script> 