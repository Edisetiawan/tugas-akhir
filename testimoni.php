<?php
require_once('menu.php');
?>
<br />
    <!-- Katalog Section -->
    <section id="katalog" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!--<div style="background-size: 100% auto;" id="demoHeader" class="header1">-->
                    
                    
                    <!--  Katalog Content Row 1-->
                    <div class="row">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="login-panel panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Form testimonial</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="post" action="save-testimoni.php">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Nama" name="frm_nama" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="E-mail" name="frm_email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="frm_pesan" class="form-control"></textarea>
                                                    </div>
                                                    <!-- Change this to a button or input when using this as a form -->
                                                    <input type="submit" value="Kirim" class="btn btn-lg btn-default btn-block"/>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
                <!-- /.col-sm-8 -->
            <?php
            require_once('navigasi.php');
            ?>

            </div>
        </div>
    </section>
   