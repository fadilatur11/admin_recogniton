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
                                <img class="user_avatar no-b no-p" src="<?=$images;?>dummy/u6.png" alt="User Image">
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
                       <div class="col-md-3">
                           <div class="card ">

                               <ul class="list-group list-group-flush">
                                   <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Phone</strong> <span class="float-right s-12"><?=$getdata['telepon'];?></span></li>
                                   <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12"><?=$getdata['telepon'];?></span></li>
                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">Address</strong> <span class="float-right s-12"><?=$getdata['alamat'];?></span></li>
                               </ul>
                           </div>
                           

                       </div>
                       <div class="col-md-9">

                           <div class="row">
                               <div id="map"></div>
                           </div>

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
<script>
  
       // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: {lat: <?=$getdata['lat'];?>, lng: <?=$getdata['lng'];?>}
        });

        var image = {
          url: '<?=$images;?>marker.png',
           scaledSize: new google.maps.Size(60, 60),
           origin: new google.maps.Point(0, 0),
           anchor: new google.maps.Point(20,40)
        }

        var beachMarker = new google.maps.Marker({
          position: {lat: <?=$getdata['lat'];?>, lng: <?=$getdata['lng'];?>},
          map: map,
          icon: image
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQgEABP21ozpf76OP2rSfhCckXXhvrPU0&callback=initMap"
    async defer></script>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?> 