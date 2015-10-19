                <div class="col-sm-4">
                    
                    <div class="panel panel-info">
                    
                        <div class="panel-heading">
                            <div class="panel-title">Cari Buku</div>
                        </div>     
                    
                        <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            <!-- Form Cari Buku -->
                            <form id="loginform" class="form-horizontal" role="form" method="post" action="?page=cari-buku">
                                <div style="margin-bottom: 25px" class="input-group">  
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                                        <select class="form-control" name="cari">
                                            <option value="buku_judul"> Judul </option>
                                            <option value="penerbit_nama"> Penerbit </option>
                                            <option value="buku_pengarang"> Pengarang </option>
                                    
                                        </select>
                                </div>
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                    <input id="login-username" class="form-control" name="data_inputan" value="" placeholder="masukkan kata kunci" type="text">
                                </div>
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                        <input type="submit" class="btn btn-default btn-lg" value="Cari"/>
                                      <!--  <a id="btn-login" href="#" class="btn btn-default btn-lg">Cari </a> --->
                                    </div>   
                            </form>
                        </div>

                    </div>

                </div>
                <div class="col-sm-4">
                    
                    <div class="panel panel-info">
                    
                    <div class="panel-heading">
                        <div class="panel-title">Rekomendasi dibaca</div>
                    </div>     
                    
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" class="col-sm-12"></div>
                            <center>
                            <div class="input-group">
                                <a href="?page=detail_buku&id=79">
                                    <img class="img-responsive img-hover thumbnail" height="160px auto" width="200px auto" src="images/book-7.jpg" alt="">
                                </a>   
                            </div>
                            </center>
                            
                            <div class="col-sm-12 controls">
                                <a id="btn-login" href="?page=detail_buku&id=79" class="btn btn-default btn-lg">Lihat Detail</a>
                            </div> 
                    </div>
                        <div class="panel-footer">
                            <p><small>Keterangan tentang kendaraan ringan dan mesin dalamnya</small></p>    
                                <!-- Button -->
                        </div>

                         

                    </div>
                
                </div>

                <div class="col-sm-4 pull-right">
                    
                    <div class="panel panel-info">
                    
                    <div class="panel-heading">
                        <div class="panel-title">Buku Terbaru</div>
                    </div>     
                    
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" class="col-sm-12"></div>
                            <center>
                            <div class="input-group ">
                                <a href="?page=detail_buku&id=80">
                                    <img class="img-responsive img-hover thumbnail" height="160px auto" width="200px" src="images/Cover-Buku-Startup.jpg" alt="">
                                </a>   
                            </div>
                            </center>
                            
                            <div class="col-sm-12 controls">
                                <a id="btn-login" href="?page=detail_buku&id=80" class="btn btn-default btn-lg">Lihat Detail</a>
                            </div> 
                    </div>
                        <div class="panel-footer">
                            <p><small>Memulai bisnis dengan menggunakan internet</small></p>    
                                <!-- Button -->
                        </div>
                    </div>
                
                </div>