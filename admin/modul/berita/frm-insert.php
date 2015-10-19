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
                                    <form id="defaultForm" method="post" action="?page=berita.proces-save" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" name="frm_judul" class="form-control" placeholder="judul"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="fupload" />
                                            <span class="help-block" id="Pfupload">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Isi</label>
                                            <textarea name="frm_isi" class="form-control" rows="3"></textarea>
                                              <span class="help-block" id="deskripsi">
                                            </div>
                                      <br />
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
            fupload: {
                container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'Gambar tidak boleh kosong'
                    }
                }
            },
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
    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script> 