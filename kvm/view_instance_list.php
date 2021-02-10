<!DOCTYPE html>
<html lang="ko" dir="ltr">
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
        <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet"/>

        <link
            href="../assets/plugins/daterangepicker/daterangepicker.css"
            rel="stylesheet"/>

        <link
            href="../assets/plugins/data-tables/datatables.bootstrap4.min.css"
            rel="stylesheet"/>

        <link
            href="../assets/plugins/data-tables/responsive.datatables.min.css"
            rel="stylesheet"/>

        <!-- SLEEK CSS -->
        <link rel="stylesheet" href="../assets/css/sleek.css"/>

        <!-- FAVICON -->
        <link href="../assets/img/logo.png" rel="shortcut icon"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
        <script src="../assets/plugins/nprogress/nprogress.js"></script>
    </head>

    <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

        <script>
            NProgress.configure({showSpinner: false});
            NProgress.start();
        </script>

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
                            <div class="col-12">
                                <div class="card card-default">
                                    <div
                                        class="card-header card-header-border-bottom d-flex justify-content-between">
                                        <h2>
                                            <b>
                                                <i class="mdi mdi-desktop-mac"></i>
                                                생성된 인스턴스 현황 조회</b>
                                        </h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="responsive-data-table">
                                            <form method="POST" action="delete_instance.php">
                                                <table
                                                    id="responsive-data-table"
                                                    class="table dt-responsive nowrap"
                                                    style="width:100%">

                                                    <?php
													$conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' );
                          $sql = "SELECT * FROM Virtual_Machine;";
                          
                          
                          $result = mysqli_query( $conn, $sql );
                          
													echo "<thead> <tr> <th>NAME</th> <th>CPU</th> <th>RAM</th> <th>EXTRA HDD</th> <th>IP</th> <th>NETWORK</th> <th>WORK</th> </tr></thead>";
													echo "<tbody>";
													while($row = mysqli_fetch_array($result)) {           
                            
													echo "<tr>";
													echo "<td><samp>" . $row['NAME'] . "</samp></td>";
													echo "<td><samp>" . $row['CPU'] . "</samp></td>";
													echo "<td><samp>" . $row['RAM'] . "</samp></td>";
													echo "<td><samp>" . $row['EXTRA_HDD'] . "</samp></td>";
                          echo "<td><samp>" . $row['IP'] . "</samp></td>";
                          echo "<td><samp>" . $row['NETWORK'] . "</samp></td>";
                          echo "<td>";
                          echo "<button type='submit' class='mb-1 btn btn-sm btn-danger' value=".$row['NAME']." name='name'>Delete</button>";
                          $webssh = substr($row['IP'],-6,5);
                          $webssh = "https://183.100.227.115:".$webssh;
                          
                          echo "<a href='$webssh' target='_blank'> <button type='button' class='mb-1 btn btn-sm btn-info'>SSH</button></a>";
                          
                          echo "</td>";
                          echo "</tr>";
                          }
                          echo "</tbody>";
                          
                          ?>

                                                </table>
                                            </form>
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

            <script src="../assets/plugins/jquery/jquery.min.js"></script>
            <script src="../assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
            <script src="../assets/plugins/jekyll-search.min.js"></script>

            <script src="../assets/plugins/daterangepicker/moment.min.js"></script>
            <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
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

            <script src="../assets/plugins/data-tables/jquery.datatables.min.js"></script>
            <script src="../assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>

            <script src="../assets/plugins/data-tables/datatables.responsive.min.js"></script>
            <script>
                jQuery(document).ready(function () {
                    jQuery('#responsive-data-table').DataTable({
                        "aLengthMenu": [
                            [
                                20, 30, 50, 75, -1
                            ],
                            [
                                20, 30, 50, 75, "All"
                            ]
                        ],
                        "pageLength": 20,
                        "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-betwe' +
                                'en bottom-information"ip><"clear">'
                    });
                });
            </script>

            <script src="../assets/js/sleek.bundle.js"></script>
        </body>

    </html>