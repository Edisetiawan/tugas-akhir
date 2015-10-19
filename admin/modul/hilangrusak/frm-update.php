  <?php
  require_once('inc-db.php');
  $id=$_GET['id'];
  $sql="select * from kelas where kelas_id='".$id."'";
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=kelas.proces-update" enctype="multipart/form-data">
                                       <input type="hidden" name="frm_id" value="<?php echo $data['kelas_id']; ?>"/>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="frm_kelas" class="form-control" value="<?php echo $data['kelas_nama']; ?>"/>
                                            <span class="help-block" id="kelas">
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
            frm_kelas: {
                container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'Kelas tidak boleh kosong'
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