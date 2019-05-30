<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th>NO</th>
                                            <th>NAMA</th>

                                            <th> <div class="d-none d-lg-block">EMAIL</div></th>
                                            <th> <div class="d-none d-lg-block">NO HP</div></th>
                                            <th> <div class="d-none d-lg-block">ALAMAT</div></th>
                                            <th> <div class="d-none d-lg-block">STATUS</div></th>
                                            <th> <div class="d-none d-lg-block">ROLE</div></th>
                                            <th><div class="d-none d-lg-block">OPTION</div></th>
                                        </tr>
                                        </thead>

                                        <tbody id="target">
                                        
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <?php /*<a href="<?php echo site_url('user/add');?>" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>*/ ?>
</div>

<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?> 
<script type="text/javascript">
    getdata();
    setInterval(getdata, 1000);

    function getdata(){
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('beranda/ambildata');?>',
            dataType: 'json',
            success: function(getdata){

                /*console.log(getdata)*/
                var baris = ' ';
                var u = 1;
                for (var i = 0; i <getdata.length; i++) {
                    u = i+1;
                    if (getdata[i].level == 0) {
                        var level = 'User';
                    }else{
                        var level = 'Admin';
                    }
                    if (getdata[i].status == 0) {
                        var status = '<div class="d-none d-lg-block"><span class="icon icon-circle s-12  mr-2 text-warning"></span> Offline</div>';
                    }else{
                        var status = '<div class="d-none d-lg-block"><span class="icon icon-circle s-12  mr-2 text-success"></span> Online</div>';
                    }
                    baris += '<tr>'+
                                '<td>'+ u + '</td>'+
                                '<td>'+ getdata[i].name +'</td>' +
                                '<td>'+ getdata[i].email +'</td>' +
                                '<td>'+ getdata[i].phone +'</td>' +
                                '<td>'+ getdata[i].address +'</td>' +
                                '<td>'+ status +'</td>' +
                                '<td>User</td>' +
                                '<td>'+'<a href="<?php echo site_url('user/delete/');?>'+getdata[i].id+'"><button type="button" class="btn btn-danger">Delete</button></a><br>'+
                                '<a href="<?php echo site_url('user/detail/');?>'+getdata[i].id+'"><button type="button" class="btn btn-success" style="margin-top:1%">Detail</button></a></td>' +
                                '</tr>';
                }
                $('#target').html(baris);
            }
        });
    }

</script>