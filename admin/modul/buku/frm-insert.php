 <?php
//require_once('inc-db.php');
$sql_klasifikasi = mysql_query("SELECT * FROM klasifikasi");
 ?>
 <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Buku
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=buku.proces-save" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" name="frm_judul" class="form-control" placeholder="judul"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Klasifikasi</label>
                                            <select name="frm_klasifikasi" id="frm_klasifikasi" class="form-control">
                                            <option value="">--pilih klasifikasi--</option>
                                            <?php while ($data = mysql_fetch_object($sql_klasifikasi)) : ?>
                                            <option value="<?php echo $data->klasifikasi_id; ?>"><?php echo $data->klasifikasi_nama; ?></option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Kode Klasifikasi</label><br />
                                            <a href="http://localhost/ta/done/klasifikasi/" target="_blank">CARI KODE KLASIFIKASI</a>
                                            <input type="text" name="frm_kodeklasifikasi" class="form-control" placeholder="kode klasifikasi"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="fupload" />
                                            <span class="help-block" id="Pfupload">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" name="frm_pengarang" class="form-control" placeholder="pengarang"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <select name="frm_penerbit" class="form-control">
                                            <option value="">--pilih penerbit--</option>
                                            <?php 
                                            $sql_penerbit="select penerbit_kode,penerbit_nama from penerbit";
                                            $result_penerbit=mysql_query($sql_penerbit);
                                            while($data_penerbit=mysql_fetch_array($result_penerbit)){
                                            ?>
                                            <option value="<?php echo $data_penerbit['penerbit_kode']; ?>"><?php echo $data_penerbit['penerbit_nama']; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tahun terbit</label>
                                            <input type="text" name="frm_tahun" class="form-control" placeholder="tahun terbit"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" name="frm_isbn" class="form-control" placeholder="ISBN"/>
                                        </div>
                                        
                                          <div class="form-group">
                                         <label>Rak</label>
                                         <select name="rak" id="rak" class="form-control">
                                         <option value="">-- pilih rak --</option>
                                         </select>
                                         </div>  
                                         
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" name="frm_jumlah" class="form-control" placeholder="jumlah"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Sinopsis</label>
                                            <textarea class="form-control" name="frm_sinopsis"></textarea>
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
                
                validators: {
                    notEmpty: {
                        message: 'judul tidak boleh kosong'
                    }
                }
            },
            frm_klasifikasi: {
               
                validators: {
                    notEmpty: {
                        message: 'klasifikasi tidak boleh kosong'
                    }
                }
            },
            frm_kodeklasifikasi: {
               
                validators: {
                    notEmpty: {
                        message: 'kode klasifikasi tidak boleh kosong'
                    }
                }
            },
            frm_pengarang: {
                
                validators: {
                    notEmpty: {
                        message: 'pengarang tidak boleh kosong'
                    }
                }
            },
            frm_penerbit: {
              
                validators: {
                    notEmpty: {
                        message: 'penerbit tidak boleh kosong'
                    }
                }
            },
            frm_tahun: {
                
                validators: {
                    notEmpty: {
                        message: 'tahun terbit tidak boleh kosong'
                    },
                    digits:{
                        message: 'tahun tidak boleh mengandung huruf'

                    }

                }
            },
            frm_isbn: {
                
                validators: {
                    notEmpty: {
                        message: 'ISBN tidak boleh kosong'
                    }
                }
            },
            rak: {
                
                validators: {
                    notEmpty: {
                        message: 'rak tidak boleh kosong'
                    }
                }
            },
            frm_jumlah: {
                
                validators: {
                    notEmpty: {
                        message: 'jumlah buku tidak boleh kosong'
                    },
                    digits:{
                        message: 'jumlah tidak boleh mengandung huruf'

                    }
                }
            },
            frm_sinopsis: {
                
                validators: {
                    notEmpty: {
                        message: 'sinopsis tidak boleh kosong'
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