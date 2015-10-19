  <?php
  require_once('inc-db.php');
  $id=$_GET['id'];
  $sql="select * from petugas where petugas_id='".$id."'";
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Berita
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=petugas.proces-update" enctype="multipart/form-data">
                                        <input type="hidden" name="frm_hidden" value="<?php echo $data['petugas_id']; ?>"/>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="frm_username" value="<?php echo $data['petugas_username'] ?>" class="form-control" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="frm_password" class="form-control" />
                                        </div>
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
            frm_username: {
                validators: {
                    notEmpty: {
                        message: 'username tidak boleh kosong'
                    }
                }
            }
            
        }
    });
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script> 