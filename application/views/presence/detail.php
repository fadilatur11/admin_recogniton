<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<style type="text/css">
   /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 500px;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
</style>
<header class="white pt-3 relative shadow">
            <div class="container-fluid">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <div class="pb-3">
                            <div class="image mr-3  float-left">
                                <img class="user_avatar no-b no-p" src="<?=$sample.$getdata['image'];?>" alt="User Image">
                            </div>
                            <div>
                                <h6 class="p-t-10"><?=ucwords($getdata['name']);?></h6>
                                <?=$getdata['email'];?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
           <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <div class="row">
                       <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card" style="height: 100%">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Telepon</strong> <span class="float-right s-12"><?=$getdata['phone'];?></span></li>
                                            <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12"><?=$getdata['email'];?></span></li>
                                            <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">Alamat</strong> <span class="float-right s-12"><?=$getdata['address'];?></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card" style="padding: 10px">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for=""><h4>SAMPLE</h4></label>
                                                <img src="<?=$sample.$getdata['sample_image']?>" alt="">
                                            </div>
                                            <div class="col-md-3" id="image-user">
                                                <label for=""><h4>PRESENT</h4></label>
                                                <img src="<?=$images?>loader.gif" alt="">
                                            </div>
                                            <div class="col-md-4" id="box-info" style="display:none">
                                                <label for=""><h4>INFO</h4></label>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"></i><strong class="s-12">KEMIRIPAN</strong> <span class="float-right s-12"><?=$getdata['similiar'];?>%</span></li>
                                                    <li class="list-group-item"></i><strong class="s-12">LATITUDE</strong> <span class="float-right s-12"><?=$getdata['latitude'];?></span></li>
                                                    <li class="list-group-item"></i><strong class="s-12">LONGITUDE</strong> <span class="float-right s-12"><?=$getdata['longitude'];?></span></li>
                                                    <li class="list-group-item"></i><strong class="s-12">KEHADIRAN</strong> <span class="float-right s-12"><?=$getdata['created_at'];?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                       </div>
                       <div class="col-md-12" style="margin-top: 20px; display:none" id="box-map">
                        <iframe
                            style="width: 100%"
                            height="450"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCQgEABP21ozpf76OP2rSfhCckXXhvrPU0
                                &q=<?=$getdata['latitude']?>,<?=$getdata['longitude']?>
                                &zoom=18" allowfullscreen>
                        </iframe>
                       </div>
                   </div>
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
<script>
    // function initMap() {
    //     var map = new google.maps.Map(document.getElementById('map'), {
    //         zoom: 17,
    //         center: {lat: <?=$getdata['latitude'];?>, lng: <?=$getdata['longitude'];?>}
    //     });

    //     var image = {
    //         url: '<?=$images;?>marker.png',
    //         scaledSize: new google.maps.Size(60, 60),
    //         origin: new google.maps.Point(0, 0),
    //         anchor: new google.maps.Point(20,40)
    //     }

    //     var beachMarker = new google.maps.Marker({
    //         position: {lat: <?=$getdata['latitude'];?>, lng: <?=$getdata['longitude'];?>},
    //         map: map,
    //         icon: image
    //     });
    // }

    $(document).ready(function() {
        $.ajax({
            method : "GET", 
            url : "http://localhost:3000/image/show/<?=$getdata['id']?>",
            success : function(data) {
                let img = "<label><h4>PRESENT</h4></label><img src='<?=$show?>"+data.image+"'>"
                $("#image-user").html(img)
                $("#box-info").css("display", "block")
                $("#box-map").css("display", "block")
            }
        })
    })
</script>
<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQgEABP21ozpf76OP2rSfhCckXXhvrPU0&callback=initMap"
async defer></script>
-->