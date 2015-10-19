  <?php
  require_once('inc-db.php');
  $id=$_GET['id'];
  $sql="select * from jurusan where jurusan_kode='".$id."'";
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Jurusan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=jurusan.proces-update">
                                       <input type="hidden" name="frm_hidden" value="<?php echo $data['jurusan_kode']; ?>" />
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input type="text" name="frm_kode" class="form-control" value="<?php echo $data['jurusan_kode'];  ?>"/>
                                            <span class="help-block" id="kode">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="frm_keterangan" class="form-control" value="<?php echo $data['jurusan_keterangan'];?>"/>
                                            <span class="help-block" id="keterangan">
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
            frm_nama: {
                container: '#kode',
                validators: {
                    notEmpty: {
                        message: 'Kode tidak boleh kosong'
                    }
                }
            },
            frm_keterangan: {
                container: '#keterangan',
                validators: {
                    notEmpty: {
                        message: 'Keterangan tidak boleh kosong'
                    }
                }
            },
           
        }
    });
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script> 