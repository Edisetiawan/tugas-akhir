  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="defaultForm" method="post" action="?page=anggota.proces-save" enctype="multipart/form-data">
                                       <div class="form-group">
                                            <label>Nis</label>
                                            <input type="text" name="frm_nis" class="form-control" placeholder="Nis"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="frm_nama" class="form-control" placeholder="Nama"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="fupload" />
                                            <span class="help-block" id="Pfupload">
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select name="frm_kelas" class="form-control">
                                            <option value="">-- pilih kelas --</option>
                                            <?php 
                                            require_once('inc-db.php');
                                            $sql="select * from kelas";
                                            $result=mysql_query($sql);
                                            while($data=mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['kelas_id']; ?>"><?php echo $data['kelas_nama']; ?></option>
                                            <?php 
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <select name="frm_jurusan" class="form-control">
                                            <option value="">-- pilih jurusan --</option>
                                            <?php 
                                           
                                            $sql="select * from jurusan";
                                            $result=mysql_query($sql);
                                            while($data=mysql_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['jurusan_kode']; ?>"><?php echo $data['jurusan_keterangan']; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label >Tempat</label>
                                            <input type="text" name="frm_tempat" class="form-control" placeholder="Tempat"/>
                                        </div>
                                        
                                        <div class="form-group">
                                       <label>Tanggal Lahir</label> 
                                        </div>
                                        
                                        <div class="form-group">
            
                                        <div class="col-xs-4">
                                            <select class="form-control" name="tgl_lahir">
                                                <option value="">Tanggal</option>
                                                    <?php
                                                    for($tanggal=1;$tanggal<=31;$tanggal++){
                                                    ?>
                                                    <option value="<?php echo $tanggal; ?>"><?php echo $tanggal; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    <div class="col-xs-4">
                                    <select class="form-control" name="bln_lahir">
                                                <option value="">Bulan</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                    </select>
                                     </div>
                                    <div class="col-xs-4">
                                     <select class="form-control" name="thn_lahir">
                                     <option value="">Tahun</option>
                                     <?php
                                            $tahun_now=date('Y');
                                            for($tahun=1995;$tahun<=$tahun_now;$tahun++){
                                            ?>
                                            <option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
                                            <?php
                                            }
                                            ?>
                                    </select>
                                    </div>
                                    </div>
                                        
                                         <div class="form-group">
                                         <label><!-- p --></label><br />
                                         </div>
                                        <br />
                                        
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <br />
                                            <input type="radio" name="frm_jns_kel" value="Laki-laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
                                            <input type="radio" name="frm_jns_kel" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="frm_email" class="form-control" placeholder="Email"/>
                                        </div>
                                        
                                        <div class="form-group">
                                       <label>Berlaku Sampai</label> 
                                        </div>
                                        
                                        <div class="form-group">
            
                                         <div class="col-xs-4">
                                         <select class="form-control" name="tgl_berlaku">
                                            <option value="">Tanggal</option>
                                             <?php
                                             for($tanggal=1;$tanggal<=31;$tanggal++){
                                             ?>
                                             <option value="<?php echo $tanggal; ?>"><?php echo $tanggal; ?></option>
                                            <?php
                                             }
                                             ?>
                                        </select>
                                        </div>
                                        
                                         <div class="col-xs-4">
                                            <select class="form-control" name="bln_berlaku">
                                                <option value="">Bulan</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>
                                        </div>
                                    <div class="col-xs-4">
                                        <select class="form-control" name="thn_berlaku">
                                            <option value="">Tahun</option>
                                            <?php
                                            $tahun_now=date('Y')+3;
                                            for($tahun=1995;$tahun<=$tahun_now;$tahun++){
                                            ?>
                                            <option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    </div>
                                        
                                         <div class="form-group">
                                         <label><!--jana--></label><br />
                                         </div>
                                        <br />
                                        
                                        <div class="form-group">
                                            <label>Nomor handphone</label>
                                            <input type="text" name="frm_hp" class="form-control" placeholder="hand phone"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="frm_alamat" class="form-control" rows="3"></textarea>
                                              <span class="help-block" id="alamat">
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
            frm_nis: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'nis tidak boleh kosong'
                    },
                    digits:{
                        message: 'nis tidak boleh mengandung huruf'
                    }
                }
            },
            frm_nama: {
                //container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'nama tidak boleh kosong'
                    }
                }
            },
            fupload: {
                container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'foto tidak boleh kosong'
                    }
                }
            },
            frm_kelas: {
               // container: '#Pfupload',
                validators: {
                    notEmpty: {
                        message: 'kelas tidak boleh kosong'
                    }
                }
            },
            frm_jurusan: {
               
                validators: {
                    notEmpty: {
                        message: 'jurusan tidak boleh kosong'
                    }
                }
            },
            frm_tempat: {
               
                validators: {
                    notEmpty: {
                        message: 'angkatan tidak boleh kosong'
                    }
                }
            },
            frm_jns_kel: {
               
                validators: {
                    notEmpty: {
                        message: 'jenis kelamin tidak boleh kosong'
                    }
                }
            },
            frm_email: {
               
                validators: {
                    notEmpty: {
                        message: 'email tidak boleh kosong'
                    },
                    emailAddress: {
                        message: 'email harus valid . contoh : email@yahoo.com'
                    }
                }
            },
            frm_hp: {
              
                validators: {
                    notEmpty: {
                        message: 'nomor hp tidak boleh kosong'
                    },
                    digits:{
                        message: 'nomor hp tidak boleh mengandung huruf'
                    }
                }
            },
            
            tgl_lahir: {
              
                validators: {
                    notEmpty: {
                        message: 'tanggal tidak boleh kosong'
                    }
                    
                }
            },
            bln_lahir: {
              
                validators: {
                    notEmpty: {
                    message: 'bulan tidak boleh kosong'
                    }
                    
                }
            },
            thn_lahir: {
              
                validators: {
                    notEmpty: {
                        message: 'tahun tidak boleh kosong'
                    }
                    
                }
            },
            
            tgl_berlaku: {
              
                validators: {
                    notEmpty: {
                        message: 'tanggal tidak boleh kosong'
                    }
                    
                }
            },
            bln_berlaku: {
              
                validators: {
                    notEmpty: {
                    message: 'bulan tidak boleh kosong'
                    }
                    
                }
            },
            thn_berlaku: {
              
                validators: {
                    notEmpty: {
                        message: 'tahun tidak boleh kosong'
                    }
                    
                }
            },
            
            frm_alamat: {
                container: '#alamat',
                validators: {
                    notEmpty: {
                        message: 'alamat tidak boleh kosong'
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