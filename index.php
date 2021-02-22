<!DOCTYPE html>
<?php include $_SERVER["DOCUMENT_ROOT"]."/login/login_session_check.php";?>

<html lang="ko">
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
        <link
            href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"
            rel="stylesheet"/>
        <link
            href="assets/plugins/daterangepicker/daterangepicker.css"
            rel="stylesheet"/>
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/sleek.css"/>
        <link rel="stylesheet" href="assets/css/custom.css"/>

        <!-- FAVICON -->
        <link href="assets/img/logo.png" rel="shortcut icon"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
        <script src="assets/plugins/nprogress/nprogress.js"></script>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
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

                        <div class="row">
                            <div class="col-xl-12 col-md-12 graph">
                                <canvas id="graph" style="display: block; height: 300px; width: 798px;"></canvas>
                            </div>

                            <?php
                                $conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' ) ;
                                $sqlForCpu = "select per, time from cpu order by idx desc limit 30;";
                                $sqlForMemory = "select per from memory order by idx desc limit 30;";
                                $sqlForDisk = "select per from disk order by idx desc limit 30;";

                                $resultForCpu = mysqli_query( $conn, $sqlForCpu );
                                $resultForMemory = mysqli_query( $conn, $sqlForMemory );
                                $resultForDisk = mysqli_query( $conn, $sqlForDisk );


                                // echo " $result";
                                echo "<div class='graph-data-cpu display-none'>";
                                while($row = mysqli_fetch_array($resultForCpu)) {           
                                echo "<dl>";
                                echo "<dt>" . $row['per'] . "</dt>";
                                echo "<dd>" . $row['time'] . "</dd>";
                                echo "</dl>";
                                }
                                echo "</div>";
                            
                                echo "<ul class='graph-data-memory display-none'>";
                                while($row2 = mysqli_fetch_array($resultForMemory)) {           
                                echo "<li>" . $row2['per'] . "</li>";
                                }
                                echo "</ul>";
                            
                                echo "<ul class='graph-data-disk display-none'>";
                                while($row3 = mysqli_fetch_array($resultForDisk)) {           
                                echo "<li>" . $row3['per'] . "</li>";
                                }
                                echo "</ul>";
                            ?>

                            <script>
                                var time = $('.graph-data-cpu dd');
                                var perCpu = $('.graph-data-cpu dt');
                                var perMemory = $('.graph-data-memory li');
                                var perDisk = $('.graph-data-disk li');

                                var config = {
                                    type: 'line',
                                    data: {
                                        labels: [
                                            time
                                                .eq(29)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(28)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(27)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(26)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(25)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(24)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(23)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(22)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(21)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(20)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(19)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(18)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(17)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(16)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(15)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(14)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(13)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(12)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(11)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(10)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(9)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(8)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(7)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(6)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(5)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(4)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(3)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(2)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(1)
                                                .text()
                                                .substring(11, 19),
                                            time
                                                .eq(0)
                                                .text()
                                                .substring(11, 19)
                                        ],
                                        datasets: [
                                            {
                                                label: 'CPU',
                                                data: [
                                                    perCpu
                                                        .eq(29)
                                                        .text(),
                                                    perCpu
                                                        .eq(28)
                                                        .text(),
                                                    perCpu
                                                        .eq(27)
                                                        .text(),
                                                    perCpu
                                                        .eq(26)
                                                        .text(),
                                                    perCpu
                                                        .eq(25)
                                                        .text(),
                                                    perCpu
                                                        .eq(24)
                                                        .text(),
                                                    perCpu
                                                        .eq(23)
                                                        .text(),
                                                    perCpu
                                                        .eq(22)
                                                        .text(),
                                                    perCpu
                                                        .eq(21)
                                                        .text(),
                                                    perCpu
                                                        .eq(20)
                                                        .text(),
                                                    perCpu
                                                        .eq(19)
                                                        .text(),
                                                    perCpu
                                                        .eq(18)
                                                        .text(),
                                                    perCpu
                                                        .eq(17)
                                                        .text(),
                                                    perCpu
                                                        .eq(16)
                                                        .text(),
                                                    perCpu
                                                        .eq(15)
                                                        .text(),
                                                    perCpu
                                                        .eq(14)
                                                        .text(),
                                                    perCpu
                                                        .eq(13)
                                                        .text(),
                                                    perCpu
                                                        .eq(12)
                                                        .text(),
                                                    perCpu
                                                        .eq(11)
                                                        .text(),
                                                    perCpu
                                                        .eq(10)
                                                        .text(),
                                                    perCpu
                                                        .eq(9)
                                                        .text(),
                                                    perCpu
                                                        .eq(8)
                                                        .text(),
                                                    perCpu
                                                        .eq(7)
                                                        .text(),
                                                    perCpu
                                                        .eq(6)
                                                        .text(),
                                                    perCpu
                                                        .eq(5)
                                                        .text(),
                                                    perCpu
                                                        .eq(4)
                                                        .text(),
                                                    perCpu
                                                        .eq(3)
                                                        .text(),
                                                    perCpu
                                                        .eq(2)
                                                        .text(),
                                                    perCpu
                                                        .eq(1)
                                                        .text(),
                                                    perCpu
                                                        .eq(0)
                                                        .text()
                                                ],
                                                borderColor: ['rgba(76,132,255, 1)'],
                                                borderWidth: 1,
                                                fill: false
                                            }, {
                                                label: 'MEMORY',
                                                data: [
                                                    perMemory
                                                        .eq(29)
                                                        .text(),
                                                    perMemory
                                                        .eq(28)
                                                        .text(),
                                                    perMemory
                                                        .eq(27)
                                                        .text(),
                                                    perMemory
                                                        .eq(26)
                                                        .text(),
                                                    perMemory
                                                        .eq(25)
                                                        .text(),
                                                    perMemory
                                                        .eq(24)
                                                        .text(),
                                                    perMemory
                                                        .eq(23)
                                                        .text(),
                                                    perMemory
                                                        .eq(22)
                                                        .text(),
                                                    perMemory
                                                        .eq(21)
                                                        .text(),
                                                    perMemory
                                                        .eq(20)
                                                        .text(),
                                                    perMemory
                                                        .eq(19)
                                                        .text(),
                                                    perMemory
                                                        .eq(18)
                                                        .text(),
                                                    perMemory
                                                        .eq(17)
                                                        .text(),
                                                    perMemory
                                                        .eq(16)
                                                        .text(),
                                                    perMemory
                                                        .eq(15)
                                                        .text(),
                                                    perMemory
                                                        .eq(14)
                                                        .text(),
                                                    perMemory
                                                        .eq(13)
                                                        .text(),
                                                    perMemory
                                                        .eq(12)
                                                        .text(),
                                                    perMemory
                                                        .eq(11)
                                                        .text(),
                                                    perMemory
                                                        .eq(10)
                                                        .text(),
                                                    perMemory
                                                        .eq(9)
                                                        .text(),
                                                    perMemory
                                                        .eq(8)
                                                        .text(),
                                                    perMemory
                                                        .eq(7)
                                                        .text(),
                                                    perMemory
                                                        .eq(6)
                                                        .text(),
                                                    perMemory
                                                        .eq(5)
                                                        .text(),
                                                    perMemory
                                                        .eq(4)
                                                        .text(),
                                                    perMemory
                                                        .eq(3)
                                                        .text(),
                                                    perMemory
                                                        .eq(2)
                                                        .text(),
                                                    perMemory
                                                        .eq(1)
                                                        .text(),
                                                    perMemory
                                                        .eq(0)
                                                        .text()
                                                ],

                                                borderColor: ['rgba(254,196,0,1)'],
                                                borderWidth: 1,
                                                fill: false
                                            }, {
                                                label: 'DISK',
                                                data: [
                                                    perDisk
                                                        .eq(29)
                                                        .text(),
                                                    perDisk
                                                        .eq(28)
                                                        .text(),
                                                    perDisk
                                                        .eq(27)
                                                        .text(),
                                                    perDisk
                                                        .eq(26)
                                                        .text(),
                                                    perDisk
                                                        .eq(25)
                                                        .text(),
                                                    perDisk
                                                        .eq(24)
                                                        .text(),
                                                    perDisk
                                                        .eq(23)
                                                        .text(),
                                                    perDisk
                                                        .eq(22)
                                                        .text(),
                                                    perDisk
                                                        .eq(21)
                                                        .text(),
                                                    perDisk
                                                        .eq(20)
                                                        .text(),
                                                    perDisk
                                                        .eq(19)
                                                        .text(),
                                                    perDisk
                                                        .eq(18)
                                                        .text(),
                                                    perDisk
                                                        .eq(17)
                                                        .text(),
                                                    perDisk
                                                        .eq(16)
                                                        .text(),
                                                    perDisk
                                                        .eq(15)
                                                        .text(),
                                                    perDisk
                                                        .eq(14)
                                                        .text(),
                                                    perDisk
                                                        .eq(13)
                                                        .text(),
                                                    perDisk
                                                        .eq(12)
                                                        .text(),
                                                    perDisk
                                                        .eq(11)
                                                        .text(),
                                                    perDisk
                                                        .eq(10)
                                                        .text(),
                                                    perDisk
                                                        .eq(9)
                                                        .text(),
                                                    perDisk
                                                        .eq(8)
                                                        .text(),
                                                    perDisk
                                                        .eq(7)
                                                        .text(),
                                                    perDisk
                                                        .eq(6)
                                                        .text(),
                                                    perDisk
                                                        .eq(5)
                                                        .text(),
                                                    perDisk
                                                        .eq(4)
                                                        .text(),
                                                    perDisk
                                                        .eq(3)
                                                        .text(),
                                                    perDisk
                                                        .eq(2)
                                                        .text(),
                                                    perDisk
                                                        .eq(1)
                                                        .text(),
                                                    perDisk
                                                        .eq(0)
                                                        .text()
                                                ],

                                                borderColor: ['rgba(255,112,141,1)'],
                                                borderWidth: 1,
                                                fill: false
                                            }
                                        ]
                                    },
                                    options: {
                                        responsive: true,
                                        // maintainAspectRatio:
                                        scales: {
                                            yAxes: [
                                                {
                                                    beginAtZero: true,

                                                    ticks: {
                                                        suggestedMin: 0,
                                                        suggestedMax: 100
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                }

                                window.onload = function () {
                                    var graphEL = document
                                        .getElementById('graph')
                                        .getContext('2d');
                                    window.graph = new Chart(graphEL, config);
                                };
                            </script>
                        </div>

                        <!-- 도넛 차트 부분 -->
                        <div class="row">
                            <div class="monitering chart-container col-xl-4 col-md-12">
                                <div class="guide">
                                    <h4>CPU</h4>
                                    <ul class="width60 cpu">
                                        <li>전체 :
                                            <span class="total"></span>%</li>
                                        <li>사용중 :
                                            <span class="used"></span>%</li>
                                        <li><span class="per"></span>%</li>
                                    </ul>
                                    <canvas id="cpu"></canvas>
                                </div>
                            </div>

                            <div class="monitering chart-container col-xl-4 col-md-12">
                                <div class="guide">
                                    <h4>MEMORY</h4>
                                    <ul class="width60 memory">
                                        <li>전체 :
                                            <span class="total"></span></li>
                                        <li>사용중 :
                                            <span class="used"></span></li>
                                        <li><span class="per"></span>%</li>
                                    </ul>
                                    <canvas id="memory"></canvas>
                                </div>
                            </div>

                            <div class="monitering chart-container col-xl-4 col-md-12">
                                <div class="guide">
                                    <h4>DISK</h4>
                                    <ul class="width60 disk">
                                        <li>전체 :
                                            <span class="total"></span>G</li>
                                        <li>사용중 :
                                            <span class="used"></span>G</li>
                                        <li><span class="per"></span>%</li>
                                    </ul>
                                    <canvas id="disk"></canvas>
                                </div>
                            </div>
                        </div>
                        <script>
                            // CPU
                            var usedCpu;
                            var totalCpu;
                            var PerCpu = 0;

                            // MEMORY
                            var usedMemory;
                            var totalMemory;
                            var PerMemory = 0;

                            // DISK
                            var usedDisk;
                            var totalDisk;
                            var perDisk = 0;

                            // CPU
                            var totalCpuEL = $('.cpu .total');
                            var usedCpuEL = $('.cpu .used');
                            var PerCpuEL = $('.cpu .per');
                            var graphBarCpuEL = $('.cpu .progress-bar.active');

                            // MEMORY
                            var totalMemoryEL = $('.memory .total');
                            var usedMemoryEL = $('.memory .used');
                            var PerMemoryEL = $('.memory .per');
                            var graphBarMemoryEL = $('.cpu .progress-bar.progress-bar-warning');

                            // DISK
                            var totalDiskEL = $('.disk .total');
                            var usedDiskEL = $('.disk .used');
                            var perDiskEL = $('.disk .per');

                            function getTotal() {
                                totalCpu = 100 - perCpu;
                                totalMemory = 100 - perMemory;
                                totalDisk = 100 - perDisk;
                            };

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
                                    datasets: [
                                        {
                                            data: [
                                                totalCpu, usedCpu
                                            ],
                                            backgroundColor: [
                                                'rgba(255,255,255,1)', 'rgba(76,132,255, 0.5)'
                                            ],
                                            borderColor: [
                                                'rgba(76,132,255, 1)', 'rgba(76,132,255, 1)'
                                            ],
                                            borderWidth: 1,
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
                                    },
                                    hoverOffset: 10,
                                    cutoutPercentage : 90
                                }
                            });

                            var memoryChart = new Chart(memoryChart, {
                                type: 'doughnut',
                                data: {
                                    datasets: [
                                        {
                                            data: [
                                                totalMemory, usedMemory
                                            ],
                                            backgroundColor: [
                                                'rgba(255,255,255,1)', 'rgba(254,196,0,0.5)'
                                            ],
                                            borderColor: [
                                                'rgba(254,196,0,1)', 'rgba(254,196,0,1)'
                                            ],
                                            borderWidth: 1,
                                            hoverOffset: 10
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
                                    },
                                    hoverOffset: 10,
                                    cutoutPercentage : 90
                                }
                            });

                            var diskChart = new Chart(diskChart, {
                                type: 'doughnut',
                                data: {
                                    datasets: [
                                        {
                                             data: [
                                                totalDisk, usedDisk
                                            ],
                                            backgroundColor: [
                                                'rgba(255,255,255,1)', 'rgba(255,112,141,0.5)'
                                            ],
                                            borderColor: [
                                                'rgba(255,112,141,1)', 'rgba(255,112,141,1)'
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
                                    },
                                    cutoutPercentage : 90
                                }
                            });      
                            // asdadasdasd
                            $(function () {

                            setInterval(() => {
                                $.ajax({type: 'get', url: 'exe.php', success: function (data) {
                                        //console.log(data);
                                    }});
                                $.ajax({
                                    type: 'get',
                                    url: 'monitering.json', 
                                    dataType: 'json',
                                    mimeType: "application/json",
                                    success: function (data) {
                                        _totalCpu = data["cpu"][0].cpuTotal;
                                        usedCpu = data["cpu"][0].cpuUsed;
                                        perCpu = data["cpu"][0].cpuPer;

                                        _totalMemory = data["memory"][0].memoryTotal;
                                        usedMemory = data["memory"][0].memoryUsed;
                                        perMemory = data["memory"][0].memoryPer;

                                        console.log(_totalMemory)
                                        console.log(usedMemory)

                                        _totalDisk = data["disk"][0].diskTotal;
                                        usedDisk = data["disk"][0].diskUsed;
                                        perDisk = data["disk"][0].diskPer;

                                        getTotal();

                                        cpuChart
                                            .data
                                            .datasets[0]
                                            .data = [totalCpu, perCpu];
                                        memoryChart
                                            .data
                                            .datasets[0]
                                            .data = [totalMemory, perMemory];
                                        diskChart
                                            .data
                                            .datasets[0]
                                            .data = [totalDisk, perDisk];
                                        cpuChart.update();
                                        memoryChart.update();
                                        diskChart.update();

                                        totalCpuEL.text(_totalCpu);
                                        usedCpuEL.text(usedCpu);
                                        PerCpuEL.text(perCpu);

                                        totalMemoryEL.text(_totalMemory);
                                        usedMemoryEL.text(usedMemory);
                                        PerMemoryEL.text(perMemory);

                                        totalDiskEL.text(_totalDisk);
                                        usedDiskEL.text(usedDisk);
                                        perDiskEL.text(perDisk);

                                        graphBarCpuEL.attr('style', 'width:' + perCpu + '%;');
                                        graphBarMemoryEL.attr('style', 'width:' + perMemory + '%;');

                                        var now = new Date();
                                        var realTime = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();

                                        if (config.data.datasets.length > 0) {
                                            config
                                                .data
                                                .labels
                                                .push(realTime);

                                            config
                                                .data
                                                .datasets[0]
                                                .data
                                                .push(perCpu);
                                            config
                                                .data
                                                .datasets[1]
                                                .data
                                                .push(perMemory);
                                            config
                                                .data
                                                .datasets[2]
                                                .data
                                                .push(perDisk);

                                            config
                                                .data
                                                .labels
                                                .splice(0, 1);
                                            config
                                                .data
                                                .datasets[0]
                                                .data
                                                .splice(0, 1);
                                            config
                                                .data
                                                .datasets[1]
                                                .data
                                                .splice(0, 1);
                                            config
                                                .data
                                                .datasets[2]
                                                .data
                                                .splice(0, 1);

                                            window.graph.update();
                                        }
                                    }
                                });

                            }, 1000);

                            });
                        </script>

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