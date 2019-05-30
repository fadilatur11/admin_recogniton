<?php include_once dirname(__FILE__).'/../layouts/header.php';?> 
<div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-8 offset-md-2">
                    <form action="<?php echo site_url('administrator/addaction');?>" autocomplete="off"  method="post" autocomplete="off" enctype="multipart/form-data"> <!-- karena ini pake method jquery ajax post maka action g diperlukan -->
                        <div class="card no-b">
                            <div class="card-body">
                                <h5 class="card-title">About Adminstrator</h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">USERNAME</label>
                                            <input name="nama" placeholder="Enter User Name" class="form-control r-0 light s-12 " type="text">
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-row mt-1">
                                    <div class="form-group col-md-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Email</label>
                                        <input name="email" placeholder="user@email.com" class="form-control r-0 light s-12 " type="email">
                                    </div>

                                    <div class="form-group col-md-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Phone</label>
                                        <input name="phone" placeholder="08xxxxx" class="form-control r-0 light s-12 " type="number">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8 m-0">
                                        <label for="address"  class="col-form-label s-12">Address</label>
                                        <input type="text" class="form-control r-0 light s-12" name="alamat" 
                                               placeholder="Enter Address">
                                    </div>

                                    <div class="form-group col-md-8 m-0">
                                        <label for="address"  class="col-form-label s-12">Password</label>
                                        <input type="password" class="form-control r-0 light s-12" name="password" 
                                               placeholder="Enter Password" id="txtPassword">
                                               <input type="checkbox" id="chkShow"/> <label>Show Password</label>
                                    </div>
                                    
                                </div>
                            </div>


                            <div class="col-md-3 gentak">
                            <input type="file" name="webcam" style="margin-bottom: 10px" accept='images/*' onchange='openFile(event);'>
                                <div class="dropzone dropzone-file-area pt-4 pb-4">
                                        <span id="TheImageContents">Photo</span>
                                        

                                </div>
                            </div>

                            
                           <?php /*<div class="card-body">
                                <div class="form-group col-md-8 m-0">
                                    <div id="my_camera"></div>
                                    <input type=button value="Take Snapshot" onClick="take_snapshot()" style="margin-top: 1%">
                                </div>
                            </div>*/ ?>

                            <div class="card-body bawah">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>

<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>
<?php /*<script type="text/javascript" src="<?php echo $js;?>webcam/webcam.min.js"></script>*/ ?>

<script type="text/javascript">
   <?php /*$(document).ready(function(){ // jquery ajax wajib pake syntax ini
        $('#create').submit(function(event){
            event.preventDefault(); // synatax supaya g loading page
            console.log('oke')
            let input = $(this).serialize(); // serialize ini otomatis mengcrawl inputan dan syntax this itu mengacu pada #tambah
            console.log(input);
            $.ajax({
                method: 'POST', // method data yg dikirim
                url: '<?php echo site_url('administrator/addaction');?>', // alamat url
                data: input, // data ini mengacu pada variable yg dibuat, krna variable yg dibuat adalah input, maka di isi variable input
                success: function(response){
                    console.log('response'); // success:response itu adalah penanda bahwa data berhasil dikirim
                    window.location = '<?php echo site_url('administrator');?>';
                },
                error: function(){
                    console.log('gagal'); // error ini sebagai penanda bahwa data gagal dikirim
                }
            })
        })
    })*/ ?>

    $('#chkShow').change(function() {
    var isChecked = $(this).prop('checked');
    if (isChecked) {
        $('#txtPassword').prop('type', 'text');
    }
    else {
        $('#txtPassword').prop('type', 'password');
    }
});

	// This grabs the file contents when the file changes
    var openFile = function(event) {
	var input = event.target;

	// Instantiate FileReader
	var reader = new FileReader();
	reader.onload = function(){
		TheFileContents = reader.result;
		// Update the output to include the <img> tag with the data URL as the source
		document.getElementById("TheImageContents").innerHTML = '<p><img width="300" height="150" style="border-radius: 5px" src="'+TheFileContents+'" /></p>';
	};
	// Produce a data URL (base64 encoded string of the data in the file)
	// We are retrieving the first file from the FileList object
	reader.readAsDataURL(input.files[0]);
};
<?php /*Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );

        function take_snapshot() {
            // take snapshot and get image data
            Webcam.snap( function(data_uri) {
                // display results in page
                document.getElementById('results').innerHTML = 
                    //'<h2>Here is your image:</h2>' + 
                    '<img id="imageprev" src="'+data_uri+'"/>'+
                    '<input type="hidden" name="webcam" value="'+data_uri+'">';
            } );
             // Get base64 value from <img id='imageprev'> source
 var base64image = document.getElementById("imageprev").src;

 Webcam.upload( base64image, '<?php echo site_url('user/save_snap');?>', function(code, text) {
  console.log('Save successfully');
  //console.log(text);
 });
        }*/?>

</script>