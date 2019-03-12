<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sya'BaNdz :: Doc's</title>
    <link rel="icon"       type="image/x-icon" href="images/sya.png" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/waves.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/stylee.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
</head>
<body class="login-page">

    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Login<b>&nbsp;Admin</b></a>
            <small>Sistem Informasi Perpustakaan SMK Farmasi Sari Farma</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="admin_login_proses.php" id="sign_in" method="POST" >
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="ID Admin" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                            <span class="input-group-addon">
                                <a href="#" onclick="$('[name=password]').attr('type', 'text')"><i class="material-icons">visibility_off</i></a>
                            </span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">LOGIN</button>
                        </div>
                          <a href="../index.php" class="btn btn-sm bg-pink" style="width: 100px" >CANCEL </a>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-left">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#regis">Registration</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#forgot">Forgot Password ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal registration -->
    <div class="modal fade" id="regis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="row"><br><br><br>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading align-center">
                                <i class="fa fa-lock fa-fw"></i>&nbsp;&nbsp;&nbsp;REGISTRATION USER
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="panel-body">
                            <form action="admin_login_proses.php" id="sign_in" method="POST" >
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required autofocus>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">home</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address" placeholder="Alamat" required >
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" placeholder="ID User" required >
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <button class="btn btn-block bg-pink waves-effect" type="submit">SAVE</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal forgot -->
    <div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="row"><br><br><br><br><br>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading align-center">
                                <i class="fa fa-lock fa-fw"></i>&nbsp;&nbsp;&nbsp;FORGOT PASSWORD
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="panel-body">
                            <form action="admin_login_proses.php" id="sign_in" method="POST" >
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" placeholder="ID Admin" required autofocus>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <button class="btn btn-block bg-pink waves-effect" type="submit">SAVE</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">

    jQuery(function($) {
        $.validator.setDefaults({
            submitHandler: function () {
                register();

            }

        });

        $().ready(function () {
            // validate the comment form when it is submitted
            $("#validation-reg").validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                rules: {
                    password: {
                        required: true,
                        minlength: 6
                    },
                    password2: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },
                },

                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                    $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                    $(e).remove();
                }
            })
        });
    });
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/waves.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/sign-in.js"></script>
</body>

</html>