<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Administrator Perpustakaan SMK Maarif Ponjong Gunung Kidul</title>
    <link rel="stylesheet" href="plugin_validator/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="plugin_validator/css/bootstrapValidator.css"/>

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->

    <script type="text/javascript" src="plugin_validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="plugin_validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugin_validator/js/bootstrapValidator.js"></script>
    
    
    <!-- shjddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd  -->
    <!--   <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>    -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    
    
    <!-- Core CSS - Include with every page -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- Page-Level Plugin CSS - Forms -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <!-- ................................................................................. -->
    <!-- Core CSS - Include with every page 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     SB Admin CSS - Include with every page -
    <link href="css/sb-admin.css" rel="stylesheet"> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">LOGIN ADMIN SIP SMK MA'ARIF PONJONG</h3>
                    </div>
                    <div class="panel-body">
                        <form id="defaultForm" method="post" action="index-vv.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="frm_username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="frm_password" type="password" value="">
                                    <span class="help-block" id="pesanMessage" />
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page ->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!- SB Admin Scripts - Include with every page 
    <script src="js/sb-admin.js"></script> -->
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
                container: '#pesanMessage',
                validators: {
                    notEmpty: {
                        message: 'Klasifikasi tidak boleh kosong'
                    }
                }
            },
            frm_password: {
            
                validators: {
                    notEmpty: {
                        message: 'rak tidak boleh kosong'
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
</body>

</html>
