  <?php 
  require_once('inc-db.php');
  $id=$_GET['id'];
  $sql_rak="select * from rak where rak_lokasi='".$id."'";
  //echo $sql_rak; exit;
  $result_rak=mysql_query($sql_rak);
  $data_rak=mysql_fetch_array($result_rak);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Rak
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=rak.proces-update">
                                    <input type="hidden" name="frm_hidden" value="<?php echo $data_rak['rak_lokasi']; ?>"/>
                                        <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select name="frm_klasifikasi" class="form-control">
                                                <?php
                                                $sql_klasifikasi="select * from klasifikasi";
                                                $result_klasifikasi=mysql_query($sql_klasifikasi);
                                                while($data_klasifikasi=mysql_fetch_array($result_klasifikasi)){
                                                    if($data_klasifikasi['klasifikasi_id']==$data_rak['klasifikasi_id']){
                                                ?>
                                                <option value="<?php echo $data_klasifikasi['klasifikasi_id']; ?>" selected=""><?php echo $data_klasifikasi['klasifikasi_nama']; ?> </option>
                                                <?php
                                                }else{
                                                ?>
                                                  <option value="<?php echo $data_klasifikasi['klasifikasi_id']; ?>"><?php echo $data_klasifikasi['klasifikasi_nama']; ?> </option>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Rak</label>
                                            <input type="text" name="frm_rak" class="form-control" value="<?php echo $data_rak['rak_lokasi']; ?>"/>
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
            frm_klasifikasi: {
                
                validators: {
                    notEmpty: {
                        message: 'Klasifikasi tidak boleh kosong'
                    }
                }
            },
            frm_kelas: {
            
                validators: {
                    notEmpty: {
                        message: 'rak tidak boleh kosong'
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