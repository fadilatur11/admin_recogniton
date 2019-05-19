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
    <link rel="icon" href="<?php echo $images;?>basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $css;?>app.css">

</head>
<body class="light sidebar-mini sidebar-collapse">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<main>
    <div id="primary" class="p-t-b-100 height-full ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-md-auto">
                    <div class="text-center">
                        <img src="<?php echo $images;?>dummy/u5.png" alt="">
                        <h3 class="mt-2">Forget Password</h3>
                        <span><?php echo $this->session->flashdata('message');?></span>
                    </div>
                    <form action="<?php echo site_url('auth/forgetaction');?>" method="post">
                        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                            <input type="email" name="email" class="form-control form-control-lg"
                                   placeholder="Enter your email address">
                        </div>
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>

<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="<?php echo $js;?>app.js"></script>

</body>
</html>