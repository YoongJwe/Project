<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        
        <title>차트 테스트</title>
    </head>
    <body>


    <?php
        exec("sudo sh /project/web/dashboard.sh");
    ?>       
    
        <div class="chart-container" style="position: relative; height:30%; width:30%; float:left;">
            <canvas id="cpu"></canvas>
        </div>

        <div class="chart-container" style="position: relative; height:30%; width:30%; float:left;">
            <canvas id="ram"></canvas>
        </div>

        <div class="chart-container" style="position: relative; height:30%; width:30%; float:left;">
            <canvas id="disk"></canvas>
        </div>


        <script>

            var totalCpu = 80;
            var usedCpu = 20;

            var cpuChart = document.getElementById('cpu').getContext('2d');
            var ramChart = document.getElementById('ram').getContext('2d');
            var diskChart = document.getElementById('disk').getContext('2d');

            var cpuChart = new Chart(cpuChart, {
                type: 'doughnut',
                data: {
                    labels: [
                        'totalCPU', 'usedCPU'
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
                    scales: {
                        yAxes: [
                            {
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    display:false,
                                }
                            }
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    display:false,
                                }
                            }
                        ]
                    }
                }
            });

           
            var ramChart = new Chart(ramChart, {
                type: 'doughnut',
                data: {
                    labels: [
                        'totalCPU', 'usedCPU'
                    ],
                    datasets: [
                        {
                            label: '# of Votes',
                            data: [
                                totalCpu, usedCpu
                            ],
                            backgroundColor: [
                                'rgba(202,219,255,0.8)', 'rgba(255, 197,202, 1)'
                            ],
                            borderColor: [
                                'rgba(144,179,255,1)','rgba(254, 128,138,1)'
                            ],
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [
                            {
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    display:false,
                                }
                            }
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    display:false,
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
                        'totalCPU', 'usedCPU'
                    ],
                    datasets: [
                        {
                            label: '# of Votes',
                            data: [
                                totalCpu, usedCpu
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
                    scales: {
                        yAxes: [
                            {
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    display:false,
                                }
                            }
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    display: false
                                },
                                ticks: {
                                    display:false,
                                }
                            }
                        ]
                    }
                }
            });

            $(function () {

                $.ajax({
                    type: 'get',
                    url: 'moniterinig.json',
                    dataType: 'json',
                    success: function (data) {
                        console.log("접속 성공");
                    
                    }
                });
            
            });

        </script>


        
    </body>
</html>