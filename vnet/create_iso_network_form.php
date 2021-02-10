<!DOCTYPE html>
<html lang="ko" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta
            name="description"
            content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
        <!-- <?php include $_SERVER['DOCUMENT_ROOT'].'/layout/references.php';?> -->

        <!-- GOOGLE FONTS -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
            rel="stylesheet"/>
        <link
            href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css"
            rel="stylesheet"/>

        <!-- PLUGINS CSS STYLE -->
        <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet"/>

        <!-- No Extra plugin used -->

        <link
            href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"
            rel="stylesheet"/>

        <link
            href="../assets/plugins/daterangepicker/daterangepicker.css"
            rel="stylesheet"/>

        <link href="../assets/plugins/toastr/toastr.min.css" rel="stylesheet"/>

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
        <title>Blockchain Class</title>
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
                            <div class="col-lg-6">
                                <div class="card card-default">
                                    <div class="card-header card-header-border-bottom">
                                        <h2>
                                            <b>
                                                <i class="mdi mdi-access-point-network"></i>
                                                Isolated 네트워크 생성</b>
                                        </h2>
                                    </div>
                                    <form method="POST" id="create_iso_network" action="create_iso_network.php">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">
                                                    <b>네트워크 이름</b>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="network"
                                                    placeholder="생성하고자 하는 네트워크 이름을 입력하세요.">
                                                <span class="mt-2 d-block">이미 존재하는 네트워크 이름은 사용할 수 없습니다.</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">
                                                    <b>브릿지 이름</b>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="bridge"
                                                    placeholder="생성하고자 하는 브릿지 이름을 입력하세요.">
                                                <span class="mt-2 d-block">이미 존재하는 브릿지 이름은 사용할 수 없습니다.</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">
                                                    <b>게이트웨이 주소</b>
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="ip"
                                                    placeholder="네트워크 브릿지가 사용할 게이트웨이 주소를 입력하세요.">
                                                <span class="mt-2 d-block">서브넷 마스크는 255.255.255.0 으로 고정됩니다. 게이트웨이 주소는 사용하고자 하는
                                                    네트워크 영역의 첫번째 주소(1)를 사용하도록 합니다.<br>예) 211.183.150.1</span>
                                            </div>

                                            <button
                                                type="submit"
                                                class="btn btn-primary btn-default"
                                                id="create_iso_network">만들기</button>
                                            <button type="reset" class="btn btn-secondary btn-default">초기화</button>

                                        </form>
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

            <script src="../assets/js/sleek.bundle.js"></script>
        </body>

    </html>