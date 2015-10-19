<?php
if(empty($_SESSION['anggota_nis'])){
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            Sirkulasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                  <form id="defaultForm"  method="post" action="?page=pinjam.check-idanggota">
                  SIRKULASI - Masukkan nis anggota untuk mulai transaksi<br />
                  Nis Anggota : <input type="text" name="frm_nis"/>
                  <input type="submit" name="mulai_transaksi" value="mulai transaksi" />
                  </form>
                                </div></div></div>
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
                
                validators: {
                    notEmpty: {
                        message: 'nis tidak boleh kosong'
                    },
                    digits:{
                        message: 'nis tidak boleh mengandung huruf'

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