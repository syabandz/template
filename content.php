<?php
// disable error message level E_NOTICE
error_reporting(E_ALL ^  (E_NOTICE | E_WARNING)) ;
error_reporting(0);
$config = mysqli_connect("localhost","root","","dokumentasi");
if ($_GET['pages'] == 'home') {
?>
<div class="alert alert-info">
    <marquee><b>
    SELAMAT DATANG DI SISTEM DOKUMENTASI SYABANDZ DEVELOPER .. SEMOGA PROGRAM INI DAPAT BERMANFAAT UNTUK SEMUA PROGRAMMER - PROGRAMMER INDONESIA</b>
    </marquee>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="info-box bg-red hover-expand-effect hover-zoom-effect">
        <div class="icon">
            <i class="material-icons">face</i>
        </div>
        <div class="content">
            <div class="text">Members</div>
            <?php                             
            $tampil=mysqli_query($config,"SELECT * from user WHERE nama != 'admin'");
            $data1=mysqli_num_rows($tampil);
            ?>
            <div class="number count-to" data-from="0" data-to="<?php echo "$data4"; ?>" data-speed="1000" data-fresh-interval="20"><?php echo "$data1"; ?></div>
        </div>
    </div>
    <div class="info-box bg-orange hover-expand-effect hover-zoom-effect">
        <div class="icon">
            <i class="material-icons">local_bar</i>
        </div>
        <div class="content">
            <div class="text">Barang</div>
            <?php                             
            $tampil=mysqli_query($config,"SELECT * from barang ");
            $data2=mysqli_num_rows($tampil);
            ?>
            <div class="number count-to" data-from="0" data-to="<?php echo "$data4"; ?>" data-speed="1000" data-fresh-interval="20"><?php echo "$data2"; ?></div>
        </div>
    </div>
    <div class="info-box bg-cyan hover-expand-effect hover-zoom-effect">
        <div class="icon">
            <i class="material-icons">phonelink</i>
        </div>
        <div class="content">
            <div class="text">E-Commerce</div>
            <?php                             
            $tampil=mysqli_query($config,"SELECT * from delivery ");
            $data4=mysqli_num_rows($tampil);
            ?>
            <div class="number count-to" data-from="0" data-to="<?php echo "$data4"; ?>" data-speed="1000" data-fresh-interval="20"><?php echo "$data4"; ?></div>
        </div>
    </div>
    <div class="info-box bg-teal hover-expand-effect hover-zoom-effect">
        <div class="icon">
            <i class="material-icons">shopping_cart</i>
        </div>
        <div class="content">
            <div class="text">Transaksi</div>
            <?php                             
            $tampil=mysqli_query($config,"SELECT * from transaksi ");
            $data3=mysqli_num_rows($tampil);
            ?>
            <div class="number count-to" data-from="0" data-to="<?php echo "$data4"; ?>" data-speed="1000" data-fresh-interval="20"><?php echo "$data3"; ?></div>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="fa fa-bar-chart-o fa-fw"></i> Grafik Transaksi</div>
        <div class="panel-body">
            <div class="embed-responsive embed-responsive-16by9">
                <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
        </div>
    </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'master') {
?>
<?php 
mysqli_query($config,"DELETE FROM user WHERE id = '$_GET[id]' ");
?>
<!-- Star Breadcrumb -->
<div class="breadcrumbs ace-save-state">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Beranda</a>
        </li>

        <li>
            <a href="#">Master</a>
        </li>
        <li class="active">Data User</li>
    </ul>
</div>
<!-- End Breadcrumb -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-desktop fa-fw"></i>&nbsp;&nbsp;Table Users
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="template.php?pages=barang" class="btn btn-info"><i class="material-icons">local_bar</i><span>Data Barang</span></a>
        <a href="javascript:void(0);" data-toggle="modal" data-target="#user" class="btn btn-danger"><i class="material-icons">add_circle</i><span>Tambah User</span></a>
    <div class="clearfix">
    </div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">Username</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Level</th>
                        <th data-sortable="true">Foto</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM user order by nama asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['username'];?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['level'];?></td>
                        <td><img src="bootstrap/images/<?php echo $data['foto'];?>"></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=useredit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=master&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'barang') {
?>
<?php 
mysqli_query($config,"DELETE FROM barang WHERE id = '$_GET[id]' ");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-desktop fa-fw"></i>&nbsp;&nbsp;Table Barang
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="template.php?pages=master" class="btn btn-info"><i class="material-icons">face</i><span>Data Member</span></a>
        <a href="javascript:void(0);" data-toggle="modal" data-target="#barang" class="btn btn-danger"><i class="material-icons">add_circle</i><span>Tambah Barang</span></a>
    <div class="clearfix">
    </div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">Barcode</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Jumlah</th>
                        <th data-sortable="true">Lokasi</th>
                        <th data-sortable="true">Diskon</th>
                        <th data-sortable="true">Harga</th>
                        <th data-sortable="true">Foto</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM barang order by nama asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['kode'];?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['jumlah'];?></td>
                        <td><?php echo $data['lokasi'];?></td>
                        <td><?php echo $data['diskon'];?></td>
                        <td><?php echo number_format($data['harga']);?></td>
                        <td><img src="bootstrap/images/<?php echo $data['foto'];?>"></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=barangedit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=barang&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'transaksi') {
?>
<?php 
mysqli_query($config,"DELETE FROM transaksi WHERE id = '$_GET[id]' ");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-shopping-cart fa-fw"></i>&nbsp;&nbsp;Table Transaksi Pembelian
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="template.php?pages=penjualan" class="btn btn-info"><i class="material-icons">shopping_cart</i><span>Data Penjualan</span></a>
        <a href="javascript:void(0);" data-toggle="modal" data-target="#pembelian" class="btn btn-danger"><i class="material-icons">add_circle</i><span>Tambah Pembelian</span></a>
    <div class="clearfix">
    </div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">No Transaksi</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Barang</th>
                        <th data-sortable="true">Harga</th>
                        <th data-sortable="true">Jumlah</th>
                        <th data-sortable="true">Total</th>
                        <th data-sortable="true">Potongan</th>
                        <th data-sortable="true">Saldo</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM transaksi WHERE ket = 'pembelian' order by id asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['namaU'];?></td>
                        <td><?php echo $data['namaB'];?></td>
                        <td><?php echo $data['harga'];?></td>
                        <td><?php echo $data['jumlah'];?></td>
                        <td><?php echo number_format($data['total']);?></td>
                        <td><?php echo number_format($data['pot']);?></td>
                        <td><?php echo number_format($data['saldo']);?></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=transaksiedit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=transaksi&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'penjualan') {
?>
<?php 
mysqli_query($config,"DELETE FROM transaksi WHERE id = '$_GET[id]' ");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-shopping-cart fa-fw"></i>&nbsp;&nbsp;Table Transaksi Penjualan
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="template.php?pages=transaksi" class="btn btn-info"><i class="material-icons">add_shopping_cart</i><span>Data Pembelian</span></a>
        <a href="javascript:void(0);" data-toggle="modal" data-target="#penjualan" class="btn btn-danger"><i class="material-icons">add_circle</i><span>Tambah Penjualan</span></a>
    <div class="clearfix">
    </div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">No Transaksi</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Barang</th>
                        <th data-sortable="true">Harga</th>
                        <th data-sortable="true">Jumlah</th>
                        <th data-sortable="true">Total</th>
                        <th data-sortable="true">Potongan</th>
                        <th data-sortable="true">Saldo</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM transaksi WHERE ket = 'penjualan' order by id asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['namaU'];?></td>
                        <td><?php echo $data['namaB'];?></td>
                        <td><?php echo $data['harga'];?></td>
                        <td><?php echo $data['jumlah'];?></td>
                        <td><?php echo number_format($data['total']);?></td>
                        <td><?php echo number_format($data['pot']);?></td>
                        <td><?php echo number_format($data['saldo']);?></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=penjualanedit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=penjualan&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'akuntansi') {
?>
<?php 
mysqli_query($config,"DELETE FROM akuntansi WHERE id = '$_GET[id]' ");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-book fa-fw"></i>&nbsp;&nbsp;Table Akuntansi
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="template.php?pages=neraca" class="btn btn-info"><i class="material-icons">insert_chart</i><span>Data Neraca</span></a>
        <a href="template.php?pages=tambah_akuntansi" class="btn btn-danger"><i class="material-icons">add_circle</i><span>Tambah Data Akuntansi</span></a>
    <div class="clearfix">
    </div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">Tanggal</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Ref</th>
                        <th data-sortable="true">Debit</th>
                        <th data-sortable="true">Kredit</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM akuntansi WHERE ket = 'akuntansi' order by kode asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['tgl'];?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['kode'];?></td>
                        <td><?php echo number_format($data['debit']);?></td>
                        <td><?php echo number_format($data['kredit']);?></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=akuntansiedit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=akuntansi&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'neraca') {
?>
<?php 
mysqli_query($config,"DELETE FROM akuntansi WHERE id = '$_GET[id]' ");
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-book fa-fw"></i>&nbsp;&nbsp;Table Neraca
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="template.php?pages=akuntansi" class="btn btn-info"><i class="material-icons">book</i><span>Data Akuntasi</span></a>
        <a href="javascript:void(0);" data-toggle="modal" data-target="#neraca" class="btn btn-danger"><i class="material-icons">add_circle</i><span>Tambah Data Neraca</span></a>
    <div class="clearfix">
    </div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">Tanggal</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Ref</th>
                        <th data-sortable="true">Debit</th>
                        <th data-sortable="true">Kredit</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM akuntansi WHERE ket = 'neraca' order by kode asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['tgl'];?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['kode'];?></td>
                        <td><?php echo number_format($data['debit']);?></td>
                        <td><?php echo number_format($data['kredit']);?></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=neracaedit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=neraca&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<?php
}
elseif ($_GET['pages'] == 'laporan') {
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-area-chart fa-fw"></i>&nbsp;&nbsp;Table Laporan
    </div><br>&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-sm-2">
        <select class="form-control show-tick" data-live-search="true" name="cetak" id="cetak" required="required">
        <option value="" selected="disabled"> - - Pilih Cetak - - </option>
        <option value="Pembelian">Pembelian</option>
        <option value="Penjualan">Penjualan</option>
        <option value="E-Commerce">E-Commerce</option>
        </select>
    </div>
    <div class="col-md-3">
        <input type="text" class="datepicker form-control" name="dari" id="dari" placeholder="Dari Tanggal" required="required">
    </div>
    <div class="col-md-3">
        <input type="text" class="datepicker form-control" name="sampai" id="sampai" placeholder="Sampai Tanggal" required="required">
    </div>
        <div class="clearfix"></div>    
        <div class="panel-body">
            <table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="asc">
                <thead>
                    <tr>
                        <th>No</th>
                        <th data-sortable="true">No Transaksi</th>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Barang</th>
                        <th data-sortable="true">Harga</th>
                        <th data-sortable="true">Jumlah</th>
                        <th data-sortable="true">Total</th>
                        <th data-sortable="true">Potongan</th>
                        <th data-sortable="true">Saldo</th>
                        <th data-sortable="true">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php                                
                $sql = "SELECT * FROM transaksi WHERE ket = 'pembelian' order by id asc" ;
                $qry = mysqli_query($config,$sql);  
                $jml = mysqli_num_rows($qry);
                $no = 1;
                while($data = mysqli_fetch_array($qry)){
                ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['namaU'];?></td>
                        <td><?php echo $data['namaB'];?></td>
                        <td><?php echo $data['harga'];?></td>
                        <td><?php echo $data['jumlah'];?></td>
                        <td><?php echo number_format($data['total']);?></td>
                        <td><?php echo number_format($data['pot']);?></td>
                        <td><?php echo number_format($data['saldo']);?></td>
                        <td>
                        <a type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" title="Edit Data" href="template.php?pages=transaksiedit&id=<?php echo $data['id'] ;?>"><i class="material-icons">edit</i></a>   
                        <a type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Yakin Ingin Hapus ? ')" title="Hapus Data" href="template.php?pages=transaksi&id=<?php echo $data['id'] ;?>"><i class="material-icons">delete</i></a>   
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>
<!-- Form Dialog Tambah Akuntansi -->
<?php
}
elseif ($_GET['pages'] == 'tambah_akuntansi') {
?>
<?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $cek=mysqli_query($config,"SELECT * FROM user WHERE nama ='$nama'");
    if(mysqli_num_rows($cek)>=1){
    $message[] = "Maaf, Nama <b> ' $nama ' </b> Sudah Ada !! ";
}
    if(count($message)==0)
    {
        $temp   = $_FILES['gambar']['tmp_name'];
        $gambar = $_FILES['gambar']['name'];
        $path   = "images/$gambar";
        move_uploaded_file ( $temp, $path );
        $sql=mysqli_query($config,"INSERT INTO user SET id='$_POST[id]', idlevel='$_POST[idlevel]', nama='$_POST[nama]', kelamin='$_POST[kelamin]', tempat='$_POST[tempat]', lahir='$_POST[lahir]', alamat='$_POST[alamat]', hp='$_POST[hp]', gambar='$gambar' ");
        if($sql)
        {
        echo "<meta http-equiv='refresh' content='0; url=template.php?pages=user'>";
        }
        exit;
        }
    }
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-glass fa-fw"></i> FORM TAMBAH DATA BARANG
    </div>
    <div class="panel-body">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;
        <div align="center">
        <?php 
            if (! count($message)==0 )
            {
            echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>";
                foreach ($message as $indeks=>$pesan_tampil) 
                { 
                    echo "$pesan_tampil<br>"; 
                }
            echo "</div>";
            }
        ?>
        </div>
        <form action="template.php?pages=usertambah" id="validation-reg" method="post" enctype="multipart/form-data" target="_self">
            <input type="hidden" class="form-control" name="id" id="id" value=" " readonly="readonly">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <select class="form-control show-tick" data-live-search="true" name="idlevel" id="idlevel" required="required">
                    <option value="" selected disabled> -- Pilih Kepala Keluarga -- </option>
                    <?php
                    $data = mysqli_query($config, "SELECT * FROM level WHERE level != 'admin' ORDER BY level ASC");
                    while($level = mysqli_fetch_array($data)){
                    echo "<option value='$level[id].$level[level]'>$level[level]</option>";
                    }
                    ?>                  
                    </select>
                </div>
            </div><br>
            <div class="form-group form-float">
                <div class="row">
                    <div class="col-md-6"><br>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" id="nama" required="required">
                            <label class="form-label">Nama Anggota</label>
                        </div>
                    </div><br>
                    <div class="col-md-6" align="center">
                        <input type="radio" name="kelamin" id="Laki - laki" value="Laki - laki" class="with-gap" required="required">
                        <label for="Laki - laki">Laki - laki</label>

                        <input type="radio" name="kelamin" id="Perempuan" value="Perempuan" class="with-gap" required="required">
                        <label for="Perempuan" class="m-l-20">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <div class="row">
                    <div class="col-md-6"><br>
                        <div class="form-line">
                            <input type="text" class="form-control" name="tempat" id="template" required="required">
                            <label class="form-label">Tempat</label>
                        </div>
                    </div><br>
                    <div class="col-md-6">
                        <div class="form-line">
                            <input type="text" class="datepicker form-control" name="lahir" id="lahir" placeholder="Tgl.Lahir" required="required">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-float">
                <div class="form-line">
                    <textarea type="text" class="form-control" name="alamat" id="alamat" required="required"></textarea>
                    <label class="form-label">Alamat</label>
                </div>
            </div>
            <div class="form-group form-float">
                <div class="row">
                    <div class="col-md-6"><br>
                        <div class="form-line">
                            <input type="number" name="hp" id="hp" class="form-control" required="required">
                            <label class="form-label">No HP</label>
                        </div>
                    </div><br>
                    <div class="col-md-6">
                        <div class="form-line">
                            <input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Upload Foto">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary waves-effect" type="submit" name="simpan"><i class="material-icons">save</i>
            <span>SIMPAN</span></button>
            <button class="btn btn-success waves-effect" type="reset"><i class="material-icons">cancel</i><span>BATAL</span></button>
            <a href="javascript:history.go(-1)" class="btn btn-danger waves-effect"><i class="material-icons">settings_backup_restore</i><span>KEMBALI</span></a>
        </form>
    </div>
</div>
<?php
}
?>
<!-- Modal Dialog Tambah User -->
<?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $cek=mysqli_query($config,"SELECT * FROM user WHERE nama ='$nama'");
    if(mysqli_num_rows($cek)>=1){
    $message[] = "Maaf, Nama <b> ' $nama ' </b> Sudah Ada !! ";
}
    if(count($message)==0)
    {
        $temp   = $_FILES['gambar']['tmp_name'];
        $gambar = $_FILES['gambar']['name'];
        $path   = "images/$gambar";
        move_uploaded_file ( $temp, $path );
        $sql=mysqli_query($config,"INSERT INTO user SET id='$_POST[id]', idlevel='$_POST[idlevel]', nama='$_POST[nama]', kelamin='$_POST[kelamin]', tempat='$_POST[tempat]', lahir='$_POST[lahir]', alamat='$_POST[alamat]', hp='$_POST[hp]', gambar='$gambar' ");
        if($sql)
        {
        echo "<meta http-equiv='refresh' content='0; url=template.php?pages=user'>";
        }
        exit;
        }
    }
?>
<!-- Modal Dialog Tambah Transaksi Masuk -->
<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-glass fa-fw"></i> FORM TAMBAH DATA USER
                        </div>
                        <div class="panel-body">
                            <form action="template.php?pages=usertambah" id="validation-reg" method="post" enctype="multipart/form-data" target="_self">
                                <input type="hidden" class="form-control" name="id" id="id" value=" " readonly="readonly">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" data-live-search="true" name="idlevel" id="idlevel" ">
                                        <option value="" selected disabled> -- Pilih Kepala Keluarga -- </option>
                                        <?php
                                        $data = mysqli_query($config, "SELECT * FROM level WHERE level != 'admin' ORDER BY level ASC");
                                        while($level = mysqli_fetch_array($data)){
                                        echo "<option value='$level[id].$level[level]'>$level[level]</option>";
                                        }
                                        ?>                  
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" id="nama" ">
                                                <label class="form-label">Nama Anggota</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6" align="center">
                                            <input type="radio" name="kelamin" id="Laki - laki" value="Laki - laki" class="with-gap" ">
                                            <label for="Laki - laki">Laki - laki</label>

                                            <input type="radio" name="kelamin" id="Perempuan" value="Perempuan" class="with-gap" ">
                                            <label for="Perempuan" class="m-l-20">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" id="template" ">
                                                <label class="form-label">Tempat</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="lahir" id="lahir" placeholder="Tgl.Lahir" ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="number" name="hp" id="hp" class="form-control" ">
                                                <label class="form-label">No HP</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="file" name="gambar" id="gambar" class="form-control" " placeholder="Upload Foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <a href="javascript:void(0);" class="add_button btn btn-primary waves-effect" title="Add field"><i class="material-icons">add_circle</i>
                                <span>Add More Field</span></a><br><br>
                                <div class="form-group form-float input_field_wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="alamat[]" placeholder="Alamat" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="hp[]" placeholder="No Handphone" value=""/>
                                            </div>
                                        </div>
                                    </div><br>
                                </div>
                                <br>
                                <button class="btn btn-primary waves-effect" type="submit" name="simpan"><i class="material-icons">save</i>
                                <span>SIMPAN</span></button>
                                <button class="btn btn-success waves-effect" type="reset"><i class="material-icons">cancel</i><span>BATAL</span></button>
                                <a href="javascript:history.go(-1)" class="btn btn-danger waves-effect"><i class="material-icons">settings_backup_restore</i><span>KEMBALI</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var add_more_button = $('.add_button'); //Add button selector
        var Fieldwrapper = $('.input_field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="form-group form-float"><div class="row"><div class="col-md-6"><div class="form-line"><input type="text" class="form-control" name="alamat[]" placeholder="Alamat" value=""/></div></div><div class="col-md-3"><div class="form-line"><input type="text" class="form-control" name="hp[]" placeholder="No Handphone" value=""/></div></div>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="remove_button" title="Remove Field"><i class="material-icons">delete</i></a></div></div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        $(add_more_button).click(function(){ //Once add button is clicked
            x++; //Increment field counter
            $(Fieldwrapper).append(fieldHTML); // Add field html
        });
        $(Fieldwrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
<!-- Modal Dialog Tambah Barang -->
<?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $cek=mysqli_query($config,"SELECT * FROM user WHERE nama ='$nama'");
    if(mysqli_num_rows($cek)>=1){
    $message[] = "Maaf, Nama <b> ' $nama ' </b> Sudah Ada !! ";
}
    if(count($message)==0)
    {
        $temp   = $_FILES['gambar']['tmp_name'];
        $gambar = $_FILES['gambar']['name'];
        $path   = "images/$gambar";
        move_uploaded_file ( $temp, $path );
        $sql=mysqli_query($config,"INSERT INTO user SET id='$_POST[id]', idlevel='$_POST[idlevel]', nama='$_POST[nama]', kelamin='$_POST[kelamin]', tempat='$_POST[tempat]', lahir='$_POST[lahir]', alamat='$_POST[alamat]', hp='$_POST[hp]', gambar='$gambar' ");
        if($sql)
        {
        echo "<meta http-equiv='refresh' content='0; url=template.php?pages=user'>";
        }
        exit;
        }
    }
?>
<div class="modal fade" id="barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-glass fa-fw"></i> FORM TAMBAH DATA BARANG
                        </div>
                        <div class="panel-body">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div align="center">
                            <?php 
                                if (! count($message)==0 )
                                {
                                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>";
                                    foreach ($message as $indeks=>$pesan_tampil) 
                                    { 
                                        echo "$pesan_tampil<br>"; 
                                    }
                                echo "</div>";
                                }
                            ?>
                            </div>
                            <form action="template.php?pages=usertambah" id="validation-reg" method="post" enctype="multipart/form-data" target="_self">
                                <input type="hidden" class="form-control" name="id" id="id" value=" " readonly="readonly">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" data-live-search="true" name="idlevel" id="idlevel" required="required">
                                        <option value="" selected disabled> -- Pilih Kepala Keluarga -- </option>
                                        <?php
                                        $data = mysqli_query($config, "SELECT * FROM level WHERE level != 'admin' ORDER BY level ASC");
                                        while($level = mysqli_fetch_array($data)){
                                        echo "<option value='$level[id].$level[level]'>$level[level]</option>";
                                        }
                                        ?>                  
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" id="nama" required="required">
                                                <label class="form-label">Nama Anggota</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6" align="center">
                                            <input type="radio" name="kelamin" id="Laki - laki" value="Laki - laki" class="with-gap" required="required">
                                            <label for="Laki - laki">Laki - laki</label>

                                            <input type="radio" name="kelamin" id="Perempuan" value="Perempuan" class="with-gap" required="required">
                                            <label for="Perempuan" class="m-l-20">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" id="template" required="required">
                                                <label class="form-label">Tempat</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="lahir" id="lahir" placeholder="Tgl.Lahir" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="alamat" id="alamat" required="required"></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="number" name="hp" id="hp" class="form-control" required="required">
                                                <label class="form-label">No HP</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Upload Foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="simpan"><i class="material-icons">save</i>
                                <span>SIMPAN</span></button>
                                <button class="btn btn-success waves-effect" type="reset"><i class="material-icons">cancel</i><span>BATAL</span></button>
                                <a href="javascript:history.go(-1)" class="btn btn-danger waves-effect"><i class="material-icons">settings_backup_restore</i><span>KEMBALI</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Dialog Tambah Transaksi Masuk -->
<?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $cek=mysqli_query($config,"SELECT * FROM user WHERE nama ='$nama'");
    if(mysqli_num_rows($cek)>=1){
    $message[] = "Maaf, Nama <b> ' $nama ' </b> Sudah Ada !! ";
}
    if(count($message)==0)
    {
        $temp   = $_FILES['gambar']['tmp_name'];
        $gambar = $_FILES['gambar']['name'];
        $path   = "images/$gambar";
        move_uploaded_file ( $temp, $path );
        $sql=mysqli_query($config,"INSERT INTO user SET id='$_POST[id]', idlevel='$_POST[idlevel]', nama='$_POST[nama]', kelamin='$_POST[kelamin]', tempat='$_POST[tempat]', lahir='$_POST[lahir]', alamat='$_POST[alamat]', hp='$_POST[hp]', gambar='$gambar' ");
        if($sql)
        {
        echo "<meta http-equiv='refresh' content='0; url=template.php?pages=user'>";
        }
        exit;
        }
    }
?>
<div class="modal fade" id="pembelian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-glass fa-fw"></i> FORM TAMBAH DATA BARANG
                        </div>
                        <div class="panel-body">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div align="center">
                            <?php 
                                if (! count($message)==0 )
                                {
                                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>";
                                    foreach ($message as $indeks=>$pesan_tampil) 
                                    { 
                                        echo "$pesan_tampil<br>"; 
                                    }
                                echo "</div>";
                                }
                            ?>
                            </div>
                            <form action="template.php?pages=usertambah" id="validation-reg" method="post" enctype="multipart/form-data" target="_self">
                                <input type="hidden" class="form-control" name="id" id="id" value=" " readonly="readonly">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" data-live-search="true" name="idlevel" id="idlevel" required="required">
                                        <option value="" selected disabled> -- Pilih Kepala Keluarga -- </option>
                                        <?php
                                        $data = mysqli_query($config, "SELECT * FROM level WHERE level != 'admin' ORDER BY level ASC");
                                        while($level = mysqli_fetch_array($data)){
                                        echo "<option value='$level[id].$level[level]'>$level[level]</option>";
                                        }
                                        ?>                  
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" id="nama" required="required">
                                                <label class="form-label">Nama Anggota</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6" align="center">
                                            <input type="radio" name="kelamin" id="Laki - laki" value="Laki - laki" class="with-gap" required="required">
                                            <label for="Laki - laki">Laki - laki</label>

                                            <input type="radio" name="kelamin" id="Perempuan" value="Perempuan" class="with-gap" required="required">
                                            <label for="Perempuan" class="m-l-20">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" id="template" required="required">
                                                <label class="form-label">Tempat</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="lahir" id="lahir" placeholder="Tgl.Lahir" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="alamat" id="alamat" required="required"></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="number" name="hp" id="hp" class="form-control" required="required">
                                                <label class="form-label">No HP</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Upload Foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="simpan"><i class="material-icons">save</i>
                                <span>SIMPAN</span></button>
                                <button class="btn btn-success waves-effect" type="reset"><i class="material-icons">cancel</i><span>BATAL</span></button>
                                <a href="javascript:history.go(-1)" class="btn btn-danger waves-effect"><i class="material-icons">settings_backup_restore</i><span>KEMBALI</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Dialog Tambah Transaksi Keluar -->
<?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $cek=mysqli_query($config,"SELECT * FROM user WHERE nama ='$nama'");
    if(mysqli_num_rows($cek)>=1){
    $message[] = "Maaf, Nama <b> ' $nama ' </b> Sudah Ada !! ";
}
    if(count($message)==0)
    {
        $temp   = $_FILES['gambar']['tmp_name'];
        $gambar = $_FILES['gambar']['name'];
        $path   = "images/$gambar";
        move_uploaded_file ( $temp, $path );
        $sql=mysqli_query($config,"INSERT INTO user SET id='$_POST[id]', idlevel='$_POST[idlevel]', nama='$_POST[nama]', kelamin='$_POST[kelamin]', tempat='$_POST[tempat]', lahir='$_POST[lahir]', alamat='$_POST[alamat]', hp='$_POST[hp]', gambar='$gambar' ");
        if($sql)
        {
        echo "<meta http-equiv='refresh' content='0; url=template.php?pages=user'>";
        }
        exit;
        }
    }
?>
<div class="modal fade" id="penjualan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-glass fa-fw"></i> FORM TAMBAH DATA BARANG
                        </div>
                        <div class="panel-body">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div align="center">
                            <?php 
                                if (! count($message)==0 )
                                {
                                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>";
                                    foreach ($message as $indeks=>$pesan_tampil) 
                                    { 
                                        echo "$pesan_tampil<br>"; 
                                    }
                                echo "</div>";
                                }
                            ?>
                            </div>
                            <form action="template.php?pages=usertambah" id="validation-reg" method="post" enctype="multipart/form-data" target="_self">
                                <input type="hidden" class="form-control" name="id" id="id" value=" " readonly="readonly">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" data-live-search="true" name="idlevel" id="idlevel" required="required">
                                        <option value="" selected disabled> -- Pilih Kepala Keluarga -- </option>
                                        <?php
                                        $data = mysqli_query($config, "SELECT * FROM level WHERE level != 'admin' ORDER BY level ASC");
                                        while($level = mysqli_fetch_array($data)){
                                        echo "<option value='$level[id].$level[level]'>$level[level]</option>";
                                        }
                                        ?>                  
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" id="nama" required="required">
                                                <label class="form-label">Nama Anggota</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6" align="center">
                                            <input type="radio" name="kelamin" id="Laki - laki" value="Laki - laki" class="with-gap" required="required">
                                            <label for="Laki - laki">Laki - laki</label>

                                            <input type="radio" name="kelamin" id="Perempuan" value="Perempuan" class="with-gap" required="required">
                                            <label for="Perempuan" class="m-l-20">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" id="template" required="required">
                                                <label class="form-label">Tempat</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="lahir" id="lahir" placeholder="Tgl.Lahir" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="alamat" id="alamat" required="required"></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="number" name="hp" id="hp" class="form-control" required="required">
                                                <label class="form-label">No HP</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Upload Foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="simpan"><i class="material-icons">save</i>
                                <span>SIMPAN</span></button>
                                <button class="btn btn-success waves-effect" type="reset"><i class="material-icons">cancel</i><span>BATAL</span></button>
                                <a href="javascript:history.go(-1)" class="btn btn-danger waves-effect"><i class="material-icons">settings_backup_restore</i><span>KEMBALI</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Dialog Tambah Neraca -->
<?php 
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $cek=mysqli_query($config,"SELECT * FROM user WHERE nama ='$nama'");
    if(mysqli_num_rows($cek)>=1){
    $message[] = "Maaf, Nama <b> ' $nama ' </b> Sudah Ada !! ";
}
    if(count($message)==0)
    {
        $temp   = $_FILES['gambar']['tmp_name'];
        $gambar = $_FILES['gambar']['name'];
        $path   = "images/$gambar";
        move_uploaded_file ( $temp, $path );
        $sql=mysqli_query($config,"INSERT INTO user SET id='$_POST[id]', idlevel='$_POST[idlevel]', nama='$_POST[nama]', kelamin='$_POST[kelamin]', tempat='$_POST[tempat]', lahir='$_POST[lahir]', alamat='$_POST[alamat]', hp='$_POST[hp]', gambar='$gambar' ");
        if($sql)
        {
        echo "<meta http-equiv='refresh' content='0; url=template.php?pages=user'>";
        }
        exit;
        }
    }
?>
<div class="modal fade" id="neraca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-glass fa-fw"></i> FORM TAMBAH DATA BARANG
                        </div>
                        <div class="panel-body">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div align="center">
                            <?php 
                                if (! count($message)==0 )
                                {
                                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>";
                                    foreach ($message as $indeks=>$pesan_tampil) 
                                    { 
                                        echo "$pesan_tampil<br>"; 
                                    }
                                echo "</div>";
                                }
                            ?>
                            </div>
                            <form action="template.php?pages=usertambah" id="validation-reg" method="post" enctype="multipart/form-data" target="_self">
                                <input type="hidden" class="form-control" name="id" id="id" value=" " readonly="readonly">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" data-live-search="true" name="idlevel" id="idlevel" required="required">
                                        <option value="" selected disabled> -- Pilih Kepala Keluarga -- </option>
                                        <?php
                                        $data = mysqli_query($config, "SELECT * FROM level WHERE level != 'admin' ORDER BY level ASC");
                                        while($level = mysqli_fetch_array($data)){
                                        echo "<option value='$level[id].$level[level]'>$level[level]</option>";
                                        }
                                        ?>                  
                                        </select>
                                    </div>
                                </div><br>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama" id="nama" required="required">
                                                <label class="form-label">Nama Anggota</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6" align="center">
                                            <input type="radio" name="kelamin" id="Laki - laki" value="Laki - laki" class="with-gap" required="required">
                                            <label for="Laki - laki">Laki - laki</label>

                                            <input type="radio" name="kelamin" id="Perempuan" value="Perempuan" class="with-gap" required="required">
                                            <label for="Perempuan" class="m-l-20">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tempat" id="template" required="required">
                                                <label class="form-label">Tempat</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" name="lahir" id="lahir" placeholder="Tgl.Lahir" required="required">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea type="text" class="form-control" name="alamat" id="alamat" required="required"></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="row">
                                        <div class="col-md-6"><br>
                                            <div class="form-line">
                                                <input type="number" name="hp" id="hp" class="form-control" required="required">
                                                <label class="form-label">No HP</label>
                                            </div>
                                        </div><br>
                                        <div class="col-md-6">
                                            <div class="form-line">
                                                <input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Upload Foto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" name="simpan"><i class="material-icons">save</i>
                                <span>SIMPAN</span></button>
                                <button class="btn btn-success waves-effect" type="reset"><i class="material-icons">cancel</i><span>BATAL</span></button>
                                <a href="javascript:history.go(-1)" class="btn btn-danger waves-effect"><i class="material-icons">settings_backup_restore</i><span>KEMBALI</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
