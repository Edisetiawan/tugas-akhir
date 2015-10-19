  <?php
  $id=$_GET['id'];
  $sql="select * from buku_detail where bukdet_kode='".$id."'";
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Buku Detail
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=buku.proces-update-detail">
                                       <input type="hidden" name="frm_bukdet_kode" value="<?php echo $data['bukdet_kode']; ?>"/>
                                        <div class="form-group">
                                            <label>Kode Exemplar</label>
                                            <input type="text" name="frm_kode" class="form-control" value="<?php echo $data['bukdet_kode']; ?>" disabled=""/>
                                            <span class="help-block" id="kode">
                                        </div>
                                        <div class="form-group">
                                            <label>Rak Lokasi</label>
                                            <input type="text" name="frm_rak" class="form-control" value="<?php echo $data['rak_lokasi']; ?>"/>
                                            <span class="help-block" id="rak">
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
            frm_kode: {
                container: '#kode',
                validators: {
                    notEmpty: {
                        message: 'Kode Buku Detail tidak boleh kosong'
                    }
                }
            },
            frm_rak: {
                container: '#rak',
                validators: {
                    notEmpty: {
                        message: 'Lokasi rak tidak boleh kosong'
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