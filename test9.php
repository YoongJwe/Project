<html>
    <head>
        <title>Line Chart</title>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>        
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <style>
            .div{width:400px; }
        </style>
        
    </head>

    <body>
      
        <div class="div">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
        <script>

            var time=$('.graph-data-cpu dd');
            var perCpu=$('.graph-data-cpu dt');
            var perMemory=$('.graph-data-memory li');
            var perDisk=$('.graph-data-disk li');
            

            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                        time.eq(4).text(),
                        time.eq(3).text(),
                        time.eq(2).text(),
                        time.eq(1).text(),
                        time.eq(0).text(),
                        ],
                    datasets: [
                        {
                            label: 'CPU',
                            data: [
                                perCpu.eq(4).text(),
                                perCpu.eq(3).text(),
                                perCpu.eq(2).text(),
                                perCpu.eq(1).text(),
                                perCpu.eq(0).text(),
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)'
                            ],
                            borderWidth: 1,
                            fill: false
                        },
                        { label: 'MEMORY',
                            data: [
                                perMemory.eq(4).text(),
                                perMemory.eq(3).text(),
                                perMemory.eq(2).text(),
                                perMemory.eq(1).text(),
                                perMemory.eq(0).text()
                            ],
                            
                            borderColor: [
                                'rgba(100, 193, 7, 1)'
                            ],
                            borderWidth: 1,
                            fill: false
                        },
                        { label: 'DISK',
                            data: [
                                perDisk.eq(4).text(),
                                perDisk.eq(3).text(),
                                perDisk.eq(2).text(),
                                perDisk.eq(1).text(),
                                perDisk.eq(0).text()
                            ],
                            
                            borderColor: [
                                'rgba(3, 169, 244, 1)'
                            ],
                            borderWidth: 1,
                            fill: false
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [
                            {
                                beginAtZero:true,

                                ticks: {
                                    suggestedMin: 50,
                                    suggestedMax: 100
                                }
                            }
                        ]
                    }
                }
            });
        </script>

    </body>
</html>