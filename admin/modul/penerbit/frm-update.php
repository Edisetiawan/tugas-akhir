  <?php
  require_once('inc-db.php');
  $id=$_GET['id'];
  $sql="select * from penerbit where penerbit_kode='".$id."'";
  $result=mysql_query($sql);
  $data=mysql_fetch_array($result);
  ?>
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
                                    <form id="defaultForm" method="post" action="?page=penerbit.proces-update" enctype="multipart/form-data">
                                      <input type="hidden" name="frm_hidden" value="<?php echo $data['penerbit_kode']; ?>"/>
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" name="frm_penerbit" class="form-control" value="<?php echo $data['penerbit_nama']; ?>"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="frm_alamat" class="form-control"><?php echo $data['penerbit_alamat']; ?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" name="frm_kota" class="form-control" value="<?php echo $data['penerbit_kota']; ?>"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" name="frm_tlp" class="form-control" value="<?php echo $data['penerbit_tlp'] ?>"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="frm_email" class="form-control" value="<?php echo $data['penerbit_email'] ?>"/>
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
});
</script> 