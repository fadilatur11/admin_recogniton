<?php
$css = $this->config->item('css');
$js = $this->config->item('js');
$tim = $this->config->item('images_tim');
$images = $this->config->item('images');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=$images;?>basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?=$css;?>app.css">

</head>
<body class="light sidebar-mini sidebar-collapse">


<div class="has-sidebar-left has-sidebar-tabs">

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Report Daftar Hadir</h3>
                                <div class="box-tools">
                                   
                                </div>
                            </div>
                            <br>

                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Tanggal Hadir</th>
                                        <th>Alamat</th>
                                    </tr>
                                    <?php $i=1; foreach ($presence as $presence) {?>
                                    <tr>
                                        <td><?= $i;?></td>
                                        <td><?= $presence['name'];?></td>
                                        <td><?= $presence['email'];?></td>
                                        <td><?= $presence['phone'];?></td>
                                        <td><?= $presence['absensi'];?></td>
                                        <td><?= $presence['address'];?></td>
                                    </tr>
                                    <?php $i++;}?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

</div>

</body>
</html>