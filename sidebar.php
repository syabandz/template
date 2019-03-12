<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a href="template.php?pages=home" class="navbar-brand" style=" font-family: Niconne; font-size: 23px"><b>SyaBaNdz.BlogSpot.cOm</b></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><br>
                    <script type="text/javascript">
                    // 1 detik = 1000
                    window.setTimeout("waktu()",1000);  
                    function waktu() {   
                    var tanggal = new Date();  
                    setTimeout("waktu()",1000);  
                    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
                    }
                    </script>
                    
                    <div style="color: white">
                    <?php
                    $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
                    $hr = $array_hr[date('N')];
                    $tgl= date('j');
                    $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
                    $bln = $array_bln[date('n')];
                    $thn = date('Y');
                    echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
                    ?>
                    </div>
                    <div id="output" class="jam" style="color: white" ></div>
                </li>
                <li class="pull-right">
                    <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
            <ul class="demo-choose-skin">
                <li data-theme="red" class="active">
                    <div class="red"></div>
                    <span>Red</span>
                </li>
                <li data-theme="pink">
                    <div class="pink"></div>
                    <span>Pink</span>
                </li>
                <li data-theme="purple">
                    <div class="purple"></div>
                    <span>Purple</span>
                </li>
                <li data-theme="deep-purple">
                    <div class="deep-purple"></div>
                    <span>Deep Purple</span>
                </li>
                <li data-theme="indigo">
                    <div class="indigo"></div>
                    <span>Indigo</span>
                </li>
                <li data-theme="blue">
                    <div class="blue"></div>
                    <span>Blue</span>
                </li>
                <li data-theme="light-blue">
                    <div class="light-blue"></div>
                    <span>Light Blue</span>
                </li>
                <li data-theme="cyan">
                    <div class="cyan"></div>
                    <span>Cyan</span>
                </li>
                <li data-theme="teal">
                    <div class="teal"></div>
                    <span>Teal</span>
                </li>
                <li data-theme="green">
                    <div class="green"></div>
                    <span>Green</span>
                </li>
                <li data-theme="light-green">
                    <div class="light-green"></div>
                    <span>Light Green</span>
                </li>
                <li data-theme="lime">
                    <div class="lime"></div>
                    <span>Lime</span>
                </li>
                <li data-theme="yellow">
                    <div class="yellow"></div>
                    <span>Yellow</span>
                </li>
                <li data-theme="amber">
                    <div class="amber"></div>
                    <span>Amber</span>
                </li>
                <li data-theme="orange">
                    <div class="orange"></div>
                    <span>Orange</span>
                </li>
                <li data-theme="deep-orange">
                    <div class="deep-orange"></div>
                    <span>Deep Orange</span>
                </li>
                <li data-theme="brown">
                    <div class="brown"></div>
                    <span>Brown</span>
                </li>
                <li data-theme="grey">
                    <div class="grey"></div>
                    <span>Grey</span>
                </li>
                <li data-theme="blue-grey">
                    <div class="blue-grey"></div>
                    <span>Blue Grey</span>
                </li>
                <li data-theme="black">
                    <div class="black"></div>
                    <span>Black</span>
                </li>
            </ul>
        </div>
    </div>
</aside>
<section>
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info align-center">
            <div class="image">
                <img src="images/sya.png" width="70" height="70" style="border: 2px solid #333333;"><div style="color: white; font-family: Niconne;" >MAWARDI SYA'BAN</div>
            </div>

            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#sign-in"><i class="material-icons">input</i>Sign-in</a></li>
                        <li><a href="#"><i class="material-icons">help</i>Help</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="menu">
            <ul class="list">
                <li class="header" align="center">MENU UTAMA</li>
                <li class="active"></li>
                <li>
                    <a href="template.php?pages=home">
                        <i class="material-icons">home</i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="template.php?pages=master">
                        <i class="material-icons">computer</i>
                        <span>Master</span>
                    </a>
                </li>
                <li>
                    <a href="sign-in.php">
                        <i class="material-icons">phonelink</i>
                        <span>E-Commerce</span>
                    </a>
                </li>
                <li>
                    <a href="template.php?pages=transaksi">
                        <i class="material-icons">shopping_cart</i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a href="template.php?pages=akuntansi">
                        <i class="material-icons">book</i>
                        <span>Akuntansi</span>
                    </a>
                </li>
                <li>
                    <a href="template.php?pages=laporan">
                        <i class="material-icons">event</i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="backup.php">
                        <i class="material-icons">cloud_upload</i>
                        <span>Backup Data</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="legal">
            <div class="copyright">
                Copyright &copy; <?php echo date('Y') ?> <a href="javascript:void(0);" style="font-family: Niconne; font-size: 15px" >Sya'BaNdz :: D<img src="images/sya.png" width="10px" height="10px">c's</a>
            </div>
        </div>
    </aside>
</section>

<!-- modal sign-in -->
<div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="row"><br><br><br><br><br><br><br>
                <div class="col-lg-2"></div>
                <div class="col-lg-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading align-center">
                            <i class="fa fa-lock fa-fw"></i>&nbsp;&nbsp;&nbsp;SIGN - IN USER
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
                                    <span class="input-group-addon">
                                        <a href="#" onclick="$('[name=password]').attr('type', 'text')"><i class="material-icons">visibility_off</i></a>
                                    </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN - IN</button>
                                </div>
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
            </div>
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
            <div class="row"><br><br><br><br><br><br><br>
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

<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
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

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <?php
                    include "content.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
