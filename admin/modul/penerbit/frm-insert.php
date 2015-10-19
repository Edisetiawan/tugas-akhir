
  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Penerbit
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=penerbit.proces-save" enctype="multipart/form-data">
                                      
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" name="frm_penerbit" class="form-control" placeholder="penerbit"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="frm_alamat" class="form-control"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" name="frm_kota" class="form-control" placeholder="kota"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" name="frm_tlp" class="form-control" placeholder="telephone"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="frm_email" class="form-control" placeholder="email"/>
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
            frm_penerbit: {
                //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'nama penerbit tidak boleh kosong'
                    }
                }
            },
            frm_alamat: {
               //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'alamat tidak boleh kosong'
                    }
                }
            },
            frm_kota: {
               //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'kota tidak boleh kosong'
                    }
                }
            },
             frm_tlp: {
               //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'telephone tidak boleh kosong'
                    },
                    digits:{

                        message: 'telephone tidak boleh mengandung huruf'

                    }

                }
            },
            frm_email: {
               //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'email tidak boleh kosong'
                    },
                    emailAddress: {

                        message: 'email harus valid . contoh : email@yahoo.com'
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