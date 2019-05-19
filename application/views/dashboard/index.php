<?php include_once dirname(__FILE__).'/../layouts/header.php';?> 
 <div class="container-fluid relative animatedParent animateOnce my-3">
        <div class="row row-eq-height my-3 mt-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3 bg-danger text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-package s-18"></i></div>
                                    <div><span class="text-success">40+35</span></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter"><i class="icon-chrome"></i></div>
                                    Chrome
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-timer s-18"></i></div>
                                    <div><span class="badge badge-pill badge-primary">4:30</span></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter">68</div>
                                    New Orders
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-user-circle-o s-18"></i></div>
                                    <div><span class="badge badge-pill badge-danger">4:30</span></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter">170</div>
                                    New Users
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="card no-b mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><i class="icon-user-times s-18"></i></div>
                                    <div><span class="text-danger">50</span></div>
                                </div>
                                <div class="text-center">
                                    <div class="s-48 my-3 font-weight-lighter">95</div>
                                    Returning Users
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card no-b p-2">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="height-300">
                                <canvas
                                        data-chart="chartJs"
                                        data-chart-type="doughnut"
                                        data-dataset="[
                                                        [75, 25,25],

                                                    ]"
                                        data-labels="[['Disk'],['Database'],['Disk2'],['Database2']]"
                                        data-dataset-options="[
                                                    {
                                                        label: 'Disk',
                                                        backgroundColor: [
                                                            '#03a9f4',
                                                            '#8f5caf',
                                                            '#3f51b5'
                                                        ],

                                                    },


                                                    ]"
                                        data-options="{legend: {display: !0,position: 'bottom',labels: {fontColor: '#7F8FA4',usePointStyle: !0}},
                                }"
                                >
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card no-b my-3">
            <div class="card-body">
                <div class="my-2 height-300">
                    <canvas
                            data-chart="bar"
                            data-dataset="[
                                        [21, 90, 55, 0, 59, 77, 12,21, 90, 55, 0, 59, 77, 12,21, 90, 55, 0, 59, 77, 12],
                                        [12, 40, 16, 17, 89, 0, 12,12, 0, 55, 60, 79, 99, 12,12, 0, 55, 60, 79, 99, 12],
                                        [12, 40, 16, 17, 89, 0,12, 40, 16, 17, 89, 0, 12,12, 40, 16, 17, 89, 0, 12],
                                        ]"
                            data-labels="['Blue','Yellow','Green','Purple','Orange','Red','Indigo','Blue','Yellow','Green','Purple','Orange','Red','Indigo','Blue','Yellow','Green','Purple','Orange','Red','Indigo']"
                            data-dataset-options="[
                                    {
                                        label: 'HTML',
                                        backgroundColor: '#7986cb',
                                        borderWidth: 0,

                                    },
                                    {
                                         label: 'Wordpress',
                                         backgroundColor: '#88e2ff',
                                         borderWidth: 0,

                                     },
                                    {
                                          label: 'Laravel',
                                          backgroundColor: '#e2e8f0',
                                          borderWidth: 0,

                                      }
                                    ]"
                            data-options="{
                                      legend: { display: true,},
                                      scales: {
                                        xAxes: [{
                                            stacked: true,
                                             barThickness:5,
                                             gridLines: {
                                                zeroLineColor: 'rgba(255,255,255,0.1)',
                                                 color: 'rgba(255,255,255,0.1)',
                                                 display: false,},
                                             }],
                                        yAxes: [{
                                                stacked: true,
                                                     gridLines: {
                                                        zeroLineColor: 'rgba(255,255,255,0.1)',
                                                        color: 'rgba(255,255,255,0.1)',
                                                    }
                                       }]

                                      }
                                }"
                    >
                    </canvas>
                </div>
            </div>
            <div class="card-body">
                <div class="row my-3 no-gutters">
                    <div class="col-md-3">
                        <h1>Tasks</h1>
                        Currently assigned tasks to team.
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3">
                                        <h6>New Layout</h6>
                                        <small>75% Completed</small>
                                    </div>
                                    <figure class="avatar">
                                        <img src="<?php echo $images;?>dummy/u12.png" alt=""></figure>
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3">
                                        <h6>New Layout</h6>
                                        <small>75% Completed</small>
                                    </div>
                                    <figure class="avatar">
                                        <img src="<?php echo $images;?>dummy/u2.png" alt=""></figure>
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 75%;"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3">
                                        <h6>New Layout</h6>
                                        <small>75% Completed</small>
                                    </div>
                                    <div class="avatar-group">
                                        <figure class="avatar">
                                            <img src="<?php echo $images;?>dummy/u4.png" alt=""></figure>
                                        <figure class="avatar">
                                            <img src="<?php echo $images;?>dummy/u11.png" alt=""></figure>
                                        <figure class="avatar">
                                            <img src="<?php echo $images;?>dummy/u1.png" alt=""></figure>
                                    </div>
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar yellow" role="progressbar" style="width: 75%;"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3">
                                        <h6>New Layout</h6>
                                        <small>75% Completed</small>
                                    </div>
                                    <figure class="avatar">
                                        <img src="<?php echo $images;?>dummy/u5.png" alt=""></figure>
                                </div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" row my-3">
            <div class="col-md-6">
                <div class=" card b-0">
                    <div class="card-body p-5">
                        <canvas id="gradientChart" width="600" height="340"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" card no-b">
                    <div class="card-body">
                        <table class="table table-hover earning-box">
                            <tbody>
                            <tr class="no-b">
                                <td class="w-10">
                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                        <img src="<?php echo $images;?>dummy/u6.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <h6>Sara Kamzoon</h6>
                                    <small class="text-muted">Marketing Manager</small>
                                </td>
                                <td>25</td>
                                <td>$250</td>
                            </tr>
                            <tr>
                                <td class="w-10">
                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                        <img src="<?php echo $images;?>dummy/u9.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <h6>Sara Kamzoon</h6>
                                    <small class="text-muted">Marketing Manager</small>
                                </td>
                                <td>25</td>
                                <td>$250</td>
                            </tr>
                            <tr>
                                <td class="w-10">
                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                        <img src="<?php echo $images;?>dummy/u11.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <h6>Sara Kamzoon</h6>
                                    <small class="text-muted">Marketing Manager</small>
                                </td>
                                <td>25</td>
                                <td>$250</td>
                            </tr>
                            <tr>
                                <td class="w-10">
                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                        <img src="<?php echo $images;?>dummy/u12.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <h6>Sara Kamzoon</h6>
                                    <small class="text-muted">Marketing Manager</small>
                                </td>
                                <td>25</td>
                                <td>$250</td>
                            </tr>
                            <tr>
                                <td class="w-10">
                                    <a href="panel-page-profile.html" class="avatar avatar-lg">
                                        <img src="<?php echo $images;?>dummy/u5.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <h6>Sara Kamzoon</h6>
                                    <small class="text-muted">Marketing Manager</small>
                                </td>
                                <td>25</td>
                                <td>$250</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Right Sidebar -->
<aside class="control-sidebar fixed white ">
    <div class="slimScroll">
        <div class="sidebar-header">
            <h4>Activity List</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-3">
            <div>
                <div class="my-3">
                    <small>25% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>45% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>60% Complete</small>
                    `
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>75% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="my-3">
                    <small>100% Complete</small>
                    <div class="progress" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 bg-primary text-white">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="font-weight-normal s-14">Sodium</h5>
                    <span class="font-weight-lighter text-primary">Spark Bar</span>
                    <div> Oxygen
                        <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                            data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                            data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                <tbody>
                <tr>
                    <td>
                        <a href="#">INV-281281</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 1228.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-01112</a>
                    </td>
                    <td>
                        <span class="badge badge-warning">Overdue</span>
                    </td>
                    <td>$ 5685.28</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">INV-281012</a>
                    </td>
                    <td>
                        <span class="badge badge-success">Paid</span>
                    </td>
                    <td>$ 152.28</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="sidebar-header">
            <h4>Activity</h4>
            <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
        </div>
        <div class="p-4">
            <div class="activity-item activity-primary">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 5 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-danger">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 8 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-success">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 10 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                </div>
            </div>
            <div class="activity-item activity-warning">
                <div class="activity-content">
                    <small class="text-muted">
                        <i class="icon icon-user position-left"></i> 12 mins ago
                    </small>
                    <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>