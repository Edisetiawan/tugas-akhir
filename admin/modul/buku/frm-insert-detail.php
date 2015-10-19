  <?php
  $id=$_GET['id'];
  $sql_check="SELECT MAX(RIGHT(bukdet_kode,5)) AS kd_max FROM buku_detail";    //ambil 4 digit dari belakang
  $result=mysql_query($sql_check);
  $data=mysql_fetch_array($result);
  //echo $data['kd_max'];
  //exit;
  $isi_reqord=$data['kd_max']+1;
 
  $kd = sprintf("%05s", $isi_reqord);  //0 lima kali
  //echo
  $kode="B".$kd;
  ?>
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=buku.proces-save-detail">
                                       <input type="hidden" name="frm_buku_id" value="<?php echo $id; ?>"/>
                                        <input type="hidden" name="frm_kode" value="<?php echo $kode; ?>"/>
                                        <div class="form-group">
                                            <label>Kode Exemplar</label>
                                            <input type="text" name="frm_kode" class="form-control" value="<?php echo $kode; ?>" disabled=""/>
                                            <span class="help-block" id="kelas">
                                        </div>
                                         <div class="form-group">
                                            <label>Lokasi Rak</label>
                                            <input type="text" name="frm_rak" class="form-control" placeholder="Lokasi rak"/>
                                            <span class="help-block" id="kelas">
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
            frm_kode: {
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