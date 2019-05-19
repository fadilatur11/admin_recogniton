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
                        <h3 class="mt-2">New Password</h3>
                    </div>
                    <form id="reset">
                        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                            <input type="email" name="email" class="form-control form-control-lg"
                                   placeholder="Enter your email address" value="<?=$akun['email'];?>" disabled><br>
                            <input type="password" id="pass1" class="form-control form-control-lg" name="password" placeholder="New Password">
                            <input type="password" id="pass2" required onkeyup="checkPass(); return false;" class="form-control form-control-lg" placeholder="Confirm your Password">
                            <b id="confirmMessage"></b>
                        </div>
                        <input type="submit" d='submit' class="btn btn-success btn-lg btn-block" value="Submit">
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
<script>
    $(document).ready(function() {
	  /*$(".js-example-basic-single").select2();*/
	});
	function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        message.style.color = goodColor;
        message.innerHTML = "Valid Password";
        $('#submit').removeAttr('disabled');
    }else{
        message.style.color = badColor;
        message.innerHTML = "Invalid Password !";
        $('#submit').attr('disabled','true');
    }
}

$(document).ready(function(){ // jquery ajax wajib pake syntax ini
        $('#reset').submit(function(event){
            event.preventDefault(); // synatax supaya g loading page
            /*console.log('oke')*/
            let input = $(this).serialize(); // serialize ini otomatis mengcrawl inputan dan syntax this itu mengacu pada #tambah
            /*console.log(input);*/
            $.ajax({
                method: 'POST', // method data yg dikirim
                url: '<?php echo site_url('auth/actionnewpassword/'.$akun['id']);?>', // alamat url
                data: input, // data ini mengacu pada variable yg dibuat, krna variable yg dibuat adalah input, maka di isi variable input
                success: function(response){
                    console.log('response'); // success:response itu adalah penanda bahwa data berhasil dikirim
                    alert('Password baru berhasil dibuat');
                    window.location = '<?php echo site_url('auth/login');?>';
                },
                error: function(){
                    console.log('gagal'); // error ini sebagai penanda bahwa data gagal dikirim
                }
            })
        })
    })
</script>

</body>
</html>