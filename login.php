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
                                            <h3 class="panel-title">Login Anggota</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form id="defaultForm" role="form" method="post" action="login-check.php">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Username" name="frm_username" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" placeholder="Password" name="frm_password" />
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input name="remember" value="Remember Me" type="checkbox">Remember Me
                                                        </label>
                                                    </div>
                                                    <!-- Change this to a button or input when using this as a form -->
                                                    <input type="submit" value="Login" class="btn btn-lg btn-default btn-block"/>
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
            frm_username: {
                //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'username tidak boleh kosong'
                    }
                }
            },
           
    
        
            frm_password: {
                //container: '#kelas',
                validators: {
                    notEmpty: {
                        message: 'password tidak boleh kosong'
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
            </div>
        </div>
    </section>
   