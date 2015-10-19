<?php
if(empty($_SESSION['anggota_nis'])){
?>
 
            <!-- form: -->
           
                <div class=".col-xs-12 .col-sm-4 .col-md-8">
                    <div class="page-header">
                        <h2>Sirkulasi</h2>
                    </div>
                    <label>Masukkan ID Anggota untuk mulai transaksi</label>
                    <form id="defaultForm" method="post" class="form-horizontal" action="?page=pinjam.check-idanggota">
                        <div class="form-group">                            
                            <div class="col-lg-2">
                                <input type="text" class="form-control" name="frm_nis" placeholder="ID Anggota" />
                               <span class="help-block" id="nis" />
                            </div>
                            
                            <div class="col-lg-3">
                                 <button type="submit" class="btn btn-primary">Mulai Transaksi</button>
                          
                            </div>
                        
                    </form>
                </div>
        
            <!-- :form -->
       <?php
       }else {
                                    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";  
                                }
       ?>
    

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
            frm_nis: {
                container: '#nis',
                validators: {
                    notEmpty: {
                        message: 'ID Anggota tidak boleh kosong'
                    },
                    digits:{
                        message: 'ID Anggota tidak boleh mengandung huruf'

                    }
                }
            }
        }
    });
});
</script>