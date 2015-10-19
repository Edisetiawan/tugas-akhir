  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Data Hilang Rusak
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=hilangrusak.proces-save">
                                       
                                        <div class="form-group">
								<label>Tanggal</label>
									<div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input class="form-control" size="10" type="text" name="frm_tanggal"/>
   
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
										<input type="hidden" id="dtp_input2" value=""/>
										</div>
                                        <div class="form-group">
                                            <label>Kode Exemplar</label>
                                            <input type="text" name="frm_kd_exemplar" class="form-control" placeholder="Kode Exemplar"/>
                                            <span class="help-block" id="frmkdexemplar">
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <select name="frm_keterangan" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option value="1">Hilang</option>
                                                <option value="2">Rusak</option>
                                                <option value="3">Diarsipkan</option>
                                            </select>
                                            <span class="help-block" id="frmketerangan">
                                        </div>
                                        <div class="form-group">
                                            <label>ID Anggota</label>
                                            <input type="text" name="frm_idanggota" class="form-control" placeholder="ID Anggota"/>
                                            <span class="help-block" id="frmidanggota">
                                        </div>
                                         <div class="form-group">
                                            <label>Biaya Ganti</label>
                                            <input type="text" name="frm_biayaganti" class="form-control" placeholder="Biaya Ganti"/>
                                            <span class="help-block" id="frmbiayaganti">
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
            frm_tanggal: {
                container: '#frmtanggal',
                validators: {
                    notEmpty: {
                        message: 'Tanggal tidak boleh kosong'
                    }
                }
            },
            frm_kd_exemplar: {
                container: '#frmkdexemplar',
                validators: {
                    notEmpty: {
                        message: 'Kode Exemplar tidak boleh kosong'
                    }
                }
            },
            frm_keterangan: {
                container: '#frmketerangan',
                validators: {
                    notEmpty: {
                        message: 'Keterangan tidak boleh kosong'
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
<script type="text/javascript" src="datatime/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="datatime/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>

<script type="text/javascript">

 $('.form_date').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,

  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  forceParse: 0

    });

</script> <!-- http://asdyaniarya.blogspot.co.id/2013/11/tugas-2-smbd-database-tkatpa.html -->