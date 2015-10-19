  <?php 
  require_once('inc-db.php');
  $sql="select * from klasifikasi";
  $result=mysql_query($sql);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Rak
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=rak.proces-save" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select name="frm_klasifikasi" class="form-control">
                                                <option value="">-- pilih klasifikasi --</option>
                                                <?php
                                                while($data=mysql_fetch_array($result)){
                                                ?>
                                                <option value="<?php echo $data['klasifikasi_id']; ?>"><?php echo $data['klasifikasi_nama']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Rak</label>
                                            <input type="text" name="frm_rak" class="form-control" placeholder="rak"/>
                                        </div>
                                        <button type="submit" class="btn btn-default">SAVE</button>
                                        <button type="reset" id="resetBtn" class="btn btn-default">RESET</button>
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
            frm_rak: {
            
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