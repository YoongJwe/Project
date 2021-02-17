<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta
            name="description"
            content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

        <title>Blockchain Class</title>

        <!-- GOOGLE FONTS -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
            rel="stylesheet"/>
        <link
            href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css"
            rel="stylesheet"/>

        <!-- PLUGINS CSS STYLE -->
        <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet"/>

        <!-- No Extra plugin used -->

        <link
            href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"
            rel="stylesheet"/>

        <link
            href="assets/plugins/daterangepicker/daterangepicker.css"
            rel="stylesheet"/>

        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet"/>

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css"/>

        <!-- FAVICON -->
        <link href="assets/img/logo.png" rel="shortcut icon"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
        <script src="assets/plugins/nprogress/nprogress.js"></script>

        <!-- jQuery  -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>        
        <!-- CHART HS -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    </head>

    <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

        <script>
            NProgress.configure({showSpinner: false});
            NProgress.start();
        </script>

        <div id="toaster"></div>

        <div class="wrapper">
            <!-- Github Link -->
            <a
                href="https://github.com/tafcoder/sleek-dashboard"
                target="_blank"
                class="github-link">
                <svg width="70" height="70" viewbox="0 0 250 250" aria-hidden="true">
                    <defs>
                        <lineargradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#896def;stop-opacity:1"/>
                            <stop offset="100%" style="stop-color:#482271;stop-opacity:1"/>
                        </lineargradient>
                    </defs>
                    <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
                </svg>
                <i class="mdi mdi-github-circle"></i>
            </a>

            <?php include $_SERVER['DOCUMENT_ROOT'].'/layout/left_nav.php';?>

            <div class="page-wrapper">

                <?php include $_SERVER['DOCUMENT_ROOT'].'/layout/header.php';?>

                <div class="content-wrapper">
                    <div class="content">
                        <!-- Top Statistics -->
                        <div class="row">
                            <div
                                class="chart-container"
                                style="position: relative; height:30%; width:30%; float:left;">
                                <canvas id="cpu"></canvas>
                            </div>

                            <div
                                class="chart-container"
                                style="position: relative; height:30%; width:30%; float:left;">
                                <canvas id="memory"></canvas>
                            </div>

                            <div
                                class="chart-container"
                                style="position: relative; height:30%; width:30%; float:left;">
                                <canvas id="disk"></canvas>
                            </div>
                        </div>
                        

                         

                        <script>
                        var usedCpu = 20;
                        var usedMemory = 20;
                        var usedDisk = 20;
                        var totalCpu;
                        var totalMemory;
                        var totalDisk;

                        function getTotal(){
                            totalCpu = 100-usedCpu;
                            totalMemory = 100-usedMemory;
                            totalDisk = 100-usedDisk;
                        };
                        getTotal();
                        
                        var cpuChart = document
                            .getElementById('cpu')
                            .getContext('2d');
                        var memoryChart = document
                            .getElementById('memory')
                            .getContext('2d');
                        var diskChart = document
                            .getElementById('disk')
                            .getContext('2d');

                        var cpuChart = new Chart(cpuChart, {
                            type: 'doughnut',
                            data: {
                                labels: [
                                    '전체 CPU', '사용중인 CPU'
                                ],
                                datasets: [
                                    {
                                        label: '# of Votes',
                                        data: [
                                            totalCpu, usedCpu
                                        ],
                                        backgroundColor: [
                                            'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }
                                ]
                            },
                            options: {
                                animation: {
                                    duration: 0
                                }, 
                                scales: {
                                    yAxes: [
                                        {
                                            gridLines: {
                                                display: false
                                            },
                                            ticks: {
                                                display: false
                                            }
                                        }
                                    ],
                                    xAxes: [
                                        {
                                            gridLines: {
                                                display: false
                                            },
                                            ticks: {
                                                display: false
                                            }
                                        }
                                    ]
                                }
                            }
                        });

                        var memoryChart = new Chart(memoryChart, {
                            type: 'doughnut',
                            data: {
                                labels: [
                                    '전체 RAM', '사용중인 RAM'
                                ],
                                datasets: [
                                    {
                                        label: '# of Votes',
                                        data: [
                                            totalMemory, usedMemory
                                        ],
                                        backgroundColor: [
                                            'rgba(202,219,255,0.8)', 'rgba(255, 197,202, 1)'
                                        ],
                                        borderColor: [
                                            'rgba(144,179,255,1)', 'rgba(254, 128,138,1)'
                                        ],
                                        borderWidth: 1
                                    }
                                ]
                            },
                            options: {
                                animation: {
                                    duration: 0
                                }, 
                               scales: {
                                    yAxes: [
                                        {
                                            gridLines: {
                                                display: false
                                            },
                                            ticks: {
                                                display: false
                                            }
                                        }
                                    ],
                                    xAxes: [
                                        {
                                            gridLines: {
                                                display: false
                                            },
                                            ticks: {
                                                display: false
                                            }
                                        }
                                    ]
                                }
                            }
                        });

                        var diskChart = new Chart(diskChart, {
                            type: 'doughnut',
                            data: {
                                labels: [
                                    '전체 DISK', '사용중인 DISK'
                                ],
                                datasets: [
                                    {
                                        label: '# of Votes',
                                        data: [
                                            totalDisk, usedDisk
                                        ],
                                        backgroundColor: [
                                            'rgba(148, 229, 203, 0.5)', 'rgba(255,2,175,0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(45,167,128,0.7)', 'rgba(255,2,175,0.4)'
                                        ],
                                        borderWidth: 1
                                    }
                                ]
                            },
                            options: {
                                animation: {
                                    duration: 0
                                }, 
                                scales: {
                                    yAxes: [
                                        {
                                            gridLines: {
                                                display: false
                                            },
                                            ticks: {
                                                display: false
                                            }
                                        }
                                    ],
                                    xAxes: [
                                        {
                                            gridLines: {
                                                display: false
                                            },
                                            ticks: {
                                                display: false
                                            }
                                        }
                                    ]
                                }
                            }
                        });

                        $(function () {
                            
                            setInterval(() => {
                                $.ajax({
                                    type: 'get',
                                    url: 'exe.php',
                                    success: function (data) {
                                        //console.log(data);
                                    }
                                });
                                $.ajax({
                                    type: 'get',
                                    url: 'monitering.json',
                                    dataType: 'json',
                                    success: function (data) {
                                        usedCpu=data["cpu"];
                                        usedMemory=data["memory"];
                                        usedDisk=data["disk"];
                                        getTotal();

                                        cpuChart.data.datasets[0].data = [totalCpu, usedCpu];
                                        memoryChart.data.datasets[0].data = [totalMemory, usedMemory];
                                        diskChart.data.datasets[0].data = [totalDisk, usedDisk];
                                        cpuChart.update();
                                        memoryChart.update();
                                        diskChart.update();

                                        console.log(usedCpu);
                                        console.log(usedMemory);
                                        console.log(usedDisk);


                                    }
                                });
                         }, 1000);
                         
                        
                        });

                        </script>

                        <div class="row">
                            <div class="col-xl-8 col-md-12">
                                <!-- Sales Graph -->
                                <div class="card card-default" data-scroll-height="675">
                                    <div class="card-header">
                                        <h2>Sales Of The Year</h2>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="linechart" class="chartjs"></canvas>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                                        <div class="col-6 px-0">
                                            <div class="text-center p-4">
                                                <h4>$6,308</h4>
                                                <p class="mt-2">Total orders of this year</p>
                                            </div>
                                        </div>
                                        <div class="col-6 px-0">
                                            <div class="text-center p-4 border-left">
                                                <h4>$70,506</h4>
                                                <p class="mt-2">Total revenue of this year</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <!-- Doughnut Chart -->
                                <div class="card card-default" data-scroll-height="675">
                                    <div class="card-header justify-content-center">
                                        <h2>Orders Overview</h2>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="doChart"></canvas>
                                    </div>
                                    <a href="#" class="pb-5 d-block text-center text-muted">
                                        <i class="mdi mdi-download mr-2"></i>
                                        Download overall report</a>
                                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                                        <div class="col-6">
                                            <div class="py-4 px-4">
                                                <ul class="d-flex flex-column justify-content-between">
                                                    <li class="mb-2">
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>
                                                    <li>
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1 "></i>Order Unpaid</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 border-left">
                                            <div class="py-4 px-4 ">
                                                <ul class="d-flex flex-column justify-content-between">
                                                    <li class="mb-2">
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>
                                                    <li>
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Order Canceled</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12">

                                <!-- Polar and Radar Chart -->
                                <div class="card card-default">
                                    <div class="card-header justify-content-center">
                                        <h2>Sales Overview</h2>
                                    </div>
                                    <div class="card-body pt-0">
                                        <ul
                                            class="nav nav-pills mb-5 mt-5 nav-style-fill nav-justified"
                                            id="pills-tab"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link active"
                                                    id="pills-home-tab"
                                                    data-toggle="pill"
                                                    href="#pills-home"
                                                    role="tab"
                                                    aria-controls="pills-home"
                                                    aria-selected="true">Sales Status</a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    id="pills-profile-tab"
                                                    data-toggle="pill"
                                                    href="#pills-profile"
                                                    role="tab"
                                                    aria-controls="pills-profile"
                                                    aria-selected="false">Monthly Sales</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div
                                                class="tab-pane fade show active"
                                                id="pills-home"
                                                role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <canvas id="polar"></canvas>
                                            </div>
                                            <div
                                                class="tab-pane fade"
                                                id="pills-profile"
                                                role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <canvas id="radar"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-6 col-12">
                                <!-- Top Sell Table -->
                                <div class="card card-table-border-none" data-scroll-height="550">
                                    <div class="card-header justify-content-between">
                                        <h2>Sold by Units</h2>
                                        <div>
                                            <button class="text-black-50 mr-2 font-size-20">
                                                <i class="mdi mdi-cached"></i>
                                            </button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a
                                                    class="dropdown-toggle icon-burger-mini"
                                                    href="#"
                                                    role="button"
                                                    id="dropdown-units"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-display="static"></a>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
                                                    <li class="dropdown-item">
                                                        <a href="#">Action</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Another action</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body slim-scroll py-0">
                                        <table class="table ">
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark">Backpack</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-right">33%
                                                        <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">T-Shirt</td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-right">150%
                                                        <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Coat</td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-right">50%
                                                        <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Necklace</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-right">150%
                                                        <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Jeans Pant</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-right">300%
                                                        <i class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Shoes</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-right">100%
                                                        <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">T-Shirt</td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-right">150%
                                                        <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="card-footer bg-white py-4">
                                        <a href="#" class="btn-link py-3 text-uppercase">View Report</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-12">
                                <!-- Notification Table -->
                                <div class="card card-default" data-scroll-height="550">
                                    <div class="card-header justify-content-between ">
                                        <h2>Latest Notifications</h2>
                                        <div>
                                            <button class="text-black-50 mr-2 font-size-20">
                                                <i class="mdi mdi-cached"></i>
                                            </button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a
                                                    class="dropdown-toggle icon-burger-mini"
                                                    href="#"
                                                    role="button"
                                                    id="dropdown-notification"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-display="static"></a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdown-notification">
                                                    <li class="dropdown-item">
                                                        <a href="#">Action</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Another action</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body slim-scroll">
                                        <div class="media pb-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                <i class="mdi mdi-cart-outline font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3 ">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Order</a>
                                                <p >Selena has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                10 AM</span>
                                        </div>

                                        <div class="media py-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                                <i class="mdi mdi-email-outline font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                                                <p >Phileine has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                9 AM</span>
                                        </div>

                                        <div class="media py-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                <i class="mdi mdi-stack-exchange font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                                                <p >Emma has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                10 AM</span>
                                        </div>

                                        <div class="media py-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                <i class="mdi mdi-cart-outline font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New order</a>
                                                <p >Ryan has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                10 AM</span>
                                        </div>

                                        <div class="media py-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                <i class="mdi mdi-calendar-blank font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
                                                <p >Phileine has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                10 AM</span>
                                        </div>

                                        <div class="media py-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                <i class="mdi mdi-stack-exchange font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                                                <p >Emma has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                10 AM</span>
                                        </div>

                                        <div class="media py-3 align-items-center justify-content-between">
                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                                <i class="mdi mdi-email-outline font-size-20"></i>
                                            </div>
                                            <div class="media-body pr-3">
                                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                                                <p >Phileine has placed an new order</p>
                                            </div>
                                            <span class=" font-size-12 d-inline-block">
                                                <i class="mdi mdi-clock-outline"></i>
                                                9 AM</span>
                                        </div>

                                    </div>
                                    <div class="mt-3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <!-- Recent Order Table -->
                                <div class="card card-table-border-none" id="recent-orders">
                                    <div class="card-header justify-content-between">
                                        <h2>Recent Orders</h2>
                                        <div class="date-range-report ">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-5">
                                        <table
                                            class="table card-table table-responsive table-responsive-large"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Product Name</th>
                                                    <th class="d-none d-lg-table-cell">Units</th>
                                                    <th class="d-none d-lg-table-cell">Order Date</th>
                                                    <th class="d-none d-lg-table-cell">Order Cost</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td >24541</td>
                                                    <td >
                                                        <a class="text-dark" href="">
                                                            Coach Swagger</a>
                                                    </td>
                                                    <td class="d-none d-lg-table-cell">1 Unit</td>
                                                    <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
                                                    <td class="d-none d-lg-table-cell">$230</td>
                                                    <td >
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown show d-inline-block widget-dropdown">
                                                            <a
                                                                class="dropdown-toggle icon-burger-mini"
                                                                href=""
                                                                role="button"
                                                                id="dropdown-recent-order1"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-display="static"></a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdown-recent-order1">
                                                                <li class="dropdown-item">
                                                                    <a href="#">View</a>
                                                                </li>
                                                                <li class="dropdown-item">
                                                                    <a href="#">Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >24541</td>
                                                    <td >
                                                        <a class="text-dark" href="">
                                                            Toddler Shoes, Gucci Watch</a>
                                                    </td>
                                                    <td class="d-none d-lg-table-cell">2 Units</td>
                                                    <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
                                                    <td class="d-none d-lg-table-cell">$550</td>
                                                    <td >
                                                        <span class="badge badge-warning">Delayed</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown show d-inline-block widget-dropdown">
                                                            <a
                                                                class="dropdown-toggle icon-burger-mini"
                                                                href="#"
                                                                role="button"
                                                                id="dropdown-recent-order2"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-display="static"></a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdown-recent-order2">
                                                                <li class="dropdown-item">
                                                                    <a href="#">View</a>
                                                                </li>
                                                                <li class="dropdown-item">
                                                                    <a href="#">Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >24541</td>
                                                    <td >
                                                        <a class="text-dark" href="">
                                                            Hat Black Suits</a>
                                                    </td>
                                                    <td class="d-none d-lg-table-cell">1 Unit</td>
                                                    <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
                                                    <td class="d-none d-lg-table-cell">$325</td>
                                                    <td >
                                                        <span class="badge badge-warning">On Hold</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown show d-inline-block widget-dropdown">
                                                            <a
                                                                class="dropdown-toggle icon-burger-mini"
                                                                href="#"
                                                                role="button"
                                                                id="dropdown-recent-order3"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-display="static"></a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdown-recent-order3">
                                                                <li class="dropdown-item">
                                                                    <a href="#">View</a>
                                                                </li>
                                                                <li class="dropdown-item">
                                                                    <a href="#">Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >24541</td>
                                                    <td >
                                                        <a class="text-dark" href="">
                                                            Backpack Gents, Swimming Cap Slin</a>
                                                    </td>
                                                    <td class="d-none d-lg-table-cell">5 Units</td>
                                                    <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
                                                    <td class="d-none d-lg-table-cell">$200</td>
                                                    <td >
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown show d-inline-block widget-dropdown">
                                                            <a
                                                                class="dropdown-toggle icon-burger-mini"
                                                                href="#"
                                                                role="button"
                                                                id="dropdown-recent-order4"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-display="static"></a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdown-recent-order4">
                                                                <li class="dropdown-item">
                                                                    <a href="#">View</a>
                                                                </li>
                                                                <li class="dropdown-item">
                                                                    <a href="#">Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >24541</td>
                                                    <td >
                                                        <a class="text-dark" href="">
                                                            Speed 500 Ignite</a>
                                                    </td>
                                                    <td class="d-none d-lg-table-cell">1 Unit</td>
                                                    <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
                                                    <td class="d-none d-lg-table-cell">$150</td>
                                                    <td >
                                                        <span class="badge badge-danger">Cancelled</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown show d-inline-block widget-dropdown">
                                                            <a
                                                                class="dropdown-toggle icon-burger-mini"
                                                                href="#"
                                                                role="button"
                                                                id="dropdown-recent-order5"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false"
                                                                data-display="static"></a>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdown-recent-order5">
                                                                <li class="dropdown-item">
                                                                    <a href="#">View</a>
                                                                </li>
                                                                <li class="dropdown-item">
                                                                    <a href="#">Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <!-- To Do list -->
                                <div class="card card-default todo-table" id="todo" data-scroll-height="550">
                                    <div class="card-header justify-content-between">
                                        <h2>To Do List</h2>
                                        <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button">
                                            Add task
                                        </a>
                                    </div>
                                    <div class="card-body slim-scroll">
                                        <div class="todo-single-item d-none" id="todo-input">
                                            <form >
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Enter Todo"
                                                        autofocus="autofocus">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="todo-list" id="todo-list">
                                            <div class="todo-single-item d-flex flex-row justify-content-between finished">
                                                <i class="mdi"></i>
                                                <span >Finish Dashboard UI Kit update</span>
                                                <span class="badge badge-primary">Finished</span>
                                            </div>
                                            <div class="todo-single-item d-flex flex-row justify-content-between current">
                                                <i class="mdi"></i>
                                                <span >Create new prototype for the landing page</span>
                                                <span class="badge badge-primary">Today</span>
                                            </div>
                                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                                <i class="mdi"></i>
                                                <span >
                                                    Add new Google Analytics code to all main files
                                                </span>
                                                <span class="badge badge-danger">Yesterday</span>
                                            </div>

                                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                                <i class="mdi"></i>
                                                <span >Update parallax scroll on team page</span>
                                                <span class="badge badge-success">Dec 15, 2018</span>
                                            </div>

                                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                                <i class="mdi"></i>
                                                <span >Update parallax scroll on team page</span>
                                                <span class="badge badge-success">Dec 15, 2018</span>
                                            </div>
                                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                                <i class="mdi"></i>
                                                <span >Create online customer list book</span>
                                                <span class="badge badge-success">Dec 15, 2018</span>
                                            </div>
                                            <div class="todo-single-item d-flex flex-row justify-content-between ">
                                                <i class="mdi"></i>
                                                <span >Lorem ipsum dolor sit amet, consectetur.</span>
                                                <span class="badge badge-success">Dec 15, 2018</span>
                                            </div>

                                            <div class="todo-single-item d-flex flex-row justify-content-between mb-1">
                                                <i class="mdi"></i>
                                                <span >Update parallax scroll on team page</span>
                                                <span class="badge badge-success">Dec 15, 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3"></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!-- area chart -->
                                <div class="card card-default">
                                    <div class="card-header d-block d-md-flex justify-content-between">
                                        <h2>World Wide Customer
                                        </h2>
                                        <div class="dropdown show d-inline-block widget-dropdown ml-auto">
                                            <a
                                                class="dropdown-toggle"
                                                href="#"
                                                role="button"
                                                id="world-dropdown"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-display="static">
                                                World Wide
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="world-dropdown">
                                                <li class="dropdown-item">
                                                    <a href="#">Continetal chart</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Sub-continental</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body vector-map-world">
                                        <div id="world" style="height: 100%; width: 100%;"></div>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                                        <div class="col-6">
                                            <div class="p-4">
                                                <ul class="d-flex flex-column justify-content-between">
                                                    <li class="mb-2">
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #29cc97"></i>America
                                                        <span class="float-right">5k</span></li>
                                                    <li>
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff "></i>Australia
                                                        <span class="float-right">3k</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-4 border-left">
                                                <ul class="d-flex flex-column justify-content-between">
                                                    <li class="mb-2">
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Europe
                                                        <span class="float-right">4k</span></li>
                                                    <li>
                                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #fe5461"></i>Africa
                                                        <span class="float-right">2k</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-5">
                                <!-- New Customers -->
                                <div class="card card-table-border-none" data-scroll-height="580">
                                    <div class="card-header justify-content-between ">
                                        <h2>New Customers</h2>
                                        <div>
                                            <button class="text-black-50 mr-2 font-size-20">
                                                <i class="mdi mdi-cached"></i>
                                            </button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a
                                                    class="dropdown-toggle icon-burger-mini"
                                                    href="#"
                                                    role="button"
                                                    id="dropdown-customar"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-display="static"></a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdown-customar">
                                                    <li class="dropdown-item">
                                                        <a href="#">Action</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Another action</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <table class="table ">
                                            <tbody>
                                                <tr>
                                                    <td >
                                                        <div class="media">
                                                            <div class="media-image mr-3 rounded-circle">
                                                                <a href="profile.html"><img
                                                                    class="rounded-circle w-45"
                                                                    src="assets/img/user/u1.jpg"
                                                                    alt="customer image"></a>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <a href="profile.html">
                                                                    <h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6>
                                                                </a>
                                                                <small>@selena.oi</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td >2 Orders</td>
                                                    <td class="text-dark d-none d-md-block">$150</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <div class="media">
                                                            <div class="media-image mr-3 rounded-circle">
                                                                <a href="profile.html"><img
                                                                    class="rounded-circle w-45"
                                                                    src="assets/img/user/u2.jpg"
                                                                    alt="customer image"></a>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <a href="profile.html">
                                                                    <h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6>
                                                                </a>
                                                                <small>@walter.me</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td >5 Orders</td>
                                                    <td class="text-dark d-none d-md-block">$200</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <div class="media">
                                                            <div class="media-image mr-3 rounded-circle">
                                                                <a href="profile.html"><img
                                                                    class="rounded-circle w-45"
                                                                    src="assets/img/user/u3.jpg"
                                                                    alt="customer image"></a>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <a href="profile.html">
                                                                    <h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6>
                                                                </a>
                                                                <small>@larissa.gb</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td >1 Order</td>
                                                    <td class="text-dark d-none d-md-block">$50</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <div class="media">
                                                            <div class="media-image mr-3 rounded-circle">
                                                                <a href="profile.html"><img
                                                                    class="rounded-circle w-45"
                                                                    src="assets/img/user/u4.jpg"
                                                                    alt="customer image"></a>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <a href="profile.html">
                                                                    <h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6>
                                                                </a>
                                                                <small>@albrech.as</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td >2 Orders</td>
                                                    <td class="text-dark d-none d-md-block">$100</td>
                                                </tr>
                                                <tr>
                                                    <td >
                                                        <div class="media">
                                                            <div class="media-image mr-3 rounded-circle">
                                                                <a href="profile.html"><img
                                                                    class="rounded-circle w-45"
                                                                    src="assets/img/user/u5.jpg"
                                                                    alt="customer image"></a>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <a href="profile.html">
                                                                    <h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6>
                                                                </a>
                                                                <small>@leopold.et</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td >1 Order</td>
                                                    <td class="text-dark d-none d-md-block">$60</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <!-- Top Products -->
                                <div class="card card-default" data-scroll-height="580">
                                    <div class="card-header justify-content-between mb-4">
                                        <h2>Top Products</h2>
                                        <div>
                                            <button class="text-black-50 mr-2 font-size-20">
                                                <i class="mdi mdi-cached"></i>
                                            </button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a
                                                    class="dropdown-toggle icon-burger-mini"
                                                    href="#"
                                                    role="button"
                                                    id="dropdown-product"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-display="static"></a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdown-product">
                                                    <li class="dropdown-item">
                                                        <a href="#">Update Data</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Detailed Log</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Statistics</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="#">Clear Data</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body py-0">
                                        <div class="media d-flex mb-5">
                                            <div class="media-image align-self-center mr-3 rounded">
                                                <a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="#">
                                                    <h6 class="mb-3 text-dark font-weight-medium">
                                                        Coach Swagger</h6>
                                                </a>
                                                <p class="float-md-right">
                                                    <span class="text-dark mr-2">20</span>Sales</p>
                                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                                                <p class="mb-0">
                                                    <del>$300</del>
                                                    <span class="text-dark ml-3">$250</span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="media d-flex mb-5">
                                            <div class="media-image align-self-center mr-3 rounded">
                                                <a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="#">
                                                    <h6 class="mb-3 text-dark font-weight-medium">
                                                        Coach Swagger</h6>
                                                </a>
                                                <p class="float-md-right">
                                                    <span class="text-dark mr-2">20</span>Sales</p>
                                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                                                <p class="mb-0">
                                                    <del>$300</del>
                                                    <span class="text-dark ml-3">$250</span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="media d-flex mb-5">
                                            <div class="media-image align-self-center mr-3 rounded">
                                                <a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="#">
                                                    <h6 class="mb-3 text-dark font-weight-medium">
                                                        Gucci Watch</h6>
                                                </a>
                                                <p class="float-md-right">
                                                    <span class="text-dark mr-2">10</span>Sales</p>
                                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                                                <p class="mb-0">
                                                    <del>$300</del>
                                                    <span class="text-dark ml-3">$50</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-sidebar-2">
                        <div class="right-sidebar-container-2">
                            <div class="slim-scroll-right-sidebar-2">

                                <div class="right-sidebar-2-header">
                                    <h2>Layout Settings</h2>
                                    <p>User Interface Settings</p>
                                    <div class="btn-close-right-sidebar-2">
                                        <i class="mdi mdi-window-close"></i>
                                    </div>
                                </div>

                                <div class="right-sidebar-2-body">
                                    <span class="right-sidebar-2-subtitle">Header Layout</span>
                                    <div class="no-col-space">
                                        <a
                                            href="javascript:void(0);"
                                            class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                                        <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
                                    </div>

                                    <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
                                    <div class="no-col-space">
                                        <select class="right-sidebar-2-select" id="sidebar-option-select">
                                            <option value="sidebar-fixed">Fixed Default</option>
                                            <option value="sidebar-fixed-minified">Fixed Minified</option>
                                            <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                                            <option value="sidebar-static">Static Default</option>
                                            <option value="sidebar-static-minified">Static Minified</option>
                                            <option value="sidebar-static-offcanvas">Static Offcanvas</option>
                                        </select>
                                    </div>

                                    <span class="right-sidebar-2-subtitle">Header Background</span>
                                    <div class="no-col-space">
                                        <a
                                            href="javascript:void(0);"
                                            class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
                                        <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
                                    </div>

                                    <span class="right-sidebar-2-subtitle">Navigation Background</span>
                                    <div class="no-col-space">
                                        <a
                                            href="javascript:void(0);"
                                            class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
                                        <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
                                    </div>

                                    <span class="right-sidebar-2-subtitle">Direction</span>
                                    <div class="no-col-space">
                                        <a
                                            href="javascript:void(0);"
                                            class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
                                        <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
                                    </div>

                                    <div class="d-flex justify-content-center" style="padding-top: 30px">
                                        <div
                                            id="reset-options"
                                            style="width: auto; cursor: pointer"
                                            class="btn-right-sidebar-2 btn-reset">Reset Settings</div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <footer class="footer mt-auto">
                    <div class="copyright bg-white">
                        <p>
                            &copy;
                            <span id="copy-year">2019</span>
                            Copyright Sleek Dashboard Bootstrap Template by
                            <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a >.
                        </p>
                    </div>
                    <script>
                        var d = new Date();
                        var year = d.getFullYear();
                        document
                            .getElementById("copy-year")
                            .innerHTML = year;
                    </script>
                </footer>

            </div>
        </div>

        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jekyll-search.min.js"></script>

        <script src="assets/plugins/charts/Chart.min.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>

        <script src="assets/plugins/daterangepicker/moment.min.js"></script>
        <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script>
            jQuery(document).ready(function () {
                jQuery('input[name="dateRange"]').daterangepicker({
                    autoUpdateInput: false,
                    singleDatePicker: true,
                    locale: {
                        cancelLabel: 'Clear'
                    }
                });
                jQuery('input[name="dateRange"]').on(
                    'apply.daterangepicker',
                    function (ev, picker) {
                        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                    }
                );
                jQuery('input[name="dateRange"]').on(
                    'cancel.daterangepicker',
                    function (ev, picker) {
                        jQuery(this).val('');
                    }
                );
            });
        </script>

        <script src="assets/plugins/toastr/toastr.min.js"></script>

        <script src="assets/js/sleek.bundle.js"></script>
    </body>

</html>